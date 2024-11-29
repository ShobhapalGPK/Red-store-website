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
    <h2>Add category</h2>

   <style>
    
   </style>
    

    <form action="addcategorycode.php" method="POST" enctype="multipart/form-data">
      
 
   <!--product name -->
      <div class="form-group">
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" placeholder="Category Name" required>
      </div>

    
      <!--  Photo Upload -->
      <div class="form-group profile-photo">
      <label for="profile-photo" class="photo" aria-placeholder="Image">Photo</label>
      <img src=""  >
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