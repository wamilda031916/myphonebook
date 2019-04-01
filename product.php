<?php
   include("db.php");
   session_start();
   ?>

<!DOCTYPE html>
<html>
<head>
	<title>Product Table</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<script src="jquery/product/jquery.min.js"></script>
  	<script src="bootstrap/js/bootstrap.min.js"></script>
	<style>
    	body{
          background-image: url("images/customer3.jpg");
          background-size: 1366px 768px;
      	}
      	#box1{
          margin-top: 5%;
      	}
      	#title1{
          text-align: center;
      	}
	    #bt {
	        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	        border-collapse: collapse;
	        width: 100%;
	    }

	    #bt td, #bt th {
	        border: 1px solid #ddd;
	        padding: 8px;
	    }

	    #bt tr{background-color: white;}

	    #bt tr:hover {background-color: #ddd;}

	    #bt th {
	        padding-top: 12px;
	        padding-bottom: 12px;
	        text-align: center;
	        background-color: #38007c;
	        color: white;
	    }
 	</style>
</head>
<body>

<div class="container">
	<div class="col-md-1 col-sm-1"></div>
			
	<div class="well well-lg col-md-10 col-sm-10" id="box1">
		<div class="row">
			<div class="col-md-1 col-sm-1">
			  	<form action="create_product.php">
					<button type="submit" class="btn btn-success">Add Product</button>
				</form>
				<form action="index.php">
					<button type="submit" class="btn btn-success">Back</button>
				</form>
			</div>
		</div>

		<table id="bt">
			<tr>
				<th>Description</th>
				<th>Price</th>
				<th>Unit</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>

<?php

include "db.php";
$sql = "SELECT * FROM product";
$res = mysqli_query($con, $sql);
if(mysqli_num_rows($res) > 0)
while($line = mysqli_fetch_array($res)) {
	$id = $line['id'];
	echo "<tr>";

	echo "<td><center>" . $line['description'] . "</center></td>";
	echo "<td><center>" . $line['price'] . "</center></td>";
	echo "<td><center>" . $line['unit'] . "</center></td>";
	echo '<td><a href="edit_product.php?id='.$line['id'].'" title="Update Contact"><center><span class="glyphicon glyphicon-pencil"></span></center></a></td>';
	echo '<td><a href="delete_product.php?id='.$line['id'].'" title="Remove Contact"><center><span class="glyphicon glyphicon-remove"></span></center></a></td>';  
	echo '<div class="input-group">';
                echo '<input type="hidden" class="form-control" name="product_code" value="'. $id.'" >';
        echo '</div>';
	echo "<tr>";
}
mysqli_close($con);
?>
			</tr>
		</table>
	</div>
</div>

</body>
</html>