<?php include("top.php"); ?>
<?php //  include("center.php"); ?>
<?php //include("products.php"); ?>
<?php  //include("category.php"); ?>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

<script>
function myFunction() {
   
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>



<div class="w3-container w3-pale-blue w3-leftbar w3-border-blue">
<p>				  
<?php
$_SESSION["address_id"];
 	$sql = "SELECT * FROM   shipping_address 
  	inner join registration on registration.custid=shipping_address.custid
	where shipping_address.custid='".$_SESSION["client_id"]."' and
    shipping_address.address_id='".$_SESSION["address_id"]."'  ";

$result =mysqli_query($conn,$sql);
if($row = mysqli_fetch_array($result))
{

					  echo "Name : ".$row["fname"]." ";
					  $_SESSION["fname"]=$row["fname"];
                      $_SESSION["mobile"]=$row["mnum"];
                      $_SESSION["email"]=$row["email"];

?>
<br>
</p>
</div>
<br>
<div class="w3-container w3-pale-green w3-leftbar w3-border-green">
<p> <?php
echo "Mobile No : ". $row["mnum"];
}
?>
</p>
</div>
<br>
<div class="w3-container w3-pale-red w3-leftbar w3-border-red">
<p>
<?php
$_SESSION["address_id"];
$sql = "SELECT * FROM   shipping_address 
inner join registration on registration.custid=shipping_address.custid
where shipping_address.custid='".$_SESSION["client_id"]."' and
shipping_address.address_id='".$_SESSION["address_id"]."'";
$result =mysqli_query($conn,$sql);
if($row = mysqli_fetch_array($result))
{
echo "Shipping Address :"."</br>";
echo $row['address1']."</br>";
echo $row['address2']."</br>";
echo $row['area']."</br>";
echo $row['landmark']."</br>";
echo $row['city']."</br>";
echo $row['state']."</br>";
//	echo $row['country_name']."</br>";
echo $row['pincode']."</br>";
}
?>
</p>
</div>
<br>
<div class="w3-container w3-pale-yellow w3-leftbar w3-border-yellow">
<p>
<?php
{				

		/*		  $sql1="select * from cart where userid='".$_SESSION['client_id']."'";

                 

				 $result=mysqli_query($conn,$sql1);

				  $total=0;

				  while($row=mysqli_fetch_array($result))

				  {

				  

				  $sum ="select * from product where pid='".$row[2]."'"; 

				  $sum1=mysqli_query($conn,$sum);

				  

				  while($row1=mysqli_fetch_array($sum1))

				  {

				  	$total=$total+$row1['pprice'];

				  }

				  

				  }

				    $total;

				  */
				   $sql1="select * from cart inner join product on product.pid=cart.pid  where cart.userid='".$_SESSION['client_id']."'";
                 
				  $result=mysqli_query($conn,$sql1);
				  $total=0;
				  $sub_total=0;
				  $total_final=0;
				  while($row=mysqli_fetch_assoc($result))
				  {
				  $qty=$row['qty'];
				  $rate=$row['pprice'];
				  $gstp=$row['gst'];
				  
				 // $gst=((($qty*$rate)*$gstp)/100);
				  $sub_total=($qty*$rate);//+$gst;
				  $total_final=$total_final+$sub_total;
				  }
				    

				

			  $final = $total_final;
$_SESSION["amount"]=$final*100;
			 echo "Total Amount to be paid  :&nbsp; <strong>RS ". $final."</strong>";

		 

				 }

?>

</p>



</div>

</br>

<center>
Currently Cash On Delivery is Available </br>

<input type="checkbox" id="myCheck" onclick="myFunction()">
<label for="myCheck">I agree to pay Delivery Charges if any </label>  </br>
<a href="confirmprocess.php" class="btn btn-default check_out" id="text" >Confirm Now</a>
<?php //include("rozar.php"); ?>
</center>

 </br>
 
		

	 

		       <?php  include("bottom.php"); ?>