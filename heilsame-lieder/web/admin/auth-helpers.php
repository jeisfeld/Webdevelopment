<?php

if (! function_exists('hlAdminVerifyPassword')) {
    function hlAdminVerifyPassword($username, $password, array $users)
    {
        $username = (string) $username;
        $password = (string) $password;

        $userExists = $username !== '' && array_key_exists($username, $users);
        $passwordHash = $userExists ? $users[$username] : null;
        $passwordHashInfo = null;
        $passwordVerified = false;
        $hashIsValid = false;

        if ($passwordHash !== null) {
            $passwordHashInfo = password_get_info($passwordHash);
            $hashAlgo = isset($passwordHashInfo['algo']) ? (int) $passwordHashInfo['algo'] : 0;
            $hashIsValid = $hashAlgo !== 0 || ! empty($passwordHashInfo['algoName']);

            if ($hashIsValid) {
                $passwordVerified = password_verify($password, $passwordHash);
            }
        }

        return [
            'username' => $username,
            'userExists' => $userExists,
            'passwordHash' => $passwordHash,
            'passwordHashInfo' => $passwordHashInfo,
            'passwordHashIsValid' => $hashIsValid,
            'passwordVerified' => $passwordVerified,
        ];
    }
}

if (! function_exists('hlAdminWriteDebugLog')) {
    function hlAdminWriteDebugLog($file, $message)
    {
        $logEntry = '[' . date('c') . '] ' . $message . PHP_EOL;

        if (@file_put_contents($file, $logEntry, FILE_APPEND | LOCK_EX) === false) {
            error_log('Failed to write admin auth debug log: ' . $message);
        }
    }
}

if (! function_exists('hlAdminDescribeHashInfo')) {
    function hlAdminDescribeHashInfo($hashInfo)
    {
        if ($hashInfo === null) {
            return 'n/a';
        }

        $algoName = isset($hashInfo['algoName']) && $hashInfo['algoName'] !== ''
            ? $hashInfo['algoName']
            : (isset($hashInfo['algo']) ? (string) $hashInfo['algo'] : 'unknown');

        return $algoName;
    }
}

if (! function_exists('hlAdminGetServerAuthSnapshot')) {
    function hlAdminGetServerAuthSnapshot()
    {
        $authHeaderInfo = hlAdminGetAuthorizationHeaderInfo(true);
        $headerValue = isset($authHeaderInfo['value']) ? (string) $authHeaderInfo['value'] : '';
        $headerLength = ($authHeaderInfo['present'] && $headerValue !== '') ? strlen($headerValue) : 0;
        $headerHash = ($headerLength > 0) ? hash('sha256', $headerValue) : '';

        return [
            'authType' => isset($_SERVER['AUTH_TYPE']) ? (string) $_SERVER['AUTH_TYPE'] : '',
            'phpAuthUserSet' => array_key_exists('PHP_AUTH_USER', $_SERVER),
            'phpAuthPwSet' => array_key_exists('PHP_AUTH_PW', $_SERVER),
            'remoteUser' => isset($_SERVER['REMOTE_USER']) ? (string) $_SERVER['REMOTE_USER'] : '',
            'httpAuthorizationSet' => $authHeaderInfo['present'],
            'httpAuthorizationSource' => $authHeaderInfo['present'] ? $authHeaderInfo['source'] : '',
            'httpAuthorizationLength' => $headerLength,
            'httpAuthorizationHash' => $headerHash,
            'phpSapi' => PHP_SAPI,
            'gatewayInterface' => isset($_SERVER['GATEWAY_INTERFACE']) ? (string) $_SERVER['GATEWAY_INTERFACE'] : '',
            'fcgiRole' => isset($_SERVER['FCGI_ROLE']) ? (string) $_SERVER['FCGI_ROLE'] : '',
        ];
    }
}

if (! function_exists('hlAdminFormatServerAuthSnapshot')) {
    function hlAdminFormatServerAuthSnapshot(array $snapshot)
    {
        $details = [];

        $details[] = 'serverAuthType=' . ($snapshot['authType'] !== '' ? $snapshot['authType'] : 'none');
        $details[] = 'phpAuthUser=' . ($snapshot['phpAuthUserSet'] ? 'set' : 'unset');
        $details[] = 'phpAuthPw=' . ($snapshot['phpAuthPwSet'] ? 'set' : 'unset');
        $details[] = 'remoteUser=' . ($snapshot['remoteUser'] !== '' ? $snapshot['remoteUser'] : 'n/a');
        $details[] = 'httpAuthorization=' . ($snapshot['httpAuthorizationSet'] ? 'present' : 'absent');

        $authSource = isset($snapshot['httpAuthorizationSource']) && $snapshot['httpAuthorizationSource'] !== ''
            ? $snapshot['httpAuthorizationSource']
            : 'n/a';
        $details[] = 'httpAuthorizationSource=' . $authSource;

        $authLength = isset($snapshot['httpAuthorizationLength']) ? (int) $snapshot['httpAuthorizationLength'] : 0;
        $details[] = 'httpAuthorizationLength=' . $authLength;

        $authHash = isset($snapshot['httpAuthorizationHash']) && $snapshot['httpAuthorizationHash'] !== ''
            ? $snapshot['httpAuthorizationHash']
            : 'n/a';
        $details[] = 'httpAuthorizationHash=' . $authHash;

        $phpSapi = isset($snapshot['phpSapi']) && $snapshot['phpSapi'] !== '' ? $snapshot['phpSapi'] : 'n/a';
        $details[] = 'phpSapi=' . $phpSapi;

        $gatewayInterface = isset($snapshot['gatewayInterface']) && $snapshot['gatewayInterface'] !== ''
            ? $snapshot['gatewayInterface']
            : 'n/a';
        $details[] = 'gatewayInterface=' . $gatewayInterface;

        $fcgiRole = isset($snapshot['fcgiRole']) && $snapshot['fcgiRole'] !== ''
            ? $snapshot['fcgiRole']
            : 'n/a';
        $details[] = 'fcgiRole=' . $fcgiRole;

        return $details;
    }
}

