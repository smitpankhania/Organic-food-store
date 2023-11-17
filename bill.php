<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
#top
{
	font-family: Verdana, Geneva, sans-serif;
	position: absolute;
	z-index: 0;
	height: 150px;
	width: 95%;
	top: 120px;
	 
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;	
}

#top_left
{
	 
	position: absolute;
	z-index: 1;
	height: 150px;
	width: 40%;	
	left:300px;
	top:5px;
}
#center1
{
	 
	position: absolute;
	z-index: 2;
	height: 350px;
	width: 95%;
	left: 7px;
	top: 280px;
	 
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
}
table, td, th {
    border: 1px solid black;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th {
    height: 50px;
}
.note {
	font-style: italic;
}
</style>
</head>

<body	>

<img src="images/home/newlogo.png"/>
 
  
<h4>www.pkfashionmart.com,&nbsp;info@pkfashionmart.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Call-+91-8000708899</h4>
 

<div id="top">
<?php include("config.php");


 ?>
<?php session_start();?>
<strong>Name and Address of Customer</strong> 
</br>
 <?php echo $_SESSION['client_name']."&nbsp;&nbsp;".$_SESSION['client_lname'] ?></br>

<?php
  $client_id =$_SESSION['client_id'];
 	$orderid=$_SESSION['orderid']= $_GET['orderid'];
	$sql="select * from sold where orderid='".$orderid."'";
    $qry=mysql_query($sql);
	if($row=mysql_fetch_array($qry))
	{
		$sql2="select * from shipping_address inner join country on country.country_id=shipping_address.country 
		inner join state on state.state_id=shipping_address.state
		inner join city on city.city_id=shipping_address.city
		inner join area on area.area_id=shipping_address.area
		 where address_id='".$row[3]."'";
		$qry2=mysql_query($sql2);
			if($row1=mysql_fetch_assoc($qry2))
			{
				echo $row1["address1"];
				echo "</br>";
				echo $row1["address2"];
				echo "</br>";
				echo $row1["landmark"]." ".$row1["area_name"];
				echo "</br>";
				
				echo $row1["state_name"]." ";
				 
				echo $row1["city_name"];
				echo "</br>";
				echo $row1["country_name"];
				echo "</br>";
				echo "Pin CODE : ".$row1["pincode"];
				echo "</br>";
			}
	}
?>

 

<div id="top_left">
<table border="1">
<tr><td>Customer Id</td><td><?php echo $_SESSION['client_id'] ?></td></tr>
<tr><td>Order Id</td><td> <?php
if(isset($_GET['orderid']))
{
	echo $_GET['orderid'];
}

 ?></td></tr>
<tr><td>Order Date</td><td>
<?php

$sqlld="select * from sold 
where orderid='".$_SESSION['orderid']."'";
$qrtd=mysql_query($sqlld);
if($rd=mysql_fetch_assoc($qrtd)){echo $rd["det"];}
?>


</td></tr>
<tr><td>Mobile </td><td><?php echo $_SESSION['mnum'] ?></td></tr>
<tr><td>Email ID </td><td><?php echo $_SESSION['client_email']?></td></tr>
</table>
</div>

</div>

<div id="center1">
</br>
<table border="1">
<tr><td>Sno</td><td>Product</td><td>QTY</td><td>Rate</td><td>Total</td></tr>

<?php 
$cout=0;
$total=0;
 $sqll="select * from sold 
inner join product on sold.pid=product.pid 
where orderid='".$_SESSION['orderid']."'";
$qrt=mysql_query($sqll);
while($row2=mysql_fetch_array($qrt))
{
	$cout++;
?>
<tr><td><?php echo $cout; ?></td><td><?php echo $row2["pname"]; ?></td><td><?php echo $row2["qty"]; ?></td><td><?php echo $row2["pprice"]; ?></td><td><?php echo $tot=$row2["qty"]*$row2["pprice"]; ?></td></tr>

<?php 
$total=$total+$tot;
} ?>
</table>
<table align="right" width="200px">
<tr><td align="right">Total=</td><td><?php echo $total; ?></td></tr>
<tr><td align="right">Shiping Charges=</td><td><?php $sh=150; echo $sh; ?></td></tr>
<tr><td align="right">VAT=</td><td>--</td></tr>
<tr><td align="right">Ground Total=</td><td><?php echo "Rs ".($total+$sh); ?></td></tr>
<tr><td colspan="2" style="font-style:italic"><?php  
$cheque_amt = $total+$sh ; 
include("num2word.php");

   ?> Only</td></tr>
</table>
<span class="note">This is computer Generated Bill Does not Require Authorize Signature</span> </br></br></br></br></br> 
<p>Click the button to print Your Application.</p>

<button onclick="myFunction()">Print Or Save as PDF now</button>

<script>
function myFunction() {
    window.print();
}
</script>
</div>
</body>
</html>
