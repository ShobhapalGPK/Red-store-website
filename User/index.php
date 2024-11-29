<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RedStore | Ecommerce website design</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!------------------------------------ header part ------------------------------>

    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="images/logo (1).png" alt="logo" width="125px"></a>
                </div>
                <nav>
                    <ul id="menuItems">
                        <li><a href="index.php">Home</a></li>
                        <!-- <li><a href="product.php">Product</a></li> -->
                        <li><a href="">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="account.php">Account</a></li>
                    </ul>
                </nav>
                <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
                <img src="images/menu.png" class="menu_icon" onclick="menutoggle()">
            </div>


            <div class="row">
                <div class="col-2">
                    <h1>Give Your Workout<br> A New Style!</h1>
                    <p>
                        Success isn't always about greatness.It's about consistency.
                        Consistent <br>hard work gains success. Greatness will come.
                    </p>
                    <a href="" class="btn">Explore now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/col2.png">
                </div>
            </div>
        </div>
    </div>

    <!----------------------------   feature category  ---------------------------->

    <div class="categories">
        <div class="small-container">
            <div class="row">
                <?php
                include("../admin/db.php");
                $sel = "SELECT * FROM `add_category`";
                $quu = mysqli_query($conn,$sel);
                while($fetch = mysqli_fetch_assoc($quu)){
                ?>
                <div class="col-3">
                    <a href="product.php?iddd=<?php echo $fetch['id']?>"><img src="../admin/category/<?php echo $fetch['photo']?>" height="400px"></a>
                </div>
                
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <!-------------------------------- feature products ----------------------------->



    <div class="small-container">
        <h1 class="title">Featured Products </h1>
        <div class="row" style=" display:flex; align-item:center; justify-content:center; gap:50px;">

            <?php
            include("../admin/db.php");
            $sel = "SELECT * FROM `add_product` limit 4";
            $query = mysqli_query($conn, $sel);
            while ($row = mysqli_fetch_array($query, MYSQLI_BOTH)) {
            ?>
              <div class="col-4" style="display:flex; flex-direction:column; gap:5px;">
                   <a href="ProjectDetails.php?idd=<?php echo $row['id']?>"><img src="../admin/product/<?php echo $row['img1'] ?>"></a>
                    
                        <h4><?php echo $row['name'] ?></h4>
                    
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div style="display:flex; align-item:center; justify-content:start; gap:10px;">
                        
                        <p>Rs.<?php echo $row['price'] ?></p>
                    </div>
                  
                </div>
                
            <?php
            }
            ?>
        </div>

        
        <!-- fifth-->
        <h1 class="title">Latest Products </h1>
        <div class="row" style=" display:flex; align-item:center; justify-content:center; gap:50px;">


            <!--------------------------- six------------------------------>

            <div class="col-4 " style="display:flex; flex-direction:column; gap:5px;">
                <img src="images/product-6.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>

                </div>
                <div style="display:flex; align-item:center; justify-content:start; gap:10px;">
                        <p> $50.00</p>
                    </div>
            </div>

            <!-----------------------seven--------------------------->

            <div class="col-4" style="display:flex; flex-direction:column; gap:5px;">
                <img src="images/product-7.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>

                </div>
                <div style="display:flex; align-item:center; justify-content:start; gap:10px;">
                        <p> $50.00</p>
                    </div>
            </div>

            <!---------------- eight---------------------->

            <div class="col-4" style="display:flex; flex-direction:column; gap:5px;">
                <img src="images/product-8.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>

                </div>
                <div style="display:flex; align-item:center; justify-content:start; gap:10px;">
                        <p> $50.00</p>
                    </div>
            </div>
            <!---------------- eight---------------------->

            <div class="col-4" style="display:flex; flex-direction:column; gap:5px;" >
                <img src="images/product-8.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>

                </div>
                <div style="display:flex; align-item:center; justify-content:start; gap:10px;">
                        <p> $50.00</p>
                    </div>
            </div>
        </div>
    </div>

    <!------------------------------- offer -------------------------------------->

    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="images/exclusive.png" class="offer-img">
                </div>
                <div class="col-sm-6">
                    <p>exclusive Awailable on RedStore</p>
                    <h1>Smart Band 4</h1>
                    <small>
                        The Hi Smart Bamd 4 Features a 39.9% larger (Than Mi Band 3) AMOLED color full-touch display with adjustable brightness, so everything is clear as can be.
                    </small><br>
                    <a href="" class="btn">Buy Now &#8594;</a>

                </div>
            </div>
        </div>
    </div>



    <!--------------------------- Testimonial  ------------------------------>


    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora vitae reiciendis officiis praesentium voluptates voluptatem, repellendus possimus nobis nulla corrupti pariatur illo. Quasi fugiat esse optio doloremque aspernatur saepe dolor!
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/user-1.png">
                    <h3> Shreya Pal</h3>
                </div>

                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora vitae reiciendis officiis praesentium voluptates voluptatem, repellendus possimus nobis nulla corrupti pariatur illo. Quasi fugiat esse optio doloremque aspernatur saepe dolor!
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/user-2.png">
                    <h3>vishnu dixit</h3>
                </div>

                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora vitae reiciendis officiis praesentium voluptates voluptatem, repellendus possimus nobis nulla corrupti pariatur illo. Quasi fugiat esse optio doloremque aspernatur saepe dolor!
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/user-3.png">
                    <h3>Sneha Singh</h3>
                </div>
            </div>
        </div>
    </div>

    <!------------------------- brands -------------------------->

    <div class="brands">
        <div class="small-container">
            <div class="row">
                <?php
                include("../admin/db.php");
                $sel = "SELECT * FROM `add_coupon`";
                $query = mysqli_query($conn,$sel);
               while($row = mysqli_fetch_array($query,MYSQLI_BOTH)){
                  
                ?>
                <div class="col-5">
                    <div class="code">
                    <!-- <h4 style="text-align: center; margin-top:40px"><?php echo $row['4']?></h4> -->
                    <h1 style="text-align: center; margin-top:50px">Discount code:<?php echo $row['1']?></h1>
                     <h3 style="text-align: center; margin-top:10px">Discount :<?php echo $row['2']?> </h3>
                      <h5  style="text-align: center; margin-top:0px"><?php echo $row['3']?></h5>
                    </div>
                    <!-- <img src="images/logo-godrej.png"> -->

                </div>
                <?php
               }
                ?>  
            </div>
        </div>
    </div>


    <!--------------------------footer--------------------------------->

    <div class="footer">
        <div class="container">
            <div class="row">

                <div class="footer-col-1">
                    <h3>Download our App</h3>
                    <p>download App for Android And ios mobile phone</p>
                    <div class="app-logo">
                        <img src="images/play-store.png">
                        <img src="images/app-store.png">
                    </div>
                </div>

                <div class="footer-col-2">
                    <img src="images/logo-white.png">
                    <p>Our Purpose Is To Sustainable make the Pleasuernand Benefit of Sport Accessible to the many</p>
                </div>

                <div class="footer-col-3">
                    <h3>useful link</h3>
                    <ul>
                        <li>coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>

                <div class="footer-col-4">
                    <h3>follow us</h3>

                    <ul>
                        <li>facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>YouTube</li>
                    </ul>
                </div>

            </div>

            <hr>

        </div>
    </div>


    <!--------- js for toggle menu ---------------------->

    <script>
        var menuItems = document.getElementById("menuItems");
        menuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (menuItems.style.maxHeight == "0px") {
                menuItems.style.maxHeight = "200px";
            } else {
                menuItems.style.maxHeight = "0px";

            }
        }
    </script>
</body>

</html>