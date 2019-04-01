<?php

include "db.php";

$product_code = $_GET['product_code'];

$query = "DELETE FROM product WHERE product_code = $product_code";

$res = mysqli_query($con, $query);

mysqli_close($con);

header('location: view_products.php');
exit;