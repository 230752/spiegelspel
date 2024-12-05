<?php
//Setting up the BaseURL
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $url = "https";
} else {
    $url = "http";
}

$url .= "://{$_SERVER['HTTP_HOST']}";

//Defining the important url's
define("BASEURL", "{$url}/");
define("BASEURL_CMS", "{$url}/admin/");
define("BASEURL_CDN", "{$url}/cdn/");
define("DOCUMENT_ROOT", "{$_SERVER['DOCUMENT_ROOT']}");

if ($_SERVER['REQUEST_URI'] != "/") {
    define("CURRENT_PAGE", "{$url}{$_SERVER['REQUEST_URI']}");
} else {
    define("CURRENT_PAGE", "{$url}");
}

//Get secrets from config.ini file
$secrets = parse_ini_file(DOCUMENT_ROOT . "/config.ini", true);

//Function for is a mobile device check
function isMobileDevice()
{
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo |fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

session_start();


/* @var mysqli $conn */
include_once("{$_SERVER['DOCUMENT_ROOT']}/app/db/db-conn.php");

if (!isset($_SESSION["spiegelspel"]["cms"])) {
    $_SESSION["spiegelspel"]["cms"] = ["logged-in" => false, "admin" => ["userID" => "", "perms" => ""]];
}

if ($_SESSION["spiegelspel"]["cms"]["logged-in"]) {
    $conn->close();

    header("Location: " . BASEURL_CMS);
    exit();
} else {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $adminFound = false;

        $username = testInput($_POST["username"]);
        $password = testInput($_POST["password"]);

        $sqliQuery = "SELECT au_id, au_permissions, au_password FROM admin_users WHERE `au_username` = ? OR `au_login-email` = ? AND `au_deleted-date` IS NULL";

        $sqliPrepare = $conn->prepare($sqliQuery);
        $sqliPrepare->bind_param("ss", $username, $username);
        if ($sqliPrepare === false) {
            echo mysqli_error($conn);
        } else {
            if ($sqliPrepare->execute()) {
                $sqliPrepare->bind_result($au_id, $au_permissions, $au_password);
                while ($sqliPrepare->fetch()) {
                    $adminFound = true;

                    if (password_verify($password, $au_password)) {
                        $_SESSION["spiegelspel"]["cms"] = ["logged-in" => true, "admin" => ["userID" => $au_id, "perms" => $au_permissions]];
                    } else {
                        $conn->close();

                        header("Location: " . BASEURL_CMS . "?err=true&msg=Password for {$username} not correct, please try a other password.");
                    }
                }
            }
        }

    }
}
$sqliPrepare->close();

$conn->close();

if (!$adminFound) {
    header("Location: " . BASEURL_CMS . "?err=true&msg=Username or email is incorrect.");
    exit();
}

header("Location: " . BASEURL_CMS);
exit();
?>