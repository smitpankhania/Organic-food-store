<?php include("top.php"); ?>

 <!-- Boot-Strap   -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<!-- -----------------------  -->
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: red;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: white;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: blue;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: blue;
    color: white;
}
</style>



<section id="form"><!--form-->
		
        <div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<font color="#FF6600" face="Courier New, Courier, monospace">If you don't have account you may SignUp first</font>
                        <h2>Login to your account</h2>
						<form action="login_process.php" method="post">
							<input type="text" placeholder="Registered E-Mail or mobile no" name="textinput" required />
							<input type="password" placeholder="Password"  name="passwordinput" required />
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					 
							
					 
					</div><!--/login form-->
					</br>
					<a href="#" id="myBtn" class="btn btn-primary">Forgot Password ??</a>				
                </div>


<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">x</span>
      <h2>Forgot Password</h2>
    </div>
    <div class="modal-body">
      <p>Enter Your Registered Email Id with Us.</p>


      <form action="sms.php" method="post">
      <p><input type="text" name="email" class="form-control" required /></p>
      <p><input type="submit" name="Submit" class="btn btn-primary" value="Submit"/></p>
     </form>

    </div>
    <div class="modal-footer">
    <br/>
    <center>Password has been Send to in Your Registered Email id </center>
    <br/>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<font color="#FF6600" face="Courier New, Courier, monospace">If you SignUp then you may proceed to Login</font>
                        <h2>New User Signup!</h2>
						<form method="post" action="registration_process.php" >
							<input type="text" placeholder="Full Name"  name="fname" required/>
 							<input type="email" placeholder="Email Address" name="email" required/>
							<input type="password" placeholder="Password" name="passwrd" required/>
                             <input type="text" placeholder="Enter Mobile Number" name="mnum" required/>
                            <button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	<?php    
	if(isset($_GET["st"]))
	{
	?>
	
	<script>
	alert("Opps!! Wrong Userid or password");
	</script>
	
	<?php
	} 
	
	  ?>
	
	
	<?php    
	if(isset($_GET["status"]))
	{
	?>
	
	<script>
	alert("Congratulation.. Your Account has been created successfully.. Now Log In To Enjoy Shopping");
	</script>
	
	<?php
	} 
	
	  ?>
	  
	  
	  <?php    
	if(isset($_GET["statusl"]))
	{
	?>
	
	<script>
	alert("Your are logout to your  Account successfully..");
	</script>
	
	<?php
	} 
	
	  ?>


	   <?php    
	if(isset($_GET["st1"]))
	{
	?>
	
	<script>
	alert("Password has been sent to Your Rgistered Email id");
	</script>
	
	<?php
	} 
	
	  ?>



	   <?php    
	if(isset($_GET["stt"]))
	{
	?>
	
	<script>
	alert("Entered Email id is not registered with us.Sorry for Inconvinece");
	</script>
	
	<?php
	} 
	
	  ?>
	  
	  
	  
     <?php  include("bottom.php"); ?>