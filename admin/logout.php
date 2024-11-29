<?php

include("db.php");
session_start();
 $email = $_SESSION['email'];


if(isset($email)){
    session_destroy();
    header("location:index.php");
}

else{
    echo"logout failed";
}



?>