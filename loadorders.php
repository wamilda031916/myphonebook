<?php
	include('connect.php');

		$name = mysqli_real_escape_string($conn,$_POST['products']);
		$show 	= "SELECT * FROM product WHERE product_code='$name' ";
		$query 	= mysqli_query($conn,$show);

	$row = json_encode(mysqli_fetch_assoc($query));
	echo $row;
