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

    <style>
        .table-wrapper {
    max-height: 100vh; /* Adjust height as per need */
    overflow: auto;
}

table {
    width: 80vh;
    border-collapse: collapse;
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
        

    <div class="table-wrapper">
    <h1>Manage product</h1>
            <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>category</th>
                <th>name</th>
                
                <th>price</th>
                <th>Size</th>
                <th>psdescription</th>
                <th>pldescription</th>
                <th>image1</th>
                <th>image2</th>
                <th>image3</th>
                <th>image4</th>
                <th>image5</th>
                <th>delete</th>
                <th>update</th>
            </tr>
        </thead>
        <tbody>

        <?php
              include("db.php");
              $sel = "SELECT * FROM `add_product`";
              $query = mysqli_query($conn , $sel);
              while($row = mysqli_fetch_array($query,MYSQLI_BOTH)){
        
        ?>
            <tr>
                <td><?php echo $row['0']?></td>
                <td><?php echo $row['1']?></td>
                <td><?php echo $row['2']?></td>
                <td><?php echo $row['3']?></td>
                <td><?php echo $row['4']?></td>
                <td><?php echo $row['5']?></td>
                <td><?php echo $row['6']?></td>
                <td><img src="product/<?php echo $row['7']?>" height="80px" width="80px"></td>
                <td><img src="product/<?php echo $row['8']?>" height="80px" width="80px"></td>
                <td><img src="product/<?php echo $row['9']?>" height="80px" width="80px"></td>
                <td><img src="product/<?php echo $row['10']?>" height="80px" width="80px"></td>
                <td><img src="product/<?php echo $row['11']?>" height="80px" width="80px"></td>
                <td><a href="deleteproduct.php?id=<?php echo $row['id']?>"><i class="fa-solid fa-trash"></a></td>
                <td><a href="updateproduct.php?id=<?php echo $row['id']?>"><i class="fa-regular fa-pen-to-square"></a></td>
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