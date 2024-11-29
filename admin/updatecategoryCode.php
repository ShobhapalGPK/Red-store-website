<?php

include("db.php");
$id = $_POST['id'];
$name = $_POST['name'];

$photo = $_FILES['photo']['name'];
$tmp_photo = $_FILES['photo']['tmp_name'];


$sel = "SELECT * FROM `add_category` WHERE id = '$id'";
$query = mysqli_query($conn, $sel);
$row = mysqli_fetch_assoc($query);

$oldphoto = $row['photo'];

$path = "category/";
$patha = $path.$oldphoto;

if(!empty($photo)){
    $up = "UPDATE `add_category` SET `name`='$name',`photo`='$photo' WHERE  id = $id";
    if(mysqli_query($conn,$up)){
        move_uploaded_file($tmp_photo ,$path.$photo);
        echo"data update";
        unlink($patha);
    }
    // update cmd with unlink

}
else{
    $up = "UPDATE `add_category` SET `name`='$name',`photo`='$oldphoto' WHERE  id = $id";
    if(mysqli_query($conn, $up)){
        echo "data all update";
    }
    else{
        echo"old photo not update";
    }
    // update cmd
}
