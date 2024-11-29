<?php
include("db.php");
$id = $_REQUEST['id'];

$sel = "SELECT * FROM `add_category` where id = '$id'";
$query = mysqli_query($conn , $sel);
$row = mysqli_fetch_assoc($query);

$file = $row['photo'];

$del = "DELETE FROM `add_category` WHERE id = '$id'";
if(mysqli_query($conn , $del)){
    $path = 'category/'.$file;
    unlink($path);
    header("location:managecateory.php");
}
else{
    echo"data not delete";
}

?>