<?php include("top.php"); ?>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<div class="w3-container w3-pale-green w3-leftbar w3-border-green">
Congrats...Your Order has been palced successfully</br>
Order id :
<?php
echo $_SESSION["orderid"]; 
date_default_timezone_set("Asia/Kolkata");
$dd= date('Y-m-d'); 
$tt= date('H:i:s');
$ds="Congrats...Your Order has been palced successfully";
$insert="insert into track(custid,orderid,dyte,description,time) values('".$_SESSION["client_id"]."','".$_SESSION["orderid"]."','".$dd."','".$ds."','".$tt."') ";
$query=mysqli_query($conn,$insert);
?>
</div>
<br>
<div class="w3-container w3-pale-red w3-leftbar w3-border-red">
<p>
<a href="trackorder.php?searchinput=<?php echo $_SESSION["orderid"];?>">TRACK NOW</a>
</p>
</div>
</br></br></br></br></br></br></br></br></br></br></br></br>	</br></br> 
<?php  include("bottom.php"); ?>