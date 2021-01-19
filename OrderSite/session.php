<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost:3306", "asif_username", "asif_password@00");
// Selecting Database
$db = mysqli_select_db($connection, "asif_order");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query( $connection, "select * from customers where l_email='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['l_email'];
$id = $row['customer_id'];
$c_namee = $row['customer_name'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header("Location: http://meritech.co.ug/asif/OrderSite/index.php/"); // Redirecting To Home Page
}
?>