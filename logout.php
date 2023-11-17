<?php ob_start();
include("config.php");
$_SESSION["client_id"]=" ";
$_SESSION["client_id"]="";
session_destroy();
header("location:login.php?statusl=Logout Success"); 
?>
 
 
 