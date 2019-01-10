<?php

require('db.php');
include("auth.php");  ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<link href="bootstrap-4.0.0-beta.3-dist">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<style>
	body{
	background-image: url(download.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	width: 100%;
	}
</style>
<body>
<div class="form">
<center><h1>Welcome <?php echo $_SESSION['username']; ?>!</h1></center>

<center><h2><a href="index.php">Home</a></h2></center>
<center><h2><a href="insert.php">Insert New Record</a></h2></center>
<center><h2><a href="view.php">View Records</a></h2></center>
<center><h2><a href="logout.php">Logout</a></h><center>
</div>
</body>
</html>
