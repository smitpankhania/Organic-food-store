<?php include("top.php"); ?>
<?php ob_start(); if(isset($_SESSION["client_name"]))
				 						{
											 
				 						}
										else
										{
											 
											header("location:login.php?login please");
										}
								?>
<form class="form-horizontal" method="POST" action="changepassword.php">
<fieldset>

<!-- Form Name -->
<legend>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CHANGE PASSWORD</legend>
<div class="form-group">
  <label class="col-md-4 control-label" for="email">REGISTERED EMAIL :</label>
  <div class="col-md-5">
    <input class="form-control input-md" required type="text" value="<?php echo $_SESSION['client_email']?>" readonly/>
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="oldpassword">Old Password</label>
  <div class="col-md-5">
    <input id="oldpassword" name="passwordinput" placeholder="Enter Old Password" class="form-control input-md" required type="password">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newpassword">New Password</label>
  <div class="col-md-5">
    <input id="newpassword" name="passwordinput1" placeholder="Enter New Password" class="form-control input-md" required type="password">
    <span class="help-block"> </span>
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="confirmpassword">Confirm Password</label>
  <div class="col-md-5">
    <input id="confirmpassword" name="cnf" placeholder="Enter Confirm Password" class="form-control input-md" required type="password">
    <span class="help-block"> </span>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">UPDATE</button>
  </div>
</div>

</fieldset>
</form>
<br>
<br>
<br>
<br>

<?php



if(isset($_POST['passwordinput']) && isset($_POST['passwordinput1']) && isset($_POST['cnf']) )
{
 
   $pass=$_POST['passwordinput'];
  $npass=$_POST['passwordinput1'];
   $cpass=$_POST['cnf'];

$email=$_SESSION['client_email'];

if($npass==$cpass)
{
	 $QUERY = "SELECT * FROM `registration` WHERE `email`='$email'";
	$query_run = mysql_query($QUERY);
	
  	 if($row=mysql_fetch_array($query_run))
	 {
		 if($row["password"]==$pass)
		 {
			$sql2="update registration set password='".$cpass."' where `email`='$email'  ";
			$QUERY1=mysql_query($sql2);
			
			?>
    <script>
    alert("Password updated successfully");
    </script>
    <?php
			
		 }
		 else
		 {
		  ?>
    <script>
    alert("old Password Does not Matched");
    </script>
    <?php
		 }
	 }
	 
}
else
{
?>
    <script>
    alert("New Password Mismatch");
    </script>
    <?php
}
}


?>
<?php include("bottom.php"); ?>