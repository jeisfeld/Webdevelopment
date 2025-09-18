<?php
/**
 * Standalone admin login debug helper.
 *
 * To enable this tool on a production system, create a file named
 * "admin/auth-debug-token.txt" next to this script and store a random token
 * (one line). The same token must be supplied via the "token" query parameter
 * when accessing this script.
 *
 * Example:
 *   echo "secret-123" > admin/auth-debug-token.txt
 *   https://example.com/admin-login-debug.php?token=secret-123
 *
 * Remove the token file after debugging to disable the helper again.
 */

$tokenFile = __DIR__ . '/admin/auth-debug-token.txt';
$expectedToken = '';
if (is_file($tokenFile)) {
    $expectedToken = trim((string) file_get_contents($tokenFile));
}

if ($expectedToken === '') {
    http_response_code(404);
    header('Cache-Control: no-store');
    echo 'Admin login debug tool is disabled.';
    exit;
}

$providedToken = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $providedToken = isset($_POST['token']) ? (string) $_POST['token'] : '';
} else {
    $providedToken = isset($_GET['token']) ? (string) $_GET['token'] : '';
}

if ($providedToken === '' || ! hash_equals($expectedToken, $providedToken)) {
    http_response_code(403);
    header('Cache-Control: no-store');
    echo 'Admin login debug access denied.';
    exit;
}

$authConfig = require __DIR__ . '/admin/auth-config.php';
require_once __DIR__ . '/admin/auth-helpers.php';

$users = isset($authConfig['users']) && is_array($authConfig['users']) ? $authConfig['users'] : [];
$realm = isset($authConfig['realm']) && $authConfig['realm'] !== '' ? $authConfig['realm'] : 'Heilsame Lieder Admin';
$logFile = __DIR__ . '/admin/auth-debug.log';
$logWritable = is_writable($logFile) || (! file_exists($logFile) && is_writable(__DIR__ . '/admin'));

$submitted = $_SERVER['REQUEST_METHOD'] === 'POST';
$username = $submitted ? (string) ($_POST['username'] ?? '') : '';
$password = $submitted ? (string) ($_POST['password'] ?? '') : '';
$verification = hlAdminVerifyPassword($username, $password, $users);
$hashInfo = $verification['passwordHashInfo'];
$hashIsValid = $verification['passwordHashIsValid'];
$passwordVerified = $verification['passwordVerified'];
$userExists = $verification['userExists'];

if ($submitted) {
    $remoteAddress = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 'unknown';
    $logDetails = [
        'realm=' . $realm,
        'user=' . $username,
        'ip=' . $remoteAddress,
        'userExists=' . ($userExists ? 'true' : 'false'),
        'passwordVerified=' . ($passwordVerified ? 'true' : 'false'),
        'passwordLength=' . strlen($password),
    ];

    if ($hashInfo !== null) {
        $logDetails[] = 'hashAlgo=' . ($hashInfo['algoName'] ?? 'unknown');
        if (! empty($hashInfo['options'])) {
            $logDetails[] = 'hashOptions=' . json_encode($hashInfo['options']);
        }
    }

    if (! $hashIsValid && $userExists) {
        $logDetails[] = 'hashStatus=unusable';
    }

    hlAdminWriteDebugLog($logFile, 'Debug login test (standalone): ' . implode(', ', $logDetails));
}

header('Cache-Control: no-store');
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Login Debug Helper</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
        font-family: Arial, sans-serif;
        margin: 2rem;
        line-height: 1.5;
}

h1 {
        margin-bottom: 1rem;
}

form {
        margin-bottom: 1.5rem;
        max-width: 26rem;
}

label {
        display: block;
        font-weight: bold;
        margin-bottom: 0.25rem;
}

input[type="text"],
input[type="password"] {
        width: 100%;
        padding: 0.5rem;
        margin-bottom: 0.75rem;
        font-size: 1rem;
}

button {
        padding: 0.5rem 1rem;
        font-size: 1rem;
        cursor: pointer;
}

.result {
        border-left: 4px solid #cc0000;
        background: #ffecec;
        padding: 1rem;
        max-width: 32rem;
}

.result.success {
        border-color: #008000;
        background: #ebffeb;
}

code {
        background: #f4f4f4;
        padding: 0.1rem 0.25rem;
}

.note {
        max-width: 40rem;
}

.status {
        margin-bottom: 1rem;
        max-width: 32rem;
        padding: 0.75rem;
        background: #f4f4f4;
        border-left: 4px solid #888;
}
</style>
</head>
<body>
        <h1>Admin Login Debug Helper</h1>
        <div class="status">
                <p><strong>Realm:</strong> <?php echo htmlspecialchars($realm, ENT_QUOTES, 'UTF-8'); ?></p>
                <p><strong>Log file:</strong> <code><?php echo htmlspecialchars('admin/' . basename($logFile), ENT_QUOTES, 'UTF-8'); ?></code> (writable: <?php echo $logWritable ? 'yes' : 'no'; ?>)</p>
        </div>

        <form method="post" autocomplete="off" action="?token=<?php echo rawurlencode($providedToken); ?>">
                <label for="debug-username">Username</label>
                <input type="text" id="debug-username" name="username" value="<?php echo htmlspecialchars($username, ENT_QUOTES, 'UTF-8'); ?>" autofocus>

                <label for="debug-password">Password</label>
                <input type="password" id="debug-password" name="password" value="">

                <input type="hidden" name="token" value="<?php echo htmlspecialchars($providedToken, ENT_QUOTES, 'UTF-8'); ?>">
                <button type="submit">Test credentials</button>
        </form>

        <?php if ($submitted) { ?>
        <div class="result<?php echo $passwordVerified ? ' success' : ''; ?>">
                <p><strong>Result:</strong> <?php echo $passwordVerified ? 'Password verified successfully.' : 'Password verification failed.'; ?></p>
                <ul>
                        <li>User exists: <?php echo $userExists ? 'yes' : 'no'; ?></li>
                        <li>Password length: <?php echo strlen($password); ?></li>
                        <li>Stored hash present: <?php echo $verification['passwordHash'] !== null ? 'yes' : 'no'; ?></li>
                        <li>Stored hash algorithm: <?php echo htmlspecialchars(hlAdminDescribeHashInfo($hashInfo), ENT_QUOTES, 'UTF-8'); ?></li>
                        <?php if ($hashInfo !== null && ! empty($hashInfo['options'])) { ?>
                        <li>Hash options: <code><?php echo htmlspecialchars(json_encode($hashInfo['options']), ENT_QUOTES, 'UTF-8'); ?></code></li>
                        <?php } ?>
                        <?php if ($userExists && ! $hashIsValid) { ?>
                        <li>The stored hash string could not be processed by PHP (hashStatus=unusable).</li>
                        <?php } ?>
                        <?php if ($passwordVerified && $hashInfo !== null) { ?>
                        <li>Hash needs rehash (PASSWORD_DEFAULT): <?php echo password_needs_rehash($verification['passwordHash'], PASSWORD_DEFAULT) ? 'yes' : 'no'; ?></li>
                        <?php } ?>
                        <li>Log updated: <?php echo $submitted ? 'yes' : 'no'; ?></li>
                </ul>
        </div>
        <?php } ?>

        <p class="note">Supply the same username and password that your browser sends to the HTTP Basic prompt. The result here matches what the admin area accepts. Delete <code>admin/auth-debug-token.txt</code> after debugging.</p>
</body>
</html>
