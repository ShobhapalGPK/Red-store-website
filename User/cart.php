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
    <!---  cart item details   -->

    <div class="small-container cart-page">
        <table>
            <tr>
                <th>product</th>
                <th>image</th>
                <th>quantity</th>
                <th>total</th>
                <th>subtotal</th>
                <th>Action</th>
            </tr>
            <?php
            include("../admin/db.php");
            session_start();
            $email = $_SESSION['email'];
            $sum = 0;
            $sel = "SELECT * FROM `addcart` WHERE email = '$email'";
            $query = mysqli_query($conn,$sel);
            while($row = mysqli_fetch_array($query)){
                $quantity = $row['quantity'];
// loop       
            $pid = $row['p_id'];
            $sell = "SELECT * FROM `add_product` WHERE id = '$pid'";
            $query1 = mysqli_query($conn,$sell);
            // data name img, size
           while($fetch = mysqli_fetch_array($query1)){
            
            $price = $fetch['price'];
            $subtotal = $quantity*$price;

            $sum = $sum+$subtotal;

          
            
            ?>
            <tr>
                <td><?php echo $fetch['name']?></td>
                <td><img src="../admin/product/<?php echo $fetch['img1']?>" height="100px" width="100px"></td>
                <td><?php echo $row['quantity']?></td>
                <td><?php echo $price?></td>
                <td><?php echo $subtotal?></td>
                <td><a href="remove.php?idd=<?php echo $row['id']?>">Remove</a></td>
                
            </tr>
            
            <?php
           }
        }
        
            ?>
            
    </table>

        <div class="total-price" style="display: flex; justify-content: flex-end;">
            <table style="border-top: 3px solid #ff523b; width: 100%; max-width: 400px;">
                <tr>
                    <td><input type="text" placeholder="enter code"style="height: 30px; width: 200px" id="dis"></td>
                    <td><button style="height: 30px; width:100px" onclick="discount()">Apply</button></td>
                </tr>
                <!-- <tr>
                    <td><hr></td>
                    <td><hr></td>
                </tr>
                <tr>
                <td>code</td>
                <td>dsbc234</td>
                </tr>
                <tr>
                <td><hr></td>
                <td><hr></td>
                </tr> -->
                <tr>
                    <td><h2>PRICE DETAILS</h2></td>
                </tr>
                <tr>
                
                <td>subtotal</td>
                <td id="mainPrice"><?php echo $sum ?></td>
                </tr>
                
                
                <?php
                include("../admin/db.php");
                $sel ="SELECT * FROM `add_coupon`";
                $query = mysqli_query($conn,$sel);
                $couponCode =array();
                $discountPrice = array();
                $discountArray = array();
                $i = 0;
                
                while($row3 = mysqli_fetch_assoc($query)){
                    $couponCode[$i] = $row3['coupon_number'];
                    $discountPrice[$i] = $row3['discount'];
                    $i += 1;
                }
                for ($i = 0; $i < count($couponCode); $i++) {
                    $discountArray[$couponCode[$i]] = $discountPrice[$i];                    
                }
                             
                ?>
                <tr>
                <td>discount</td>
                <td id="discountPrice">0</td>
                </tr>
                <tr>
                <td>total</td>
                <td id="total1"></td>
                </tr>
                <tr>
                    <td><button style="height: 40px; width:400px" >total amount :<?php echo $sum ?><span id="total2"></span></button></td>
                </tr>
                <tr>
                    <td><a href="checkoutpage.php"><h3><button style="height: 40px; width:400px">checkout</button><h3></a></td>
                </tr>
                 
            </table>
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

    function discount() {
    let userInputCoupan = document.getElementById("dis").value; 
    let mainPrice = document.getElementById('mainPrice').innerHTML;
    let totalPrice = 0;

    // Convert the PHP associative array to a JavaScript object
    let couponObject = <?php echo json_encode($discountArray); ?>;

    // Check if the user-input coupon exists as a key in the object
    if (couponObject.hasOwnProperty(userInputCoupan)) {
        let discountablePrice = couponObject[userInputCoupan];
        alert(`Congratulation ! you got , discountablePrice Rs off`); 
        totalPrice = mainPrice - discountablePrice;
        document.getElementById('discountPrice').innerHTML = discountablePrice;
        document.getElementById('total1').innerHTML = totalPrice
        document.getElementById('total2').innerHTML = totalPrice
    } else {
        alert('Invalid Coupon Code!');
    }
}
</script>
</body>
</html>