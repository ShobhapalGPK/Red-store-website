<?php
include("../admin/db.php");

session_start();
$email = $_SESSION['email'];

$sel = "SELECT * FROM `addcart` where email = '$email'";
$query = mysqli_query($conn,$sel);

$p_id = [];

while($row = mysqli_fetch_assoc($query)){
$p_id[] =$row['p_id'];
} 
$pid =implode(',',$p_id);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$mobile = $_POST['phone'];
$pin = $_POST['pin'];
$village = $_POST['town'];
$city = $_POST['city'];
$state = $_POST['State'];
$adress = $_POST['house'];
$payment = $_POST['payment'];
$amount = $_POST['amount'];

if(!$fname || !$lname || !$email || !$mobile || !$pin || !$village || !$city || !$state || !$adress || !$payment){
     echo("all filds requerd");
}else if($payment==="online"){
    $ins = "INSERT INTO `paymenttbl`(`fname`, `lname`, `email`, `mobile`, `pin`, `village`, `city`, `state`, `address`,`payment`,`p_id`) VALUES ('$fname','$lname','$email','$mobile','$pin','$village','$city','$state','$adress','$payment','$pid')";
    mysqli_query($conn,$ins);

    header("location:paynow.php?amount=$amount");
    
}else if($payment==="COD"){
    $ins = "INSERT INTO `paymenttbl`(`fname`, `lname`, `email`, `mobile`, `pin`, `village`, `city`, `state`, `address`,`payment`) VALUES ('$fname','$lname','$email','$mobile','$pin','$village','$city','$state','$adress','$payment')";
    if(mysqli_query($conn,$ins));
    echo($payment);
    echo"your order is successfull";
    
}else{
    echo("intanal server error");
}




 






?>