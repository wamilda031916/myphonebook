<?php
include "connect.php";
session_start();

$description = $_POST['description'];
$price = $_POST['price'];
$unit = $_POST['unit'];

$sql = "INSERT INTO product (description, price, unit) VALUES ('$description', '$price', '$unit')";
	
$res = mysqli_query($conn, $sql);
if($res == true){
	echo "Product saved succesfully.";
	header('location: product.php');
}else{
	echo "Error".$description,$price,$unit;
} 

mysqli_close($conn);


?>