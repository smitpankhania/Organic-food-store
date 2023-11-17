<?php ob_start();
include("config.php");
$email=$_POST["email"];
echo $sql="select * from registration where email='".$email."'";
$query=mysqli_query($conn,$sql);
if($row=mysqli_fetch_assoc($query))
{
echo $p=$row["password"];
echo $mobile=$mnum=$row["mnum"];
$subject="Swaraj Mart Updates";
$msg="Your Account details userid=".$email." & Password=".$p." Thank You https://swarajmart.in/";

include("email.php");
include("smsapi.php");
header("location:login.php?st1=sms");
}
else
{
header("location:login.php?stt=Entered Email id is Not Registered With us");
}
?>