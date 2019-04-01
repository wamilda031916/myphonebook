<?php
   include("connect.php");
   session_start();
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Sales Invoice</title>
  <link rel="stylesheet" href="css/bootstrap2.min.css" />
  <script src="jquery/jquery2.min.js"></script>
  <script src="js/bootstrap3.min.js"></script>
 
 </head>
 <style>
body{
  background-image: url(images/table2.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  width: 100%;
  }
</style>
 <body>
  <br />
  <div class="container">
   <h1 align="center">Sales Invoice</h1>
   <br />
   <form method="post" id="insert_form" action="insert_salesinvoice.php">
    <div class="table-repsonsive">
     <span id="error"></span>
      <div class="col-sm-3">
     <label>Date:</label><input type="date" name="date" class="form-control"/></br>
      <label>Terms:</label><input type="type" name="terms" class="form-control"/></br>
       <td><label>Customer:</label>
                <?php 
                  include "db.php";
                  $sql = "SELECT * FROM customer";
                  $res = mysqli_query($conn, $sql);
                ?>
                <select name="customer" required class="form-control customer" >
  
                <?php while ($line = mysqli_fetch_array($res)){ ?>
                  <option value="<?php echo $line['customer_id']; ?>"><?php echo $line['firstname'].' '.$line['lastname']; ?></option>
                 <?php } ?>
                </select>
              </td>
            </br>
            <td> <label>Products:</label>
                <?php 
                  $sql1 = "SELECT * FROM product";
                  $res1 = mysqli_query($conn,$sql1);

                ?>
                <select id="products" class="form-control product" >
                  <option value=""></option>
                <?php while ($line1 = mysqli_fetch_array($res1)){?>
                  <option value="<?php echo $line1['product_code'] ?>"><?php echo $line1['description']; ?></option>
                 <?php } ?>
                </select>
              </td>
            </br>
   </div>
   <div class="table-responsive">
      <table id="invoice-item-table" class="table table-bordered table-sm">
                  <tr>
                    <th>Product Code</th>
                    <th>Quantity</th>
                    <th>Unit</th>
                    <th>Unit Price</th> 
                    <th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"></span></button></center></th>
                  </tr>
                  <tr>
                    <td><input type="text" name="products[]" id="code1" class="form-control form-control-sm input-sm code"/></td>
                    <td><input type="number" min="1" name="quantity[]" id="quantity1" data-srno="1" class="form-control form-control-sm input-sm quantity"/></td>
                    <td><input type="text" name="unit[]" id="unit1" data-srno="1" class="form-control form-control-sm  input-sm unit"  ></td>
                    <td><input type="number" step="0.01" min="0.00" name="price[]" id="price1" data-srno="1" class="form-control form-control-sm input-sm price"/></td>
                  </tr>               
                </table>
              <td align="right">
                <input type="submit" name="delivery" value="Insert" id="delivery" class="btn btn-info mr-5"/>
                <a href="view_products.php"><button type="button" class="btn btn-success" >Back</button></a>
        </div>
          
     </div>
   </form>
  </div>
  
  
 </body>
</html>

<script>
        $(document).ready(function(){

  var final_total_amount = $('#final_total_amount').text();
  var count = 1;
  $(document).on('change','#products', function(){
    load(count);
  });
  $(document).on('click','.add', function(){
    count += 1;
    $('#quantity').val(count);

    var html_code = ''; 
    html_code += '<tr id="row_id_'+count+'">';
    html_code += '<td><input type="text" name="products[]" id="code'+count+'" class="form-control form-control-sm input-sm code" /></td>';
    html_code += '<td><input type="number" name="quantity[]" min="1" id="quantity'+count+'" data-srno="'+count+'" placeholder="Qty"  class="form-control form-control-sm nput-sm quantity" /></td>';
    html_code += '<td><input type="text" name="unit[]" id="unit'+count+'" placeholder="Unit" data-srno="'+count+'" class="form-control form-control-sm input-sm unit"></td>';
    html_code += '<td><input type="number" name="price[]" min="0.00" step="0.00" placeholder="Price" id="price'+count+'" data-srno="'+count+'" class="form-control form-control-sm input-sm price"></td>';
    html_code += '<td><center><button type="button" name="remove_row" id="'+count+'" class="btn btn-sm btn-danger btn-xs remove_row">Delete</button></td></center></tr>';
    $("#invoice-item-table").append(html_code);
    $(document).on('change','#products', function(){
    load(count);
  });
      
  });
  function load($count){
        var products =  $('#products').val();
    $.ajax({
      url : "loadorders.php",
      method: "POST",
      dataType: "json",
      data: {products:products},
      success : function(data){
        for(x in data){
            $('#code'+count).val(data.product_code);
            $('#price'+count).val(data.price);
            $('#unit'+count).val(data.unit);
          }
      }
    });
  }
  $(document).on('click','.remove_row',function(){
    var row_id = $(this).attr("id");
        $('#row_id_'+row_id).remove();
    count -= 1;
  });


});</script>