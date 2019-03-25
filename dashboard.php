<?php

require('db.php');
include("auth.php");  ?>
<!DOCTYPE html>
<html>
<head>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/dashboard.css">
   <link href="bootstrap/css/bootstrap.min.css">
   <title>Dashboard</title>
</head>
</head>
<style>
  body{
  background-image: url(images/background1.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  width: 100%;
  }
</style>
<body>
<ul>
   <li class='active'><h3><a href="dashboard.php?username=<?php echo $_SESSION['username']; ?>">Home</a></h3></li>
   <li><h3><a href="view_customers.php?username=<?php echo $_SESSION['username']; ?>">Customers</a></h3></li>
  <li><h3><a href="view_products.php?username=<?php echo $_SESSION['username']; ?>">Products</a></h3></li>
  <li><h3><a href="sales_invoice.php?username=<?php echo $_SESSION['username']; ?>">Sales Invoice</a></h3></li>
  <li><h3><a href='logout.php'>Logout</a></h3></li>
</ul>
</div>
<br>
<br><center><h1>W-E-L-C-O-M-E <?php echo $_SESSION['username']; ?>!</h1></center></br>
</div>
</body>
</html>


