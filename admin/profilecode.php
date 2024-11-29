<?php

include("db.php");

$photo = $_FILES['photo']['name'];
$tmp_photo = $_FILES['photo']['tmp_name'];

$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];

$phone = $_POST['phone'];
$address = $_POST['address'];

$path = "profileimg/";

$up = "UPDATE `login` SET `photo`='$photo',`name`='$name',`phone_number`='$phone',`address`='$address' WHERE email = '$email'";

$query = mysqli_query($conn , $up);

if($query){
    move_uploaded_file($tmp_photo,$path.$photo);
    echo"data update";
}
else{
    echo"data not update";
}
?>