<?php
include_once("../app/config/config.php");

/* @var mysqli $conn */
include_once("../app/db/db-conn.php");
?>

<!DOCTYPE html>
<html lang="en-AU">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact | SpiegelSpel</title>

    <link rel="icon" href="">

<!--    Linking of the css files-->
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/style.css">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/contactform.css">

<!--    Linking of the javascript files, defer = reading/link the file at last-->
    <script defer src="/public/assets/js/app.js"></script>
</head>
<body>
<div class="section_form">
    <h2> Contact</h2>
                <div class="form_box">
                    <form action="#">
                        <div id="input-text-container">
                            <label for="f_name">Voornaam</label><br>
                            <input type="text" id="f_name" name="f_name" value="" required><br>
                            <label for="l_name">Achternaam</label><br>
                            <input type="text" id="l_name" name="l_name" value="" required>
                            <label for="mail_adres">E-mail</label><br>
                            <input type="email" id="mail_adres" name="mail_adres" value="" required>
                            <label for="question">Vraag</label><br>
                            <input type="text" id="question" name="question" value="" required><br>
                        </div>
                        <input type="submit" value="VERZEND">
                    </form>
                </div>
            </div>
</body>
<?php $conn->close(); ?>