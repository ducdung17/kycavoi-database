<?php include('../config/constants.php');?>

<html>
<head>
 <title>Login - clothes Oder System</title>
 <link rel ="stylesheet" href = "../css/admin.css">
</head>
<body>
    <div class="login">
        <h1 class="text-center">Login</h1>
        <br><br>

    <?php
    if(isset($_SESSION['login']))
    {
        echo $_SESSION['login'];
        unset($_SESSION['login']);
    }

    if(isset($_SESSION['no-login-message']))
    {
        echo $_SESSION['no-login-message'];
        unset($_SESSION['no-login-message']);
    }

    ?>
    <br><br>

        <!-- login form starts here -->
        <form action="" method="POST" class="text-center">
            Username:<br>
            <input type ="text" name = "username" placeholder="Enter Username"> <br><br>

            Password:<br>
            <input type="password" name="password" placeholder="Enter Password"><br><br>
            <input type="submit" name="submit" value ="Login" class="btn-primary">
            <br><br>
        </form>
         <!-- login form ends here -->
        <p class="text-center"> Created By - <a href="https://vk.com/tiendunzz">DO DUC DUNG 221-3711</a></p>
</div>      
</body>
</html>

<?php
// check wether the submit button is clicked or not

if(isset($_POST['submit']))
{
    //process for login
    //1. Get the Data from Login form
     $username = $_POST['username'];
     //$password = md5($_POST['password']);
     $password = $_POST['password'];

     //2. SQL to check wether the user with username and password exists or not
     $sql = "SELECT * FROM tbl_admin WHERE username = '$username' AND password='$password'";
     //3.Execute the Query 
     $res = mysqli_query($conn,$sql); 

     //4. count rows to check wether the user exists or not
     $count = mysqli_num_rows($res);

     if($count==1)
     {
         // user available and login success
         $_SESSION['login'] = "<div class ='success'>Login Successful.</div>";
         $_SESSION['user']= $username; // to check wether the user is logged in or not and logout will unset it
         
         //redirect to home Page/Dashboard
         header('location: http://localhost/clothes-order/admin/');
     }
     else{
         //user not available and login Fail 
         $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
         // redirect to home page/dashboard
         header('location: http://localhost/clothes-order/admin/login.php');
     }
}
?>