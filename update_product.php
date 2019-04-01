<?php

include "db.php";

$product_code  = $_POST['product_code'];
$description   = $_POST['description'];
$price  = $_POST['price'];
$unit  = $_POST['unit'];


$sql = "UPDATE product SET description = '$description', price = '$price', unit = '$unit' WHERE product_code = $product_code ";

$res = mysqli_query($con, $sql);

mysqli_close($con);

header('location: view_products.php');
exit;
?>