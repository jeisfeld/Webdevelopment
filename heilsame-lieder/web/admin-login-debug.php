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
$serverAuthSnapshotBeforeFallback = hlAdminGetServerAuthSnapshot();
$serverAuthSummaryBeforeFallback = hlAdminFormatServerAuthSnapshot($serverAuthSnapshotBeforeFallback);
$authFallback = hlAdminApplyBasicAuthFallback();
$serverAuthSnapshotAfterFallback = hlAdminGetServerAuthSnapshot();
$serverAuthSummaryAfterFallback = hlAdminFormatServerAuthSnapshot($serverAuthSnapshotAfterFallback);

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

    $logDetails[] = 'preAuthContext=' . implode('|', $serverAuthSummaryBeforeFallback);
    $logDetails[] = 'postAuthContext=' . implode('|', $serverAuthSummaryAfterFallback);
    $logDetails[] = 'fallbackStatus=' . $authFallback['status'];
    $logDetails[] = 'fallbackHeaderPresent=' . ($authFallback['headerPresent'] ? 'true' : 'false');
    $logDetails[] = 'fallbackHeaderSource=' . ($authFallback['headerSource'] !== '' ? $authFallback['headerSource'] : 'n/a');
    $logDetails[] = 'fallbackHeaderLength=' . (isset($authFallback['headerLength']) ? $authFallback['headerLength'] : 0);
    $logDetails[] = 'fallbackHeaderHash=' . (! empty($authFallback['headerHash']) ? $authFallback['headerHash'] : 'n/a');
    $logDetails[] = 'fallbackGlobalsUpdated=' . ($authFallback['globalsUpdated'] ? 'true' : 'false');
    if ($authFallback['status'] === 'fallback-applied' && isset($authFallback['username'])) {
        $logDetails[] = 'fallbackUsername=' . $authFallback['username'];
    }

    hlAdminWriteDebugLog($logFile, 'Debug login test (standalone): ' . implode(', ', $logDetails));
}

$serverAuthSnapshot = $serverAuthSnapshotBeforeFallback;
$postAuthSnapshot = $serverAuthSnapshotAfterFallback;

header('Cache-Control: no-store');
header('Content-Type: text/html; charset=UTF-8');
header('X-Admin-Auth-Handler: php-admin-login-debug');
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

