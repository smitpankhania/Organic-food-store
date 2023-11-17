<?php
include("config.php"); 

if (isset($_REQUEST['cat']))

{

$cat = $_REQUEST['cat'];



$sql = "Select * from subcategory where cid=".$cat;

 $result=mysql_query($sql);

$mydata = 0;

$mydata .= "<option value='0'>--select--</option>";

 

 

 

while($row=mysql_fetch_row($result))

{

	$mydata .= "<option value='".$row[0]."'>".$row[2]."</option>";

}

echo $mydata;

}

?>

//////////////////////////////////////////////////////////////////////

 

 <?php

 







if (isset($_REQUEST['scat']))

{

$scat = $_REQUEST['scat'];



$sql = "Select * from brand where scid=".$scat;

$result=mysql_query($sql);

$mydata = 0;

$mydata .= "<option value='0'>--select--</option>";

 

 

 

while($row=mysql_fetch_row($result))

{

	

	$mydata .= "<option value='".$row[0]."'>".$row[3]."</option>";

}

echo $mydata;

}









if (isset($_REQUEST['country']))

{

$country = $_REQUEST['country'];



$sql = "Select * from state where country_id=".$country;

$result=mysqli_query($conn,$sql);

$mydata = 0;

$mydata .= "<option value='0'>--select--</option>";

 

 

 

while($row=mysqli_fetch_row($result))

{

	

	$mydata .= "<option value='".$row[1]."'>".$row[2]."</option>";

}

echo $mydata;

}

////////////////







if (isset($_REQUEST['state']))

{

$state = $_REQUEST['state'];



$sql = "Select * from city where state_id=".$state;

$result=mysqli_query($conn,$sql);

$mydata = 0;

$mydata .= "<option value='0'>--select--</option>";

 

 

 

while($row=mysqli_fetch_row($result))

{

	

	$mydata .= "<option value='".$row[2]."'>".$row[3]."</option>";

}

echo $mydata;

}







if (isset($_REQUEST['city']))

{

$city = $_REQUEST['city'];



$sql = "Select * from area where city_id=".$city;

$result=mysqli_query($conn,$sql);

$mydata = 0;

$mydata .= "<option value='0'>--select--</option>";

 

 

 

while($row=mysqli_fetch_row($result))

{

	

	$mydata .= "<option value='".$row[3]."'>".$row[4]."</option>";

}

echo $mydata;

}



?>