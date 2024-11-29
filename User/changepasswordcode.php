<?php
$oldpassword = $_POST['oldPassword'];
$newpassword = $_POST['newPassword'];
$conformpassword = $_POST['confirmPassword'];

include("../admin/db.php");
session_start();
$email = $_SESSION['email'];

$sel = "SELECT * FROM `user_register` where email = '$email'";
$query = mysqli_query($conn,$sel);
$row = mysqli_fetch_assoc($query);

if($row['password']==$oldpassword){
    if($newpassword == $conformpassword){
        $up = "UPDATE `user_register` SET `password`='$newpassword' WHERE email = '$email'";
        if(mysqli_query($conn,$up)){
            echo"password changed";
        }
        else{
            echo"password not changed";
        }


    }
    else{
        echo"conform password not match";
    }

}
else{
    echo"old password not match";
}


?>