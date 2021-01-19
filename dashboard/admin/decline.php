<?php
// Include the database configuration file
include ('dbConfig.php');
header('Location: http://meritech.co.ug/asif/dashboard/admin/orders.php/');

$statusMsg = '';

$id = $_GET['value'];

            $insert = mysqli_query($db, "UPDATE orders SET status = 'Declined' WHERE order_id = '".$id."'") or die(mysqli_error($db));
    
            if($insert){
                $statusMsg = "The file has been uploaded successfully.";
                
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
      
echo $statusMsg;


    
$sql = "SELECT * FROM orders WHERE order_id='".$id."'";
$result = $db->query($sql);

$row = $result->fetch_assoc();
$name = $row["customer_id"];

$sql1 = "SELECT * FROM customers WHERE customer_id='".$name."'";
$result1 = $db->query($sql1);

$row1 = $result1->fetch_assoc();
$cemail = $row1["l_email"];
$sid = $row1["salesman_id"];

$sql2 = "SELECT * FROM salesperson WHERE salesperson_id='".$sid."'";
$result2 = $db->query($sql2);

$row2 = $result2->fetch_assoc();
$semail = $row1["l_email"];

   $to = $cemail;
$to1 = $semail;
         $subject = "Order Declined";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:ceo@gmail.com \r\n";
       //  $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         $retval = mail ($to1,$subject,$message,$header);
 $retval = mail ("ceo@meritech.co.ug",$subject,$message,$header);
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }


?>