<?php
 
require('db.php');
include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$trn_date = date("Y-m-d H:i:s");
$firstname =$_REQUEST['firstname'];
$lastname =$_REQUEST['lastname'];
$age = $_REQUEST['age'];
$address =$_REQUEST['address'];
$number =$_REQUEST['number'];
$username = $_SESSION["username"];
$ins_query="insert into new_record (`trn_date`,`firstname`,`lastname`,`age`,`address`,`number`,`username`) values ('$trn_date','$firstname','$lastname','$age','$address','$number','$username')";
mysqli_query($con,$ins_query) or die(mysql_error());
$status = "<h1>New Record Inserted Successfully.</h1><h3><a href='view.php'>View Inserted Record</a></h3>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
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
<p><a href="dashboard.php">Dashboard</a> | <a href="view.php?username=<?php echo $_SESSION['username']; ?>">View Records</a> | <a href="logout.php">Logout</a></p>

<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="firstname" placeholder="Enter Firstname" required /></p>
<p><input type="text" name="lastname" placeholder="Enter Lastname" required /></p>
<p><input type="text" name="age" placeholder="Enter Age" required /></p>
<p><input type="text" name="address" placeholder="Enter Address" required /></p>
<p><input type="text" name="number" placeholder="Enter Number" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#0ae4f1;"><?php echo $status; ?></p>
<h1 style="color:#0ae4f1;"/h1>

</div>
</div>
</body>
</html>
