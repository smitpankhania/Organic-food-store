<?php ob_start();
include("config.php");
//session_start();
$custid=$_SESSION["client_id"];
$fname=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
 
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$area=$_POST['area'];
$landmark=$_POST['landmark'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$pincode=$_POST['pincode'];



echo $sql="insert into shipping_address(custid,address1,address2,area,landmark,city,state,country,pincode) values ('".$custid."','".$address1."','".$address2."','".$area."','".$landmark."','".$city."','".$state."','".$country."','".$pincode."')";

if (mysqli_query($conn,$sql)) {
    echo "done";
    
    
    //echo $sql2="insert into registration(custid,fname,email,mnum) values ('".$custid."','".$fname."','".$email."','".$mobile."')";

    //$rr=mysqli_query($conn,$sql2);
    
    
header("location:cust_shipping.php?statusadd=success");
	
} 

else {
    echo "Error: " . $sql . "<br>" . mysql_error($conn);
}

 

?>