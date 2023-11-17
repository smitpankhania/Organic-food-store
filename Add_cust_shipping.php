<?php include("top.php");?>	

  <?php

									if(isset($_SESSION["client_id"]))

				 						{

											 //	echo "Hi, Guest";

				 						}

										else

										{

											echo "Hi, Guest";

											

											header("location:login.php?login please");

										}

								?>



<script src="jquery.js"></script>

        <script>

$(document).ready(function(){

	$("#country").change( function(){

		var name = $(this).val();

		$.ajax({

 				 url: "getdata.php?country="+name,

  				 success: function(data) {

    			 $('#state').html(data);

  				 }

			  });

	});

});

</script>



<script>

$(document).ready(function(){

	$("#state").change( function(){

		var name = $(this).val();

		$.ajax({

 				 url: "getdata.php?state="+name,

  				 success: function(data) {

    			 $('#city').html(data);

  				 }

			  });

	});

});

</script>





<script>

$(document).ready(function(){

	$("#city").change( function(){

		var name = $(this).val();

		$.ajax({

 				 url: "getdata.php?city="+name,

  				 success: function(data) {

    			 $('#area').html(data);

  				 }

			  });

	});

});

</script>

<form class="form-horizontal" method="post" action="Add_cust_shipping_process.php">

<fieldset>



<!-- Form Name -->

<legend>Add Shipping Details</legend>
<!--
<div class="form-group">

  <label class="col-md-3 control-label" for="address1">Reciver Name:</label>  

  <div class="col-md-4">

  <input id="address1" name="name" placeholder="Enter Name" class="form-control input-md" required="" type="text">

  </div>

</div>


<div class="form-group">

  <label class="col-md-3 control-label" for="address1">Mobile:</label>  

  <div class="col-md-4">

  <input id="address1" name="mobile" placeholder="Enter Mobile" class="form-control input-md" required="" type="text">

  </div>

</div>


<div class="form-group">

  <label class="col-md-3 control-label" for="address1">Email:</label>  

  <div class="col-md-4">

  <input id="address1" name="email" placeholder="Enter Email" class="form-control input-md" required="" type="text">

  </div>

</div>
-->


<!-- Text input-->

<div class="form-group">

  <label class="col-md-3 control-label" for="address1">Address 1:</label>  

  <div class="col-md-4">

  <input id="address1" name="address1" placeholder="Enter Address 1" class="form-control input-md" required="" type="text">

  </div>

</div>



<!-- Text input-->

<div class="form-group">

  <label class="col-md-3 control-label" for="address2">Address 2:</label>  

  <div class="col-md-4">

  <input id="address2" name="address2" placeholder="Enter Address 2" class="form-control input-md" required="" type="text">

  <span class="help-block"> </span>  

  </div>

</div>



 



<!-- Text input-->

<div class="form-group">

  <label class="col-md-3 control-label" for="landmark">Landmark :</label>  

  <div class="col-md-3">

  <input id="landmark" name="landmark" placeholder="Enter Landmark" class="form-control input-md" required="" type="text">

  <span class="help-block"> </span>  

  </div>

</div>



 

<div class="form-group">

  <label class="col-md-3 control-label" for="Area">Area</label>

  <div class="col-md-4">

  <input id="landmark" name="area" placeholder="Enter Landmark" class="form-control input-md" required="" type="text">

   
  </div>

</div>







<!-- Select Basic -->

<div class="form-group">

  <label class="col-md-3 control-label" for="City">City</label>

  <div class="col-md-4">

       <input id="landmark" name="city" placeholder="Enter City" class="form-control input-md" required="" type="text">


  </div>

</div>


<!-- Select Basic -->

<div class="form-group">

  <label class="col-md-3 control-label" for="state">State</label>

  <div class="col-md-4">

    <input id="landmark" name="state" placeholder="Enter state" class="form-control input-md" required="" type="text">


  </div>

</div>


<!-- Text input-->

<div class="form-group">

  <label class="col-md-3 control-label" for="pincode">Pincode :</label>  

  <div class="col-md-4">

  <input id="pincode" name="pincode" placeholder="Enter Pincode" class="form-control input-md" required type="text" maxlength="6" minlength="6" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >

  <span class="help-block"> </span>  

  </div>

</div>

<div class="form-group">

  <label class="col-md-4 control-label" for="singlebutton"></label>

  <div class="col-md-4">

    <button id="singlebutton" type="submit" name="submit" class="btn btn-primary">ADD</button>

  </div>

</div>



</fieldset>

</form>

<?php   include("bottom.php");?>