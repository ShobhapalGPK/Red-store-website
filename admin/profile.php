<?php
include("db.php");
session_start();
$email = $_SESSION['email'];


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>dashboard</title>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />



  <?php
  include("dashboardcss.php");
  ?>
  <style>
    form .profile-photo {
      text-align: center;
      margin-bottom: 20px;
    }

    form .profile-photo img {
      border-radius: 50%;
      width: 120px;
      height: 120px;
      object-fit: cover;
      margin-bottom: 10px;
    }
  </style>
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
        <h2>PROFILE</h2>

        <?php

        $sel = "SELECT * FROM `login` WHERE email = '$email'";
        $query = mysqli_query($conn, $sel);
        $row = mysqli_fetch_assoc($query);
        ?>



        <form action="profilecode.php" method="POST" enctype="multipart/form-data">


          <!-- Profile Photo Upload -->


          <div class="form-group profile-photo">
            <label for="profile-photo">Profile Photo</label>
            <img src="profileimg/<?php echo $row['photo'] ?>">
            <input type="file" name="photo" onchange="previewPhoto()">
          </div>
          <!-- Full Name -->
          <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required value="<?php echo $row['name'] ?>">
          </div>

          <div class="form-group">
            <label for="name">Password:</label>
            <input type="text" id="name" name="password" required value="<?php echo $row['password'] ?>">
          </div>

          <!-- Email Address -->
          <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required value="<?php echo $row['email'] ?>">
          </div>

          <!-- Phone Number -->
          <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" value="<?php echo $row['phone_number'] ?>">
          </div>

          <!-- Address -->
          <div class="form-group">
            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="3" placeholder="Enter your address"><?php echo $row['address'] ?></textarea>
          </div>

          <div class="form-group multistep-buttons">
            <!-- <button type="button" onclick="prevStep()">Previous</button> -->
            <button type="submit">Submit</button>
          </div>
        </form>
      </div>

      <script>
        // Profile Photo Preview
        function previewPhoto() {
          const file = document.getElementById('profile-photo').files[0];
          const preview = document.getElementById('photoPreview');
          const reader = new FileReader();
          reader.onloadend = function() {
            preview.src = reader.result;
          };
          if (file) {
            reader.readAsDataURL(file);
          } else {
            preview.src = "default-avatar.png";
          }
        }

        // Multi-step form navigation (placeholders for now)
        function prevStep() {
          alert("Going to the previous step.");
        }
      </script>








    </div>
  </div>


</body>

</html>