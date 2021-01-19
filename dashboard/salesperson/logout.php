<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: http://meritech.co.ug/asif/dashboard/salesperson/index.php/"); // Redirecting To Home Page
}
?>