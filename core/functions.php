<?php

if (!function_exists('env')) {
    function env($key, $default = '')
    {
        return isset($_ENV[$key]) ? $_ENV[$key] : $default;
    }
}

function validatePassword($password)
{
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);

    if (!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
        return false;
    }
    return true;
}

function getFlash($key)
{
  // session_start();

    // session_destroy();
    // var_dump($_SESSION);
    return App\Http\Session::getInstance()->getFlash($key);

}

function meekrodb_error_handler($params)
{
    if (isset($params['query'])) {
        $out[] = "QUERY: " . $params['query'];
    }

    if (isset($params['error'])) {
        $out[] = "ERROR: " . $params['error'];
    }

    $out[] = "";

    if (php_sapi_name() == 'cli' && empty($_SERVER['REMOTE_ADDR'])) {
        echo implode("\n", $out);
    } else {
        echo implode("<br>\n", $out);
    }

    die;
}

function meekrodb_debugmode_handler($params)
{
    echo "QUERY: " . $params['query'] . " [" . $params['runtime'] . " ms]";
    if (php_sapi_name() == 'cli' && empty($_SERVER['REMOTE_ADDR'])) {
        echo "\n";
    } else {
        echo "<br>\n";
    }
}
