<?php

if(isset($_POST['btn']))
{

    include("db.php");

$email = mysqli_real_escape_string($conn , $_POST['email']);
$password =mysqli_real_escape_string($conn ,$_POST['password']);


$sel = "SELECT * FROM `login`";
$query = mysqli_query($conn ,$sel);
$row = mysqli_fetch_assoc($query);

if($row['email']== $email){
    if($row['password']==$password){
        session_start();
            $_SESSION['email'] = $email;
            echo $_SESSION['email'];
           header("location:dashboard.php");
        }
        else{
             echo"password not match";
        }
}
else{
    echo"email not match";
}

}
else{
    header("location:index.php");
}
?>