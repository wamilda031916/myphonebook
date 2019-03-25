<?php

include "db.php";

$id = $_GET['id'];

$sql = "DELETE FROM product WHERE id = '$id'";

$res = mysqli_query($conn, $sql);

mysqli_close($conn);

header('location: view_products.php');
exit;