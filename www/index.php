<?php
   require_once 'router.php';

    function load_translations(string $lang, string $context = ""): array 
    {
        $baseFile = __DIR__ . "/resources/lang/{$lang}.json";
        $contextFile = ($context && $context != "") ? __DIR__ . "$context/resources/lang/{$lang}.json" : null;

        $base = file_exists($baseFile) ? json_decode(file_get_contents($baseFile), true) : [];
        $contextual = ($contextFile && file_exists($contextFile)) ? json_decode(file_get_contents($contextFile), true) : [];

        // Fusionne les tableaux (le second écrase les clés en cas de doublon)
        return array_merge($base, $contextual);
    }

    $page = get_page();
    $lang = get_language();

    $trans = load_translations($lang, "/pages/$page");

    function echo_loc_text(string $text)
    {
        global $trans;
        echo $trans[$text] ?? "";
    }
?>

<!DOCTYPE html>
<html lang="<?php echo get_language() ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolio</title>

        <!-- Project styles -->
        <link rel="stylesheet" href="/styles.css" />
        <?php import_page_style(); ?>
    </head>
    <body>
        <?php include 'header.php'; ?>

        <main>
            <?php route_request_main() ?>
        </main>

        <?php include 'footer.php'; ?>

        <script src="/javascript/themes.js"></script>
        <script src="/javascript/responsive-nav.js"></script>
        <script src="/javascript/translation.js"></script>
    </body>
</html>