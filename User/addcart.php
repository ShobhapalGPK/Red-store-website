<?php
include("../admin/db.php");
session_start();

if(isset($_SESSION['email'])){
    // Form data ko retrieve karna
    $id = $_POST['product_id']; // Product ID jo form mein submit ki gayi hai
    $email = $_SESSION['email'];
    $size = $_POST['size']; // Size jo form mein submit ki gayi hai
    $quantity = $_POST['quantity']; // Quantity jo form mein submit ki gayi hai
    $date = date("d/m/y");
    date_default_timezone_set("Asia/Kolkata");
    $time = date("h:i:sa");

    // Form data ko echo karna
    // echo "Product ID: $id <br>";
    // echo "User Email: $email <br>";
    // echo "Selected Size: $size <br>";
    // echo "Quantity: $quantity <br>";
    // echo "Date: $date <br>";
    // echo "Time: $time <br>";

    // Database mein insert karna
    
    $ins = "INSERT INTO `addcart`(`p_id`, `email`, `size`, `quantity`, `date`, `time`,`status`) VALUES ('$id', '$email', '$size', '$quantity', '$date', '$time','false')";
    
    if(mysqli_query($conn, $ins)){
        echo "<script>
            alert('Product added to cart');
            setTimeout(function() {
                window.location.href = 'ProjectDetails.php?idd=$id';
            }, 1000); // 1 second delay
        </script>";
        exit();
    } else {
        echo "<script>
            alert('Failed to add product to cart');
            setTimeout(function() {
                window.location.href = 'ProjectDetails.php?idd=$id';
            }, 1000); // 1 second delay
        </script>";
        exit();
    }
} else {
    echo "<script>
        alert('Please log in first');
        setTimeout(function() {
            window.location.href = 'account.php';
        }, 1000); // 1 second delay
    </script>";
    exit();
}
?>
