<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
          <?php
          include("dashboardcss.php");
          ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<div class="container-fluid">
    <?php
    
     include("menu.php");
    
    ?>
    <div class="left-bar">
    <div class="main">
            <div class="main-content">
            <h3> <a href="profile.php"><i class="fa-solid fa-gear"></i>PROFILE</a></h3>
            </div>
        </div>
         <div class="box">
        <div class="box1">
          <a href="manageUser.php"><h2>Manage User</h2></a>
        </div> 

        <div class="box1">
          <a href="addcategory.php"><h2>Add category</h2></a>
        </div> 

        <div class="box1">
          <a href="managecateory.php"><h2>Manage category</h2></a>
        </div> 

        <div class="box1">
          <a href="addproduct.php"><h2>add product</h2></a>
        </div> 
        <div class="box1">
            <a href="manageProduct.php"><h2>Manage Product</h2></a>
        </div> 
        <div class="box1">
            <a href="manageOrders.php"><h2>Manage Orders</h2></a>
        </div>
        <div class="box1">
            <a href="addOffer.php"><h2>Add Offers</h2></a>
        </div> 
        <div class="box1">
            <a href="manageOffer.php"><h2>Manage Offers</h2></a>
        </div> 
        <div class="box1">
            <a href="returnRequst.php"><h2>Return Request</h2></a>
        </div> 
        <div class="box1">
            <a href="Managecontact.php"><h2>Manage Contact</h2></a>
        </div> 
        <div class="box1">
          <a href="addcoupon.php"><h2>Add coupon</h2></a>
        </div> 
        <div class="box1">
          <a href="ManageCoupon.php"><h2>manage coupon</h2></a>
        </div> 
        <div class="box1">
            <a href="Feedback.php"><h2>feedback</h2></a>
        </div> 
    </div>
    </div>
    </div>
</body>

</html>