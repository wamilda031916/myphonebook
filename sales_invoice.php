<?php
//index.php

$servername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "aj catering";
 $conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);
function fill_unit_select_box($connect)
{ 
 $output = '';
 $query = "SELECT * FROM customer ORDER BY customer_id ASC";
 $statement = $conn->prepare($query);
 $statement->execute();
 $res = $statement->fetchAll();
 foreach($res as $row)
 {
  $output .= '<option value="<?php echo $row["firstname"]; ?>"><?php echo $row["lastname"].", " ?></option>';
 }
 return $output;
}
{ 
 $output = '';
 $query = "SELECT product_code, quanity, unit, unit_price
FROM sales_invoice, sales_item
WHERE sales_invoice.sales_number = sales_item.sales_number";
 $statement = $conn->prepare($query);
 $statement->execute();
 $res = $statement->fetchAll();
 foreach($res as $row)
 {
  $output .= '<option value="<?php echo $row["product_id"]; ?>"><?php echo $row[1] ?></option>';
 }
 return $output;
}

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Sales Invoice</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h4 align="center">Sales Invoice</h4>
   <br />
   <form method="post" id="insert_form">
    <div class="table-repsonsive">
     <span id="error"></span>
     <table class="table table-bordered" id="item_table">
      <tr>
        <th>Customer</th>
        <th>Select Product</th>
       <th>Enter Quantity</th>
       <th>Enter Unit</th>
       <th>Select Unit Price</th>
       <th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"></span></button></th>
      </tr>
     </table>
     <div align="center">
      <input type="submit" name="submit" class="btn btn-info" value="Insert" />
      <form action="product.php">
          <button type="submit" class="btn btn-success">Back</button>
        </form>
     </div>
    </div>
   </form>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $(document).on('click', '.add', function(){
  var html = '';
  html += '<tr>';
  html += '<td><select name="lastname[]" class="form-control lastname"><option value="">Customer</option><?php echo fill_unit_select_box($connect); ?></select></td>';
  html += '<td><select name="description[]" class="form-control description"><option value="">Select Product</option><?php echo fill_unit_select_box($connect); ?></select></td>';
  html += '<td><input type="text" name="quantity[]" class="form-control quantity" /></td>';
  html += '<td><input type="text" name="unit[]" class="form-control unit" /></td>';
    html += '<td><input type="text" name="unit_price[]" class="form-control unit_price" /></td>';
  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
  $('#item_table').append(html);
 });
 
 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });
 
 $('#insert_form').on('submit', function(event){
  event.preventDefault();
  var error = '';
  $('.description').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Name at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.quantity').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter  Quantity at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.unit').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Select nit at "+count+" Row</p>";
    return true;
   }
    $('.unit_price').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Select unit_price at "+count+" Row</p>";
    return false;
   }
   count = count >1;
  });
  var form_data = $(this).serialize();
  if(error == '')
  {
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     if(data == 'ok')
     {
      $('#item_table').find("tr:gt(0)").remove();
      $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
     }
    }
   });
  }
  else
  {
   $('#error').html('<div class="alert alert-danger">'+error+'</div>');
  }
 });
 
});
</script>