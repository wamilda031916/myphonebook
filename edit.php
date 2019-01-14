<?php
 
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from new_record where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link href="bootstrap-4.0.0-beta.3-dist">
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div class="form">
<center><p><a href="dashboard.php">Dashboard</a> | <a href="insert.php">Insert New Record</a> | <a href="logout.php">Logout</a></p></center>
<center><h1>Update Record</h1></center>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$trn_date = date("Y-m-d H:i:s");
$firstname =$_REQUEST['firstname'];
$lastname =$_REQUEST['lastname'];
$age =$_REQUEST['age'];
$address =$_REQUEST['address'];
$number =$_REQUEST['number'];

$update="update new_record set trn_date='".$trn_date."', firstname='".$firstname."', lastname='".$lastname."', age='".$age."', address='".$address."'  where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br><a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="firstname" placeholder="Enter your Firstname" required value="<?php echo $row['firstname'];?>" /></p>
<p><input type="text" name="lastname" placeholder="Enter your Lastname" required value="<?php echo $row['lastname'];?>" /></p>
<p><input type="text" name="age" placeholder="Enter your Age" required value="<?php echo $row['age'];?>" /></p>
<p><input type="text" name="address" placeholder="Enter your Address" required value="<?php echo $row['address'];?>" /></p>
<p><input type="text" name="number" placeholder="Enter your Number" required value="<?php echo $row['number'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>

</div>
</div>
</body>
</html>
