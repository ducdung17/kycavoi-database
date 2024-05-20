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

                    <a href="http://localhost/clothes-order/order.php" class="btn btn-primary">Order Now</a>
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

                    <a href="http://localhost/clothes-order/order.php" class="btn btn-primary">Order Now</a>
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

                    <a href="http://localhost/clothes-order/order.php" class="btn btn-primary">Order Now</a>
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

                    <a href="http://localhost/clothes-order/order.php" class="btn btn-primary">Order Now</a>
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

                    <a href="http://localhost/clothes-order/order.php" class="btn btn-primary">Order Now</a>
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

    </section>
    <!-- Clothes Menu Section Ends Here -->

    <?php include('partials-front/footer.php'); ?>