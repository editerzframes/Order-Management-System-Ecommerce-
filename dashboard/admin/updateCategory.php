<?php
// Include the database configuration file
include ('dbConfig.php');
header('Location: http://meritech.co.ug/asif/dashboard/admin/ListAllCategories.php/');

$statusMsg = '';

// File upload path
$id = $_POST['var1'];
$name=$_POST['name'];
$status=$_POST['status'];


if(isset($_POST["submit"])){
    
 $name = stripslashes($name);
$name = mysqli_real_escape_string($db, $name);
 $status = stripslashes($status);
$status = mysqli_real_escape_string($db, $status);

  
            $insert = mysqli_query($db, "UPDATE categories SET category_name = '".$name."', status = '".$status."' WHERE category_id = '".$id."'");
            if($insert){
                $statusMsg = "The file has been uploaded successfully.";
                
            }else{
                $statusMsg = "File upload failed, ".$role." please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
   


?>