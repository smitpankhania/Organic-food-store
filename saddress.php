<?php include("top.php"); ?>
<?php ob_start();
if(isset($_SESSION['client_id']))
{
	
}
else
{
header("location:login.php?status=login please");
}

?>
    
			<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Home</a></li>
				  <li><a href="saddress.php">Shipping Address</a></li>
				</ol>
			</div>
			Order History
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Sno.</td>
						 
								<td class="quantity">Address</td>
						 
							<td class="total">Area</td>
								<td class="total">Landmark.</td>
							<td class="total">city.</td>
								<td class="total">state.</td>
									<td class="total">Pincode.</td>
									<td class="total">Remove.</td>
						</tr>
					</thead>
                    
                 <?php 
			   $tgst=0;
			   $ttotal=0;
			   
 			    	$sql = "SELECT * from shipping_address where custid='".$_SESSION['client_id']."' and status=1 order by address_id desc";
					$result = mysqli_query($conn,$sql);

								
  									while($row = mysqli_fetch_assoc($result))
									 {
									 $temp++;
			                         ?>
					<tbody>
						<tr>
							
							<td class="cart_description">
							<a href=""><?php echo $temp;?></a>
							</td>
							 
							<td class="cart_quantity">
								<?php echo $row['address1'];?>&nbsp; ,<?php echo $row['address2'];?>
							</td>
							
						 	<td class="cart_quantity">
								<?php echo $row['area'];?>
							</td>
							
							<td class="cart_quantity">
								<?php echo $row['landmark'];?>
							</td>
							
							<td class="cart_quantity">
								<?php echo $row['city'];?>
							</td>
							
								<td class="cart_quantity">
								<?php echo $row['state'];?>
							</td>
							
							<td class="cart_quantity">
								<?php echo $row['pincode'];?>
							</td>
							
							
						 
							
							 
							<td class="cart_delete1">
                          	<a class="cart_quantity_delete1" href="orderdelete.php?addressid=<?php echo $row['address_id'];?>"><i class="fa fa-trash-o" style="font-size:28px;color:red"></i></a>
							</td>
							
							
						</tr>
 					</tbody>


<?php
 
					}
?>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

 
      
		 
		
	 
		       <?php  include("bottom.php"); ?>
               
<?php
if(isset($_GET['delete']))
{
	?>
    <script>
	alert("Order Cancelled Successfully");
	</script>
    <?php
} 


?>
    