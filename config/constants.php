<?php
ob_start();
session_start();
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'clothes_order'); 


$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS) or die(mysqli_error($conn)); // Establish connection
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn)); // Select database
?>

