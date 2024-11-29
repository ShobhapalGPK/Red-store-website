<?php
include("../admin/db.php");
$id = $_REQUEST['idd'];

$del = "DELETE FROM `addcart` WHERE id = '$id'";
if(mysqli_query($conn,$del)){
    header("location:cart.php");
}
else{
    echo"cart not delete";
}




?>