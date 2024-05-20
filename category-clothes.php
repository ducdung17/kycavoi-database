
<?php include('partials-front/menu.php'); ?>

<?php
     //check whether id is passed or not
     if(isset($_GET['category_id']))
     {
        //category id is set and get the id
        $category_id = $_GET['category_id'];
        //get the category title based on category ID
        $sql = "SELECT title FROM tbl_category WHERE id=$category_id";

        //execute the query
        $res = mysqli_query($conn, $sql);

        //get the value from database
        $row = mysqli_fetch_assoc($res);
        //get the title
        $category_title = $row['title'];
     }
     else
     {
        //category not passed
        //redirect to home page
        header('location: http://localhost/clothes-order');
     }
?>

    <!-- clothes sEARCH Section Starts Here -->
    <section class="clothes-search text-center">
        <div class="container">
            
            <h2>clothes on <a href="#" class="text-white">"<?php echo $category_title; ?>"</a></h2>

        </div>
    </section>
    <!-- clothes sEARCH Section Ends Here -->



    <!-- Clothes Menu Section Starts Here -->
    <section class="clothes-menu">
        <div class="container">
            <h2 class="text-center">Clothes Menu</h2>

            <?php
                  //create SQL query to get clothes based on selected category
                  $sql2 ="SELECT * FROM tbl_clothes WHERE category_id=$category_id";

                  //execute the query 
                  $res2 = mysqli_query($conn, $sql2);

                  //count the rows
                  $count2 = mysqli_num_rows($res2);

                  //check whether clothes is available or not
                  if($count2>0)
                  {
                    //clothes not available
                    while($row2= mysqli_fetch_assoc($res2))
                    {
                        $title = $row2['title'];
                        $price = $row2['price'];
                        $description = $row2['description'];
                        $image_name = $row2['image_name'];
                    ?>
                         <div class="clothes-menu-box">
                         <div class="clothes-menu-img">
                    <?php
                            if($image_name=="")
                            {
                                //image not available
                                echo "<div class='error'>Image not Available.</div>";
                            }
                            else
                            {
                               //image available
                               ?>
                               <img src="http://localhost/clothes-order/images/clothes/<?php echo $image_name; ?>" alt="Clothes 123" class="img-responsive img-curve">
                               <?php
                            }
                ?>
                         
                         </div>

                         <div class="clothes-menu-desc">
                         <h4><?php echo $title; ?></h4>
                         <p class="clothes-price">$<?php echo $price; ?></p>
                         <p class="clothes-detail">
                         <?php echo $description; ?>
                         </p>
                        <br>

                        <a href="#" class="btn btn-primary">Order Now</a>
                        </div>
                        </div>
                    <?php
                    }
                  }
                  else
                  {
                    //clothes not available
                    echo "<div class='error'>clothes not available.</div>";
                  }
            ?>

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- Clothes Menu Section Ends Here -->

    <?php include('partials-front/footer.php'); ?>