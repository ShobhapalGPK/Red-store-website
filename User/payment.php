<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Product-RedStore </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
    .row .col-sm-6 h1{
        margin-bottom: 20px;
    }
    .row .col-sm-6 input[type="email"], input[type="number"]{
        height: 40px;
        width: 500px;
    }
    .row .col-sm-6 input[type="radio"]{
        height: 30px;
        width: 30px;
        
    }

    .row .col-sm-6 button{
        height: 40px;
        width: 600px;
        background-color: black;
        color: white;
    }
</style>
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
    <!---  cart item details   -->

<div class="container">
    <div class="row">
       
        <div class="col-sm-6">
            <form action="paymentprocess.php" method="post">
            <h1>Contact informations</h1>
            <input type="email" name="email" placeholder="email" require><br><br>
            <input type="number" name="number" placeholder="phone no." require><br><br>
          

            <h1>Payment options</h1><br><br>

            <input type="radio" name="gnd"  value="Cash on delivery">Cash on delivery<br><br>
            <input type="radio" name="gnd"  value="Pay by Razorpay">Pay by Razorpay<br><br>


            <button>Continue Payment</buttn>
</form>
        </div>
        <div class="col-sm-3">
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