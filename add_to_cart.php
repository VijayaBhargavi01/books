<?php
session_start();
include "db.php";

$title = $_GET['title'];
$price = $_GET['price'];
$email = $_SESSION['email'];

$sql = "INSERT INTO cart(title,price,email)
VALUES('$title','$price','$email')";

if(mysqli_query($conn,$sql)){
header("Location: cart.html");
exit();
}else{
echo "Error adding to cart";
}
?>