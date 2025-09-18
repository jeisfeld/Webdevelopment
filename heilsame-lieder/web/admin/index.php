<?php
$authConfig = require __DIR__ . '/auth-config.php';
$users = isset($authConfig['users']) && is_array($authConfig['users']) ? $authConfig['users'] : [];
$realm = isset($authConfig['realm']) && $authConfig['realm'] !== '' ? $authConfig['realm'] : 'Heilsame Lieder Admin';

require_once __DIR__ . '/auth-helpers.php';

$debugMode = isset($_GET['debug']) && $_GET['debug'] === '1';
$debugLogFile = __DIR__ . '/auth-debug.log';
$serverAuthSnapshotBeforeFallback = hlAdminGetServerAuthSnapshot();
$serverAuthSummaryBeforeFallback = hlAdminFormatServerAuthSnapshot($serverAuthSnapshotBeforeFallback);
$authFallback = hlAdminApplyBasicAuthFallback();
$serverAuthSnapshotAfterFallback = hlAdminGetServerAuthSnapshot();
$serverAuthSummaryAfterFallback = hlAdminFormatServerAuthSnapshot($serverAuthSnapshotAfterFallback);

header('X-Admin-Auth-Handler: php-admin-index');

if ($debugMode) {
        $submitted = $_SERVER['REQUEST_METHOD'] === 'POST';
        $username = $submitted ? (string) ($_POST['username'] ?? '') : '';
        $password = $submitted ? (string) ($_POST['password'] ?? '') : '';
        $verification = hlAdminVerifyPassword($username, $password, $users);
        $userExists = $verification['userExists'];
        $passwordHashInfo = $verification['passwordHashInfo'];
        $hashIsValid = $verification['passwordHashIsValid'];
        $passwordVerified = $verification['passwordVerified'];
        $serverAuthSnapshot = $serverAuthSnapshotBeforeFallback;
        $postAuthSnapshot = $serverAuthSnapshotAfterFallback;

        if ($submitted) {
                $remoteAddress = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 'unknown';
                $logDetails = [
                        'user=' . $username,
                        'ip=' . $remoteAddress,
                        'userExists=' . ($userExists ? 'true' : 'false'),
                        'passwordVerified=' . ($passwordVerified ? 'true' : 'false'),
                        'passwordLength=' . strlen($password)
                ];

                if ($passwordHashInfo !== null) {
                        $logDetails[] = 'hashAlgo=' . ($passwordHashInfo['algoName'] ?? 'unknown');
                        if (! empty($passwordHashInfo['options'])) {
                                $logDetails[] = 'hashOptions=' . json_encode($passwordHashInfo['options']);
                        }
                }

                if (! $hashIsValid) {
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

                hlAdminWriteDebugLog($debugLogFile, 'Debug login test (inline): ' . implode(', ', $logDetails));
        }

        $logWritable = is_writable($debugLogFile) || (! file_exists($debugLogFile) && is_writable(__DIR__));

        header('Cache-Control: no-store');
        header('Content-Type: text/html; charset=UTF-8');
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Login Debug</title>
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
                max-width: 32rem;
        }

        .status {
                margin: 1rem 0;
                padding: 0.75rem 1rem;
                background: #f4f4f4;
                border-left: 4px solid #888;
                max-width: 40rem;
        }

        .note.warning {
                background: #fff4d6;
                border-left: 4px solid #cc9a06;
                padding: 0.75rem 1rem;
        }
</style>
</head>
<body>
        <h1>Admin Login Debug Mode</h1>
        <p class="note">This tool lets you test credentials without the browser's HTTP Basic authentication dialog.
        It uses the same credential configuration as the normal admin login, so the outcome matches the HTTP Basic check.
        Disable <code>debug=1</code> once you are done troubleshooting.</p>

        <div class="status">
                <p><strong>Realm:</strong> <?php echo htmlspecialchars($realm, ENT_QUOTES, 'UTF-8'); ?></p>
                <p><strong>Log file:</strong> <code><?php echo htmlspecialchars(basename($debugLogFile), ENT_QUOTES, 'UTF-8'); ?></code> (writable: <?php echo $logWritable ? 'yes' : 'no'; ?>)</p>
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
        <p class="note warning">The web server has already provided HTTP authentication data before PHP runs. If a .htaccess/.htpasswd pair is active, update its credentials in addition to <code>admin/auth-config.php</code>, or temporarily disable it so the inline debugger can run without the browser prompt.</p>
        <?php } ?>
        <?php if (in_array($authFallback['status'], ['header-missing', 'header-empty'], true)) { ?>
        <p class="note warning">No <code>Authorization</code> header reached PHP.<?php if (isset($serverAuthSnapshot['phpSapi']) && stripos($serverAuthSnapshot['phpSapi'], 'cgi') !== false) { ?> Detected PHP running under <code><?php echo htmlspecialchars($serverAuthSnapshot['phpSapi'], ENT_QUOTES, 'UTF-8'); ?></code><?php if (isset($serverAuthSnapshot['gatewayInterface']) && $serverAuthSnapshot['gatewayInterface'] !== '') { ?> with <code>GATEWAY_INTERFACE=<?php echo htmlspecialchars($serverAuthSnapshot['gatewayInterface'], ENT_QUOTES, 'UTF-8'); ?></code><?php } ?>; FastCGI setups usually need explicit forwarding for the header.<?php } ?> After submitting credentials, ensure the web server forwards that header to PHP (for Apache with FastCGI this often means enabling <code>CGIPassAuth On</code> or adding <code>RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]</code> in <code>.htaccess</code>).</p>
        <?php } elseif ($authFallback['status'] === 'header-unusable') { ?>
        <p class="note warning">An <code>Authorization</code> header arrived but was not recognised as HTTP Basic. Confirm that no proxy or security filter rewrites or strips the header value.</p>
        <?php } ?>
        <form method="post" autocomplete="off">
                <label for="debug-username">Username</label>
                <input type="text" id="debug-username" name="username" value="<?php echo htmlspecialchars($username ?? '', ENT_QUOTES, 'UTF-8'); ?>" autofocus>

                <label for="debug-password">Password</label>
                <input type="password" id="debug-password" name="password" value="">

                <button type="submit">Test credentials</button>
        </form>

        <?php if ($submitted) { ?>
        <div class="result<?php echo $passwordVerified ? ' success' : ''; ?>">
                <p><strong>Result:</strong> <?php echo $passwordVerified ? 'Password verified successfully.' : 'Password verification failed.'; ?></p>
                <ul>
                        <li>User exists: <?php echo $userExists ? 'yes' : 'no'; ?></li>
                        <li>Password length: <?php echo strlen($password); ?></li>
                        <li>Stored hash algorithm: <?php echo $passwordHashInfo !== null ? htmlspecialchars($passwordHashInfo['algoName'] ?? 'unknown', ENT_QUOTES, 'UTF-8') : 'n/a'; ?></li>
                        <?php if ($passwordHashInfo !== null && ! empty($passwordHashInfo['options'])) { ?>
                        <li>Hash options: <code><?php echo htmlspecialchars(json_encode($passwordHashInfo['options']), ENT_QUOTES, 'UTF-8'); ?></code></li>
                        <?php } ?>
                        <?php if ($submitted && ! $hashIsValid && $userExists) { ?>
                        <li>The stored hash is not recognised as valid by PHP.</li>
                        <?php } ?>
                        <li>Server auth context before fallback: <code><?php echo htmlspecialchars(implode(', ', $serverAuthSummaryBeforeFallback), ENT_QUOTES, 'UTF-8'); ?></code></li>
                        <li>Server auth context after fallback: <code><?php echo htmlspecialchars(implode(', ', $serverAuthSummaryAfterFallback), ENT_QUOTES, 'UTF-8'); ?></code></li>
                        <li>Fallback status: <?php echo htmlspecialchars($authFallback['status'], ENT_QUOTES, 'UTF-8'); ?> (<?php echo htmlspecialchars(hlAdminDescribeFallbackStatus($authFallback), ENT_QUOTES, 'UTF-8'); ?>)</li>
                        <li>Further details are logged to <code><?php echo htmlspecialchars(basename($debugLogFile), ENT_QUOTES, 'UTF-8'); ?></code> (writable: <?php echo $logWritable ? 'yes' : 'no'; ?>).</li>
                </ul>
        </div>
        <?php } ?>

        <p class="note">Once you identify the problem, remove the <code>debug</code> query parameter and sign in normally.</p>
