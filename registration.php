<?php

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="bootstrap/bootstrap/css/main.css">
<link rel="stylesheet" type="text/css" href = "css/register.css" />
<style>
	body{
	background-image: url(images3.png);
	background-size: cover;
	background-repeat: no-repeat;
	width: 100%;
	}
</style>
</head>
<body>
<?php
	require('db.php');
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']);   
		$username = mysqli_real_escape_string($con,$username); 
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `admin` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><center><h1>You are registered successfully.</h></center><br/><center>Click here to <a href='login.php'>Login</a></center></div>";
        }
    }else{
?>
<div class="header">
<center><h1>Registration Form</h1></center>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>
