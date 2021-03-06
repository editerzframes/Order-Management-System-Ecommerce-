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
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img//favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 PRO by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../../assets/css/paper-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../../assets/demo/demo.css" rel="stylesheet" />
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
          <div class="sidebar-wrapper">
            <div class="user">
              <div class="photo">
                <img src="../../assets/img/faces/ayo-ogunseinde-2.jpg" />
              </div>
              <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                  <span>
                    Chet Faker
                  </span>
                </a>
                <div class="clearfix"></div>
            
              </div>
            </div>
             <ul class="nav">
          <li>
            <a href="http://localhost/asif/dashboard/admin/examples/plugins.html">
              <i class="nc-icon nc-tap-01"></i>
              <p>Show Site</p>
            </a>
          </li>
          <li class="active">
            <a href="http://localhost/asif/dashboard/admin/examples/dashboard.html">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="http://localhost/asif/dashboard/admin/examples/orders.html">
              <i class="nc-icon nc-book-bookmark"></i>
              <p>Orders</p>
            </a>
          </li>
          <li>
            <a href="http://localhost/asif/dashboard/admin/examples/transactions.html">
              <i class="nc-icon nc-chart-bar-32"></i>
              <p>Transactions</p>
            </a>
          </li>
          <li> 
            <a data-toggle="collapse" href="#componentsExamples">
              <i class="nc-icon nc-layout-11"></i>
              <p>
                Category <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="componentsExamples">
              <ul class="nav">
                <li>
                  <a href="http://localhost/asif/dashboard/admin/ListAllCategories.php">
                    <span class="sidebar-mini-icon">LA</span>
                    <span class="sidebar-normal"> List All </span>
                  </a>
                </li>
                <li>
                  <a href="http://localhost/asif/dashboard/admin/AddNewCategory.php">
                    <span class="sidebar-mini-icon">AN</span>
                    <span class="sidebar-normal"> Add New </span>
                  </a>
                </li> 
              </ul>
            </div>
          </li>
          <li>
            <a data-toggle="collapse" href="#formsExamples">
              <i class="nc-icon nc-ruler-pencil"></i>
              <p>
                Products <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="formsExamples">
              <ul class="nav">
                <li>
                  <a href="http://localhost/asif/dashboard/admin/ListAllProduct.php">
                    <span class="sidebar-mini-icon">LA</span>
                    <span class="sidebar-normal"> List All </span>
                  </a>
                </li>
                <li>
                  <a href="http://localhost/asif/dashboard/admin/AddNewProduct.php">
                    <span class="sidebar-mini-icon">AN</span>
                    <span class="sidebar-normal"> Add New </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a data-toggle="collapse" href="#tablesExamples">
              <i class="nc-icon nc-single-copy-04"></i>
              <p>
                Add Customers <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="tablesExamples">
              <ul class="nav">
                <li>
                  <a href="http://localhost/asif/dashboard/admin/ListAllCF.php">
                    <span class="sidebar-mini-icon">LA</span>
                    <span class="sidebar-normal"> List All </span>
                  </a>
                </li>
                <li>
                  <a href="http://localhost/asif/dashboard/admin/AddNewCF.php">
                    <span class="sidebar-mini-icon">AN</span>
                    <span class="sidebar-normal"> Add New </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a data-toggle="collapse" href="#tablesExamples2">
              <i class="nc-icon nc-single-copy-04"></i>
              <p>
                Add Sales Person <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="tablesExamples2">
              <ul class="nav">
                <li>
                  <a href="http://localhost/asif/dashboard/admin/ListAllSP.php">
                    <span class="sidebar-mini-icon">LA</span>
                    <span class="sidebar-normal"> List All </span>
                  </a>
                </li>
                <li>
                  <a href="http://localhost/asif/dashboard/admin/AddNewSP.php">
                    <span class="sidebar-mini-icon">AN</span>
                    <span class="sidebar-normal"> Add New </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
         
          <li>
            <a href="http://localhost/asif/dashboard/admin/examples/plugins.html">
              <i class="nc-icon nc-box"></i>
              <p>Plugins</p>
            </a>
          </li>
          <li>
            <a href="http://localhost/asif/dashboard/admin/examples/settings.html">
              <i class="nc-icon nc-settings-gear-65"></i>
              <p>Settings</p>
            </a>
          </li>
          <li>
            <a href="http://localhost/asif/dashboard/admin/examples/online.html">
              <i class="nc-icon nc-single-02"></i>
              <p>Who is online</p>
            </a>
          </li>
            
            <li>
            <a href="http://localhost/asif/dashboard/admin/logout.php">
              <i class="nc-icon nc-single-02"></i>
              <p>Logout</p>
            </a>
          </li>
            
        </ul>
          </div>
        </div>
        <div class="main-panel">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
              <div class="navbar-wrapper">
                <div class="navbar-minimize">
                  <button id="minimizeSidebar" class="btn btn-icon btn-round">
                    <i class="nc-icon nc-minimal-right text-center visible-on-sidebar-mini"></i>
                    <i class="nc-icon nc-minimal-left text-center visible-on-sidebar-regular"></i>
                  </button>
                </div>
                <div class="navbar-toggle">
                  <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </button>
                </div>
                <a class="navbar-brand" href="javascript:;">Paper Dashboard 2 PRO</a>
              </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <form>
                  <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Search...">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <i class="nc-icon nc-zoom-split"></i>
                      </div>
                    </div>
                  </div>
                </form>
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link btn-magnify" href="javascript:;">
                      <i class="nc-icon nc-layout-11"></i>
                      <p>
                        <span class="d-lg-none d-md-block">Stats</span>
                      </p>
                    </a>
                  </li>
                  <li class="nav-item btn-rotate dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="nc-icon nc-bell-55"></i>
                      <p>
                        <span class="d-lg-none d-md-block">Some Actions</span>
                      </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn-rotate" href="javascript:;">
                      <i class="nc-icon nc-settings-gear-65"></i>
                      <p>
                        <span class="d-lg-none d-md-block">Account</span>
                      </p>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- End Navbar -->
          <div class="content">
            <div class="container">
              <h2>Products</h2>
              <div class="card" style="width: 100%; box-shadow: 10px 10px 10px grey; padding: 10px;">
                <?php
    include ('dbConfig.php');
    

