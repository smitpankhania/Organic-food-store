<?php include("top.php"); ?>
<marquee><font color="#5af028">
<?php
$n1="select * from tbl_notice limit 1";
$ns=mysqli_query($conn,$n1);
while($rows5=mysqli_fetch_assoc($ns))
{
   
    echo $h1= $rows5['heading1'];
    echo "</br>";
    echo $h2= $rows5['heading2'];
}
?>
</font></marquee>
 
 


     <?php  include("center.php"); ?>
    
     <?php include("products.php"); ?>
    
    
    
 <?php  //include("category.php"); ?>
					
					
			
<?php
if(isset($_GET['status1']))
{
	?>
    <script>
	alert("Product Already added to cart plaese check out");
	</script>
    <?php
} 


?>
    			
<?php
if(isset($_GET['status2']))
{
	
     header("location:cart.php");
     
} 


?>
    <?php
if(isset($_GET['status2']))
{
	 header("location:cart.php");
} 


?>
         			
<?php
if(isset($_GET['cart']))
{
	?>
    <script>
	alert("No more item in cart");
	</script>
    <?php
} 


?>
		 
		
	 
		       <?php  include("bottom.php"); ?>
    