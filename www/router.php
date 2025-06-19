<?php


function get_supported_languagess()
{
    return ['fr', 'en'];
}

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
    $stylePath = get_route_file('style.css');
    if ($stylePath !== "") 
    {
        echo '<link rel="stylesheet" href="' . htmlspecialchars($stylePath) . '">' . PHP_EOL;
    }
}

function get_page_translation_file_path($language) 
{
    return get_route_style('resources/lang/' . $language . '.json');
}

function get_global_translation_file_path($language) 
{
    return 'resources/lang/' . $language . '.json';    
}


/* Real route function */

function get_page()
{
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $path = trim($path, '/');

    // Détection langue + page
    $segments = explode('/', $path);

    if (!in_array($segments[0], get_supported_languagess())) 
    {
        $page = $path ?? 'home';

        if ($page == null || $page == "")
           $page = 'home'; 
    } 
    else 
    {
        array_shift($segments);
        $page = implode('/', $segments) ?? 'home';

        if ($page == null || $page == "")
           $page = 'home'; 
    }

    return $page;
}

function get_language()
{
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $path = trim($path, '/');

    // Détection langue + page
    $segments = explode('/', $path);

    if ($path == null || $path = "" || $segments[0] == null || $segments[0] == "" || !in_array($segments[0], get_supported_languagess())) 
        return get_supported_languagess()[0];
    
    return $segments[0];
}

function route_request(string $name): bool
{
    $page = get_page();

    // Fichier à inclure
    $file = __DIR__ . "/pages/$page/$name";

    $realBase = realpath(__DIR__ . '/pages');
    $realFile = realpath($file);

    if ($realFile && strpos($realFile, $realBase) === 0 && file_exists($realFile)) {
        include $realFile;
        return true;
    }

    return false;
}

function get_route_file($file) : string {
    $page = get_page();

    $webPath = "/pages/$page/$file"; // pour href
    $localPath = __DIR__ . $webPath;    // pour vérification sur disque

    if (file_exists($localPath)) 
    {
        return $webPath;
    }

    return "";
}