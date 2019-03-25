


<?php

//add.php

include('connect.php');

$data = array(
 ':product_code'  => $_POST['product_code'],
 ':customer_id' => $_POST['customer_id']
);

$query = "
 INSERT INTO sales_invoice (terms) VALUES (:terms)
";

$statement = $conn->prepare($query);

if($statement->execute($data))
{
 echo 'Category Added';
}


?>