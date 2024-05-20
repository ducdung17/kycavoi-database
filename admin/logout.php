<?php
//include constants.php for SITEURL
include('../config/constants.php');
//1. destory the ssession 
session_destroy(); // unsets $_SESSION['user']
//define('SITEURL','http://localhost/clothes-order/')
//2. Redirect to login page 
header('Location: http://localhost/clothes-order/admin/login.php');
?>