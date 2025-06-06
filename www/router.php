<?php

function route_request_main() 
{
    if (!route_request('main.php'))
    {
        http_response_code(404);
        echo "<h1>404 - Page non trouvée</h1>";
    }
}

function import_page_style() 
{
    echo '<link rel="stylesheet" href="' . route_request('style.css') .'" />';
}


/* Real route function */

function route_request($name) : bool
{
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $path = trim($path, '/');

    if ($path === '') 
    {
        $path = 'home';
    }

    $file = __DIR__ . '/pages/' . $path . '/' . $name;

    $realBase = realpath(__DIR__ . '/pages');
    $realFile = realpath($file);

    if ($realFile && strpos($realFile, $realBase) === 0 && file_exists($realFile)) 
    {
        include $realFile;
        return true;
    } 
    
    return false;
}

function get_route_style($name = 'style.css') : string
{
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $path = trim($path, '/');

    if ($path === '') 
    {
        $path = 'home';
    }

    $file = __DIR__ . '/pages/' . $path . '/' . $name;

    echo $file;

    $realBase = realpath(__DIR__ . '/pages');
    $realFile = realpath($file);

    if ($realFile && strpos($realFile, $realBase) === 0 && file_exists($realFile)) 
        return $realFile;

    return "";
}