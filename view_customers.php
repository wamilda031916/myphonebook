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
  <li><a href='customer.php'>Add Customer</a></li>
  <li><a href='view_products.php'>Products</a></li>
  <li><a href='sales_invoice.php'>Sales Invoice</a></li>
  <li><a href='logout.php'>Logout</a></li>
</ul>
</div>
<center><h1>View Records</h1></center>

<table width="99%" border="1" style="border-collapse:collapse;">
<thead>
<tr><tr>
  <th><strong>Customer Id</strong></th>
  <th><strong>Firstname</strong></th>
  <th><strong>Mi</strong></th>
  <th><strong>Lastname</strong></th>
  <th><strong>Customer Street</strong></th>
  <th><strong>Customer Barangay</strong></th>
  <th><strong>City</strong></th>
  <th><strong>Contact Number</strong></th>
  <th><strong>Edit</strong></th>
  <th><strong>Delete</strong></th></tr>
</thead>
<tbody>



<?php
$count=1;
$username=$_SESSION['username'];
$sel_query="Select * from customer";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_array($result)) { ?>
<tr>
  <td align="center"><?php echo $row["customer_id"]; ?></td>
  <td align="center"><?php echo $row["firstname"]; ?></td>
  <td align="center"><?php echo $row["mi"]; ?></td>
  <td align="center"><?php echo $row["lastname"]; ?></td>
  <td align="center"><?php echo $row["customer_street"]; ?></td>
  <td align="center"><?php echo $row["customer_barangay"]; ?></td>
  <td align="center"><?php echo $row["city"]; ?></td>
  <td align="center"><?php echo $row["contact_num"]; ?></td>
    <td align="center"><a href="edit_customer.php?customer_id=<?php echo $row["customer_id"]; ?>">Edit</a></td>
  <td align="center"><a href="delete_customer.php?customer_id=<?php echo $row["customer_id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>

