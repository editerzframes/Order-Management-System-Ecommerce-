<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: http://meritech.co.ug/asif/OrderSite/index.php/"); // Redirecting To Home Page
}
?>