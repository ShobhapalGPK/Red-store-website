<?php

include("db.php");

$id = $_POST['id'];

$name = $_POST['name'];
$coupon_number = $_POST['coupon_number'];
// $price = $_POST['price'];
$discount = $_POST['discount'];
$duration = $_POST['duration'];

$up = "UPDATE `add_coupon` SET `name`='$name',`coupon_number`='$coupon_number',`discount`='$discount',`duration`='$duration' WHERE id = '$id'";

if(mysqli_query($conn,$up)){
    header("location:manageCoupon.php");
}
else{
    echo"data not update";
}
?>