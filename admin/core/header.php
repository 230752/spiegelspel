<div id="menu">
    <img id="menuIcon" src="<?= BASEURL_CMS ?>assets/img/icons/bars-sort.png" alt="">
</div>
<div id="username">

    <?php
    $userID = testInput($_SESSION["spiegelspel"]["cms"]["admin"]["userID"]);

    $sqliQuery = "SELECT au_username FROM admin_users WHERE au_id = ? AND `au_deleted-date` IS NULL ";

    $sqliPrepare = $conn->prepare($sqliQuery);
    $sqliPrepare->bind_param("s", $userID);
    if ($sqliPrepare === false) {
        echo mysqli_error($conn);
    } else {
        if ($sqliPrepare->execute()) {
            $sqliPrepare->bind_result($au_username);
            while ($sqliPrepare->fetch()) {
                $username = $au_username;
            }
        }
    }
    ?>

    <img src="<?= BASEURL_CMS ?>assets/img/icons/user-white.png" alt="">
    <p id="usernameText"><?= strtoupper($username) ?></p>
</div>