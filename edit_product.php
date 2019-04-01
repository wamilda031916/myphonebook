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
	    <form action="update_product.php" method="POST">

		<?php

		include "db.php";

		$product_code = $_GET['product_code'];

		$sql = "SELECT * FROM product WHERE product_code = $product_code " ;
		$res = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($res);

		$description = $row['description'];
		$price = $row['price'];
		$unit = $row['unit'];

		        echo '<div>';
		            echo '<h2>Description: <input id="description" type="text" name="description" value="'. $description .'" required></h2>';
		        echo '</div>';
		     
		        echo '<div>';
		            echo '<h2>Price: <input id="price" type="text" name="price" value="'. $price .'" required></h2>';
		        echo '</div>';
		        
		        echo '<div>';
		            echo '<h2>Unit: <input id="unit" type="text" name="unit" value="'. $unit  .'" required></h2>';
		        echo '</div>';
		     
				echo '<div>';
						echo '<input type="hidden" name="product_code" value="'. $product_code.'" >';
				echo '</div>';
		?>
	        <button type="submit" name="update"><b>Update</b></button>
	    </form>
	</div>
	</center>
</body>
</html>