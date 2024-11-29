<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <?php
    include("dashboardcss.php");
    include("datatable.php");
    ?>
    
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

                <div class="container">
    <h2>Update Coupon</h2>

   <style>
    
   </style>
    

    <?php
    include("db.php");
    $id = $_REQUEST['id'];
    $sel = "SELECT * FROM `add_coupon` where id ='$id'";
    $query = mysqli_query($conn,$sel);
    $row = mysqli_fetch_assoc($query);
    
    ?>

    <form action="updateCouponCode.php" method="POST" >
      
 
   <!--product name -->

   <input type="hidden" id="name" name="id" required value="<?php  echo $row['id']?>">

   <div class="form-group">
        <label for="name">name</label>
        <input type="text" id="name" name="name" required value="<?php  echo $row['name']?>">
      </div>


    <div class="form-group">
        <label for="name">coupon_number</label>
        <input type="text" id="name" name="coupon_number" required value="<?php  echo $row['coupon_number']?>">
      </div>

    


      <!--product name -->
      <div class="form-group">
        <label for="name">Discount</label>
        <input type="text" id="name" name="discount" required value="<?php  echo $row['discount']?>">
      </div>


      <!--product name -->
      <div class="form-group">
        <label for="name">Time-Duration</label>
        <input type="text" id="name" name="duration" required value=" <?php  echo $row['duration']?>">
      </div>

    
    


     


      

    
      <!-- Form Navigation (Multi-step) -->
      <div class="form-group multistep-buttons">
        
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>

  
         

    
                



        </div>
    </div>

    
</body>

</html>