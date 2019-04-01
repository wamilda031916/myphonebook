<?php
 
require('db.php');
include("auth.php");

$status = "";
if(isset($_POST['submit']) && $_POST['new']==1)
{
$description =$_REQUEST['description'];
$price = $_REQUEST['price'];
$unit =$_REQUEST['unit'];
$username = $_SESSION["username"];
$ins_query="INSERT INTO `product`(`description`, `price`, `unit`) VALUES ('$description',$price,'$unit')";
mysqli_query($con,$ins_query) or die(mysql_error());

header('loacation: view_products.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Product</title>
<link href="bootstrap/css/bootstrap.pricen.css">
<link rel="stylesheet" type="text/css" href="css/insert.css" />
<style>
	body{
	background-image: url(images/catering.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	width: 100%;
	}
</style>
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> | <a href="view_products.php?">View Products</a> | <a href="logout.php">Logout</a></p>

<div>
<h1>Insert New Product</h1>
<form method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="description" placeholder="Enter description" required /></p>
<p><input type="number" name="price" placeholder="Enter price" required /></p>
<p><input type="text" name="unit" placeholder="Enter unit" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#0ae4f1;"><?php echo $status; ?></p>
<h1 style="color:#0ae4f1;"/h1>

</div>
</div>
</body>
</html>