.note.warning {
        background: #fff4d6;
        border-left: 4px solid #cc9a06;
        padding: 0.75rem 1rem;
}
</style>
</head>
<body>
        <h1>Admin Login Debug Helper</h1>
        <div class="status">
                <p><strong>Realm:</strong> <?php echo htmlspecialchars($realm, ENT_QUOTES, 'UTF-8'); ?></p>
                <p><strong>Log file:</strong> <code><?php echo htmlspecialchars('admin/' . basename($logFile), ENT_QUOTES, 'UTF-8'); ?></code> (writable: <?php echo $logWritable ? 'yes' : 'no'; ?>)</p>
                <p><strong>PHP SAPI:</strong> <?php echo isset($serverAuthSnapshot['phpSapi']) && $serverAuthSnapshot['phpSapi'] !== '' ? htmlspecialchars($serverAuthSnapshot['phpSapi'], ENT_QUOTES, 'UTF-8') : 'n/a'; ?></p>
                <p><strong>GATEWAY_INTERFACE:</strong> <?php echo isset($serverAuthSnapshot['gatewayInterface']) && $serverAuthSnapshot['gatewayInterface'] !== '' ? htmlspecialchars($serverAuthSnapshot['gatewayInterface'], ENT_QUOTES, 'UTF-8') : 'n/a'; ?></p>
                <p><strong>FCGI_ROLE:</strong> <?php echo isset($serverAuthSnapshot['fcgiRole']) && $serverAuthSnapshot['fcgiRole'] !== '' ? htmlspecialchars($serverAuthSnapshot['fcgiRole'], ENT_QUOTES, 'UTF-8') : 'n/a'; ?></p>
                <p><strong>Server AUTH_TYPE:</strong> <?php echo $serverAuthSnapshot['authType'] !== '' ? htmlspecialchars($serverAuthSnapshot['authType'], ENT_QUOTES, 'UTF-8') : 'n/a'; ?></p>
                <p><strong>REMOTE_USER:</strong> <?php echo $serverAuthSnapshot['remoteUser'] !== '' ? htmlspecialchars($serverAuthSnapshot['remoteUser'], ENT_QUOTES, 'UTF-8') : 'n/a'; ?></p>
                <p><strong>Authorization header before fallback:</strong> <?php echo $serverAuthSnapshot['httpAuthorizationSet'] ? 'present' : 'absent'; ?><?php if ($serverAuthSnapshot['httpAuthorizationSet']) { ?> (source: <?php echo htmlspecialchars($serverAuthSnapshot['httpAuthorizationSource'] !== '' ? $serverAuthSnapshot['httpAuthorizationSource'] : 'unknown', ENT_QUOTES, 'UTF-8'); ?>, length: <?php echo isset($serverAuthSnapshot['httpAuthorizationLength']) ? (int) $serverAuthSnapshot['httpAuthorizationLength'] : 0; ?>, sha256: <?php echo htmlspecialchars(isset($serverAuthSnapshot['httpAuthorizationHash']) && $serverAuthSnapshot['httpAuthorizationHash'] !== '' ? $serverAuthSnapshot['httpAuthorizationHash'] : 'n/a', ENT_QUOTES, 'UTF-8'); ?>)<?php } ?></p>
                <p><strong>PHP_AUTH_* before fallback:</strong> user=<?php echo $serverAuthSnapshot['phpAuthUserSet'] ? 'yes' : 'no'; ?>, password=<?php echo $serverAuthSnapshot['phpAuthPwSet'] ? 'yes' : 'no'; ?></p>
                <p><strong>Fallback status:</strong> <?php echo htmlspecialchars(hlAdminDescribeFallbackStatus($authFallback), ENT_QUOTES, 'UTF-8'); ?><?php if ($authFallback['headerSource'] !== '') { ?> (header source: <?php echo htmlspecialchars($authFallback['headerSource'], ENT_QUOTES, 'UTF-8'); ?>)<?php } ?><?php if (! empty($authFallback['headerLength'])) { ?> (length: <?php echo (int) $authFallback['headerLength']; ?>, sha256: <?php echo htmlspecialchars($authFallback['headerHash'], ENT_QUOTES, 'UTF-8'); ?>)<?php } ?><?php if ($authFallback['globalsUpdated']) { ?>, applied to PHP_AUTH_*<?php } ?></p>
                <?php if ($authFallback['status'] === 'fallback-applied' && isset($authFallback['username']) && $authFallback['username'] !== '') { ?>
                <p><strong>Fallback decoded username:</strong> <?php echo htmlspecialchars($authFallback['username'], ENT_QUOTES, 'UTF-8'); ?></p>
                <?php } ?>
                <p><strong>PHP_AUTH_* after fallback:</strong> user=<?php echo $postAuthSnapshot['phpAuthUserSet'] ? 'yes' : 'no'; ?>, password=<?php echo $postAuthSnapshot['phpAuthPwSet'] ? 'yes' : 'no'; ?></p>
                <p><strong>Authorization header after fallback:</strong> <?php echo $postAuthSnapshot['httpAuthorizationSet'] ? 'present' : 'absent'; ?><?php if ($postAuthSnapshot['httpAuthorizationSet']) { ?> (source: <?php echo htmlspecialchars($postAuthSnapshot['httpAuthorizationSource'] !== '' ? $postAuthSnapshot['httpAuthorizationSource'] : 'unknown', ENT_QUOTES, 'UTF-8'); ?>, length: <?php echo isset($postAuthSnapshot['httpAuthorizationLength']) ? (int) $postAuthSnapshot['httpAuthorizationLength'] : 0; ?>, sha256: <?php echo htmlspecialchars(isset($postAuthSnapshot['httpAuthorizationHash']) && $postAuthSnapshot['httpAuthorizationHash'] !== '' ? $postAuthSnapshot['httpAuthorizationHash'] : 'n/a', ENT_QUOTES, 'UTF-8'); ?>)<?php } ?></p>
        </div>
        <?php if ($serverAuthSnapshot['authType'] !== '' || $serverAuthSnapshot['remoteUser'] !== '' || $serverAuthSnapshot['phpAuthUserSet'] || $serverAuthSnapshot['httpAuthorizationSet']) { ?>
        <p class="note warning">The web server delivered HTTP authentication data before this script executed. Make sure any .htaccess/.htpasswd credentials match <code>admin/auth-config.php</code>, or disable them temporarily so this helper can run without the browser prompt.</p>
        <?php } ?>
        <?php if (in_array($authFallback['status'], ['header-missing', 'header-empty'], true)) { ?>
        <p class="note warning">No <code>Authorization</code> header reached PHP.<?php if (isset($serverAuthSnapshot['phpSapi']) && stripos($serverAuthSnapshot['phpSapi'], 'cgi') !== false) { ?> Detected PHP running under <code><?php echo htmlspecialchars($serverAuthSnapshot['phpSapi'], ENT_QUOTES, 'UTF-8'); ?></code><?php if (isset($serverAuthSnapshot['gatewayInterface']) && $serverAuthSnapshot['gatewayInterface'] !== '') { ?> with <code>GATEWAY_INTERFACE=<?php echo htmlspecialchars($serverAuthSnapshot['gatewayInterface'], ENT_QUOTES, 'UTF-8'); ?></code><?php } ?>; FastCGI setups usually need explicit forwarding for the header.<?php } ?> After submitting credentials, ensure the web server forwards that header (for Apache with FastCGI this often means enabling <code>CGIPassAuth On</code> or adding <code>RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]</code> in <code>.htaccess</code>).</p>
        <?php } elseif ($authFallback['status'] === 'header-unusable') { ?>
        <p class="note warning">An <code>Authorization</code> header arrived but was not recognised as HTTP Basic. Confirm that proxies or security filters are not rewriting or stripping it.</p>
        <?php } ?>

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
                        <li>Server auth context before fallback: <code><?php echo htmlspecialchars(implode(', ', $serverAuthSummaryBeforeFallback), ENT_QUOTES, 'UTF-8'); ?></code></li>
                        <li>Server auth context after fallback: <code><?php echo htmlspecialchars(implode(', ', $serverAuthSummaryAfterFallback), ENT_QUOTES, 'UTF-8'); ?></code></li>
                        <li>Fallback status: <?php echo htmlspecialchars($authFallback['status'], ENT_QUOTES, 'UTF-8'); ?> (<?php echo htmlspecialchars(hlAdminDescribeFallbackStatus($authFallback), ENT_QUOTES, 'UTF-8'); ?><?php if ($authFallback['headerSource'] !== '') { ?>, header source: <?php echo htmlspecialchars($authFallback['headerSource'], ENT_QUOTES, 'UTF-8'); ?><?php } ?><?php if ($authFallback['globalsUpdated']) { ?>, applied to PHP_AUTH_*<?php } ?><?php if ($authFallback['status'] === 'fallback-applied' && isset($authFallback['username']) && $authFallback['username'] !== '') { ?>, decoded username=<?php echo htmlspecialchars($authFallback['username'], ENT_QUOTES, 'UTF-8'); ?><?php } ?>)</li>
                        <li>Log updated: <?php echo $submitted ? 'yes' : 'no'; ?></li>
                </ul>
        </div>
        <?php } ?>

        <p class="note">Supply the same username and password that your browser sends to the HTTP Basic prompt. The result here matches what the admin area accepts. Delete <code>admin/auth-debug-token.txt</code> after debugging.</p>
</body>
</html>
