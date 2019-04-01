<?php

include "db.php";

$customer_id = $_GET['customer_id'];

$sql = "DELETE FROM customer WHERE customer_id = '$customer_id'";

$res = mysqli_query($con, $sql);

mysqli_close($con);

header('location: view_customers.php');
exit;