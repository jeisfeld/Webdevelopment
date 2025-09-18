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
        return [
            'authType' => isset($_SERVER['AUTH_TYPE']) ? (string) $_SERVER['AUTH_TYPE'] : '',
            'phpAuthUserSet' => array_key_exists('PHP_AUTH_USER', $_SERVER),
            'phpAuthPwSet' => array_key_exists('PHP_AUTH_PW', $_SERVER),
            'remoteUser' => isset($_SERVER['REMOTE_USER']) ? (string) $_SERVER['REMOTE_USER'] : '',
            'httpAuthorizationSet' => isset($_SERVER['HTTP_AUTHORIZATION']) && $_SERVER['HTTP_AUTHORIZATION'] !== '',
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

        return $details;
    }
}

