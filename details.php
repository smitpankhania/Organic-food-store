<?php  include("top.php"); ?>
<?php

					 $sql= "select * from product 
					 inner join brand on product.bid=brand.bid
					 where product.pid ='".$_GET["pid"]."'";
					 $result= mysqli_query($conn,$sql);
					 $pic="";
					   
					   if($row= mysqli_fetch_array($result))				 
						{
							    $pic=$row[8];
							    $name= $row[4];
								$price= $row[6];
								$des= $row[9];
								$brand=$row['bname'];
						}
?>
					
<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="admin/product_img/<?php echo $pic;?>" alt="" />
								<h3>New</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  
								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>	<form action="cartprocesspage.php" method="get" >
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><font color="#2874F0"><?php echo $name;?></font></h2>
								
								  <b><font style="color:red">
                                <?php
                                $ds=$row[7]-$row[6];
                                echo round(($ds*100)/$row[7],2);
                                ?>% Discount</font></b>
								
								<p>Web ID: <?php echo $_GET["pid"];?></p>
								<img src="images/product-details/rating.png" alt="" />
								<span>
									<span><font color="#2874F0"> Rs <?php echo $price;?></font></span>
									<label>Quantity:</label>
								
									<input type="number" value="1" name="qty" />
										<input type="hidden" value="<?php echo $row[0];?>" name="pid" />
                                    
                                   
                   				   <button type="submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
                    
                    
                   				 	</form>
									 
                                    
                                    
								</span>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
								<p><b>Brand:</b>  <?php echo $brand; ?> </p>
								<p><b>Product Details: </b>	<?php echo $des;?></p>
								
							 
								<p><b>Product Size:    </b>	<?php echo $row[13];?></p>
							 
								
							 
								<p><b>Product Color:   </b>	<?php echo $row[14];?></p>
							 
								
							 
								<p><b>Product Flavour: </b>	<?php echo $row[15];?></p>
							 
							 
								
								
							 
								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->	
		 
		
	 
		       <?php  include("bottom.php"); ?>
    