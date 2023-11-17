<?php include("top.php"); ?>
 
    
		<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Home</a></li>
				  <li><a href="saddress.php">Available list of Category</a></li>
				</ol>
			</div>
		
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="css/font-awesome.min.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<section>
<div class="container">

	
		<div class="row mbr-justify-content-center">

<?php
$sqlc="select * from subcategory order by scname asc";
$qq=mysqli_query($conn,$sqlc);
while($rown =mysqli_fetch_assoc($qq))
{
?>
 

            <div class="col-lg-3 mbr-col-md-10">
                <div class="wrap">
                     
                    <div class="text-wrap vcenter">
                        <h4 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">
                            <a href="categorylist.php?scid=<?php echo $rown['scid'];?>">
                            <font color="red"><i class="fa fa-hand-o-right" aria-hidden="true"></i></font>
                            <font style="color:blue"><?php echo $rown['scname'];?></font>
                            </a>
                            </h4>
                         
                    </div>
                </div>
            </div>
            

<?php } ?>

            
            
            
             
             
             

            

            
        </div>

</div>

</section> 
		
		
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
    