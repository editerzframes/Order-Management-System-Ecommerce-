
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('head.php'); ?>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

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
        <h2>Orders</h2>
        <button style="margin-bottom: 50px; border: none; background: white;padding: 10px 20px; border-radius: 20px; box-shadow: 5px 5px 5px gray ; outline: none;"><a href="http://meritech.co.ug/asif/dashboard/admin/NewOrder.php" style="text-decoration: none; color: black;">Add Orders</a></button>
        <div class="card" style="width: fit-content; box-shadow: 10px 10px 10px grey; padding: 10px;">
            
               <?php
    include ('dbConfig.php');
    

$sql = "SELECT * FROM orders";
$result = $db->query($sql);
          
if ($result->num_rows > 0) {
    
    $st1 = 'table table-fluid';
    $st2 = 'myTable';
    echo "<table class='".$st1."' id='".$st2."'>";
     echo "<thead>";
    echo "<tr><th>ID</th><th>Customer Name</th><th>Customer Email</th><th>Order Total</th><th>Order Status</th><th>Order Status</th><th>Order Time</th><th>Action</th></tr>";
     echo "</thead>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         
        $sql45 = "select * from customers where customer_id='".$row["customer_id"]."'";
$result45 = $db->query($sql45)  or die(mysqli_error($db));
$cname = ' ';
$cemail = ' ';
while($row45 = $result45->fetch_assoc()) {
$cname = $row45["customer_name"];
$cemail = $row45["email"];
}
    
        $update = 'updatefun()';
       $st3 = 'color: green';
        $st4 = 'color: red';
        $st5 = 'color: blue';
        $func1 = 'http://meritech.co.ug/asif/dashboard/admin/accepted.php?value='.$row["order_id"];
        $func2 = 'http://meritech.co.ug/asif/dashboard/admin/decline.php?value='.$row["order_id"];
        $func3 = 'http://meritech.co.ug/asif/dashboard/admin/EditOrder.php?value='.$row["order_id"];
        $i1 = 'nc-icon nc-check-2';
        $i2 = 'nc-icon nc-simple-remove';
        $i3 = 'nc-icon nc-simple-delete';
        $i4 = 'nc-icon nc-key-25';
        $delete ='myown('. $row["order_id"].')';
        echo "<tr><th>" . $row["order_id"]. "</th>
        <td>" . $cname. "</td>
        <td>" . $cemail. "</td> 
        <td>" . $row["total"]. "</td>
		 <td>" . $row["order_by"]. "</td>
        <td>" . $row["status"]. "</td>
        <td>" . $row["time"]. "</td>
        <th>
        
                    <a style='".$st3."' href='".$func1."'><i   class='".$i1."' title='Accept'></i></a>
                    <a style='".$st4."' href='".$func2."'><i   class='".$i3."' title='Decline'></i></a>
                    <a style='".$st5."' href='".$func3."'><i   class='".$i4."' title='Edit'></i></a>
                    <a style='".$st4."' onclick='".$delete."'><i   class='".$i2."' title='Delete'></i></a>
                
                    
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
    
    window.location = "http://meritech.co.ug/asif/dashboard/admin/DeleteOrder.php?value="+clicked_id;
    
   
}
                  </script>

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
        confirm("Are you sure, You want to delete order?");
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
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();


      demo.initVectorMap();

    });
  </script>
</body>

</html>