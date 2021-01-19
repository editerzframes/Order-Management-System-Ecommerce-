<?php
// Include the database configuration file
include ('dbConfig.php');
header('Location: http://meritech.co.ug/asif/dashboard/admin/ListAllProduct.php/');

$statusMsg = '';

$id = $_POST['var1'];
// File upload path
$category=$_POST['category'];
$name=$_POST['name'];
$code=$_POST['r_code'];
$producer=$_POST['producer'];
$measurement=$_POST['measurement'];
$unit=$_POST['unit'];
$price=$_POST['price'];
$tax=$_POST['tax'];

    if(isset($_POST['tax'])) { 
      $tax= 18; 
    }
else{
    $tax=0;
}

$rrp=$_POST['rrp'];
$status=$_POST['status'];


if(isset($_POST["submit"])){
    
       $category = stripslashes($category);
$category = mysqli_real_escape_string($db, $category);
    
    $name = stripslashes($name);
$name = mysqli_real_escape_string($db, $name);
    
    $code = stripslashes($code);
$code = mysqli_real_escape_string($db, $code);
    
    $producer = stripslashes($producer);
$producer = mysqli_real_escape_string($db, $producer);
    
    $measurement = stripslashes($measurement);
$measurement = mysqli_real_escape_string($db, $measurement);
    
    $unit = stripslashes($unit);
$unit = mysqli_real_escape_string($db, $unit);
    
    $price = stripslashes($price);
$price = mysqli_real_escape_string($db, $price);
    
    $tax = stripslashes($tax);
$tax = mysqli_real_escape_string($db, $tax);
    
    $rrp = stripslashes($rrp);
$rrp = mysqli_real_escape_string($db, $rrp);
    
    $status = stripslashes($status);
$status = mysqli_real_escape_string($db, $status);

  
            $insert = mysqli_query($db, "UPDATE products SET category_name = '".$category."', product_name = '".$name."', refferal_code = '".$code."', producer = '".$producer."',measurement = '".$measurement."',unit = '".$unit."',price = '".$price."',tax = '".$tax."',rrp = '".$rrp."', status = '".$status."' WHERE product_id = '".$id."'") or die(mysqli_error($db));
    
            if($insert){
                $statusMsg = "The file has been uploaded successfully.";
                
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }
else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
echo $statusMsg;
?>