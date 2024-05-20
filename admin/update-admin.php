<?php include ('partials/menu.php'); ?>
<div class="= main-content">
    <div class="wrapper">
        <h1> Update Admin </h1>
        <br><br>
      
        <?php
        //1.get the ID of selected Admin
        $id=$_GET['id'];

        //2. create SQL query to get th Details
        $sql="SELECT * FROM tbl_admin WHERE id=$id";

        // execute the query
        $res= mysqli_query($conn,$sql);

        //check wether the query is executed or not
        if($res==true)
        {
        //check whether the data is available or not
        $count = mysqli_num_rows($res);
        //check wether we have admin data or not
        if($count== 1)
        {
            //get the details
            //echo "Admin Available";
            $row=mysqli_fetch_assoc($res);
            $full_name = $row['full_name'];
            $username = $row['username'];

        }
        else
        {
            //Redirect to manage Admin Page 
            header('location: http://localhost/clothes-order/admin/manage-admin.php');
        }
    }
        ?>

        <form action="" method ="POST">
       <table class="tbl-30">
           <tr>
               <td>Full Name:</td>
               <td>
                   <input type="text" name= "full_name" value="<?php echo $full_name;?>">
</td>
</tr>
<tr>
    <td>Username:</td>
    <td>
        <input type="text" name="username" value="<?php echo $username;?>">
    </td>
</tr>
<tr>
    <td colspan="2">
        <input type="hidden" name="id" value =" <?php echo $id; ?>">
        <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
    </td>
</tr>
     
       </table>

        </form>
</div>
</div>

<?php
//check whether the submit button is clicked or not
if(isset($_POST['submit']))
{
    //echo "Button Clicked";
    //get all the values from form to update
    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];


// create a SQL query to update Admin
$sql = "UPDATE tbl_admin SET
full_name = '$full_name',
username = '$username'
WHERE id= '$id'
";

//excute the query
$res = mysqli_query($conn,$sql);

//check whether the query excuted sucessfully or not
if($res==true)
{
    //query excuted and Admin update
    $_SESSION['update']= "<div class='sussess'> Admin Update Successfully.</div>";
    // redirect to manage Admin page
    header('location: http://localhost/clothes-order/admin/manage-admin.php');
}
else{
    //failed to update admin
    $_SESSION['update']= "<div class='error'> Failed to delete admin.</div>";
    // redirect to manage Admin page
    header('location: http://localhost/clothes-order/admin/manage-admin.php');
}
}
?>


<?php include('partials/footer.php'); ?>