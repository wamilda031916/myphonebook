<?php
   include("db.php");
   session_start();
   ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br>
	<center>
	<div>
		<h3><b>Update Product</b></h3><br>
	    <form action="update_customer.php" method="POST">

		<?php

		include "db.php";

		$customer_id = $_GET['customer_id'];

		$sql = "SELECT * FROM customer WHERE customer_id = $customer_id " ;
		$res = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($res);

		$firstname = $row['firstname'];
		$mi = $row['mi'];
		$lastname = $row['lastname'];
		$customer_street = $row['customer_street'];
		$customer_barangay = $row['customer_barangay'];
		$city = $row['city'];
		$contact_num = $row['contact_num'];

		        echo '<div>';
		            echo '<h2>Firstname: <input id="description" type="text" name="firstname" value="'. $firstname .'" required></h2>';
		        echo '</div>';
		        echo '<div>';
		            echo '<h2>Mi: <input id="price" type="text" name="mi" value="'. $mi .'" required></h2>';
		        echo '</div>';
		        echo '<div>';
		            echo '<h2>Lastname: <input id="unit" type="text" name="lastname" value="'. $lastname  .'" required></h2>';
		        echo '</div>';
		        echo '<div>';
		            echo '<h2>Customer Street: <input id="description" type="text" name="customer_street" value="'. $customer_street .'" required></h2>';
		        echo '</div>';
		        echo '<div>';
		            echo '<h2>Customer Barangay: <input id="price" type="text" name="customer_barangay" value="'. $customer_barangay .'" required></h2>';
		        echo '</div>';
		        echo '<div>';
		            echo '<h2>City: <input id="unit" type="text" name="city" value="'. $city  .'" required></h2>';
		        echo '</div>';
		         echo '<div>';
		            echo '<h2>Contact Number: <input id="unit" type="text" name="contact_num" value="'. $contact_num  .'" required></h2>';
		        echo '</div>';
				echo '<div>';
						echo '<input type="hidden" name="customer_id" value="'. $customer_id.'" >';
				echo '</div>';
		?>
	        <button type="submit" name="update"><b>Update</b></button>
	    </form>
	</div>
	</center>
</body>
</html>