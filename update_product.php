<?php

include "db.php";
session_start();

$id  = $_POST['id'];
$description   = $_POST['description'];
$price  = $_POST['price'];
$unit  = $_POST['unit'];


$sql = "UPDATE product SET description = '$description', price = '$price', unit = '$unit' WHERE id = $id ";

$res = mysqli_query($con, $sql);

mysqli_close($con);

header('location: view_products.php');
exit;
?>