if (! function_exists('hlAdminGetAuthorizationHeaderInfo')) {
    function hlAdminGetAuthorizationHeaderInfo($includeValue = false)
    {
        $candidates = [
            ['key' => 'HTTP_AUTHORIZATION', 'source' => 'SERVER.HTTP_AUTHORIZATION'],
            ['key' => 'REDIRECT_HTTP_AUTHORIZATION', 'source' => 'SERVER.REDIRECT_HTTP_AUTHORIZATION'],
            ['key' => 'AUTHORIZATION', 'source' => 'SERVER.AUTHORIZATION'],
        ];

        foreach ($candidates as $candidate) {
            if (isset($_SERVER[$candidate['key']]) && $_SERVER[$candidate['key']] !== '') {
                return [
                    'present' => true,
                    'source' => $candidate['source'],
                    'value' => $includeValue ? (string) $_SERVER[$candidate['key']] : '',
                ];
            }
        }

        foreach ($candidates as $candidate) {
            $envValue = getenv($candidate['key']);
            if ($envValue !== false && $envValue !== '') {
                return [
                    'present' => true,
                    'source' => 'ENV.' . $candidate['key'],
                    'value' => $includeValue ? (string) $envValue : '',
                ];
            }
        }

        $headers = [];
        if (function_exists('getallheaders')) {
            $headers = getallheaders();
        } elseif (function_exists('apache_request_headers')) {
            $headers = apache_request_headers();
        }

        foreach ($headers as $name => $value) {
            if (strcasecmp($name, 'Authorization') === 0 && $value !== '') {
                return [
                    'present' => true,
                    'source' => 'request_headers.Authorization',
                    'value' => $includeValue ? (string) $value : '',
                ];
            }
        }

        return [
            'present' => false,
            'source' => '',
            'value' => '',
        ];
    }
}

if (! function_exists('hlAdminParseBasicAuthHeader')) {
    function hlAdminParseBasicAuthHeader($headerValue)
    {
        if (! is_string($headerValue) || $headerValue === '') {
            return null;
        }

        if (! preg_match('/^Basic\s+(.+)$/i', $headerValue, $matches)) {
            return null;
        }

        $decoded = base64_decode($matches[1], true);
        if ($decoded === false) {
            return null;
        }

        $parts = explode(':', $decoded, 2);
        if (count($parts) !== 2) {
            return null;
        }

        return [
            'username' => $parts[0],
            'password' => $parts[1],
        ];
    }
}

if (! function_exists('hlAdminApplyBasicAuthFallback')) {
    function hlAdminApplyBasicAuthFallback(array $options = [])
    {
        $setGlobals = array_key_exists('setGlobals', $options) ? (bool) $options['setGlobals'] : true;
        $headerInfo = isset($options['headerInfo']) && is_array($options['headerInfo'])
            ? $options['headerInfo']
            : hlAdminGetAuthorizationHeaderInfo(true);

        $headerPresent = isset($headerInfo['present']) ? (bool) $headerInfo['present'] : false;
        $headerSource = isset($headerInfo['source']) ? (string) $headerInfo['source'] : '';
        $headerValue = isset($headerInfo['value']) ? (string) $headerInfo['value'] : '';

        $headerLength = ($headerPresent && $headerValue !== '') ? strlen($headerValue) : 0;
        $headerHash = ($headerLength > 0) ? hash('sha256', $headerValue) : '';

        $result = [
            'applied' => false,
            'status' => 'native',
            'headerPresent' => $headerPresent,
            'headerSource' => $headerSource,
            'headerLength' => $headerLength,
            'headerHash' => $headerHash,
            'globalsUpdated' => false,
        ];

        if (isset($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'])) {
            $result['username'] = (string) $_SERVER['PHP_AUTH_USER'];
            return $result;
        }

        if (! $headerPresent || $headerValue === '') {
            $result['status'] = $headerPresent ? 'header-empty' : 'header-missing';
            return $result;
        }

        $parsed = hlAdminParseBasicAuthHeader($headerValue);
        if ($parsed === null) {
            $result['status'] = 'header-unusable';
            return $result;
        }

        $result['status'] = 'fallback-applied';
        $result['applied'] = true;
        $result['username'] = $parsed['username'];

        if ($setGlobals) {
            $_SERVER['PHP_AUTH_USER'] = $parsed['username'];
            $_SERVER['PHP_AUTH_PW'] = $parsed['password'];
            $result['globalsUpdated'] = true;
        }

        return $result;
    }
}

if (! function_exists('hlAdminDescribeFallbackStatus')) {
    function hlAdminDescribeFallbackStatus(array $fallback)
    {
        $status = isset($fallback['status']) ? (string) $fallback['status'] : '';

        switch ($status) {
            case 'native':
                return 'PHP provided PHP_AUTH_* values without needing a fallback.';
            case 'fallback-applied':
                return 'Authorization header decoded and supplied via fallback.';
            case 'header-missing':
                return 'No Authorization header reached PHP.';
            case 'header-empty':
                return 'An Authorization header reached PHP but was empty.';
            case 'header-unusable':
                return 'Authorization header was not recognised as HTTP Basic.';
            default:
                return $status !== '' ? $status : 'unknown';
        }
    }
}

