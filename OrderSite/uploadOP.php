<?php
// Include the database configuration file
include ('dbConfig.php');
include ('session.php');
//include ('session.php');
header('Location: http://meritech.co.ug/asif/OrderSite/products.php/');

$statusMsg = '';

$cid = $_GET['cid'];

$sql45 = "select * from customers where l_email='$cid'";
$result45 = $connection->query($sql45)  or die(mysqli_error($db));
while($row45 = $result45->fetch_assoc()) {
$id = $row45['customer_id'];}



$total = 0;
$oid = $_GET['orderid'];
echo $oid;
$get_pid = $_GET['pid'];
$pid_array = explode(',',$get_pid);
$get_qua = $_GET['qua'];
$qua_array = explode(',',$get_qua);
$get_price = $_GET['price'];
$price_array = explode(',',$get_price);


$i = 0;

 $total = stripslashes($total);
		$total = mysqli_real_escape_string( $connection, $total);
    

foreach($pid_array as $pid){
    
	if($pid != "")
	{    	
 		$pid = stripslashes($pid);
		$pid = mysqli_real_escape_string($connection, $pid);
        
        $qua = $qua_array[$i];
		$price = $price_array[$i];

        $total += $price;
        
        $insert = mysqli_query($connection, "INSERT into order_product (order_id, product_id, quantity, price) VALUES (  '".$oid."', '".$pid."', '".$qua."', '".$price."')")  or die(mysqli_error($connection));


		$i++;
	}
}


    $insert1 = mysqli_query($connection, "INSERT into orders (customer_id, total, status, time,order_by) VALUES (  '".$id."', '".$total."', 'Pending', NOW(), '".$c_namee."')")  or die(mysqli_error($connection));

if($insert){
    $statusMsg = "The file has been uploaded successfully.";
}

else{
    $statusMsg = "File upload failed, please try again.";
} 

echo $statusMsg;


   $to = $login_session;
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