<?php
// Include the database configuration file
include ('dbConfig.php');
include ('session.php');
header('Location: https://www.meritech.co.ug/asif/dashboard/salesperson/orders.php/');

$statusMsg = '';

$id = $_GET['cid'];

$sql45 = "select * from customers where customer_id='$id'";
$result45 = $connection->query($sql45)  or die(mysqli_error($db));
while($row45 = $result45->fetch_assoc()) {
$e_mail = $row45['l_email'];}


$total = 0;
$oid = $_GET['orderid'];
echo $oid;
$get_pid = $_GET['pid'];
$pid_array = explode(',',$get_pid);
$get_qua = $_GET['qua'];
$qua_array = explode(',',$get_qua);

$i = 0;

 $total = stripslashes($total);
		$total = mysqli_real_escape_string($connection, $total);
    

foreach($pid_array as $pid){
    
	if($pid != "")
	{    	
 		$pid = stripslashes($pid);
		$pid = mysqli_real_escape_string($connection, $pid);
        
        $qua = $qua_array[$i];
		
		 
$sql34 = "SELECT * FROM products WHERE product_id='".$pid."'";
$result34 = $connection->query($sql34);

$row34 = $result34->fetch_assoc();
$price = $row34["price"];
		$price = $price*$qua;

        $total += $price;
        
        $insert = mysqli_query($connection, "INSERT into order_product (order_id, product_id, quantity, price) VALUES (  '".$oid."', '".$pid."', '".$qua."', '".$price."')")  or die(mysqli_error($connection));


		$i++;
	}
}


    $insert1 = mysqli_query($connection, "INSERT into orders (customer_id, total, status, time, order_by) VALUES (  '".$id."', '".$total."', 'Pending', NOW(), '".$snameid."')")  or die(mysqli_error($connection));

if($insert){
    $statusMsg = "The file has been uploaded successfully.";
}

else{
    $statusMsg = "File upload failed, please try again.";
} 

echo $statusMsg;


   $to = $e_mail;
         $subject = "Order is Placed Successfully";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:ceo@gmail.com \r\n";
       //  $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
?>