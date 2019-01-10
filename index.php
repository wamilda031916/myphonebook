<?php
include("auth.php");  ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link href="bootstrap4-offline-docs-master">
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="form">
<h1>W-E-L-C-O-M-E <?php echo $_SESSION['username']; ?>!</h1>
<p><a href="dashboard.php">Dashboard</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>
