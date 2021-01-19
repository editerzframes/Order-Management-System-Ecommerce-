 <?php
  include('dbConfig.php');  
$sql45 = "select * from orders";
$result45 = $db->query($sql45)  or die(mysqli_error($db));

while($row45 = $result45->fetch_assoc()) {
$or_id = $row45["order_id"];
}
$or_id++;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('head.php'); ?>
</head>
  <style>
    .item2{
      width: 100%;
      padding: 10px;
      margin: 10px 0px;
    }
    .styleQty{
      margin: 10px;
      
    }
    .forStyle{
      display: flex;
    }
  </style>
	<script>
			  
function SaveData()
{ 
	//alert("1");
	 var oid = '<?php echo $or_id ?>';
  alert(oid);
  //var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
   //   disp_setting+="scrollbars=yes,width=900, height=400, left=100, top=25"; 
  
  //var docprint=window.open("","",disp_setting); 
  // docprint.document.open(); 
  // docprint.document.write(' <link rel="stylesheet" href="https://meritech.co.ug/asif/OrderSite/products.css">');
  // docprint.document.write('<title>Report Print</title></head><body style="width: 1200px; font-size: 13px; font-family: arial;">');          
   var products = [];
                    //calculate grandtotal
                    //docprint.document.write("Ordered items<br>");
                     var cid = document.getElementById("client").value;
                    var getpid = "";
					var getqua = "";
					var getprice = "";
	var u;
                    for( u = 12; u < i; u++)
                    {
						var pii= "op"+u;
						var dii= "dp"+u;
						
						var number=document.getElementById(pii).value; 
						//alert("1");
                            if(number>0)
                            {
                                var pid = document.getElementById(dii).value;
								getpid += pid + ",";
								getqua += number + ",";
                               // docprint.document.write(pid + " " + number + " " +  "<br>");
								
                            }
						
                    }
	//alert("1");
               window.location.href = "http://meritech.co.ug/asif/dashboard/admin/uploadOP.php?orderid="+oid+"&pid="+getpid+"&qua="+getqua+"&cid="+cid;
//	alert("2");
   //docprint.document.close(); 
   //docprint.focus(); 
}
	</script>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="default" data-active-color="danger">
      
       <?php include('header.php'); ?>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <?php include('navbar.php'); ?>
      <!-- End Navbar -->
      <div class="content">
          <h2>Add new orders</h2>
        <div class="row">
          <div class="col-md-6">
            <div class="card ">
                 
              <div class="card-body ">
               
                  
                  <label>Client</label>
                  <div class="form-group">
                    <select style="width: 100%;padding: 10px;" name="client" id="client">
                        <?php
    include ('dbConfig.php');
    
$sql = "SELECT * FROM customers";
       
   
$result = $db->query($sql);

      if ($result->num_rows > 0) {
    

    // output data of each row
    while($row = $result->fetch_assoc()) {
         
        echo "
         <option value=".$row["customer_id"].">".$row["customer_name"]."</option>";
                
    }
} 
?>
                      </select>
                  </div>
                  
				  
				  <div class="addHere" id="addHere" style="width: 100%;">
                 
					<div id="products-list"></div>
                  </div>
                  <button id="btn" style="margin: 10px 0px;">Add Item</button><br>
                  <label>Preferred Shipping Date</label>
                  <div class="form-group">
                    <input type="date" id="pdate" name="pdate" class="form-control" >
                  </div>
                  
                  <label>Total Price</label>
                  <div class="form-group">
                    <input type="text" id="price" name="price" class="form-control" readonly>
                  </div>
                  <label>Tally Refference</label>
                  <div class="form-group">
                    <input type="text" id="code" name="code" class="form-control">
                  </div>
               
              </div>
              <div class="card-footer ">
             
             <button type="submit" class="btn btn-info btn-round"  onClick="SaveData()">Submit</button>
              </div>
                    
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="https://meritech.co.ug/asif/dashboard/admin/assets/js/core/jquery.min.js"></script>
  <script src="https://meritech.co.ug/asif/dashboard/admin/assets/js/core/popper.min.js"></script>
  <script src="https://meritech.co.ug/asif/dashboard/admin/assets/js/core/bootstrap.min.js"></script>
  <script src="https://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="https://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="https://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="https://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/sweetalert2.min.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="https://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/jquery.validate.min.js"></script>
  <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="https://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="https://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="https://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/bootstrap-datetimepicker.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
  <script src="https://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="https://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="https://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="https://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/fullcalendar/fullcalendar.min.js"></script>
  <script src="https://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/fullcalendar/daygrid.min.js"></script>
  <script src="https://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/fullcalendar/timegrid.min.js"></script>
  <script src="https://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/fullcalendar/interaction.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="https://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Bootstrap Table -->
  <script src="https://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/nouislider.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="https://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="https://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="https://meritech.co.ug/asif/dashboard/admin/assets/js/paper-dashboard.min.js?v=2.1.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="https://meritech.co.ug/asif/dashboard/admin/assets/demo/demo.js"></script>
  <?php

    include ('dbConfig.php');
    
$sql = "SELECT * FROM products";
       
   
$result = $db->query($sql);
	
		$options = "";

      if ($result->num_rows > 0) {
    

    // output data of each row
    while($row = $result->fetch_assoc()) {
         
        $options .= '<option value=' .$row["product_id"].' data-id='.$row["price"].'>'.$row["product_name"].'</option>';
                
    }
}
?>
	  <script>
		  var i = 12;
	  var optionlist = '<?php echo $options; ?>';
     $(document).ready(function(){
       $('#btn').click(function(e){
		 //  var idp = "dp"+i;
		 //  var iop = "op"+i;
		 
         var elem = $('<div class="forStyle"><select class="item2" id = "dp'+i+'" >' + optionlist + '</select><input class="styleQty" oninput="myFunction233('+i+')" type="number"  id =  "op'+i+'"  placeholder="quantity"></div>');
         elem.appendTo('.addHere');
		    i++;
       })
		
     })
	
		var total = 0;
	function myFunction233(ii){
		var ui = "op"+ii;
		var oi = "#dp"+ii;
		var x = document.getElementById(ui).value;
		//alert(x);
		//var element = document.getElementById(oi);
//var dataID = element.getAttribute('data-id');
		var dataID = $(oi).find(':selected').data('id');
		dataID = x*dataID;
		total = total + dataID;
		document.getElementById("price").value = total;
	}
  </script>
	 
</body>

</html> 