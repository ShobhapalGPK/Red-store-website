<?php

include("db.php");
$id = $_POST['id'];
$name = $_POST['name'];

$category = $_POST['choose'];

$photo = $_FILES['photo']['name'];
$tmp_photo = $_FILES['photo']['tmp_name'];


$sel = "SELECT * FROM `add_offer` WHERE id = '$id'";
$query = mysqli_query($conn, $sel);
$row = mysqli_fetch_assoc($query);

$oldphoto = $row['photo'];

$path = "offerimg/";
$patha = $path.$oldphoto;

if(!empty($photo)){
    $up = "UPDATE `add_offer` SET `product_name`='$name', `category_id`='$category',`photo`='$photo' WHERE id = $id";
    if(mysqli_query($conn,$up)){
        move_uploaded_file($tmp_photo ,$path.$photo);
        echo"data update";
        unlink($patha);
    }
    // update cmd with unlink

}
else{
    $up = "UPDATE `add_offer` SET `product_name`='$name',`category_id`='$category',`photo`='$oldphoto' WHERE id = $id";
    if(mysqli_query($conn , $up)){
        echo "$oldphoto";
    }
    else{
        echo"old photo not update";
    }
    // update cmd
}
