<?php
date_default_timezone_set('Asia/Jakarta');

$servername = "sql200.infinityfree.com";
$username   = "if0_40853195";
$password   = "pcJiWzFLzRyYh";
$db         = "if0_40853195_webfilmyou";

// create connection
$conn = new mysqli($servername, $username, $password, $db);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
