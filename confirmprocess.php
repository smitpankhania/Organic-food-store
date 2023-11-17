<?php include("config.php");
if(isset($_SESSION["client_id"]) && isset($_SESSION["address_id"]))
{
   
  date_default_timezone_set("Asia/Kolkata");
  $datee=date('Y/m/d');
  $ord= "SM".date('dmYHis');  
  echo $timee=date('H:i:s');
 
 
 $_SESSION["orderid"]=$ord;
 $sql="select * from cart where userid='".$_SESSION["client_id"]."'";
 $result=mysqli_query($conn,$sql);
 
 while($row=mysqli_fetch_array($result))
 {  
 		 	$pid=$row['pid'];
     	 	$qty=$row['qty'];
	
	 
	
echo $sql2="insert into sold(orderid,custid,address_id,pid,qty,det,order_time) values('".$ord."','".$_SESSION["client_id"]."','".$_SESSION["address_id"]."','".$pid."','".$qty."','".$datee."','".$timee."')";
$result1=mysqli_query($conn,$sql2);
 
	 
 }
 
  $sql3="delete from cart where userid='".$_SESSION["client_id"]."' ";
  $result3=mysqli_query($conn,$sql3);
  
//////////////confirmation by sms & mail ////////////  
$sql="select * from registration where custid='".$_SESSION["client_id"]."'";
$query=mysqli_query($conn,$sql);
if($row1=mysqli_fetch_array($query))
{
echo $email=$row1["email"];
echo $mobile=$mnum=$row1["mnum"];
$subject="Shopping Updates";
$msg="Your order has been placed successfully,oid=".$ord." we will send the notification after approval. Swaraj Mart Thanks You";
include("smsapi.php");
include("email.php");

}
  
///////////////////////////////////////////// 
header("location:success.php");  
}

?> 