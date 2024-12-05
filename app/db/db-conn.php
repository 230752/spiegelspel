<?php
/* @var array $secrets */

//Database connection

$dbhost = $secrets["DB"]["host"];
$dbport = $secrets["DB"]["port"];
$dbuser = $secrets["DB"]["user"];
$dbpass = $secrets["DB"]["password"];
$dbname = $secrets["DB"]["name"];

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname, $dbport);

if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}

function testInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>