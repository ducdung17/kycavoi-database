<?php include('partials/menu.php'); ?>


<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>

    <br><br>

    <?php
            if(isset($_SESSION['add'])) //checking whether the session is set of not
            {
                echo $_SESSION['add'];   //displaying session message
                unset($_SESSION['add']); //removing session message
            }
            ?>


        <form action="" method="POST">


<table class ="tbl-30">
    <tr>
        <td>Full Name:</td>
        <td><input type ="text" name="full_name" placeholder="Enter your name"></td>
    </tr>

    <tr>
<td>Username:</td>
<td>
    <input type="text" name="username" placeholder ="Your username">
</td>
    </tr>
    <tr>
        <td>Password:</td>
        <td>
            <input type="password" name="password" placeholder="Your Password">
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
        </td>
    </tr>
</table>

        </form>
</div>
</div>
<?php include('partials/footer.php'); ?>

<?php
//process the value from form and save it in Database
//check wether the submit  bottom is clicked or not
if(isset($_POST['submit']))
{
    // button clicked
    //echo"Button Clicked";

    //1. Get the data from form

    $full_name = $_POST['full_name'];
    $username=$_POST['username'];
    $password=md5($_POST['password']); // password encryption with MD5

    //2. SQL Quety to save the data into database
    $sql = "INSERT INTO tbl_admin SET
    full_name='$full_name',
    username='$username',
    password='$password' 
    ";
    
    //3. Executing Quety and saving Data into database    
    $res =mysqli_query($conn,$sql) or die (mysqli_error()) ;

    //4.check wether the(Query is Excuted ) data is inserted or not and display appropriate message
    if($res==true)
    {
        //DATA inserted
        //echo "Data Inserted";
        //create a session variable to display message
        $_SESSION['add'] = "Admin Added Successfully";
        // redirect page to admin
        header('location: http://localhost/clothes-order/admin/manage-admin.php');

    }
    else
    {
        //failed to insert Data
        //echo"Faile to Insert Data";
        //create a session variable to display message
        $_SESSION['add'] = "Failed to Add Admin";
        // redirect page to Add admin
        header('location: http://localhost/clothes-order/admin/manage-admin.php');
    }
}
?>