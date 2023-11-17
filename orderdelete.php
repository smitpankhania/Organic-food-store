<?php
include('config.php');

if(isset($_GET['orderid']))
{
$pid=$_GET['orderid'];
echo $sql="delete from sold where orderid='".$pid."'";

if (mysqli_query($conn,$sql)) 
{
 header("location:account.php?delete=success");
	
} 
    
}


if(isset($_GET['addressid']))
{
$addressid=$_GET['addressid'];
echo $sql="update shipping_address set status=0 where address_id='".$addressid."'";

if (mysqli_query($conn,$sql)) 
{
 header("location:saddress.php?address=success");
	
} 
    
}



?>