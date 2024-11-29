<?php

include("db.php");
$name = $_POST['name'];
$img = $_FILES['photo']['name'];
$tmp_img = $_FILES['photo']['tmp_name'];

$path = "category/";

$ins = "INSERT INTO `add_category`(`name`, `photo`) VALUES ('$name','$img')";
if(mysqli_query($conn , $ins)){
    move_uploaded_file($tmp_img , $path.$img);
    echo"data inser";
}
else{
    echo"data not insert";
}

?>