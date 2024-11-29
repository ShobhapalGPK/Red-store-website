<?php
include("../admin/db.php");

session_start();


if(isset($_SESSION['email'])){
    session_destroy();
    header("location:index.php");
}
else{
    echo"user not logout";
}






?>