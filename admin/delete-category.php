<?php
    // include constants File
    include('../config/constants.php');
     //echo "Delete Page";
     //check wether the id and image_name value is set or not
     if(isset($_GET['id']) AND isset($_GET['image_name']))
     {
        //get the value and delete
        //echo "Get Value and delete";
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];

        //remove the physical image file is available 
        if($image_name !="");
        {
            //image is available. s rremove it
            $path = "../images/category/".$image_name;
            //remove the image
            $remove = unlink($path);

            //if failed to remove image then add an error message and stop the process
            if($remove==false)
            {
            // set the session message
            $_SESSION['remove'] ="<div class='error'>Faile to Remove Category Image.</div>";
            //redirect to manage category page
            header('location: http://localhost/clothes-order/admin/manage-category.php');
            //stop the process
            die();
            }
        
        }

        // delete dât from database
        //SQL Query to delete data from database
        $sql = "DELETE FROM tbl_category WHERE id=$id";

        //excute the query
        $res = mysqli_query($conn, $sql);

        //check whether the data is delete from database or not
        if($res==true)
        {
            //set success message and redirect
            $_SESSION['delete'] = "<div class='success'>Category Deleted Successfully.</div>";
            //rediredct to manage category
            header('location: http://localhost/clothes-order/admin/manage-category.php');
        }
        else
        {
           //set fail message and redirect
           $_SESSION['delete'] = "<div class='error'>Failed to Deleted Category.</div>";
           //rediredct to manage category
           header('location: http://localhost/clothes-order/admin/manage-category.php');
        }

        // Redirect to Manage Category Page with Message
        


     }

     else
     {   //redirect to manage category page
         header('location: http://localhost/clothes-order/admin/manage-category.php');
     }
?>