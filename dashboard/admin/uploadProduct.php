<?php
// Include the database configuration file
include ('dbConfig.php');
header('Location: http://meritech.co.ug/asif/dashboard/admin/ListAllProduct.php/');

$statusMsg = '';

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

if(($unit == "Pieces") || ($unit == "None")) { 
      $measurement= 0; 
    }

$rrp=$_POST['rrp'];
$status=$_POST['status'];

$targetDir1 = "uploadImage/";
$fileName1 = basename($_FILES["p_image"]["name"]);

$targetFilePath1 = $targetDir1 . $fileName1;
$fileType1 = pathinfo($targetFilePath1,PATHINFO_EXTENSION);


$targetDir2 = "uploadThumb/";
$fileName2 = basename($_FILES["p_thumb"]["name"]);

$targetFilePath2 = $targetDir2 . $fileName2;
$fileType2 = pathinfo($targetFilePath2,PATHINFO_EXTENSION);


 $statusMsg = "1";

if(isset($_POST["submit"]) && !empty($_FILES["p_image"]["name"]) && !empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['unit'])){
    
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
   
    
    
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType1, $allowTypes) && in_array($fileType2, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES['p_image']['tmp_name'], $targetFilePath1)){
            if(move_uploaded_file($_FILES['p_thumb']['tmp_name'], $targetFilePath2)){
            
           
            
            $insert = mysqli_query($db, "INSERT into products (category_name, product_name, refferal_code, producer,  product_image, image_uploaded_on, product_thumbnail, thumb_uploaded_on, measurement, unit, price, tax, rrp, status) VALUES (  '".$category."', '".$name."', '".$code."', '".$producer."',  '".$fileName1."', NOW(), '".$fileName2."', NOW(), '".$measurement."' , '".$unit."' , '".$price."' , '".$tax."' , '".$rrp."' , '".$status."' )");
            
            if($insert){
                $statusMsg = "The file has been uploaded successfully.";
                
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
         }else{
            $statusMsg = "Sorry, there was an error uploading your file2.";
        }
        
        }else{
            $statusMsg = "Sorry, there was an error uploading your file1.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

echo $statusMsg;

?>