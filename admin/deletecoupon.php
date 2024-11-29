<?php
include("db.php");
$id = $_REQUEST['id'];



$del = "DELETE FROM `add_coupon` WHERE id = '$id'";
if(mysqli_query($conn , $del)){
   
    
    header("location:manageCoupon.php");
}
else{
    echo"data not delete";
}

?>