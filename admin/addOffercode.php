<?php


$category = $_POST['choose'];
$product_name = $_POST['name'];

$image = $_FILES['photo']['name'];
$tmp_image = $_FILES['photo']['tmp_name'];

$path = "offerimg/";

include("db.php");
$ins = "INSERT INTO `add_offer`(`product_name`, `photo`, `category_id`) VALUES ('$product_name','$image','$category')";

$query = mysqli_query($conn,$ins);
if($query){
    move_uploaded_file($tmp_image ,$path.$image);
    echo"data insert";
}
else{
    echo"data not insert";
}




?>