<?php
include_once("app/config/config.php");

/* @var mysqli $conn */
include_once("app/db/db-conn.php");
?>

<!doctype html>
<html lang="en-AU">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME | siteName</title>

    <link rel="icon" href="">

    <!--    Linking of the css files-->
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/fonts.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/style.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/header.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/footer.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/section3.css?v=<?= time() ?>">

    <!--    Linking of the javascript files, defer = reading/link the file at last-->
    <script defer src="/public/assets/js/app.js"></script>
    <script defer src="/public/assets/js/menu.js"></script>
</head>

<body>

    <header>
        <!--    Getting the header document-->
        <?php include "public/core/header.php" ?>
    </header>

    <main>
        <div id="section1">
            <div class="front_tekst">
                <h1 style="font-size:100px">Spiegelspel</h1>
                <h2>Focus6</h2>
            </div>
            <div class="scrolldown">
                <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
                <dotlottie-player src="https://lottie.host/5acedb04-2a08-4077-88c1-9ed8e9efc564/BVfNs3I56X.lottie"
                    background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay></dotlottie-player>
            </div>
        </div>
        <div id="section2">
            <div class="section2_1">
                <div class="mw_img">
                    <img src="public/assets/img/meerwaardeimg.jpg" alt="" height="300vw">
                </div>
                <div class="section2_title">
                    <h1>Doel Spiegelspel</h1>
                    <span>Een methodiek om spelenderwijs het teamleren te bevorderen</span>
                </div>
            </div>
            <div class="section2_2">
                <div class="sec2content">
                    <img src="public/assets/img/kwaliteit.jpg" alt="" width="50%">
                    <span>kwaliteit</span>
                </div>
                <div class="sec2content">
                    <img src="public/assets/img/kwaliteit.jpg" alt="" width="50%">
                    <span>Samerwerken</span>
                </div>
                <div class="sec2content">
                    <img src="public/assets/img/kwaliteit.jpg" alt="" width="50%">
                    <span>Teamontwikkeling</span>
                </div>
            </div>
        </div>

        <section id="section3">
            <div id="info-section-content">
                <h1 id="section-title">HET SPIEGELSPEL</h1>
                <div id="box1">
                    <img class="box-img" src="<?= BASEURL_CDN ?>img/leiderschap.png" alt="img" />
                    <p class="box-text">
                        Ontdek het krachtige Spiegelspel: een dynamische methode om samen als
                        team de kwaliteit, prestaties en ontwikkeling te bespreken. In dit spel
                        maakt het team gezamenlijk een waardevolle 'foto' van hun functioneren
                        en identificeert gebieden voor groei. Het spel creëert een plezierige en
                        veilige sfeer, waarin teamleden worden uitgenodigd om zich vrijelijk uit
                        te spreken en deel te nemen. Het bewezen succes van het Spiegelspel
                        wordt erkend door teamleden en teammanagers. Het omvat alle essentiële
                        onderwerpen voor teamleren, met aandacht voor de behoeften van een
                        Highperformance team en de ISO-/HKZnormen. Het Spiegelspel biedt een
                        interne audit en systeembeoordeling in één.
                    </p>
                </div>
                <div id="box2">
                    <img class="box-img" src="<?= BASEURL_CDN ?>img/groei-werkplezier.png" alt="img" />
                    <p class="box-text">
                        Een externe of intern opgeleide spelleider begeleidt het spel, waardoor
                        de teammanager en het team zich volledig kunnen richten op hun werk
                        zonder zich zorgen te maken over de methodiek of het proces. Vertrouwen
                        in het vakmanschap van de professional staat centraal, waarbij alle
                        teamleden actief deelnemen en bijdragen aan de teamontwikkeling.
                    </p>
                </div>
                <div id="box3">
                    <img class="box-img" src="<?= BASEURL_CDN ?>img/leren-ontwikkelen.png" alt="img" />
                    <p class="box-text">
                        Tijdens het Spiegelspel ontstaat vanzelf interactie in het team,
                        resulterend in waardevolle dialogen en zelfreflectie. De uitkomsten
                        worden vervolgens vastgelegd in een concreet zelfevaluatierapport met
                        sterke punten en ontwikkelpunten van het team. Dit rapport wordt
                        overhandigd aan de teammanager en vormt een solide basis voor het
                        opstellen van een effectief teamplan.
                    </p>
                </div>
            </div>
        </section>


    </main>

    <footer>
        <!--    Getting the footer document-->
        <?php include "public/core/footer.php" ?>
    </footer>

</body>

</html>

<?php $conn->close(); ?>
