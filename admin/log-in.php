<?php
include_once("../app/config/config.php");

/* @var mysqli $conn */
include_once("../app/db/db-conn.php");
?>

    <!doctype html>
    <html lang="en-AU">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Log In | Spiegelspel Admin</title>

        <link rel="icon" href="">

        <!--    Linking of the css files-->
        <link rel="stylesheet" href="<?= BASEURL_CMS ?>assets/css/fonts.css?v=<?= time() ?>">
        <link rel="stylesheet" href="<?= BASEURL_CMS ?>assets/css/style.css?v=<?= time() ?>">
        <link rel="stylesheet" href="<?= BASEURL_CMS ?>assets/css/login.css?v=<?= time() ?>">

        <!--    Linking of the javascript files, defer = reading/link the file at last-->
        <script defer src="<?= BASEURL_CMS ?>assets/js/login.js"></script>
    </head>

    <body>
    <figure id="image">
        <img src="<?= BASEURL_CDN ?>img/teamwork.jpg" alt="">
        <figcaption>
            <p>&copy; 2024-<?= Date("Y") ?> ByteForge // Made by <a href="https://www.rileydeman.com" target="_blank" >rileydeman</a>, Chris, Soera, Tim, Gilorah</p>
        </figcaption>
    </figure>
    <section id="login-form">
        <img id="logo" src="<?= BASEURL_CDN ?>img/Spiegelspel-Logo.png" alt="Spiegelspel Logo">

        <form id="form" action="<?= BASEURL ?>app/controllers/cms/accounts/log-in.php" method="post">
            <h1>Admin Dashboard</h1>
            <p>Welkom terug!</p>

            <fieldset id="username">
                <label class="icon" for="username-input">
                    <img src="<?= BASEURL_CMS ?>assets/img/icons/user.png" alt="User icon">
                </label>
                <div class="input">
                    <input type="text" name="username" id="username-input" placeholder="naam of naam@voorbeeld.nl" required>
                    <label for="username-input">Gebruikersnaam of Email</label>
                </div>
            </fieldset>

            <p id="username-feedback"></p>

            <fieldset id="password">
                <label class="icon" for="password-input">
                    <img src="<?= BASEURL_CMS ?>assets/img/icons/lock.png" alt="Lock Icon">
                </label>
                <div class="input">
                    <input type="password" name="password" id="password-input" required>
                    <label for="password-input">Wachtwoord</label>
                </div>
            </fieldset>

            <p id="password-feedback"></p>

            <fieldset id="submitButton">
                <div class="icon"></div>
                <div class="input">
                    <input type="submit" id="submit-input" value="INLOGGEN" disabled>
                </div>
            </fieldset>
        </form>
    </section>
    </body>

    </html>

<?php $conn->close(); ?>