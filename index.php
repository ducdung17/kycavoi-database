<?php include('partials-front/menu.php'); ?>

    <!-- clothes sEARCH Section Starts Here -->
    <section class="clothes-search text-center">
        <div class="container">
            
            <form action="http://localhost/clothes-order/clothes-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for clothes.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- clothes sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Clothes</h2>

            <?php
            //create sql query to display categories from database
            $sql = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes' LIMIT 3";
            //execute the query
            $res = mysqli_query($conn,$sql);
            //count rows to check whether the categories is available or not
            $count = mysqli_num_rows($res);

            if($count>0)
            {
                //categories available
                while($row=mysqli_fetch_assoc($res))
                {
                    // get the values like id, title, image_name
                    $id= $row['id'];
                    $title = $row['title'];
                    $image_name = $row['image_name'];
                    ?>
                       <a href="http://localhost/clothes-order/category-clothes.php?category_id=<?php echo $id; ?>">
                        <div class="box-3 float-container">

                        <?php
                        // check whether Image is available or not
                        if($image_name=="")
                        {
                            //display message 
                            echo "<div class='error'>Image not Available</div>";
                        }
                        else
                        {
                            //image availble
                            ?>
                             <img src="http://localhost/clothes-order/images/category/<?php echo $image_name; ?>" alt="Pizza" class="img-responsive img-curve">
                            <?php
                        }
                        ?>
                           

                            <h3 class="float-text text-white"><?php echo $title; ?></h3>
                        </div>

                       </a>

                    <?php
                }
            }
            else
            {
                //categories not available
                echo"<div class='error'>Category not Added.</div>";
            }
            ?>

      
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->



    <!-- Clothes Menu Section Starts Here -->
    <section class="clothes-menu">
        <div class="container">
            <h2 class="text-center">Clothes Menu</h2>

            <div class="clothes-menu-box">
                <div class="clothes-menu-img">
                    <img src="images/menu-clothes3.jpg" alt="Clothes 123" class="img-responsive img-curve">
                </div>

                <div class="clothes-menu-desc">
                    <h4>Clothes Title</h4>
                    <p class="clothes-price">$2.3</p>
                    <p class="clothes-detail">
                        Made in Italy.
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="clothes-menu-box">
                <div class="clothes-menu-img">
                    <img src="images/menu-clothes1.jpg" alt="Clothes 123" class="img-responsive img-curve">
                </div>

                <div class="clothes-menu-desc">
                    <h4>Clothes 2</h4>
                    <p class="clothes-price">$2.3</p>
                    <p class="clothes-detail">
                        Made in Italy.
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="clothes-menu-box">
                <div class="clothes-menu-img">
                    <img src="images/menu-clothes1.jpg" alt="Clothess" class="img-responsive img-curve">
                </div>

                <div class="clothes-menu-desc">
                    <h4>Clothes 3</h4>
                    <p class="clothes-price">$2.3</p>
                    <p class="clothes-detail">
                        Made in Italy.
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="clothes-menu-box">
                <div class="clothes-menu-img">
                    <img src="images/menu-clothes3.jpg" alt="Clothes 123" class="img-responsive img-curve">
                </div>

                <div class="clothes-menu-desc">
                    <h4>Clothes Title</h4>
                    <p class="clothes-price">$2.3</p>
                    <p class="clothes-detail">
                        Made in Italy.
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="clothes-menu-box">
                <div class="clothes-menu-img">
                    <img src="images/menu-clothes3.jpg" alt="Clothes 123" class="img-responsive img-curve">
                </div>

                <div class="clothes-menu-desc">
                    <h4>Clothes Title</h4>
                    <p class="clothes-price">$2.3</p>
                    <p class="clothes-detail">
                        Made in Italy.
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="clothes-menu-box">
                <div class="clothes-menu-img">
                    <img src="images/menu-clothes2.jpg" alt="Chicke Hawain Momo" class="img-responsive img-curve">
                </div>

                <div class="clothes-menu-desc">
                    <h4>Clothes 1</h4>
                    <p class="clothes-price">$2.3</p>
                    <p class="clothes-detail">
                        Made in Italy.
                    </p>
                    <br>

                    <a href="http://localhost/clothes-order/order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>


            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="#">See All Clothes</a>
        </p>
    </section>
    <!-- Clothes Menu Section Ends Here -->

 <?php include('partials-front/footer.php');?>