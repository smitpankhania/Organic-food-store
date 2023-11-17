<?php include("top.php");?>
  <?php
									if(isset($_SESSION["client_name"]))
				 						{
											 
				 						}
										else
										{
											echo "Hi, Guest";
											header("location:login.php?login please");
										}
								?>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
 
 

<div class="w3-container w3-pale-blue w3-leftbar w3-border-blue">
<p>				  
<?php

  
 				 {
					echo "CUSTOMER ID : ".$_SESSION["client_id"]." ";?>
                    <br>
                   

</p>
</div>

<form action="updatepro.php" method="post">
<br>
<div class="w3-container w3-pale-red w3-leftbar w3-border-red">
<p>
First Name : <input type="text" name="client_name" value="<?php echo $_SESSION["client_name"]; ?>"/>
Last  Name : <input type="text" name="client_lname" value="<?php echo $_SESSION["client_lname"]; ?>"/>

</p>
</div>
<br>
<div class="w3-container w3-pale-green w3-leftbar w3-border-green">
<p> 
Mobile : <input type="text" name="mnum" value="<?php echo $_SESSION["mnum"]; ?>"/>

<?php
					
				 }
?></p>
</div>

<br>
<div class="w3-container w3-pale-yellow w3-leftbar w3-border-yellow">
<p>
DOB : <input type="date" name="client_DOB" value="<?php echo $_SESSION["client_DOB"]; ?>"/>

     
</p>

</div>
<br>
<div class="w3-container w3-pale-yellow w3-leftbar w3-border-orange">
<p>
Email Id : <input type="date" name="client_email" value="<?php echo $_SESSION["client_email"]; ?>"/>

   </p>

</div>
<br>

 <br><button id="singlebutton" name="singlebutton" class="btn btn-default check_out">SAVE</button>
 </form>
 <br>
 <br>
  <br>
 <br>
 <br>
 <br> 
 <?php  
 if(isset($_POST["client_name"]) && isset($_POST["client_lname"]) && isset($_POST["mnum"]) && isset($_POST["client_DOB"]) && isset($_POST["client_email"]) )
 {
 
											$_SESSION["client_name"]=$_POST["client_name"];
											$_SESSION["client_lname"]=$_POST["client_lname"];
										 
											$_SESSION["client_DOB"]=$_POST["client_DOB"];
											$_SESSION["client_email"]=$_POST["client_email"];
											$_SESSION["mnum"]=$_POST["mnum"];
											
	 $sql="update registration set 
	 fname='".$_POST["client_name"]."' ,
	 lname='".$_POST["client_lname"]."' , 
	 email='".$_POST["client_email"]."' ,
	 DOB='".$_POST["client_DOB"]."' ,
	 mnum='".$_POST["mnum"]."'
	 where custid='".$_SESSION["client_id"]."'";
	 $res=mysql_query($sql);
	 header("location:pro.php?update=success");
 }
 
  ?>
 
<?php include("bottom.php");?>