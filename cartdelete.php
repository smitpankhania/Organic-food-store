<?php ob_start();
include("config.php");
$sql="delete from cart where pid='".$_GET['pid']."'";
$result=mysqli_query($conn,$sql);
header("location:cart.php?status=deleted");
?>