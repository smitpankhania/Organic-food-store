<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
 
							 
<?php
$sqlc="select * from subcategory limit 5";
$qq=mysqli_query($conn,$sqlc);
while($rown =mysqli_fetch_assoc($qq))
{
?>
 
 
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="categorylist.php?scid=<?php echo $rown['scid'];?>"><font color="#2874F0"><?php echo $rown['scname'];  ?></font></a></h4>
								</div>
							</div>
						 
<?php }  


?>						 

	<div class="panel panel-default">
								<div class="panel-heading">
<h4 class="panel-title"><a href="category_more.php"><font color="red"><i class="fa fa-hand-o-right" aria-hidden="true"></i> More..</font></a></h4>
						 
	</div>
							</div>						 
							 
							
							
							
							
						</div><!--/category-products-->
					
					 
						
					 
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/part/theme-for-food-drink-shop.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
 
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Available Products</h2>

    <?php
									
									 $sql = "SELECT * FROM product 
									inner join category on category.cid=product.cid 
									inner join subcategory on subcategory.scid=product.scid
									inner join brand on brand.bid=product.bid where product.product_status='Active' order by pquantity desc";
									$result = mysqli_query($conn,$sql);
									$temp=0;
			  						while($row =mysqli_fetch_array($result))
									 {
									 
										
										 ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
							<img src="admin/product_img/<?php echo $row[8];?>" class="" alt="" style="height:150px;width:150px;"/>
                         
                            <h4 class="love-info" title="<?php echo $row[4];?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo substr($row[4],0,15);?>..</h4>
                           <font style="color:red">
                             PID:<?php echo $row[0];?></font>
									<strong><span class="item_price">Offer Price:<?php echo $row[6];?></span></strong>
                                <span class="MRP">MRP:<strike><?php echo $row[7];?></strike></span>
                                </br>
                                
                                <b><font style="color:red">
                                <?php
                                $ds=$row[7]-$row[6];
                                echo round(($ds*100)/$row[7],2);
                                ?>% Discount</font></b>
										 
                   				 </br>
                   				         <?php 
                   				         if($row[5]==0)
                   				         {
                   				         echo "<font style='color:red'>Out of Stock</font>";
                   				         }
                   				         else
                   				         { 
                   				         ?>
                                         <a href="cartprocesspage.php?pid=<?php echo $row[0];?>&qty=1" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                         <br/>
                                         <a href="details.php?pid=<?php echo $row[0];?>" class="btn btn-default add-to-cart"><i class="fa"></i>View</a>
                                         <?php
                                         }
                                         ?>   
										</div>
										
									
								</div>
								<div class="choose">
									 
								</div>
							</div>
						</div>
<?php } ?>


					  
					 
					  
						
					</div><!--features_items-->