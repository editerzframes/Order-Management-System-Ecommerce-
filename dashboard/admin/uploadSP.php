<?php
// Include the database configuration file
include ('dbConfig.php');
header('Location: http://meritech.co.ug/asif/dashboard/admin/ListAllSP.php/');

$statusMsg = '';

$status=$_POST['status'];
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$add=$_POST['address'];
$lemail=$_POST['lemail'];
$lpass=$_POST['lpass'];


if(isset($_POST["submit"])  && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['number']) && !empty($_POST['address']) && !empty($_POST['lemail']) && !empty($_POST['lpass'])){
    
    $status = stripslashes($status);
$status = mysqli_real_escape_string($db, $status);
 $name = stripslashes($name);
$name = mysqli_real_escape_string($db, $name);
     $email = stripslashes($email);
$email = mysqli_real_escape_string($db, $email);
     $number = stripslashes($number);
$number = mysqli_real_escape_string($db, $number);
     $add = stripslashes($add);
$add = mysqli_real_escape_string($db, $add);
     $lemail = stripslashes($lemail);
$lemail = mysqli_real_escape_string($db, $lemail);
     $lpass = stripslashes($lpass);
$lpass = mysqli_real_escape_string($db, $lpass);

        
            
            $insert = mysqli_query($db, "INSERT into salesperson (salesperson_name, email, number, address, status, l_email, l_pass) VALUES (  '".$name."', '".$email."', '".$number."', '".$add."', '".$status."', '".$lemail."', '".$lpass."')") or die(mysqli_error($db));;
            
            if($insert){
                $statusMsg = "The file has been uploaded successfully.";
                
            }else{
                
                $statusMsg = "File upload failed, please try again.";
            } 
}

echo $statusMsg;

?>