<?php
if (!isset($_SESSION["spiegelspel"]["cms"])) {
    $_SESSION["spiegelspel"]["cms"] = ["logged-in" => false, "admin" => ["userID" => "", "perms" => ""]];
}

$page = "";

if ($_SESSION["spiegelspel"]["cms"]["logged-in"]) {
    $page = "home";
} else {
    $page = "log-in";
}

include_once("{$page}.php");
?>