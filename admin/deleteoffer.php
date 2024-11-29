<?php
include("db.php");
$id = $_REQUEST['id'];

$sel = "SELECT * FROM `add_offer` where id = '$id'";
$query = mysqli_query($conn , $sel);
$row = mysqli_fetch_assoc($query);

$file = $row['photo'];

$del = "DELETE FROM `add_offer` WHERE id = '$id'";
if(mysqli_query($conn , $del)){
    $path = 'offerimg/'.$file;
    unlink($path);
    header("location:manageOffer.php");
}
else{
    echo"data not delete";
}

?>