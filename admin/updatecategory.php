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
    $sel = "SELECT * FROM `add_category` where id ='$id'";
    $query = mysqli_query($conn,$sel);
    $row = mysqli_fetch_assoc($query);
    
    ?>

    <form action="updatecategoryCode.php" method="POST" enctype="multipart/form-data">
      
 
   <!--product name -->

   <input type="hidden" id="name" name="id" required value="<?php  echo $row['id']?>">


      <div class="form-group">
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" required value="<?php  echo $row['name']?>">
      </div>

    
     <!--  Photo Upload -->
      <div class="form-group profile-photo">
      <label for="profile-photo" class="photo">Photo</label>
      <img src="category/<?php echo $row['photo']?>" height="50px" width="50px" >
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