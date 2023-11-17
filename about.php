<?php include("top.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color:#3366ff;
  color: white;
}
h1 {
  margin-top: 0;
  font-size: 3rem;
  display: inline-block;
}
h1 div {
  position: relative;
  float: left;
}
h1 div:first-child {
  color: #3498db;
  margin-right: 1rem;
}
/* PROFIL */
.blog .carousel-indicators {
    left: 0;
    top: auto;
    bottom: -40px;

}

/* The colour of the indicators */
.blog .carousel-indicators li {
    background: #006680;
;
    border-radius: 50%;
    width: 8px;
    height: 8px;
    margin-bottom:10px;
    
}

.blog .carousel-indicators .active {
background: #00bfff
;
margin-bottom:10px;
}

.our-team-section {
  position: relative;
  padding-top: 40px;
  padding-bottom: 40px;
}
.our-team-section:before {
  position: absolute;
  top: -0;
  left: 0;
  content: " ";
  background: url(img/service-section-bottom.png);
  background-size: 100% 100px;
  width: 100%;
  height: 100px;
  float: left;
  z-index: 99;
}
.our-team {
  padding: 0 0 40px;
  background: #f9f9f9;
  text-align: center;
  overflow: hidden;
  position: relative;
  border-bottom: 5px solid #00325a;
}
.our-team:hover {
  border-bottom: 5px solid #3366ff;
}

.our-team .pic {
  display: inline-block;
  width: 130px;
  height: 130px;
  margin-bottom: 50px;
  z-index: 1;
  position: relative;
}
.our-team .pic:before {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background: #3366ff;
  position: absolute;
  bottom: 135%;
  right: 0;
  left: 0;
  opacity: 1;
  transform: scale(3);
  transition: all 0.3s linear 0s;
}
.our-team:hover .pic:before {
  height: 100%;
  background: #008fb3;
}
.our-team .pic:after {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background: #ffffff00;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  transition: all 0.3s linear 0s;
}
.our-team:hover .pic:after {
  background: #145889;
}
.our-team .pic img {
  width: 150%;
  height: 150%;
  border-radius: 50%;
  transform: scale(1);
  transition: all 0.9s ease 0s;
  box-shadow: 0 0 0 14px #f7f5ec;
  transform: scale(0.7);
  position: relative;
  z-index: 2;
}
.our-team:hover .pic img {
  
  transform: scale(0.7);
}
.our-team .team-content {
  margin-bottom: 30px;
}
.our-team .title {
  font-size: 22px;
  font-weight: 700;
  color: #4e5052;
  letter-spacing: 1px;
  text-transform: capitalize;
  margin-bottom: 5px;
}
.our-team .post {
  display: block;
  font-size: 15px;
  color: #4e5052;
  text-transform: capitalize;
}
.our-team .social {
  width: 100%;
  padding-top: 10px;
  margin: 0;
  background: #3366ff;
  position: absolute;
  bottom: -100px;
  left: 0;
  transition: all 0.5s ease 0s;
}
.our-team:hover .social {
  bottom: 0;
}
.our-team .social li {
  display: inline-block;
}
.our-team .social li a {
  display: block;
  padding-top: 6px;
  font-size: 15px;
  color: #fff;
  transition: all 0.3s ease 0s;
}
.our-team .social li a:hover {
  color: #14588;
  background: #f7f5ec;
}
@media only screen and (max-width: 990px) {
  .our-team {
    margin-bottom: 10px;
  }
}

</style>
</head>
<body>

<div class="about-section">
  <h1>About Us </h1>
  <p><h2>What is organic food store.com </h2></p>
  <p>India’s largest online food and grocery store.Right from fresh Fruits and Vegetables, Rice and Seasonings to Packaged products, Beverages, Personal care products, Meats – we have it all.Choose from a wide range of options in every category, exclusively handpicked to help you find the best quality available at the lowest prices. Bangalore, Hyderabad, Mumbai, Pune, Chennai, Delhi, Noida, Mysore, Coimbatore, Vijayawada-Guntur, Kolkata, Ahmedabad-Gandhinagar, Lucknow-Kanpur, Gurgaon, Vadodara, Visakhapatnam, Surat, Nagpur, Patna, Indore and Chandigarh Tricity You can pay online using your debit / credit card or by cash / sodexo on delivery.
We guarantee on time delivery, and the best quality!</p>
</div>
<div class="container">
    <div class="row blog">
        <h1 class="center mx-auto text-center py-4">Our Team Members</h1>
       
       <div class="col-md-12">
            <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                <ol class="invisible carousel-indicators">
                    <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#blogCarousel" data-slide-to="1"></li>
                </ol>

                <!-- Carousel items -->
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="images/014e2010-e48d-4e77-891a-a6eafde4d64f.jpg">
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title">PANKHANIA SMIT PRADEEP</h3>
                                        <span class="post">COMPUTR ENGINEERING</span>
                                        <span class="post">Enro:196400307077</span>
                                        <span class="post">smitpankhania2308@gmail.com</span>
                                    </div>
                                    <ul class="social">
                                        <li>
                                            <a href="#" class="fa fa-envelope"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="images/0468a6c1-86f8-4541-ac6a-cd48714d9410.jpg">
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title">RUSHI MANISH MALKAN</h3>
                                        <span class="post">COMPUTER ENGINEERING/ARTIST</span>
                                        <span class="post">Enro:196400307061</span>
                                        <span class="post">rushimalkan100@gmail.com</span>
                                    </div>
                                    <ul class="social">
                                        <li>
                                            <a href="#" class="fa fa-envelope"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="images/4e0e9dfa-b2ed-414a-bdab-7460ce6db73f.jpg">
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title">SOLANKI DHRUVI RAJESHBHAI</h3>
                                        <span class="post">COMPUTER ENGINEERING</span>
                                        <span class="post">Enro:1964003070147</span>
                                        <span class="post">adhrvi1905@gmail.com</span>
                                    </div>
                                    <ul class="social">
                                        <li>
                                            <a href="#" class="fa fa-envelope"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="images/72121ab1-0e49-4f1e-a3a7-5eed32172f0f.jpg">
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title">CHAUHAN MAHIMA GAUTAMBHAI</h3>
                                        <span class="post">COMPUTER ENGINEERING</span>
                                        <span class="post">Enro:196400307030</span>
                                        <span class="post">mahi12012004@gmail.com</span>
                                    </div>
                                    <ul class="social">
                                        <li>
                                            <a href="#" class="fa fa-envelope"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--.row-->
                    </div>
                    <!--.item-->


                </div>



</body>
</html>

<?php  include("bottom.php"); ?>