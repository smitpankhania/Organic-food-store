<?php  include("top.php");


					  $sql= "select * from product 
					   inner join brand on product.bid=brand.bid
					  where product.scid ='".$_GET["scid"]."' and product.product_status='Active'";
					  $result= mysqli_query($conn,$sql);
					  $pic="";
					   
					  while($row= mysqli_fetch_array($result))				 
						{
							    $pic=$row[8];
							    $pid=$row[0];
							    $name= $row[4];
								$price= $row[6];
								$des= $row[9];
									$brand=$row['bname'];
					 
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

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><font color="#2874F0"><?php echo $name;?></font></h2>
								 <font style="color:red">
								<p  style="color:red">Web ID: <?php echo $pid;?></p></font>
								<img src="images/product-details/rating.png" alt="" />
								<span>
									<span><font color="#2874F0"> Rs <?php echo $price;?></font></span>
									<label>Quantity:</label>
									<input type="number" value="1" name="qty" />
                                 
                                     <a href="cartprocesspage.php?pid=<?php echo $row[0];?>&qty=1">
                   				   <button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
                       </a>
                   				 	
									
                                    
                                    
                                    
								</span>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
							<p><b>Brand:</b>  <?php echo $brand; ?> </p>
								<p><b>Product Details:</b>
								
								<?php echo $des;?>
								</p>
							 
								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->	
		 
		<?php } ?>
	 
		       <?php  include("bottom.php"); ?>
    