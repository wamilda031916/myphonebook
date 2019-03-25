<?php
include "connect.php";
session_start();

$firstname = $_POST['firstname'];
$mi = $_POST['mi'];
$lastname = $_POST['lastname'];
$customer_street = $_POST['customer_street'];
$customer_barangay = $_POST['customer_barangay'];
$city = $_POST['city'];
$contact_num = $_POST['contact_num'];

$sql = "INSERT INTO customer (firstname, mi, lastname,customer_street, customer_barangay, city, contact_num) VALUES ('$firstname', '$mi', '$lastname', '$customer_street', '$customer_barangay', '$city', '$contact_num')";
	
$res = mysqli_query($conn, $sql);
if($res == true){
	echo "Data saved succesfully.";
	header('location: customer.php');
}else{
	echo "Error".$firstname,$mi,$lastname,$customer_street,$customer_barangay,$city,$contact_num;
} 

mysqli_close($conn);


?>