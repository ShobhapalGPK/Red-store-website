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
    <h1>Manage Contact</h1>
            <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>phone no.</th>
                <th>massage</th>
               
            </tr>
        </thead>
        <tbody>
            <?php
            include("db.php");
            $sel = "SELECT * FROM `contact`";
            $query = mysqli_query($conn,$sel);
            while($row = mysqli_fetch_array($query)){
            
            
            
            ?>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['mobile']?></td>
                <td><?php echo $row['massage']?></td>
                
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