</body>
</html>
<?php
        exit();
}

if (! isset($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'])) {
        $remoteAddress = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 'unknown';
        $logDetails = [
                'flow=http-basic',
                'reason=missing-credentials',
                'ip=' . $remoteAddress,
                'fallbackStatus=' . $authFallback['status'],
                'fallbackHeaderPresent=' . ($authFallback['headerPresent'] ? 'true' : 'false'),
                'fallbackHeaderSource=' . ($authFallback['headerSource'] !== '' ? $authFallback['headerSource'] : 'n/a'),
                'fallbackHeaderLength=' . (isset($authFallback['headerLength']) ? $authFallback['headerLength'] : 0),
                'fallbackHeaderHash=' . (! empty($authFallback['headerHash']) ? $authFallback['headerHash'] : 'n/a'),
                'fallbackGlobalsUpdated=' . ($authFallback['globalsUpdated'] ? 'true' : 'false'),
                'preAuthContext=' . implode('|', $serverAuthSummaryBeforeFallback),
                'postAuthContext=' . implode('|', $serverAuthSummaryAfterFallback),
        ];
        if ($authFallback['status'] === 'fallback-applied' && isset($authFallback['username'])) {
                $logDetails[] = 'fallbackUsername=' . $authFallback['username'];
        }

        hlAdminWriteDebugLog($debugLogFile, 'HTTP Basic challenge issued: ' . implode(', ', $logDetails));

        header('WWW-Authenticate: Basic realm="' . $realm . '"');
        header('HTTP/1.0 401 Unauthorized');
        echo 'Authentication required.';
        exit();
}


$username = $_SERVER['PHP_AUTH_USER'];
$password = $_SERVER['PHP_AUTH_PW'];
$verification = hlAdminVerifyPassword($username, $password, $users);
$passwordVerified = $verification['passwordVerified'];

$remoteAddress = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 'unknown';
$logDetails = [
        'flow=http-basic',
        'user=' . $username,
        'ip=' . $remoteAddress,
        'userExists=' . ($verification['userExists'] ? 'true' : 'false'),
        'passwordVerified=' . ($passwordVerified ? 'true' : 'false'),
];

if ($verification['passwordHashInfo'] !== null) {
        $logDetails[] = 'hashAlgo=' . ($verification['passwordHashInfo']['algoName'] ?? 'unknown');
        if (! empty($verification['passwordHashInfo']['options'])) {
                $logDetails[] = 'hashOptions=' . json_encode($verification['passwordHashInfo']['options']);
        }
}

if (! $verification['passwordHashIsValid'] && $verification['userExists']) {
        $logDetails[] = 'hashStatus=unusable';
}

$logDetails[] = 'fallbackStatus=' . $authFallback['status'];
$logDetails[] = 'fallbackHeaderPresent=' . ($authFallback['headerPresent'] ? 'true' : 'false');
$logDetails[] = 'fallbackHeaderSource=' . ($authFallback['headerSource'] !== '' ? $authFallback['headerSource'] : 'n/a');
$logDetails[] = 'fallbackHeaderLength=' . (isset($authFallback['headerLength']) ? $authFallback['headerLength'] : 0);
$logDetails[] = 'fallbackHeaderHash=' . (! empty($authFallback['headerHash']) ? $authFallback['headerHash'] : 'n/a');
$logDetails[] = 'fallbackGlobalsUpdated=' . ($authFallback['globalsUpdated'] ? 'true' : 'false');
$logDetails[] = 'preAuthContext=' . implode('|', $serverAuthSummaryBeforeFallback);
$logDetails[] = 'postAuthContext=' . implode('|', $serverAuthSummaryAfterFallback);
if ($authFallback['status'] === 'fallback-applied' && isset($authFallback['username'])) {
        $logDetails[] = 'fallbackUsername=' . $authFallback['username'];
}

hlAdminWriteDebugLog($debugLogFile, 'HTTP Basic login attempt: ' . implode(', ', $logDetails));

if (! $verification['userExists'] || ! $passwordVerified) {
        header('WWW-Authenticate: Basic realm="' . $realm . '"');
        header('HTTP/1.0 401 Unauthorized');
        echo 'Invalid credentials.';
        exit();
}

header('Cache-Control: no-store');
?>
<!DOCTYPE html>
<html lang="en">
<head prefix="og: http://ogp.me/ns#">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords"
	content="Heilsame Lieder, Kreiskultur, Musik, Singen, Gitarre, Mantras, Mantren, Chants, Chanten, Chanting, Music, Singing, Guitar, Singkreis">
<meta name="description"
	content="Ein Archiv Heilsamer Lieder für Singkreise - Texte, Akkorde und Demoaufnahmen zum Lernen" />
<meta property="og:url" content="https://heilsame-lieder.de/" />
<meta property="og:title" content="Heilsame Lieder" />
<meta property="og:description"
	content="Ein Archiv Heilsamer Lieder für Singkreise - Texte, Akkorde und Demoaufnahmen zum Lernen" />
<meta property="og:image" content="https://heilsame-lieder.de/img/heilsame_lieder_grafik2.jpg" />
<title>Heilsame Lieder</title>
<link rel="stylesheet" href="/css/songbook.css">
<style>
</style>
</head>
<body class="admin-view">

	<div class="container">
		<div class="page-heading">
			<img src="/img/logo4a.png" alt="Icon" class="heading-icon">
			<h2 id="heilsame-lieder">Heilsame Lieder</h2>
			<img src="/img/logo4a.png" alt="Icon" class="heading-icon">
		</div>

		<!-- Search Box with Local PNG Icon -->
		<div class="search-container">
			<img src="/img/search2.png" alt="Search"> <input type="text" id="searchBox" placeholder="Search..."
				oninput="toggleClearButton()" onkeyup="searchSongs()">
			<button id="clearButton" onclick="clearSearch()">✕</button>
		</div>

		<!-- Table for Results -->
		<table>
			<thead>
				<tr>
					<th id="id">ID</th>
					<th id="title">Title</th>
					<th id="author" class="author-col">Author(s)</th>
					<th id="actions">Actions</th>
				</tr>
			</thead>
			<tbody id="results"></tbody>
		</table>
	</div>


	<!-- Popup Container -->
	<div id="popup" class="popup" style="display: none;">
		<div class="popup-content">
			<span class="popup-close" onclick="closePopup('popup')">&times;</span>
			<div id="popup-body"></div>
		</div>
	</div>
	<div id="popup2" class="popup" style="display: none;">
		<div class="popup-content">
			<span class="popup-close" onclick="closePopup('popup2')">&times;</span>
			<div id="popup2-body"></div>
		</div>
	</div>

	<a href="https://play.google.com/store/apps/details?id=de.jeisfeld.songarchive" class="androidapp" id="androidapp-link"
		target="_blank">Android App</a>

	<a href="/impressum.html" class="impressum" id="impressum-link">Imprint</a>

	<!-- Modal Structure -->
	<div id="modal-main" class="modal">
		<div class="modal-content">
			<!-- A close button and a placeholder; content will be loaded here -->
			<span class="modal-close" id="close-modal">&times;</span>
			<div id="modal-content">
				<!-- Impressum content from impressum.html will appear here -->
			</div>
		</div>
	</div>

	<script src="/js/songbook.js"></script>
</body>
</html>