<?php
$host = "localhost";
$db_user = "root"; // Adjust if necessary
$db_pass = ""; // Adjust if necessary
$db_name = "cms";

$connection = mysqli_connect($host, $db_user, $db_pass, $db_name);

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
