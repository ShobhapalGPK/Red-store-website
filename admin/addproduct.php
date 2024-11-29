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
    <h2>Add Product</h2>

   <style>

   </style>
    

    <form action="addproductcode.php" method="POST" enctype="multipart/form-data">
      
 
   
      <!-- catrgory id -->
      <div class="form-group">
        <label for="skills">choose Category</label>
        <select name="choose">
          <option value="">Choose category</option>
          <?php
          include("db.php");
          $sel = "SELECT * FROM `add_category`";
          $query = mysqli_query($conn, $sel);
          while($row = mysqli_fetch_assoc($query)){
          ?>
          <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
          <?php
          }
          ?>
        </select>
      </div>


      <!--product name -->
      <div class="form-group">
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" placeholder="Product Name" required>
      </div>


      <!-- Product Price -->
      <div class="form-group">
        <label for="phone">Product Price:</label>
        <input type="number" id="number" name="price" placeholder="price">
      </div>
        

       <!--size-->
       <div class="form-group">
        <label for="skills">size</label>
        <select name="size">
          <option>Select Size</option>
          <option>XXL</option>
          <option>XL</option>
          <option>Large</option>
          <option>Medium</option>
          <option>Small</option>
        </select>
      </div>

      <!--product Shrot description -->
      <div class="form-group">
        <label for="text">product Shrot description:</label>
        <input type="text" id="text" name="psdescription" placeholder="Product Short Description">
      </div>


      <!-- product long description-->
      <div class="form-group">
        <label for="text">product Long description:</label>
        <input type="text" id="tect" name="pldescription" placeholder="Product Long Description">
      </div>
      


      <!--  Photo Upload -->
      <div class="form-group profile-photo">
      <label for="profile-photo" class="photo">Photo1</label>
      <img src=""  >
      <input type="file" name="img1" accept="image/*" >
    </div>

     <!--  Photo Upload -->
     <div class="form-group profile-photo">
      <label for="profile-photo" class="photo">Photo2</label>
      <img src=""  >
      <input type="file" name="img2" accept="image/*" >
    </div>


     <!--  Photo Upload -->
     <div class="form-group profile-photo">
      <label for="profile-photo" class="photo">Photo3</label>
      <img src=""  >
      <input type="file" name="img3" accept="image/*" >
    </div>


     <!--  Photo Upload -->
     <div class="form-group profile-photo">
      <label for="profile-photo" class="photo">Photo4</label>
      <img src=""  >
      <input type="file" name="img4" accept="image/*" >
    </div>

     <!--  Photo Upload -->
     <div class="form-group profile-photo">
      <label for="profile-photo" class="photo">Photo5</label>
      <img src=""  >
      <input type="file" name="img5" accept="image/*" >
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