
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
           
              <h2>Salespersons</h2>
              <div class="card" style="width: 100%; box-shadow: 10px 10px 10px grey; padding: 10px;">
                      <?php
    include ('dbConfig.php');
    

$sql = "SELECT * FROM salesperson";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    $st1 = 'table table-fluid';
    $st2 = 'myTable';
    echo "<table class='".$st1."' id='".$st2."'>";
     echo "<thead>";
    echo "<tr><th>ID</th><th>Salesperson Name</th><th>Salesperson Email</th><th>Phone No.</th><th>Address</th><th>Status</th><th>Action</th></tr>";
     echo "</thead>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         
        $update = 'updatefun()';
       $st3 = 'color: green; padding: 10px;';
        $st4 = 'color: red; padding: 10px;';
        $func1 = 'http://meritech.co.ug/asif/dashboard/admin/EditSP.php?value='.$row["salesperson_id"];
        $func2 = 'http://meritech.co.ug/asif/dashboard/admin/DeleteCategory.php?value='.$row["salesperson_id"];
        $i1 = 'nc-icon nc-check-2';
        $i2 = 'nc-icon nc-simple-remove';
         $delete ='myown('. $row["salesperson_id"].')';
        
        echo "<tr><th>" . $row["salesperson_id"]. "</th>
        <td>" . $row["salesperson_name"]. "</td> 
        <td>" . $row["l_email"]. "</td>
        <td>" . $row["number"]. "</td>
        <td>" . $row["address"]. "</td>
        <td>" . $row["status"]. "</td>
        <th>
                      <a style='".$st3."' href='".$func1."'><i class='".$i1."' title='Edit'></i></a>
                      <a style='".$st4."' onclick='".$delete."'><i class='".$i2."' title='Delete'></i></a>
                    
                    </th>
        
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

    mysqli_close($db);

?>
               <script>
       
function myown(txt) {
  var txt;
      var e = window.event,
       btn = e.target || e.srcElement;
  
  if (confirm("Are you sure you want to delete this?")) {
    okPressed(txt);
  } else {
//     cancel pressed
  }
}

function okPressed(clicked_id){
    
    window.location = "http://meritech.co.ug/asif/dashboard/admin/DeleteSP.php?value="+clicked_id;
    
   
}
                  </script>         


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