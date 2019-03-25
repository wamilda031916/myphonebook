<?php
 
require('db.php');
include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$firstname =$_REQUEST['firstname'];
$mi = $_REQUEST['mi'];
$lastname =$_REQUEST['lastname'];
$customer_street = $_REQUEST['customer_street'];
$customer_barangay =$_REQUEST['customer_barangay'];
$city = $_REQUEST['city'];
$contact_num =$_REQUEST['contact_num'];
$username = $_SESSION["username"];
$ins_query="INSERT INTO `customer`(`firstname`, `mi`, `lastname`, `customer_street`, `customer_barangay`, `city`, `contact_num`, `username`) VALUES ('$firstname','$mi','$lastname','$customer_street','$customer_barangay','$city','$contact_num','$username')";
mysqli_query($con,$ins_query) or die(mysql_error());
header('loacation: view_customers.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Customer</title>
<link href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/insert.css" />
<style>
	body{
	background-image: url(dashboard.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	width: 100%;
	}
</style>
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> | <a href="view_customers.php?username=<?php echo $_SESSION['username']; ?>">View Customers</a> | <a href="logout.php">Logout</a></p>

<div>
<h1>Insert New Customer</h1>
<form name="form" method="post" action="customer.php"> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="firstname" placeholder="Enter Firstname" required /></p>
<p><input type="text" name="mi" placeholder="Enter Middle Initial" required /></p>
<p><input type="text" name="lastname" placeholder="Enter Lastname" required /></p>
<p><input type="text" name="customer_street" placeholder="Enter Customer Street" required /></p>
<p><input type="text" name="customer_barangay" placeholder="Enter Customer Barangay" required /></p>
<p><input type="text" name="city" placeholder="Enter City" required /></p>
<p><input type="number" name="contact_num" placeholder="Enter Contact Number" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#0ae4f1;"><?php echo $status; ?></p>
<h1 style="color:#0ae4f1;"/h1>

</div>
</div>
</body>
</html>
