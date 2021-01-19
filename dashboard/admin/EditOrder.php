<?php
  include ('session.php');
$var1 = $_GET['value'];
 
     include ('dbConfig.php');
    
$sql = "SELECT * FROM orders WHERE order_id='".$var1."'";
$result = $db->query($sql);

$row = $result->fetch_assoc();
$name = $row["customer_id"];
$time = $row["time"];
$status = $row["status"];
$code = $row["tally_ref"];
$total = $row["total"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('head.php'); ?>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="default" data-active-color="danger">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color=" default | primary | info | success | warning | danger |"
      -->
         <?php include('header.php'); ?>
      </div>
    <div class="main-panel">
      <!-- Navbar -->
      <?php include('navbar.php'); ?>
      <!-- End Navbar -->
      <div class="content">
          <h2>Edit orders: Record</h2>
        <div class="row">
          <div class="col-md-6">
            <div class="card ">
                <form action="updateOrder.php" method="post" enctype="multipart/form-data">
              <div class="card-body ">
                
                  <label>Order No.</label>
                  <div class="form-group">
                    <input type="text" id="oid" name="oid" value= "<?php echo $var1 ?>" class="form-control" readonly>
                  </div>
                  <label>Order Date and Time</label>
                  <div class="form-group">
                    <input type="datetime" id="time" name="time" value= "<?php echo $time ?>" class="form-control" readonly>
                  </div>
                  <label>Client</label>
                  <div class="form-group">
                    <select style="width: 100%;padding: 10px;" name="cname" id="cname">
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
                  <label>Status</label>
                  <div class="form-group">
                    <select style="width: 100%;padding: 10px;" name="status" id="status">
                        <option value="Accepted">Accepted</option>
                        <option value="Decline">Decline</option>
                        
                      </select>
                  </div>
                   <script>
      var objSelect = document.getElementById("status");

//Set selected
setSelectedValue(objSelect);

function setSelectedValue(selectObj) {
    for (var i = 0; i < selectObj.options.length; i++) {
        if (selectObj.options[i].text== "<?php echo $status ?>") {
            selectObj.options[i].selected = true;
            return;
        }
    }
}</script>
                  <label>Preferred Shipping Date</label>
                  <div class="form-group">
                    <input type="date" id="pdate" name="pdate" class="form-control" >
                  </div>
                  <label>Total Price</label>
                  <div class="form-group">
                    <input type="text" id="total" name="total" value= "<?php echo $total ?>" class="form-control" readonly>
                  </div>
                  <label>Tally Refference</label>
                  <div class="form-group">
                    <input type="text" id="code" name="code" value= "<?php echo $code ?>" class="form-control" >
                  </div>
                
              </div>
              <div class="card-footer ">
                <input name="submit" class="btn btn-info btn-round" type="submit" value="Update" onClick="updatefun()"/>
              </div>
                    </form>
                 <script>
      var objSelect121 = document.getElementById("cname");

//Set selected
setSelectedValue121(objSelect121);

function setSelectedValue121(selectObj) {
    for (var i = 0; i < selectObj.options.length; i++) {
        if (selectObj.options[i].value== "<?php echo $name ?>") {
            selectObj.options[i].selected = true;
            return;
        }
    }
}</script>
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
  <script src="http://meritech.co.ug/asif/dashboard/admin/assets/js/core/jquery.min.js"></script>
  <script src="http://meritech.co.ug/asif/dashboard/admin/assets/js/core/popper.min.js"></script>
  <script src="http://meritech.co.ug/asif/dashboard/admin/assets/js/core/bootstrap.min.js"></script>
  <script src="http://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="http://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="http://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="http://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/sweetalert2.min.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="http://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/jquery.validate.min.js"></script>
  <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="http://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="http://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="http://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/bootstrap-datetimepicker.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
  <script src="http://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="http://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="http://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="http://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/fullcalendar/fullcalendar.min.js"></script>
  <script src="http://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/fullcalendar/daygrid.min.js"></script>
  <script src="http://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/fullcalendar/timegrid.min.js"></script>
  <script src="http://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/fullcalendar/interaction.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="http://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Bootstrap Table -->
  <script src="http://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/nouislider.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="http://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="http://meritech.co.ug/asif/dashboard/admin/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="http://meritech.co.ug/asif/dashboard/admin/assets/js/paper-dashboard.min.js?v=2.1.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="http://meritech.co.ug/asif/dashboard/admin/assets/demo/demo.js"></script>
</body>

</html> 