<?php ob_start();include("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<title>Orangic Food Store | Rusera | All India Shoping | call 9328356116 | simandhar metro, B/H vishwas city-5, Gota,Gujarat  382481 </title>
     
	<!-- <link href="css/menu.css" rel="stylesheet"> -->
    <!-- SmartMenus core CSS (required) -->
	<link href="css/sm-core-css.css" rel="stylesheet" type="text/css" />

	<!-- "sm-blue" menu theme (optional, you can use your own CSS, too) -->
	<link href="css/sm-mint/sm-mint.css" rel="stylesheet" type="text/css" />

	<!-- #main-menu config - instance specific stuff not covered in the theme -->
	<!-- Put this in an external stylesheet if you want the media query to work in IE8 (e.g. where the rest of your page styles are) -->
	<style type="text/css">
		@media (min-width: 768px) {
			#main-nav {
				line-height: 0;
				text-align: center;
			}
			#main-menu {
				display: inline-block;
			}
		}
	</style>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ee0669d9e5f6944229042e5/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
							    
								<li><a href="#"> <font color="#fff"> <i class="fa fa-phone"></i>9328356116</font></a></li>
							    <li><a href="pro.php"><i class="fa fa-user"></i> 
                                <font color="#fff"> 
                                <?php
									if(isset($_SESSION["client_name"]))
				 						{
											echo "Hi,".$_SESSION["client_name"];
				 						}
										else
										{
											echo "Hi, Guest";
											//header("location:index.php?login please");
										}
								?></font></a></li>
							</ul>
						</div>
					</div>
				 
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/part/orangic food.jpg" alt="" height="100px" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
							 
							 
							</div>
							
							<div class="btn-group">
							 
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="index.php"><i class="fa fa-user"></i> Home</a></li>
								<li><a href="trackorder.php"><i class="fa fa-star">Track </i> </a></li>
 								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart(<?php 
				 
				if(isset($_SESSION["client_id"]))
				 {
				 $sql1="select * from cart where userid='".$_SESSION['client_id']."'";
                 $result=mysqli_query($conn,$sql1);
				 $count=0;
				 while($row=mysqli_fetch_row($result))
				 {
					$count++; 
				 }
				 echo $count;
				 
				 } else
				 {
					 echo "0";
				 }?>) Rs:<?php
                  if(isset($_SESSION["client_id"]))
				 {
				  $sql1="select * from cart inner join product on product.pid=cart.pid  where cart.userid='".$_SESSION['client_id']."'";
                 
				  $result=mysqli_query($conn,$sql1);
				  $total=0;
				  $sub_total=0;
				  $total_final=0;
				  while($row=mysqli_fetch_assoc($result))
				  {
				  $qty=$row['qty'];
				  $rate=$row['pprice'];
				  $gstp=$row['gst'];
				  
				 // $gst=((($qty*$rate)*$gstp)/100);
				  $sub_total=($qty*$rate); //+$gst;
				  $total_final=$total_final+$sub_total;
				  }
				  echo $total_final;
				 }
				 else
				 {
					 echo "0";
				 }
				  ?>/-</a></li>
                                
                                     <?php
                                     if(isset($_SESSION["client_id"]))
									 {
					                 ?>
                   				     <li><a href="account.php"><i class="fa fa-lock"></i> Account</a></li>
                   				     <li><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>
                   				     
                       			 	 <?php   
								 	 } 
									 else
									 {
									 ?>
                   				     <li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>
                       			 	 <?php   
									 }
									 ?>
                                
                                
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
 
		<?php //include('menu.php'); ?>
	</header><!--/header-->
	
    