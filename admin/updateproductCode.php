<?php

include("db.php");

$id = $_POST['id'];

$category = $_POST['choose'];
$name = $_POST['name'];
$price = $_POST['price'];
$size = $_POST['size'];
$psdescription = $_POST['psdescription'];
$pldescription = $_POST['pldescription'];

$img1 = $_FILES['img1']['name'];
$tmp_img1 = $_FILES['img1']['tmp_name'];

$img2 = $_FILES['img2']['name'];
$tmp_img2 = $_FILES['img2']['tmp_name'];


$img3 = $_FILES['img3']['name'];
$tmp_img3 = $_FILES['img3']['tmp_name'];


$img4 = $_FILES['img4']['name'];
$tmp_img4 = $_FILES['img4']['tmp_name'];


$img5 = $_FILES['img5']['name'];
$tmp_img5 = $_FILES['img5']['tmp_name'];


$sel = "SELECT * FROM `add_product` where id = '$id'";
$query = mysqli_query($conn , $sel);
$row = mysqli_fetch_assoc($query);

$oldimg1 = $row['img1'];
$oldimg2 = $row['img2'];
$oldimg3 = $row['img3'];
$oldimg4 = $row['img4'];
$oldimg5 = $row['img5'];

$path = "product/";

if((!empty($img1)) and (!empty($img2)) and (!empty($img3)) and (!empty($img4)) and (!empty($img5))){

    $up = "UPDATE `add_product` SET `name`='$name',`category_id`='$category',`price`='$price',`size`='$size',`psdescription`='$psdescription',`pldescription`='$pldescription',`img1`='$img1',`img2`='$img2',`img3`='$img3',`img4`='$img4',`img5`='$img5' WHERE id = '$id'";
    if(mysqli_query($conn,$up)){
        move_uploaded_file($tmp_img1 , $path.$img1);
        move_uploaded_file($tmp_img2 , $path.$img2);
        move_uploaded_file($tmp_img3 , $path.$img3);
        move_uploaded_file($tmp_img4 , $path.$img4);
        move_uploaded_file($tmp_img5 , $path.$img5);

        unlink($path.$oldimg1);
        unlink($path.$oldimg2);
        unlink($path.$oldimg3);
        unlink($path.$oldimg4);
        unlink($path.$oldimg5);

        echo"data update";

    }
    else{
        echo"data not update";
    }
    
}
else{

    $up = "UPDATE `add_product` SET `name`='$name',`category_id`='$category',`price`='$price',`size`='$size',`psdescription`='$psdescription',`pldescription`='$pldescription',`img1`='$oldimg1',`img2`='$oldimg2',`img3`='$oldimg3',`img4`='$oldimg4',`img5`='$oldimg5' WHERE id = '$id'";
    if(mysqli_query($conn,$up)){
        echo"data all update";
    }
    else{
        echo"data not update";
    }

}

?>