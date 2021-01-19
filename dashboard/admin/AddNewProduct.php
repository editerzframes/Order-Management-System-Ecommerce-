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
            <h2>Add new product</h2>
          <div class="row">
            <div class="col-md-6">
              <div class="card ">
                 <form action="uploadProduct.php" method="post" enctype="multipart/form-data">
                <div class="card-body ">
                  
                    <label>Category</label>
                    <div class="form-group">
                      <select style="width: 100%;padding: 10px;" name="category" id="category">
<?php include ('dbConfig.php');
    
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
                    </div>
                    <label>Product Name</label>
                    <div class="form-group">
                      <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <label>Refferal code</label>
                    <div class="form-group">
                      <input type="text"  id="r_code" name="r_code" class="form-control">
                    </div>
                      <label>Producer</label>
                    <div class="form-group">
                      <input type="text"  id="producer" name="producer" class="form-control">
                    </div>
                    <div class="p_img" style="border: rgb(117, 117, 117) 1px solid; padding: 20px;">
                      <label>Produt image</label><br>
                      <input type="file" id="p_image" name="p_image"><br>
                    </div>
                    <div class="p_thumbnail" style="border: rgb(117, 117, 117) 1px solid; padding: 20px;margin-top: 20px;">
                      <label>Produt thumbnail</label><br>
                      <input type="file" id="p_thumb" name="p_thumb"><br>
                    </div>
                     <div class="quantity" style="display: flex; justify-content: space-between; align-items: center;">
                    
                         <div class="qntyUnit">
                        <label>Unit</label>
                        <div class="form-group">
                          <select style="width: 100%;padding: 10px;" name="unit" id="unit">
                              <option value="None">None</option>
                              <option value="Pieces">Pieces</option>
                              <option value="Carton">Carton</option>
                            </select>
                        </div>
                    </div>
                         <div class="qntyNum">
							 <div class="form-group" id="hogya" style="display:none; align-items: center;">
                        <label>Quantity</label>
                        
                    
                            <input type="number"  id="measurement" name="measurement"  class="form-control" placeholder="Quantity">
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
 
    $(function() {
        $('#unit').change(function(){
        var yu = $('#unit').val();
            if (yu == "Carton") {
   $('#hogya').show();
}else{
$('#hogya').hide();
}
        });
    });
    </script>
                    <label>Product Price</label>
                    <div class="form-group">
                      <input type="number"  id="price" name="price" class="form-control">
                    </div>
                    <label>Product Tax</label>
                    <div class="form-group">
                        <input type="checkbox" id="tax" name="tax" style="margin-right: 20px;">
<!--                      <input type="number" id="tax" name="tax" class="form-control">-->
                    </div>
                    <label>RRP</label>
                    <div class="form-group">
                      <input type="number" id="rrp" name="rrp" class="form-control">
                    </div>
                    <label>Product Status</label>
                    <div class="form-group">
                      <select style="width: 100%;padding: 10px;" name="status" id="status">
                          <option value="Active">Active</option>
                          <option value="Passive">Passive</option>
                        </select>
                    </div>
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