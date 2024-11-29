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
    .row .col-sm-6 input{
        height: 40px;
        width: 300px;
    }

    .row .col-sm-6 button{
        height: 40px;
        width: 600px;
        background-color: black;
        color: white;
    }

   #payment input{
    height: 30px;
    width: 30px;
    /* display: flex; */
    

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
            <form action="checkoutpagecode.php" method="post">
                <!-- <form id="order-form" > -->
            <h1>Delivery Address</h1>
            <input type="text" name="fname" id="name" placeholder="First Name".require.>
            <input type="text" name="lname" placeholder="Last Name"><br><br>
            <input type="email" name="email" id="email" placeholder="Email*">
            <input type="number" name="phone" id="mobile" placeholder="Phone no."><br><br>
            <input type="number" name="pin" placeholder="Pin code">
            <input type="text" name="town" placeholder="Town/Village"><br><br>
            <input type="text" name="city" placeholder="City/Distic">
            <input type="text" name="State" placeholder="State"><br><br>
            <input type="text" name="house" placeholder="Address(House no. building,street,Area)" style="height: 40px; width:600px"><br><br>
            <input type="number" class="form-control" id="amount" required name="amount"/><br>
            <h1>Payment type</h1>
            <div id="payment">
            <input type="radio" name="payment" placeholder="Online Payment" value="online">Online Payment<br><br>
            <input type="radio" name="payment" placeholder="case on delivery" value="COD">case on delivery<br><br>
            </div>
            <button class="btn btn-primary" id="btn1" type="submit"> pay now </button>
            <!-- <button>Continue Payment</button> -->
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
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
        $(document).ready(function(){


            $("#order-form").submit(function(e){
                e.preventDefault();
                // let paymentMode=document.querySelectorAll("")
                // console.log(e);
                
                $("#btn1").prop("disable",true);


                var amt = $("#amount").val();


                $.ajax({
                    url:"https://phpcrud.himanshukashyap.com/rzp/createOrder.php?amount="+amt,
                    type:"get",
                    error:function(){
                        alert("error in ajax");
                    },
                    success:function(data){
                        var token = data.token;
                        var key = data.key;
                        // alert(token);

                        var options = {
                            "key": key,
                            "amount": amt*100,
                            "currency": "INR",
                            "name": "DigiCoders Technologies",
                            "description": "Test Transaction",
                            "image": "https://phpcrud.himanshukashyap.com/rzp/logo.jpg",
                            "order_id": token,
                            "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
                            "prefill": {
                                "name": $("#name").val(),
                                "email": $("#email").val(),
                                "contact": $("#mobile").val()
                            },
                            "notes": {
                                "address": "DigiCoders Technologies Private Limited, Lucknow, UP"
                            },
                            "theme": {
                                "color": "#3399cc"
                            }, 

                            // Handle Success Response
                            "handler": function(response) {
                                alert("Payment Success");
                                window.location.href="success.php";
                            }
                        };

                        // Initialize Razorpay SDK
                        var rzp1 = new Razorpay(options);

                        // Open Razorpay
                        rzp1.open();


                        // Handle Payment Fail Response
                        rzp1.on('payment.failed', function (response){
                            alert("Payment Failed");
                            window.location.href="failed.php";
                        });
                    }

                });
                // alert(amt);
            });
        });
    </script> -->
</body>
</html>