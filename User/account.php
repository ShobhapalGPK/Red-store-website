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
            <img src="images/logo (1).png" alt="logo" width="125px">
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
   
    </div>
    </div>
    <!-----------------------------account page -------------------->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/col2.png" width="100%">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="indicator">
                        </div>
                            
                       
                        <form id="LoginForm" action="logincode.php" method="post">
                            <input type="email" placeholder="Username" name="email">
                            <input type="password" placeholder="password" name="password">
                            <button type="submit" class="btn">login</button>
                            <a href="">forgot password</a>
                        </form>
                        


                        <form id="RegisterForm" action="registerform.php" method="post">
                            <input type="text" placeholder="Username" name="name">
                            <input type="email" placeholder="email" name="email">
                            <input type="password" placeholder="password" name="password">
                            <button type="submit" class="btn">Register</button>
                            
                        </form>

                    </div>
                </div>
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

<!-------------------js for toggle form------------------------------->
<script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegisterForm");

    var indicator = document.getElementById("indicator");

    function register(){
        RegForm.style.transform = "translateX(0px)";
        LoginForm.style.transform = "translateX(0px)";
        indicator.style.transform = "translateX(100px)";
    }
    function login(){
        RegForm.style.transform = "translateX(300px)";
        LoginForm.style.transform = "translateX(300px)";
        indicator.style.transform = "translateX(0px)";
    }
</script>

</body>
</html>
