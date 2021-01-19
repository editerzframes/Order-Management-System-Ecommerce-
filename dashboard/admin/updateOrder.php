<?php
// Include the database configuration file
include ('dbConfig.php');
header('Location: http://meritech.co.ug/asif/dashboard/admin/orders.php/');

$statusMsg = '';

$id=$_POST['oid'];
$time=$_POST['time'];
$cname=$_POST['cname'];
$status=$_POST['status'];
$pdate=$_POST['pdate'];
$total=$_POST['total'];
$code=$_POST['code'];


if(isset($_POST["submit"])){
    
    $oid = stripslashes($oid);
$oid = mysqli_real_escape_string($db, $oid);
 $time = stripslashes($time);
$time = mysqli_real_escape_string($db, $time);
     $cname = stripslashes($cname);
$cname = mysqli_real_escape_string($db, $cname);
     $status = stripslashes($status);
$status = mysqli_real_escape_string($db, $status);
     $pdate = stripslashes($pdate);
$pdate = mysqli_real_escape_string($db, $pdate);
     $total = stripslashes($total);
$total = mysqli_real_escape_string($db, $total);
     $code = stripslashes($code);
$code = mysqli_real_escape_string($db, $code);

        
            
             $insert = mysqli_query($db, "UPDATE orders SET customer_id = '".$cname."', status = '".$status."', preffered_date = '".$pdate."', tally_ref = '".$code."' WHERE order_id = '".$id."'") or die(mysqli_error($db));
            
            if($insert){
                $statusMsg = "The file has been uploaded successfully.";
                
            }else{
                
                $statusMsg = "File upload failed, please try again.";
            } 
}

echo $statusMsg;

?>