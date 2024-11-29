<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$massage = $_POST['msg'];

include("../admin/db.php");
$ins = "INSERT INTO `contact`(`name`, `email`, `mobile`, `massage`) VALUES ('$name','$email','$phone','$massage')";
$query = mysqli_query($conn,$ins);

if($query){
    echo"data insert";
}
else{
    echo"data not insert";
}





?>