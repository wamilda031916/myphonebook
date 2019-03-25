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

		$id = $_GET['id'];

		$sql = "SELECT * FROM customer WHERE id = $id " ;
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
		            echo '<h4>Firstname: <input id="description" type="text" name="firstname" value="'. $firstname .'" required></h4>';
		        echo '</div>';
		        echo '<div>';
		            echo '<h4>Mi: <input id="price" type="text" name="mi" value="'. $mi .'" required></h4>';
		        echo '</div>';
		        echo '<div>';
		            echo '<h4>Lastname: <input id="unit" type="text" name="lastname" value="'. $lastname  .'" required></h4>';
		        echo '</div>';
		        echo '<div>';
		            echo '<h4>Customer Street: <input id="description" type="text" name="customer_street" value="'. $customer_street .'" required></h4>';
		        echo '</div>';
		        echo '<div>';
		            echo '<h4>Customer Barangay: <input id="price" type="text" name="customer_barangay" value="'. $customer_barangay .'" required></h4>';
		        echo '</div>';
		        echo '<div>';
		            echo '<h4>City: <input id="unit" type="text" name="city" value="'. $city  .'" required></h4>';
		        echo '</div>';
		         echo '<div>';
		            echo '<h4>Contact Number: <input id="unit" type="text" name="contact_num" value="'. $contact_num  .'" required></h4>';
		        echo '</div>';
				echo '<div>';
						echo '<input type="hidden" name="id" value="'. $id.'" >';
				echo '</div>';
		?>
	        <button type="submit" name="update"><b>Update</b></button>
	    </form>
	</div>
	</center>
</body>
</html>