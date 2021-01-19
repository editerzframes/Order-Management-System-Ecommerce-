
<?php
include('session.php');
?>

<?php

$var1 = $_GET['value'];
 
     include ('dbConfig.php');
    
$sql = "SELECT * FROM products WHERE product_id='".$var1."'";
$result = $db->query($sql);

$row = $result->fetch_assoc();
$cname = $row["category_name"];
$pname = $row["product_name"];
$rcode = $row["refferal_code"];
$producer = $row["producer"];
$measurement = $row["measurement"];
$unit = $row["unit"];
$price = $row["price"];
$tax = $row["tax"];
$rrp = $row["rrp"];
$status = $row["status"];
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
            <h2>Edit product</h2>
          <div class="row">
            <div class="col-md-6">
              <div class="card ">
                  <form action="updateProduct.php" method="post" enctype="multipart/form-data">
                <div class="card-body ">
                  
                    <label>Catagory </label>
                    <div class="form-group">
                      <select style="width: 100%;padding: 10px;" name="category" id="category">
                         <?php
    include ('dbConfig.php');
    
$sql = "SELECT * FROM categories";
       
   
$result = $db->query($sql);

      if ($result->num_rows > 0) {
    

    // output data of each row
    while($row = $result->fetch_assoc()) {
         
        echo "
         <option value=".$row["category_name"].">".$row["category_name"]."</option>";
                
    }
} 
?>
                        </select>
                        <script>
      var objSelect = document.getElementById("category");

//Set selected
setSelectedValue(objSelect);

function setSelectedValue(selectObj) {
    for (var i = 0; i < selectObj.options.length; i++) {
        if (selectObj.options[i].text== "<?php echo $cname ?>") {
            selectObj.options[i].selected = true;
            return;
        }
    }
}</script>
                    </div>
                    <label>Product Name</label>
                    <div class="form-group">
                      <input type="text" id="name" name="name" value= "<?php echo $pname ?>" class="form-control">
                    </div>
                      <label>Refferal code</label>
                    <div class="form-group">
                      <input type="text"  id="r_code" name="r_code" value= "<?php echo $rcode ?>" class="form-control">
                    </div>
                    <label>Producer</label>
                    <div class="form-group">
                      <input type="text"  id="producer" name="producer" value= "<?php echo $producer ?>" class="form-control">
                    </div>
                   
                      
                        <div class="quantity" style="display: flex; justify-content: space-between; align-items: center;">
                    
                         <div class="qntyUnit">
                        <label>Unit</label>
                        <div class="form-group">
                          <select style="width: 100%;padding: 10px;" name="unit" id="unit">
                              <option value="None">None</option>
                              <option value="Pieces">Pieces</option>
                              <option value="Cartons">Cartons</option>
                            </select>
                        </div>
                    </div>
                                                 <script>
      var objSelect1 = document.getElementById("unit");

//Set selected
setSelectedValue1(objSelect);

function setSelectedValue1(selectObj) {
    for (var i = 0; i < selectObj.options.length; i++) {
        if (selectObj.options[i].text== "<?php echo $unit ?>") {
            selectObj.options[i].selected = true;
            return;
        }
    }
}</script>
                         <div class="qntyNum">
                        <label>Quantity</label>
                        <div class="form-group" style="display: flex; align-items: center;">
                            <input type="checkbox" id="myCheck" name="myCheck" onclick="myFunctionm()" style="margin-right: 20px;">
                            <input type="text"  id="measurement" name="measurement" value= "<?php echo $measurement ?>" style="display: none;" class="form-control" placeholder="Quantity">
                        </div>
                    </div>
<!--
                         <div class="qntyNum">
                        <label>Measurement</label>
                        <div class="form-group">
                            <input type="text" id="measurement" name="measurement"  class="form-control" placeholder="Measurement">
                        </div>
                    </div>
                    
-->
                  </div>
                       <script>
    function myFunctionm() {
      var checkBox = document.getElementById("myCheck");
      var text = document.getElementById("measurement");
      if (checkBox.checked == true){
        text.style.display = "block";
      } else {
         text.style.display = "none";
      }
    }
    </script>
                        
                    <label>Product Price</label>
                    <div class="form-group">
                      <input type="number" id="price" name="price" value= "<?php echo $price ?>" class="form-control">
                    </div>
                    <label>Product Tax</label>
                    <div class="form-group">
                        <input type="checkbox" id="tax" name="tax" style="margin-right: 20px;">
<!--                      <input type="number"  class="form-control">-->
                    </div>
                         <script>
      var taxp = <?php echo $tax ?>;

//Set selected
setSelectedValue6(taxp);

function setSelectedValue6(selectObj) {
   if(selectObj == 18){
       document.getElementById("tax").checked = true;
   }
    else{
        document.getElementById("tax").checked = false;
    }
}</script>
                    <label>RRP</label>
                    <div class="form-group">
                      <input type="number" id="rrp" name="rrp" value= "<?php echo $rrp ?>" class="form-control">
                        <input type="hidden" id="var1" name="var1" value="<?php echo $var1 ?>" />
                    </div>
                    <label>Product Status</label>
                    <div class="form-group">
                      <select style="width: 100%;padding: 10px;" name="status" id="status">
                          <option value="Active">Active</option>
                          <option value="Passive">Passive</option>
                        </select>
                    </div>
                         <script>
      var objSelect2 = document.getElementById("status");

//Set selected
setSelectedValue2(objSelect);

function setSelectedValue2(selectObj) {
    for (var i = 0; i < selectObj.options.length; i++) {
        if (selectObj.options[i].text== "<?php echo $status ?>") {
            selectObj.options[i].selected = true;
            return;
        }
    }
}</script>
                  </div>
                  <div class="card-footer ">
                      <input name="submit" type="submit" class="btn btn-info btn-round" value="Submit" />
<!--                    <button type="submit" class="btn btn-info btn-round">Submit</button>-->
                  </div>
                    </form>  
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