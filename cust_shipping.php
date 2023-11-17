<?php include("top.php"); ?>
<?php ob_start(); if(isset($_SESSION["client_id"]))
				 						{
											 //	echo "Hi, Guest";
				 						}
										else
										{
											echo "Hi, Guest";
											header("location:login.php?login please");
										}
								?>
<?php  include("category.php"); ?>
					
	 
    			
 <?php
if(isset($_GET['status']))
{
	?>
    <script>
	alert("Selected Shipping Address Has been Deleted From your Account Successfully");
	</script>
    <?php
} 


?>
<?php
if(isset($_GET['statusadd']))
{
	?>
    <script>
	alert("New Shipping Address Has been Added Successfully..");
	</script>
    <?php
} 


?>
      
		 </br></br></br></br>
		
	 
		       <?php  include("bottom.php"); ?>
    