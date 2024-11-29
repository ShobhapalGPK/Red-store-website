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
    <h2>Add Coupon</h2>

   <style>
    
   </style>
    

    <form action="addcouponcode.php" method="POST" >
      
    <div class="form-group">
        <label for="name">name</label>
        <input type="text" id="name" name="name" placeholder="name" required>
      </div>
   <!--coupon number -->
      <div class="form-group">
        <label for="name">coupon code</label>
        <input type="text" id="name" name="coupon_number" placeholder="Coupon code" required>
      </div>

     


      <!--product name -->
      <div class="form-group">
        <label for="name">Discount</label>
        <input type="text" id="name" name="discount" placeholder="Discount" required>
      </div>


      <!--product name -->
      <div class="form-group">
        <label for="name">Time-Duration</label>
        <input type="text" id="name" name="duration" placeholder="Time-Duration" required>
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