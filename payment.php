<?php  include("top.php"); ?>
     <?php //  include("center.php"); ?>
     <?php //include("products.php"); ?>
     <?php  //include("category.php"); ?>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<?php   
   $_SESSION["address_id"]=$_GET["addid"];
	?>
<form class="form-horizontal">
<fieldset>
<!-- Form Name -->
<legend>PAYMENT OPTIONS</legend>
<!-- Multiple Radios -->
<br>
<?php
// $_SESSION["address_id"];
$sql = "SELECT * FROM   shipping_address inner join country on shipping_address.country=country.country_id inner join state on shipping_address.state=state.state_id inner join city on shipping_address.city=city.city_id where address_id='".$_SESSION["address_id"]."'  ";
$result =mysqli_query($conn,$sql);
?>
<div class="form-group">
<label class="col-md-4 control-label" for="radios">Payment option :</label>
<div class="col-md-4">
<div class="radio">
<label for="radios-0">
<input name="radios" id="radios-0" value="1" checked="checked" type="radio">
Cash Deposit:*<br>
<div class="w3-container w3-pale-green w3-leftbar w3-border-green">
<p>
Account Holder Name:<br>      	   
Account Number:<br>
Branch Code:<br>
IFSC Code:<br>
</p>
</div>
</label>
</div>
</div>
</div>
</fieldset>
</form>
<center>
<font color="#FF0000">*Currently we provide cash deposit in bank facility only.</font>
<form action="confirm.php">
<input type="submit" align="rigth" value="Proceed" class="btn btn-default check_out"/>
</form>
</center>                 
</br></br></br></br></br></br></br></br>       
</div></div>
		       <?php header("location:confirm.php"); include("bottom.php"); ?>

     