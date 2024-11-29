<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];



include("../admin/db.php");

$ins = "INSERT INTO `user_register`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
if(mysqli_query($conn,$ins)){
    session_start();
    $_SESSION['email'] == $email;
    header("location:Account.php");
}
else{
    echo"data not insert";
}



?>