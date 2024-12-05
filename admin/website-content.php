<?php
include_once("../app/config/config.php");

session_start();

if (!$_SESSION["spiegelspel"]["cms"]["logged-in"]) {
    header("Location: " . BASEURL_CMS);
    exit();
}

/* @var mysqli $conn */
include_once("../app/db/db-conn.php");
?>

    <!doctype html>
    <html lang="en-AU">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Website Content | Spiegelspel Admin</title>

        <link rel="icon" href="">

        <!--    Linking of the css files-->
        <link rel="stylesheet" href="<?= BASEURL_CMS ?>assets/css/fonts.css?v=<?= time() ?>">
        <link rel="stylesheet" href="<?= BASEURL_CMS ?>assets/css/style.css?v=<?= time() ?>">
        <link rel="stylesheet" href="<?= BASEURL_CMS ?>assets/css/main.css?v=<?= time() ?>">
        <link rel="stylesheet" href="<?= BASEURL_CMS ?>assets/css/nav.css?v=<?= time() ?>">
        <link rel="stylesheet" href="<?= BASEURL_CMS ?>assets/css/header.css?v=<?= time() ?>">
        <link rel="stylesheet" href="<?= BASEURL_CMS ?>assets/css/footer.css?v=<?= time() ?>">

        <!--    Linking of the javascript files, defer = reading/link the file at last-->
        <script defer src="<?= BASEURL_CMS ?>assets/js/app.js?v=<?= time() ?>"></script>
    </head>

    <body>

    <header>
        <!--    Getting the header document-->
        <?php include_once("core/header.php"); ?>
    </header>

    <aside>
        <?php include_once("core/nav.php"); ?>
    </aside>

    <main>
        <div id="content">
            <h1>Website Content</h1>
        </div>

        <footer>
            <!--    Getting the footer document-->
            <?php include_once("core/footer.php"); ?>
        </footer>

    </main>

    </body>

    </html>

<?php $conn->close(); ?>