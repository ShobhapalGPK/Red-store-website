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
    <h2>Edit Product</h2>

   <style>

   </style>
    
<?php
  include("db.php");
   $id = $_REQUEST['id'];
  $sel = "SELECT * FROM `add_product` WHERE id = '$id'";
  $query = mysqli_query($conn , $sel);
  $row = mysqli_fetch_array($query , MYSQLI_BOTH);

?>
    <form action="updateproductCode.php" method="POST" enctype="multipart/form-data">
      
    <input type="hidden" id="name" name="id" required value="<?php echo $row['0']?>">

    <!-- catrgory id -->
    <div class="form-group">
        <label for="skills">choose Category</label>
        <select name="choose">
          <option>Choose category</option>
          <option value ="Mens"<?= ($row['category_id'] == 4) ? 'selected' : '' ?>>Mens</option>
          <option value ="kids"<?= ($row['category_id'] == 5) ? 'selected' : '' ?>>kids</option>
          <option value ="womens"<?= ($row['category_id'] == 6) ? 'selected' : '' ?>>womens</option>
        </select>
      </div>

   <!--product name -->
      <div class="form-group">
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" required value="<?php echo $row['2']?>">
      </div>

     

      <!-- Product Price -->
      <div class="form-group">
        <label for="phone">Product Price:</label>
        <input type="number" id="number" name="price" value="<?php echo $row['3']?>">
      </div>
        

       <!--size-->
       <div class="form-group">
        <label for="skills">size</label>
        <select name="size">
          <option>size</option>
        <option value ="xxl"<?= ($row['size'] == 'XXL') ? 'selected' : '' ?>>xxl</option>
          <option value="xl"<?= ($row['size'] == 'XL') ? 'selected' : '' ?>>XL</option>
          <option value="large"<?= ($row['size'] == 'Large') ? 'selected' : '' ?>>Large</option>
          <option value="medium"<?= ($row['size'] == 'Medium') ? 'selected' : '' ?>>Medium</option>
          <option value="small"<?= ($row['size'] == 'Small') ? 'selected' : '' ?>>Small</option>
        </select>
      </div>

      <!--product Shrot description -->
      <div class="form-group">
        <label for="text">product Shrot description:</label>
        <input type="text" id="text" name="psdescription" value="<?php echo $row['5']?>">
      </div>


      <!-- product long description-->
      <div class="form-group">
        <label for="text">product Long description:</label>
        <input type="text" id="tect" name="pldescription" value="<?php echo $row['6']?>">
      </div>
      


      <!--  Photo Upload -->
      <div class="form-group profile-photo">
      <label for="profile-photo" class="photo">Photo1</label>
      <img src="product/<?php echo $row['7']?>" height="50px" width="50px">
      <input type="file" name="img1" accept="image/*" >
    </div>

     <!--  Photo Upload -->
     <div class="form-group profile-photo">
      <label for="profile-photo" class="photo">Photo2</label>
      <img src="product/<?php echo $row['8']?>" height="50px" width="50px">
      <input type="file" name="img2" accept="image/*" >
    </div>


     <!--  Photo Upload -->
     <div class="form-group profile-photo">
      <label for="profile-photo" class="photo">Photo3</label>
      <img src="product/<?php echo $row['9']?>" height="50px" width="50px">
      <input type="file" name="img3" accept="image/*" >
    </div>


     <!--  Photo Upload -->
     <div class="form-group profile-photo">
      <label for="profile-photo" class="photo">Photo4</label>
      <img src="product/<?php echo $row['10']?>" height="50px" width="50px">
      <input type="file" name="img4" accept="image/*" >
    </div>

     <!--  Photo Upload -->
     <div class="form-group profile-photo">
      <label for="profile-photo" class="photo">Photo5</label>
      <img src="product/<?php echo $row['11']?>" height="50px" width="50px">
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