<?php include("connect.php");

$customer = $_POST['customer'];
$terms = $_POST['terms'];
$product = $_POST['products'];
$qty = $_POST['quantity'];
$unit = $_POST['unit'];
$price = $_POST['price'];
$date = $_POST['date'];
$sql = "";
$sales = array();

$insert = "INSERT INTO sales_invoice(customer_id,date,terms) VALUES($customer,'$date','$terms')";
$res = mysqli_query($conn, $insert);


$select = "SELECT sales_number FROM sales_invoice ORDER BY sales_number DESC LIMIT 1";
$res1 = mysqli_query($conn, $select);
$row = mysqli_fetch_array($res1);

for ($num = 0; $num < count($_POST['products']); $num++){
  $sales[]=$row['sales_number'];
}


$i = 0;
while($i < count($_POST['products'])){
  $product1 = mysqli_real_escape_string($conn,$product[$i]);
  $qty1 = mysqli_real_escape_string($conn,$qty[$i]);
  $unit1 = mysqli_real_escape_string($conn,$unit[$i]);
  $price1 = mysqli_real_escape_string($conn,$price[$i]);
  $sales1 = mysqli_real_escape_string($conn,$sales[$i]);
  
  $sql = "INSERT INTO sales_item(sales_number,product_code,quantity,unit,unit_price) VALUES($sales1,$product1,$qty1,'$unit1',$price1)";
  mysqli_query($conn,$sql);
  $i++;
}
echo $sql;
if($sql == true){
  echo '<script>window.location.href="sales_invoice.php";</script>';
}
  