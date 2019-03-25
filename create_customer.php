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
	background-image: url(images/table1.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	width: 100%;
	}
	.table{
  background-color: green;
}
</style>
<body> 
	<form action="insert_customer.php" method="POST">
		<div class="form">
		<label><h5>Firstname:</h5></label>
		<p><input type="text" name="firstname" placeholder="Enter Firstname" required /></p>
		<label><h5>Middle Initial:</h5></label>
		<p><input type="text" name="mi" placeholder="Enter mi" required /></p>
		<label><h5>Lastname:</h5></label>
		<p><input type="text" name="lastname" placeholder="Enter Lastname" required /></p>
		<label><h5>Customer Street:</h5></label>
		<p><input type="text" name="customer_street" placeholder="Enter Customer Street" required /></p>
		<label><h5>Customer Brangay:</h5></label>
		<p><input type="text" name="customer_barangay"  placeholder="Enter Customer Barangay" required /></p>
		<label><h5>City:</h5></label>
		<p><input type="text" name="city" placeholder="Enter City" required /></p>
		<label><h5>Contact Number:</h5></label>
		<p><input type="number" name="contact_num" placeholder="Enter Contact Number" required /></p>
		<button type="submit">Submit</button>

	</form>
</body>
</html>