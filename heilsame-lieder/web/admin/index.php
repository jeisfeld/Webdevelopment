<?php
$users = [
                // Default credentials are admin / changeme. Replace the hashed password with one generated via `password_hash` to customise credentials.
                'admin' => '$2y$12$XYpoTbc9nZhscmHGhhLl9ulTwkMb17zOGc/4xBJiSK22lNcye9i0a'
];

$realm = 'Heilsame Lieder Admin';

function requestAuthentication(string $realm, string $message) : void {
        header ( 'WWW-Authenticate: Basic realm="' . $realm . '"' );
        header ( 'HTTP/1.0 401 Unauthorized' );
        echo $message;
        exit ();
}

function parseBasicAuthHeader(string $header) : ?array {
        if (stripos ( $header, 'Basic ' ) !== 0) {
                return null;
        }

        $decoded = base64_decode ( substr ( $header, 6 ), true );
        if ($decoded === false) {
                return null;
        }

        $parts = explode ( ':', $decoded, 2 );
        if (count ( $parts ) !== 2) {
                return null;
        }

        return [
                        $parts [0],
                        $parts [1]
        ];
}

function getAuthCredentials() : ?array {
        if (isset ( $_SERVER ['PHP_AUTH_USER'], $_SERVER ['PHP_AUTH_PW'] )) {
                return [
                                $_SERVER ['PHP_AUTH_USER'],
                                $_SERVER ['PHP_AUTH_PW']
                ];
        }

        foreach (['HTTP_AUTHORIZATION', 'REDIRECT_HTTP_AUTHORIZATION'] as $headerKey) {
                if (! isset ( $_SERVER [$headerKey] )) {
                        continue;
                }

                $credentials = parseBasicAuthHeader ( $_SERVER [$headerKey] );
                if ($credentials !== null) {
                        return $credentials;
                }
        }

        return null;
}

$credentials = getAuthCredentials ();

if ($credentials === null) {
        requestAuthentication ( $realm, 'Authentication required.' );
}

list ( $username, $password ) = $credentials;

if (! array_key_exists ( $username, $users ) || ! password_verify ( $password, $users [$username] )) {
        requestAuthentication ( $realm, 'Invalid credentials.' );
}

header ( 'Cache-Control: no-store' );
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