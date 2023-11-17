&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="Add_cust_shipping.php" class="btn btn-default check_out">Add New Shipping Address</a>
<div class="category-tab"><!--category-tab-->
						
						<div class="tab-content">
							<div class="tab-pane fade active in" id="tshirt" >
                            
                           <?php 
 
 
 
  	$sql = "SELECT * FROM   shipping_address 
  	inner join registration on registration.custid=shipping_address.custid
	where shipping_address.custid='".$_SESSION["client_id"]."'  ";
									$result =mysqli_query($conn,$sql);
									 $num=mysqli_num_rows($result);
									 if($num==0)
									 {
									 echo "<h5 align='center'>";
									 echo "No Shiping Address is found..Please add an new One To get your Product Delivered";
									  echo "</h5>";
									  echo "</br>";
									   echo "</br>";
									    echo "</br>";
									     echo "</br>";
									      echo "</br>";
									       echo "</br>";
									        echo "</br>";
									         echo "</br>";
									          echo "</br>";
									           echo "</br>";
									            echo "</br>";
									 }
									$i=0;
									 
										while($row = mysqli_fetch_array($result)){
											$i++;
								 
 
 
   ?>
 
                           
								<div class="col-sm-3">
								<div class="product-image-wrapper"><a class="btn btn-default check_out" href="cust_shipping.php?aid=<?php echo $row['address_id'];?>"><i class="fa fa-times"></i></a>
										<div class="single-products">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <img src="homepage-icon.gif" alt="" height="90" width="90"/>
											<div class="productinfo text-center">
												
												<h2><?php  echo"Address Id:" .$row['address_id']."</br>"; ?></h2>
											<?php 
		  
		   
		  		    echo "Name ".$row['fname']."</br>";
		  		    		  		    echo "Mobile ".$row['mnum']."</br>";
		  		    		  		    		  		    		  		    echo "Email ".$row['email']."</br>";



		    $_SESSION["address_id"]=$row['address_id'];
		    echo $row['address1']."</br>";
		    echo $row['address2']."</br>";
			echo $row['area']."</br>";
			echo $row['landmark']."</br>";
			echo "City :".$row['city'].",";
			echo "State :".$row['state'].",";
			echo  "</br> Pincode :";
			echo $row['pincode']."</br>";
	
										
		  ?>
		<a href="payment.php?addid=<?php echo $_SESSION["address_id"]; ?>" class="btn btn-default check_out" > Next </a>
											</div>
											
										</div>
                                        
									</div>
                                    
								</div>
                                
                                
                                <?php } ?>
                                   
							 
						</div>
					
                    </div><!--/category-tab-->
                    
                    <?php
					
					if(isset($_GET['aid']))
					{
						echo $_GET['aid'];
						
						$sql="delete from  shipping_address where address_id='".$_GET['aid']."'";
						$result=mysqli_query($conn,$sql);

						header("location:cust_shipping.php?status=deleted");

						
					}
					
					
					?>