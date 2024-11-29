<?php

include("db.php");


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

$path = "product/";


$ins = "INSERT INTO `add_product`(`category_id`, `name`, `price`, `size`, `psdescription`, `pldescription`, `img1`, `img2`, `img3`, `img4`, `img5`) VALUES ('$category','$name','$price','$size','$psdescription','$pldescription','$img1','$img2','$img3','$img4','$img5')";

$query = mysqli_query($conn, $ins);
if($query){
       move_uploaded_file($tmp_img1 , $path.$img1);
       move_uploaded_file($tmp_img2 , $path.$img2);
       move_uploaded_file($tmp_img3 , $path.$img3);
       move_uploaded_file($tmp_img4 , $path.$img4);
       move_uploaded_file($tmp_img5 , $path.$img5);
       echo"data insert";
}
else{
    echo"data not insert";
}


?>