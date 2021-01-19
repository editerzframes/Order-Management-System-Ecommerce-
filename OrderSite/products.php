<?php
  include('session.php');
  include ('dbConfig.php');
    
$sql45 = "select * from orders";
$result45 = $db->query($sql45)  or die(mysqli_error($db));
$or_id = 0;
while($row45 = $result45->fetch_assoc()) {
$or_id = $row45["order_id"];

}
$or_id++;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://meritech.co.ug/asif/OrderSite/products.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<script language="javascript" type="text/javascript"> 	
function Clickheretoprint()
{ 
     var oid = '<?php echo $or_id ?>';
  
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=900, height=400, left=100, top=25"; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write(' <link rel="stylesheet" href="products.css">');
   docprint.document.write('<title>Report Print</title></head><body style="width: 1200px; font-size: 13px; font-family: arial;">');          
   var products = [];
                    //calculate grandtotal
                    docprint.document.write("Ordered items<br>");
                    var prods = document.querySelectorAll(".quantity");
                    var q =0;
         
					var getpid = "";
					var getqua = "";
					var getprice = "";

                    for(let row of prods)
                    {
                            if(Number.parseFloat(row.value)>0)
                            {
                                var pid = row.dataset.id;
								getpid += pid + ",";
								getqua += row.value + ",";
                                var pprice = document.getElementById(pid+"total").value;
								getprice += pprice + ",";
                                var prod = document.getElementById(pid).innerText;
                                docprint.document.write(prod + " " + row.value + " " + pprice + "<br>");
                            }
                    }
var totalprint = document.querySelector(".grandtotal").innerText;
					window.location.href = "http://meritech.co.ug/asif/OrderSite/uploadOP.php?orderid="+oid+"&pid="+getpid+"&qua="+getqua+"&price="+getprice+"&total="+totalprint+"&cid="+'<?php echo $user_check ?>';

    docprint.document.write(totalprint);
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
</head>
<body>
    <div class="printbtn"><button  style="float:right; border-radius:5px; border: 1px solid red; width:50px;" class="btn btn-success"><a href="javascript:Clickheretoprint()"> Order</a></button></div><br>
    
    <button  style="float:right; border-radius:5px; border: 1px solid red; width:50px;" class="btn btn-success"><a href="http://meritech.co.ug/asif/OrderSite/logout.php"> Logout</a></button>
    
    <div class="card" id="card">
        <h1>Products</h1>
        <table style="width:80%" id ="ordertbl">
            <tr>
              <th>Product Name</th>
              <th>Tax (%)</th> 
              <th>Single Price ($)</th>
              <th>Quantity</th>
              <th>Total</th>
            </tr>
            <?php
                
//   include ('db.php');
$sql = "SELECT * FROM categories";
$result = $db->query($sql);

if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
         $st1 = 'text-align: center;padding: 10px;';
         $st2 = '5';
         echo "<tr><td  colspan='".$st2."'><p style='".$st1."'>".$row["category_name"]."</p></td></tr>";
         
         $sql1 = "SELECT * FROM products WHERE category_name ='".$row["category_name"]."'";
$result1 = $db->query($sql1);

if ($result1->num_rows > 0) {
     while($row1 = $result1->fetch_assoc()) {
         
     $imageURL = 'http://meritech.co.ug/asif/dashboard/admin/uploadImage/'.$row1["product_image"];
       
       $delete ='myown()';
        $st4 = 'qty';
         $st5 = 'number';
         $st6 = 'total';
         $st7 = 'price';
         $st8 = 'tax';
         // $update = 'calculateAmount('.$row1["product_id"].$st8.',' .$row1["product_id"].$st7.','.$row1["product_id"].$st4.','.$row1["product_id"].$st6.')';
        echo "<tr>
        
         <td id = " . $row1["product_id"].">
                  <img src='".$imageURL."'>
                  <p>" . $row1["product_name"]."</p>
         </td>
             <td><input id='".$row1["product_id"].$st8."' type='".$st5."' readonly value=". $row1["tax"]. "></td>
              <td><input id='".$row1["product_id"].$st7."' type='".$st5."' readonly value=". $row1["price"]. "></td>"; ?>
              <td><input id="<?php echo $row1["product_id"].$st4; ?>" class="quantity" min ="0"  value="0" data-id = "<?php echo $row1["product_id"]; ?>"  type="<?php echo $st5; ?>" oninput="calculateAmount(this.dataset.id)"></td>
       <?php  echo "<td><input id='".$row1["product_id"].$st6."' type='".$st5."' readonly class='total' ></td></tr>";
    }
}        
      }  
} 
           
//            else {
//    echo "0 results";
//}
       mysqli_close($db);

?>        
            </table>
            <center><div class="grandtotal">Grand Total:</div></center>
    </div>
</body>
<script>
 function calculateAmount(id) {
     var tax1 = document.getElementById(id+'tax').value;
     var price1 = document.getElementById(id+'price').value;
     var quantity1 = document.getElementById(id+'qty').value;
     var total1 = document.getElementById(id+'total').value;
  // alert(tax1 + price1 + quantity1 + total1);
                var total_price = quantity1 * price1;
     var total_tax = tax1 * total_price * 0.01;
     total_price = total_price + total_tax;
     //alert(total_price);
     document.getElementById(id+'total').value = total_price;
     cal_grand();
            }
            function roundTo(value, places){
                var power = Math.pow(10, places);
                return Math.round(value * power) / power;
                }

                function cal_grand()
                {
                    //calculate grandtotal
                    var mytb = document.querySelectorAll(".total");
                    var g_total =0.00;
                    for(let row of mytb)
                    {
                    g_total = g_total + Number.parseFloat(row.value);
                    }
                    document.querySelector(".grandtotal").innerText = roundTo(g_total,2);
                }
                cal_grand();

                function prod_qty()
                {
                    var products = [];
                    //calculate grandtotal
                    var prods = document.querySelectorAll(".quantity");
                    var q =0;
                    for(let row of prods)
                    {
                            if(Number.parseFloat(row.value)>0)
                            {
                                var pid = row.dataset.id;
                                var prod = document.getElementById(pid).innerText;
                                document.write(prod);
                            }
                    }

                }
</script>
</html>
