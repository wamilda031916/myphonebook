<?php 
require('db.php');
include "auth.php";

?>
<!DOCTYPE html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/view.css">
   <link href="bootstrap/css/bootstrap.min.css">
   <title>View Records</title>
</head>
<style>
	body{
	background-image: url(.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	width: 100%;
	}
</style>
<body>

<ul>
  <li class='active'><a href='dashboard.php'>Home</a></li>
  <li><a href='customer.php'>Add Customers</a></li>
  <li><a href='products.php'>Add Products</a></li>
  <li><a href='sales_invoice.php'>Sales Invoice</a></li>
  <li><a href='logout.php'>Logout</a></li>
</ul>
</div>
<center><h1>View Records</h1></center>

<table width="99%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>Product Code</strong></th><th><strong>Description</strong></th><th><strong>Price</strong></th><th><strong>Unit</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
</thead>
<tbody>



<?php
$count=1;
$username=$_SESSION['username'];
$sel_query="Select * from product";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row["product_code"]; ?></td>
    <td align="center"><?php echo $row["description"]; ?></td>
    <td align="center"><?php echo $row["price"]; ?></td>
    <td align="center"><?php echo $row["unit"]; ?></td>
    <td align="center"><a href="edit_product.php?product_code=<?php echo $row["product_code"]; ?>">Edit</a></td>
    <td align="center"><a href="delete_products.php?product_code=<?php echo $row['product_code']; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>

