<?php

include("db.php");
$id = $_REQUEST['id'];

$sel = "SELECT * FROM `add_product` where id = '$id'";
$query = mysqli_query($conn , $sel);
$row = mysqli_fetch_assoc($query);

$file1 = $row['img1'];
$file2 = $row['img2'];
$file3 = $row['img3'];
$file4= $row['img4'];
$file5 = $row['img5'];

$del = "DELETE FROM `add_product` WHERE id = '$id'";
if(mysqli_query($conn,$del)){
    $path = "product/".$file1;
    $path1 = "product/".$file2;
    $path2 = "product/".$file3;
    $path3 = "product/".$file4;
    $path4  = "product/".$file5;

    unlink($path);
    unlink($path1);
    unlink($path2);
    unlink($path3);
    unlink($path4);

    header("location:manageProduct.php");
  
}
else{
    echo"data not delete";
}

?>