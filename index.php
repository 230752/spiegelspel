<?php
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "https://u230752.gluwebsite.nl/wordpress/wp-json/wp/v2/posts?categories=6");

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);

$section3 = json_decode($response, true);

curl_close($curl);
?>

<!doctype html>
<html lang="en-AU">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>Spiegelspel</title>

    <link rel="icon" href="">

    <!--    Linking of the css files-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/section3.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/contact-form.css">

    <!--    Linking of the javascript files, defer = reading/link the file at last-->
    <script defer src="assets/js/menu.js"></script>
</head>

<body>

    <header>
        <!--    Getting the header document-->
        <?php include "core/header.php" ?>
    </header>

    <main>
        <div id="section1">
            <img class="stockimg" src="assets/img/stockimg.jpg" alt="">
            <div class="front_tekst">
                <h1 style="font-size:100px">Spiegelspel</h1>
                <h2>Focus6</h2>
            </div>
            <div class="scrolldown">
                <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
                    type="module"></script>
                <dotlottie-player src="https://lottie.host/5acedb04-2a08-4077-88c1-9ed8e9efc564/BVfNs3I56X.lottie"
                    background="transparent" speed="1" style="width: 300px; height: 300px" loop
                    autoplay></dotlottie-player>
            </div>
        </div>
        <div id="section2">
            <div class="section2_1">
                <div class="mw_img">
                    <img src="assets/img/meerwaardeimg.jpg" alt="" height="300vw">
                </div>
                <div class="section2_title">
                    <h1>Doel Spiegelspel</h1>
                    <span>Een methodiek om spelenderwijs het teamleren te bevorderen</span>
                </div>
            </div>
            <div class="section2_2">
                <div class="sec2content">
                    <img src="assets/img/kwaliteit.jpg" alt="" width="50%">
                    <span>kwaliteit</span>
                </div>
                <div class="sec2content">
                    <img src="assets/img/kwaliteit.jpg" alt="" width="50%">
                    <span>Samerwerken</span>
                </div>
                <div class="sec2content">
                    <img src="assets/img/kwaliteit.jpg" alt="" width="50%">
                    <span>Teamontwikkeling</span>
                </div>
            </div>
        </div>

        <section id="section3">
            <div id="info-section-content">
                <h1 id="section-title">HET SPIEGELSPEL</h1>
                <?php
                foreach ($section3 as $post) {
                    echo '<p class="box-text">' . $post['content']['rendered'] . '</p>';
                } ?>
            </div>
        </section>

        <section id="section4">
            <h2>Contact</h2>
            <form id="contact-form" action="your_form_processing_script.php" method="POST">
                <div class="form-group">
                    <label for="name">Voornaam:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="surname">Achternaam:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Vraag:</label>
                    <textarea id="message" name="message" required style="resize: vertical"></textarea>
                </div>
                <button type="submit">Verstuur</button>
            </form>
        </section>

    </main>

    <footer>
        <!--    Getting the footer document-->
        <?php include "core/footer.php" ?>
    </footer>

</body>

</html>