$sql = "SELECT * FROM products";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    $st1 = 'table table-fluid';
    $st2 = 'myTable';
    echo "<table class='".$st1."' id='".$st2."'>";
     echo "<thead>";
    echo "<tr><th>ID</th><th>Product Name</th><th>Producer</th><th>Product Price</th><th>Product Status</th><th>Catagory</th><th>Action</th></tr>";
     echo "</thead>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         
        $update = 'updatefun()';
       $st3 = 'color: green; padding: 10px;';
        $st4 = 'color: red; padding: 10px;';
        $func1 = 'http://localhost/asif/dashboard/admin/EditCategory.php?value='.$row["product_id"];
        $func2 = 'http://localhost/asif/dashboard/admin/DeleteCategory.php?value='.$row["product_id"];
        $i1 = 'nc-icon nc-check-2';
        $i2 = 'nc-icon nc-simple-remove';
        
        echo "<tr><th>" . $row["product_id"]. "</th>
        <td>" . $row["product_name"]. "</td> 
        <td>" . $row["producer"]. "</td>
        <td>" . $row["price"]. "</td>
        <td>" . $row["status"]. "</td>
        <td>" . $row["category_name"]. "</td>
        <th>
                      <a style='".$st3."' href='".$func1."'><i class='".$i1."' title='Edit'></i></a>
                      <a style='".$st4."' href='".$func2."'><i class='".$i2."' title='Delete'></i></a>
                    
                    </th>
        
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

    mysqli_close($db);

?>
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
  <script src="../../assets/js/core/jquery.min.js"></script>
  <script src="../../assets/js/core/popper.min.js"></script>
  <script src="../../assets/js/core/bootstrap.min.js"></script>
  <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="../../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../../assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../../assets/js/plugins/sweetalert2.min.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../../assets/js/plugins/jquery.validate.min.js"></script>
  <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../../assets/js/plugins/bootstrap-datetimepicker.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
  <script src="../../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../../assets/js/plugins/fullcalendar/fullcalendar.min.js"></script>
  <script src="../../assets/js/plugins/fullcalendar/daygrid.min.js"></script>
  <script src="../../assets/js/plugins/fullcalendar/timegrid.min.js"></script>
  <script src="../../assets/js/plugins/fullcalendar/interaction.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Bootstrap Table -->
  <script src="../../assets/js/plugins/nouislider.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../assets/js/paper-dashboard.min.js?v=2.1.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../../assets/demo/demo.js"></script>
</body>

</html>