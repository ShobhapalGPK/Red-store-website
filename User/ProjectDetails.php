<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Product-RedStore </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!------------------------------------ header part ------------------------------>

    <!-- <div class="header"> -->
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php"><img src="images/logo (1).png" alt="logo" width="125px"></a>
            </div>
            <nav>
                <ul id="menuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="product.php">Product</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="account.php">Account</a></li>
                </ul>
            </nav>
            <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
            <img src="images/menu.png" class="menu_icon" onclick="menutoggle()">
            <!-- </div> -->
        </div>
    </div>

    <!------------------------ single product details ------------------------>
    <div class="small-container single-product">
        <div class="row">
            <?php
            include("../admin/db.php");
            $id = $_REQUEST['idd'];
           
            $sel = "SELECT * FROM `add_product`where id = '$id'";
            $query = mysqli_query($conn,$sel);
            $row = mysqli_fetch_array($query);
            ?>


            <div class="col-2">
                <img src="../admin/product/<?php echo $row['img1'] ?>" width="90%" height="100%" id="product-img">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="../admin/product/<?php echo $row['img2'] ?>" width="100%" class="small-img">
                    </div>

                    <div class="small-img-col">
                        <img src="../admin/product/<?php echo $row['img3'] ?>" width="100%" class="small-img">
                    </div>

                    <div class="small-img-col">
                        <img src="../admin/product/<?php echo $row['img4'] ?>" width="100%" class="small-img">
                    </div>

                    <div class="small-img-col">
                        <img src="../admin/product/<?php echo $row['img5'] ?>" width="75%" class="small-img">
                    </div>



                </div>

            </div>
            <div class="col-2">
                <p><?php echo $row['name'] ?></p>
                <h1><?php echo $row['psdescription'] ?></h1>
                <h4><?php echo $row['price'] ?></h4>

                <form action="addcart.php" method="post">

        <!-- Dropdown for size selection -->
        <select name="size" required>
            <option value="">Select Size</option>
            <option value="XXL">XXL</option>
            <option value="XL">XL</option>
            <option value="Large">Large</option>
            <option value="Medium">Medium</option>
            <option value="Small">Small</option>
        </select>

        <!-- Quantity input field -->
        <input type="number" name="quantity" value="1" min="1" required>

        <!-- Hidden input for product ID -->
        <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">

        <!-- Submit button to add to cart -->
        <button type="submit" class="btn"  style="width: 150px;">Add To Cart</button>
    </form>

        <h3>Product Details <i class="fa fa-indent"></i></h3>
        <br>
        <p><?php echo $row['pldescription'] ?></p>
    </div>

        </div>
    </div>






    <!-------------------------------- feature products ----------------------------->



    <div class="small-container">
        <!-- <h1 class="title">Featured Products </h1> -->
        <div class="row" style=" display:flex; align-item:center; justify-content:center; gap:50px;">

            <?php
            include("../admin/db.php");
            // $id = $_REQUEST['idd'];
            $sell = "SELECT * FROM `add_category`";
            $query = mysqli_query($conn,$sell);
           while($row1 = mysqli_fetch_array($query,MYSQLI_BOTH)){

            $c_id = $row1['0'];

           $sel = "SELECT * FROM `add_product` where category_id = '$c_id'";
            $query = mysqli_query($conn, $sel);
            while ($row1 = mysqli_fetch_array($query, MYSQLI_BOTH)) {
            ?>
              <div class="col-4" style="display:flex; flex-direction:column; gap:5px;">
                   <a href="ProjectDetails.php?idd=<?php echo $row1['id']?>"><img src="../admin/product/<?php echo $row1['img1'] ?>"></a>
                    
                        <h4><?php echo $row1['name'] ?></h4>
                    
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div style="display:flex; align-item:center; justify-content:start; gap:10px;">
                        
                        <p>Rs.<?php echo $row1['price'] ?></p>
                    </div>
                  
                </div>
                
            <?php
            }
        }
            ?>
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