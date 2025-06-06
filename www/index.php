<?php
   require_once 'router.php';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolio</title>

        <!-- Project styles -->
        <link rel="stylesheet" href="styles.css" />
        <?php import_page_style(); ?>
    </head>
    <body>
        <?php include 'header.php'; ?>

        <main>
            <?php route_request_main() ?>
        </main>

        <?php include 'footer.php'; ?>

        <script src="javascript/themes.js"></script>
        <script src="javascript/lang.js"></script>
        <script src="javascript/responsive-nav.js"></script>
    </body>
</html>