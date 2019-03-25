<?php
   include("connect.php");
   session_start();
   ?>
<!DOCTYPE>
<html>
  <head>
    <meta charset="utf-8">
    <title>AJ's Catering</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/insert.css">
	<!-- Script -->
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/popper.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <style>
  body{
	background-image: url(images/product.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	width: 100%;
	}
	.table{
  background-color: green;
}
</style>
<body> 
	<form action="insert_product.php" method="POST">
		<div class="form">
		<label><h5>Description:</h5></label>
		<p><input type="text" name="description" placeholder="Enter Description" required /></p>
		<label><h5>Price:</h5></label>
		<p><input type="text" name="price" placeholder="Enter Price" required /></p>
		<label><h5>Unit:</h5></label>
		<p><input type="text" name="unit" placeholder="Enter Unit" required /></p>
		<button type="submit">Add Product</button>

	</form>
</body>
</html>