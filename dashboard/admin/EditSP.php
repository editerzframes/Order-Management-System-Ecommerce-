<?php
include('session.php');
?>

<?php

$var1 = $_GET['value'];
 
     include ('dbConfig.php');
    
$sql = "SELECT * FROM salesperson WHERE salesperson_id='".$var1."'";
$result = $db->query($sql);

$row = $result->fetch_assoc();
$name = $row["salesperson_name"];
$email = $row["email"];
$number = $row["number"];
$add = $row["address"];
$sp = $row["status"];
$lemail = $row["l_email"];
$lpass = $row["l_pass"];


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
            <h2>Edit Salesperson</h2>
          <div class="row">
            <div class="col-md-6">
              <div class="card ">
                  <form action="updateSP.php" method="post" enctype="multipart/form-data">
                <div class="card-body ">
                    <label>Salesperson Name</label>
                    <div class="form-group">
                      <input type="text" id="name" name="name"  value= "<?php echo $name ?>" class="form-control">
                    </div>
                    <label>Salesperson Email</label>
                    <div class="form-group">
                      <input type="email" id="email" name="email" value= "<?php echo $email ?>" class="form-control">
                    </div>
                    <label>Salesperson Phone No.</label>
                    <div class="form-group">
                      <input type="number" id="number" name="number" value= "<?php echo $number ?>" class="form-control">
                    </div>
                    <label>Salesperson Address</label>
                    <div class="form-group">
                      <input type="text" id="address" name="address" value= "<?php echo $add ?>" class="form-control">
                    </div>
                    <label>Status</label>
                    <div class="form-group">
                      <select style="width: 100%;padding: 10px;" name="status" id="status">
                          <option value="Active">Active</option>
                          <option value="Passive">Passive</option>
                        </select>
                    </div>
                    <div class="quantity" style="display: flex; justify-content: space-between; align-items: center;">
                      <div class="cust_email" style="flex: 1;">
                          <label>Email</label>
                          <div class="form-group">
                              <input type="email"  id="lemail" name="lemail" value= "<?php echo $lemail ?>" class="form-control" placeholder="Email">
                          </div>
                      </div>
                      <div class="cusr_password" style="flex: 1; margin-left: 10px;">
                          <label>Password</label>
                          <div class="form-group">
                            <input type="text" id="lpass" name="lpass" value= "<?php echo $lpass ?>" class="form-control" placeholder="Password">
                              <input type="hidden" id="var1" name="var1" value="<?php echo $var1 ?>" />
                          </div>
                      </div>
                    </div>
                  
                </div>
                <div class="card-footer ">
                  <input name="submit" class="btn btn-info btn-round" type="submit" value="Update" onClick="updatefun()"/>
                </div>
                    </form>
              </div>
            </div>
          </div>
        </div>
            
            <script>
      var objSelect = document.getElementById("status");

//Set selected
setSelectedValue(objSelect);

function setSelectedValue(selectObj) {
    for (var i = 0; i < selectObj.options.length; i++) {
        if (selectObj.options[i].text== "<?php echo $sp ?>") {
            selectObj.options[i].selected = true;
            return;
        }
    }
}</script>
            
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