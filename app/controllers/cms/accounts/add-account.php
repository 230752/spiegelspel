<?php
/* @var array $secrets */
include_once("{$_SERVER['DOCUMENT_ROOT']}/app/config/config.php");

/* @var mysqli $conn */
include_once("{$_SERVER['DOCUMENT_ROOT']}/app/db/db-conn.php");


$username = ""; // String
$email = ""; // String
$password = ""; // String
$permissions  = ""; //Int

$passwordHash = password_hash($password, PASSWORD_DEFAULT);


$sqliQuery = "INSERT INTO admin_users (`au_username`, `au_login-email`, `au_password`, `au_permissions`) VALUES (?, ?, ?, ?)";

$insertqry = $conn->prepare($sqliQuery);
if ($insertqry === false) {
    echo mysqli_error($conn);
} else {
    $insertqry->bind_param('ssss', $username, $email, $passwordHash, $permissions);
    if ($insertqry->execute()) {
        echo "OK is gelukt!";
    }
}
$insertqry->close();

$conn->close();
?>