<?php
include("db.php");
$name = $_POST['name'];
$coupon_number = $_POST['coupon_number'];

$discount = $_POST['discount'];
$duration = $_POST['duration'];

$ins = "INSERT INTO `add_coupon`(`name`,`coupon_number`,  `discount`, `duration`) VALUES ('$name','$coupon_number','$discount','$duration')";
if(mysqli_query($conn,$ins)){
    echo"data insert";
}
else{
    echo"data not insert";
}





?>