<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Title Page</title>
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/multi-select.css">
</head>
<body>
  <center><h1>Sales Invoice</h1></center>
  <center>
    <h4>Customer:
  	
                <?php 
                  include "connect.php";
                  $sql = "SELECT * FROM customer";
                  $res = mysqli_query($conn, $sql);
                ?>
                <select name= "customer" required>
                  <option value=""></option>
                <?php while ($line = mysqli_fetch_array($res)){ ?>
                  <option value="<?php echo $line['customer_id']; ?>"><?php echo $line[1] ?></option>
                <?php } ?>
                </select>
    </h4>
  </center>
<center><div>
              <h4>Products:
                <?php 
                  include "connect.php";
                  $sql = "SELECT * FROM product";
                  $res = mysqli_query($conn, $sql);
                ?>
                <select name= "section" required>
                  <option value=""></option>
                <?php while ($line = mysqli_fetch_array($res)){ ?>
                  <option value="<?php echo $line['product_code']; ?>"><?php echo $line[1] ?></option>
                <?php } ?>
                </select>
              </h4>
          </div>
</center>
</body>

</html>
