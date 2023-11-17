	<section id="slider"><!--slider-->

		<div class="container">

			<div class="row">

				<div class="col-sm-12">

					<div id="slider-carousel" class="carousel slide" data-ride="carousel">

						<ol class="carousel-indicators">
						    
						    
						    <?php   $c1=0; $cl1="";
$ss1="select * from tbl_banner";
$rs1=mysqli_query($conn,$ss1);
while($rows1=mysqli_fetch_assoc($rs1))
{    if($c1==1){$cl1="active";}else{$cl="";}
?>

							<li data-target="#slider-carousel" data-slide-to="<?php echo $c1;?>" class="<?php echo $cl1;?>"></li>

							
<?php $c1++; } ?>

						</ol>

						

						<div class="carousel-inner">




						


<?php   $c=0; $cl="";
$ss="select * from tbl_banner";
$rs=mysqli_query($conn,$ss);
while($rows=mysqli_fetch_assoc($rs))
{ $c++;   if($c==1){$cl="item active";}else{$cl="item";}
?>

							<div class="<?php echo $cl;?>">
								<div class="col-sm-12">
								    	<h2><font color="#2874F0"><?php echo $rows['desc1'];?> </font></h2>
									<img src="admin/banner/<?php echo $rows['photo'];?>" class="girl img-responsive" alt="" />
								</div>
							</div>
							
<?php } ?>

							

						 



 
							

						</div>

						

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">

							<i class="fa fa-angle-left"></i>

						</a>

						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">

							<i class="fa fa-angle-right"></i>

						</a>

					</div>

					

				</div>

			</div>

		</div>

	</section><!--/slider-->

 
    

    