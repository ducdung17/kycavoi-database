<?php

//authorization. Access control 
//check wether the user is logged in or not
if(!isset($_SESSION['user'])) // if user session is not set
{
//user is not logged in
//redirect to login page with message 
$_SESSION['no-login-message'] = "<div class='error text-center'> Please login to access Admin Panel.</div>";
header('location: http://localhost/clothes-order/admin/login.php');
}
?>