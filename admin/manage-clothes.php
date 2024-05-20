<?php include('partials/menu.php');?>

<div class= "main-content">
<div class = "wrapper">
    <h1>Manage clothes</h1>

    <br /><br />


<!-- button to Add Admin -->
<a href="http://localhost/clothes-order/admin/add-clothes.php" class="btn-primary">Add clothes</a>

<br /> <br /> 



<?php
if(isset($_SESSION['add']))
{
    echo $_SESSION['add'];
    unset($_SESSION['add']);
}

?>

<table class="tbl-full">
<tr>
    <th>S.N.</th>
    <th>Title</th>
    <th>Price</th>
    <th>Image</th>
    <th>Featured</th>
    <th>Active</th>
    <th> Actions</th>

</tr>

<?php

//create a SQL query to get all the clothes
$sql ="SELECT * FROM tbl_clothes";

//execute the query
$res = mysqli_query($conn,$sql);

//count  Rows to check wehter we have clothes or not
$count = mysqli_num_rows($res);

//create serial number variable and set default value as 1
$sn = 1;

if($count>0)
{
    // we have clothes in database
    //get the clothes from database and display
    while($row=mysqli_fetch_assoc($res))
    {
        //get the value from individual coluns
        $id = $row['id'];
        $title = $row['title'];
        $price = $row['price'];
        $image_name = $row['image_name'];
        $featured = $row['featured'];
        $active =$row['active'];
        
        ?>
        <tr>
        <td><?php echo $sn++; ?>. </td>
        <td><?php echo $title; ?></td>
        <td>$<?php echo $price; ?></td>
        <td>
            <?php 
                 //check whether we have image or not
                 if($image_name=="")
                 {
                    //we do not have image, display error message
                    echo "<div class='error'>Image not Added.</div>";
                 }
                 else
                 {
                     //we have image, display image
                     ?>
                     <img src="http://localhost/clothes-order/images/clothes/<?php echo $image_name; ?>" width="100px">
                     <?php
                 }
             ?>
        </td>
        <td><?php echo $featured; ?></td>
        <td><?php echo $active; ?></td>
        <td>
            <a href="#" class="btn-secondary">Update clothes</a>
            <a href="#" class="btn-danger">Delete clothes</a>
        </td>
        </tr>

        <?php

    }
}
else
{
   //clothes not added in database
   echo "<tr> <td colspan='7' class='error'> clothes not Added Yet. </td> </tr>";
}
?>




</table>

</div>
</div>
<?php include('partials/footer.php');?>