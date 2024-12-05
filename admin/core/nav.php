<div id="head">
    <a href="<?= BASEURL_CMS ?>">
        <img src="<?= BASEURL_CDN ?>img/Spiegelspel-Logo.png" alt="">
    </a>
</div>
<nav>
    <?php
    $nav = file_get_contents(BASEURL_CMS . "assets/json/nav.json");
    $nav = json_decode($nav, true);

    foreach ($nav as $item) { ?>
        <a href="<?= BASEURL_CMS ?><?= $item["url"] ?>" class="nav-item">
            <div class="content">
                <img src="<?= BASEURL_CMS ?>assets/img/icons/<?= $item["icon"] ?>" alt="">
                <p><?= $item["name"] ?></p>
            </div>
            <div class="arrow">
                <img src="<?= BASEURL_CMS ?>assets/img/icons/caret-right.png" alt="">
            </div>
        </a>
    <?php } ?>
</nav>
<div id="bottom">
    <a href="<?= BASEURL_CMS ?>uitloggen" id="logout-btn">
        <img src="<?= BASEURL_CMS ?>assets/img/icons/exit.png" alt="">
        <p>UITLOGGEN</p>
    </a>
</div>