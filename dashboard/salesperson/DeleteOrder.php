<?php

$var1 = $_GET['value'];

//echo '<script type="text/javascript"> ';
// 
//    echo '  if (confirm("Are you sure you want to delete this?")) { '; doSomething($var1); '}';
////    echo 
////    echo '  ';
////    echo '  else{';
    echo doSomething($var1);
////    echo '  }';
//    echo '</script>';

function doSomething($var) {
          include ('dbConfig.php');

$sql1 = "DELETE FROM orders WHERE order_id='".$var."' ";
$result1 = $db->query($sql1);
      if($result1){
         
               echo "<script> location.href='http://meritech.co.ug/asif/dashboard/salesperson/orders.php/'; </script>";
            }
}

  ?>