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
    <h2>Update Offer</h2>

   <style>
    
   </style>
    

    <?php
    include("db.php");
    $id = $_REQUEST['id'];
    $sel = "SELECT * FROM `add_offer` where id ='$id'";
    $query = mysqli_query($conn,$sel);
    $row = mysqli_fetch_assoc($query);
    
    ?>

    <form action="updateOfferCode.php" method="POST" enctype="multipart/form-data">
      
 
   <!--product name -->

   <input type="hidden" id="name" name="id" required value="<?php  echo $row['id']?>">



   <div class="form-group">
        <label for="skills">choose Category</label>
        <select name="choose">
          <option>Choose category</option>
          <option value ="Mens"<?= ($row['category_id'] == 'Mens') ? 'selected' : '' ?>>Mens</option>
          <option value ="kids"<?= ($row['category_id'] == 'kids') ? 'selected' : '' ?>>kids</option>
          <option value ="womens"<?= ($row['category_id'] == 'womens') ? 'selected' : '' ?>>womens</option>
        </select>
      </div>


       <div class="form-group">
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" required value="<?php  echo $row['product_name']?>">
      </div>

    
    


     


      <!--  Photo Upload -->
      <div class="form-group profile-photo">
      <label for="profile-photo" class="photo">Photo</label>
      <img src="offerimg/<?php echo $row['photo']?>" height="50px" width="50px" >
      <input type="file" name="photo"  accept="image/*" >
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