<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RedStore | Ecommerce website design</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    .container1{
    background: white;
    margin-left: 35%;
    border-radius: 8px;
    /* box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); */
    width: 300px;
    margin-top: 20px;
    margin-bottom: 20px;
}

h2{
    text-align: center;
    margin-bottom: 20px;
}

.form-group1{
    margin-bottom: 15px;
}

label{
    display: block;
    margin-bottom: 5px;
}

input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

button{
    width: 100%;
    padding: 10px;
    background-color: #5cb85c;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover{
    background-color: #4cae4c;
}
</style>

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
                        
                        <li><a href="changepassword.php">Change password</a></li>
                        <li><a href="account.php">Logout</a></li>
                    </ul>
                </nav>
                


            </div>
        </div>
    </div>

    <!----------------------- form--------------------------------------->

    <div class="container1">
        <h2>Contact</h2>
        <form action="contactcode.php" method="POST">
            <div class="form-group">
                <label for="oldPassword">name</label>
                <input type="text" id="oldPassword" name="name" required>
            </div>
            <div class="form-group">
                <label for="newPassword">email</label>
                <input type="email" id="newPassword" name="email" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">phone no.</label>
                <input type="number" id="confirmPassword" name="phone" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">massage</label>
                <input type="text" id="confirmPassword" name="msg" required>
            </div>
            <button type="submit">submit</button>
        </form>
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