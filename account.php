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
						 
								<td class="quantity">Order Id</td>

							<td class="price">Date</td>
						
							<td class="total">Time</td>
								<td class="total">Bill.</td>
							<td class="total">Del.</td>
							<td class="total">view/cancel</td>
							<td class="total">orderstatus</td>
						</tr>
					</thead>
                    
                 <?php 
			   $tgst=0;
			   $ttotal=0;
			   
 			    	$sql = "SELECT distinct orderid,custid,det,order_time,sellid from sold where custid='".$_SESSION['client_id']."' order by sellid desc";




 			    	
					$result = mysqli_query($conn,$sql);

								
  									while($row = mysqli_fetch_assoc($result))
									 {
									 $temp++;
			                         ?>
					<tbody>
						<tr>
							
							<td class="cart_description">
							<a href="trackorder.php?searchinput=<?php echo $row['orderid'];?>"><?php echo $temp;?> Track Now</a>
							</td>
							 
							<td class="cart_quantity">
								<?php echo $row['orderid'];?>
							</td>
							
						 	<td class="cart_quantity">
								<?php echo $row['det'];?>
							</td>
							
							<td class="cart_quantity">
								<?php echo $row['order_time'];?>
							</td>
							
							
							<td class="cart_delete1">
                          	<a class="cart_quantity_delete1" href="invoice.php?ordid=<?php echo $row['orderid'];?>"><i class="fa fa-download" style="font-size:28px;color:green"></i></a>
							</td>
							
							 
							<td class="cart_delete1">
                          	<a class="cart_quantity_delete1" href="orderdelete.php?orderid=<?php echo $row['orderid'];?>"><i class="fa fa-trash-o" style="font-size:28px;color:red"></i></a>
							</td>
							
							<td>
							<a href="saddress.php">View</a>/
							<?php if($ordr["orderstatus"] != 'Cancelled'){ ?>
							<a href="cancel-order.php?id=<?php echo $row["sellid"]; ?>">cancel</a> 

						<?php }?>
						</td>
						<td>
							<?php echo $row['orderstatus']; ?>			
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
    