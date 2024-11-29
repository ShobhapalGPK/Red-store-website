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
     <div class="container" >
    <div class="navbar">
        <div class="logo">
            <a href="index.php"><img src="images/logo (1).png" alt="logo" width="125px"></a>
        </div>
        <nav>
            <ul id="menuItems">
                <li><a href="index.php">Home</a></li>
                <!-- <li><a href="product.php">Product</a></li> -->
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


    
    


<!-------------------------------- feature products ----------------------------->



<div class="small-container">
    
    <div class="row row-2">
        <h2> All Products </h2>
        <select>
            <option>Default Shorting</option>
            <option>Short by Price</option>
            <option>Short By popularity</option>
            <option>Short by Rating</option>
            <option>Short by sale</option>
        </select>
    </div>

    <div class="row" style=" display:flex; align-item:center; justify-content:center; gap:50px;">
        <?php
        include("../admin/db.php");
        $id = $_REQUEST['iddd'];
        $sel = "SELECT * FROM `add_product`where category_id = '$id'";
        $query = mysqli_query($conn,$sel);
        while($row = mysqli_fetch_array($query)){
    ?>
        <div class="col-4" style="display:flex; flex-direction:column; gap:5px;" >
        <a href="ProjectDetails.php?idd=<?php echo $row['id']?>"><img src="../admin/product/<?php echo $row['img1'] ?>"></a>
            <h4><?php echo $row['name']?></h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>

            </div>
            <div style="display:flex; align-item:center; justify-content:start; gap:10px;">
            <p> <?php echo $row['price']?></p>
</div>
        </div>
        <?php
        }
        ?>
    </div>

    <div class="page-btn">
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span> &#8594; </span>
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

    function menutoggle(){
        if( menuItems.style.maxHeight == "0px"){
            menuItems.style.maxHeight = "200px";
        }
        else{
            menuItems.style.maxHeight = "0px";

        }
    }
</script>
</body>
</html>