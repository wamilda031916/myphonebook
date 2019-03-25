<?php

include "db.php";

$id = $_GET['id'];

$sql = "DELETE FROM customer WHERE id = '$id'";

$res = mysqli_query($con, $sql);

mysqli_close($con);

header('location: view_customers.php');
exit;