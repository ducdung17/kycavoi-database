<?php

// include constans.php file here
include('../config/constants.php');

//1. get the ID of admin to be deleted
$id = $_GET['id'];

 //2. create SQL quety to delete admin

 $sql = "DELETE FROM tbl_admin WHERE id= $id";

 // Execute the query
 $res = mysqli_query ($conn, $sql);

 //check whether the query excuted successfully or not
 if($res== true)
 {
     // query excuted successfully and admin deleted
     //echo "Admin Deleted";
     //create session caraable to display message 
     $_SESSION['delete'] = "<div class='success'>Admin deleted successfully.</div>";
     //redirect to manage admin page
     header('location: http://localhost/clothes-order/admin/manage-admin.php');
 }
 else 
 {
     // failed to delete admin
    //echo"Failed to Delete Admin";
$_SESSION ['delete'] = "<div class='error'> Failed to Delete Admin.Try Again Later.</div>";
header('location: http://localhost/clothes-order/admin/manage-admin/php');
}
 //3. redirect to manage admin page with message (success/error)
 ?>