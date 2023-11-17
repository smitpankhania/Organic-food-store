<?php ob_start();
include("config.php");
$fname=$_POST['fname'];
$email=$_POST['email'];
$passwrd=$_POST['passwrd'];
$mobile=$mnum=$_POST['mnum'];
$_SESSION["client_mnum"]==$row['mnum'];

$msg="Welcome to https://swarajmart.in Userid: ".$email."& password :".$passwrd."  Thank you.";
$subject="Swaraj Mart Updates";

$sql="insert into registration(fname,email,password,mnum,type) values ('".$fname."','".$email."','".$passwrd."','".$mnum."','customer')";

if (mysqli_query($conn,$sql)) {

include("email.php");    
include("smsapi.php");
header("location:login.php?status=success");
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>