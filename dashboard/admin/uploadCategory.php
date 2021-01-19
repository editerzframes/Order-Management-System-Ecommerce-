<?php
// Include the database configuration file
include ('dbConfig.php');
header('Location: http://meritech.co.ug/asif/dashboard/admin/ListAllCategories.php/');

$statusMsg = '';

$status=$_POST['status'];
$name=$_POST['name'];

 $statusMsg = "1";

if(isset($_POST["submit"])  && !empty($_POST['status']) && !empty($_POST['name'])){
    
    $status = stripslashes($status);
$status = mysqli_real_escape_string($db, $status);
 $name = stripslashes($name);
$name = mysqli_real_escape_string($db, $name);

        
            
            $insert = mysqli_query($db, "INSERT into categories (category_name, status) VALUES (  '".$name."', '".$status."')");
            
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
}

echo $statusMsg;

?>