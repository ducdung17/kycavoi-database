<?php include('partials-front/menu.php'); ?>

    <!-- clothes sEARCH Section Starts Here -->
    <section class="clothes-search text-center">
        <div class="container">
            <?php
              //get the search keyword
            $search =$_POST['search'];
            ?>
            
            <h2>Clothes on Your Search <a href="#" class="text-white">"<?php echo $search; ?>"</a></h2>

        </div>
    </section>
    <!-- clothes sEARCH Section Ends Here -->



    <!-- Clothes Menu Section Starts Here -->
    <section class="clothes-menu">
        <div class="container">
            <h2 class="text-center">Clothes Menu</h2>

            <?php
            //Sql query to get clothes based on search keyword
            $sql = "SELECT * FROM tbl_clothes WHERE title LIKE '%$search%' OR description LIKE '%$search%'";
            
            //execute the query
            $res = mysqli_query($conn, $sql);

            //count Rows
            $count =mysqli_num_rows($res);

            //check whether clothes  available of not
            if($count>0)
            {
                //clothes available
                while($row=mysqli_fetch_assoc($res))
                {
                    //get the details
                    $id= $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image_name = $row['image_name'];
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
                             <img src="images/clothes/<?php echo $image_name; ?>" alt="Clothes 123" class="img-responsive img-curve">
                            <?php
                        }
                        ?>
                   
                    </div>

                    <div class="clothes-menu-desc">
                    <h4><?php echo $title; ?></h4>
                    <p class="clothes-price"><?php echo $price; ?></p>
                    <p class="clothes-detail">
                        <?php echo $description; ?>
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                       </div>
                    </div>
                    <?php
                }
            }
            else
            {
                //clothes not available
                echo "<div class='error'>clothes not found.</div>";
            }

            ?>

            


            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- Clothes Menu Section Ends Here -->

    <?php include('partials-front/footer.php'); ?>