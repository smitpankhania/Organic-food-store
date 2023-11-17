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
				  <li><a href="index.php">Continue Shopping</a></li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
						 
								<td class="quantity">Qty</td>
							<td class="price">Price</td>
						
							<td class="total">Total</td>
							
							<td class="total">Del.</td>
						</tr>
					</thead>
                    
                 <?php 
			   $tgst=0;
			   $ttotal=0;
			   
 				$sql2="select * from cart inner join product on product.pid=cart.pid where userid='".$_SESSION['client_id']."'";			   
			   	$result=mysqli_query($conn,$sql2);
				 if(mysqli_num_rows($result)<=0)
				 {
					 header("location:index.php?cart=empty");
				 }
			   	while($row=mysqli_fetch_array($result))
				  {
				  
				  
				  
			     ?>
					<tbody>
						<tr>
							
							<td class="cart_description">
							<a href=""><?php echo $row['pname'];?></a>
							</td>
							 
							<td class="cart_quantity">
								<?php echo $qty=$row['qty'];?>
							</td>
							
							<td class="cart_total">
                             
								<p class="cart_total_price1"><span></span><?php echo $row['pprice'];?></p>
							</td>
							<?php //gst calculation + qty
							  //$gst=(($row['gst']*$row['pprice'])/100)*$qty;
							?>
							
								<td class="cart_total">
                             
								<p class="cart_total_price1"><span></span><?php echo $tt=($row['pprice']*$qty);?></p>
							</td>
							<td class="cart_delete1">
                          
								<a class="cart_quantity_delete1" href="cartdelete.php?pid=<?php echo $row[2];?>"><i class="fa fa-trash-o" style="font-size:28px;color:red"></i></a>
							</td>
						</tr>
 					</tbody>


<?php
$tgst=$tgst+$gst;
$ttotal=$ttotal+$tt;
					}
?>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p></p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					 
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart  Total <span>
                            <?php
                  
			
				  echo " Rs ".$ttotal."/-";
				  
				  ?>
                            </span></li>
                            
         
							 
			 
			 
			 
						</ul>
							<center>
							<a class="btn btn-default check_out" href="cust_shipping.php">Place Order</a>
							</center>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

 
      
		 
		
	 
		       <?php  include("bottom.php"); ?>
               
<?php
if(isset($_GET['status']))
{
	?>
    <script>
	alert("Product Deleted From Cart Successfully");
	</script>
    <?php
} 


?>
    