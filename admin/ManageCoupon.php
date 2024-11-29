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
         

    <div class="table">
    <h1>Manage Coupon</h1>
            <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>coupon_code</th>
               
                <th>discount</th>
                <th>duration</th>
                <th>Delete</th>
                <th>update</th>
            </tr>
        </thead>
        <tbody>


        <?php
        include("db.php");
        // session_start();
        // $email = $_SESSION['email'];

        $sel = "SELECT * FROM `add_coupon`";
        $query = mysqli_query($conn , $sel);
        while($row = mysqli_fetch_assoc($query)){

            ?>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['coupon_number']?></td>
                
                <td><?php echo $row['discount']?></td>
                <td><?php echo $row['duration']?></td>
                
                <td><a href="deletecoupon.php?id=<?php echo $row['id']?>"><i class="fa-solid fa-trash"></i></a></td>
                <td><a href="updateCoupon.php?id=<?php echo $row['id']?>"><i class="fa-regular fa-pen-to-square"></i></a></td>
            </tr>
           <?php

        }
        
        ?>   
        </tfoot>
    </table>



    </div>




        </div>
    </div>
<script>
    new DataTable('#example', {
    layout: {
        topStart: {
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        }
    }
});
</script>
    
</body>

</html>