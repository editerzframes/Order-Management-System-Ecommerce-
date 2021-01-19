<!--
=========================================================
* Paper Dashboard 2 PRO - v2.1.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2-pro
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('head.php'); ?>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <script
src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
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
            <div class="container">
              <h2>Catagories</h2>
              <div class="card" style="width: 100%; box-shadow: 10px 10px 10px grey; padding: 10px;">
                  <?php
    include ('dbConfig.php');
    

$sql = "SELECT * FROM categories";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    $st1 = 'table table-fluid';
    $st2 = 'myTable';
    echo "<table class='".$st1."' id='".$st2."'>";
     echo "<thead>";
    echo "<tr><th>ID</th><th>Catagory Name</th><th>Catagory Status</th><th>Action</th></tr>";
     echo "</thead>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         
        $update = 'updatefun()';
       $st3 = 'color: green; padding: 10px;';
        $st4 = 'color: red; padding: 10px;';
        $func1 = 'http://meritech.co.ug/asif/dashboard/admin/EditCategory.php?value='.$row["category_id"];
        $func2 = 'http://meritech.co.ug/asif/dashboard/admin/DeleteCategory.php?value='.$row["category_id"];
        $i1 = 'nc-icon nc-check-2';
        $i2 = 'nc-icon nc-simple-remove';
        $delete ='myown('. $row["category_id"].')';
        echo "<tr><th>" . $row["category_id"]. "</th>
        <td>" . $row["category_name"]. "</td> 
        <td>" . $row["status"]. "</td>
        <th>
                      <a style='".$st3."' href='".$func1."'><i class='".$i1."' title='Edit'></i></a>
                      <a style='".$st4."' onclick='".$delete."' ><i class='".$i2."' title='Delete'></i></a>
                    
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
    
    window.location = "http://meritech.co.ug/asif/dashboard/admin/DeleteCategory.php?value="+clicked_id;
    
   
}
                  </script>
<!--
                <table class="table table-fluid" id="myTable">
                <thead>
                <tr><th>ID</th><th>Catagory Name</th><th>Catagory Status</th><th>Action</th></tr>
                </thead>
                <tbody>
                  <tr><th>1</th><td>Ava Addams</td><td>Pass1234</td>
                    <th>
                      <a href="./EditCatagory.html" style="color: green; padding: 10px;"><i class="nc-icon nc-check-2" title="Edit"></i></a>
                      <a href="" style="color: red; padding: 10px;" onclick=" myFunction()"><i class="nc-icon nc-simple-remove" title="Delete"></i></a>
                    
                    </th></tr>
                </tbody>
                </table>
-->
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
  <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
    <script>
      function myFunction() {
        confirm("Are you sure, You want to delete catagory?");
      }
      </script>
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