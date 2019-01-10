<?php
include("auth.php");  ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link href="bootstrap-4.0.0-beta.3-dist">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div class="form">
<center><h1>W-E-L-C-O-M-E <?php echo $_SESSION['username']; ?>!</h1></center>
<center><h2><a href="dashboard.php">Dashboard</a></h2></center>
<center><h2><a href="logout.php">Logout</a></h2></center>
</div>
</body>
</html>
