<?php include("top.php");  ?>
<style>
#customers {
font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
border-collapse: collapse;
width: 100%;
}

#customers td, #customers th {
border: 1px solid #ddd;
text-align: left;
padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2}

#customers tr:hover {background-color: #ddd;}

#customers th {
padding-top: 12px;
padding-bottom: 12px;
background-color: blue;
color: white;
}
</style>
  <form class="form-horizontal" action="trackorder.php" method="get">
<fieldset>

<!-- Form Name -->
<legend>TRACK YOUR ORDER</legend>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="searchinput">ORDER ID:</label>
  <div class="col-md-6">
    <input id="" name="searchinput" placeholder="ENTER YOUR ORDER ID" class="form-control input-md"  maxlength="20" required>
    </br> 
      <input type="submit" id="singlebutton" name="singlebutton" class="btn btn-default check_out" value="TRACK"/>
  </div>
</div>
 
</fieldset>
</form>
    <?php
	//include("config.php");
	
	if(isset($_GET["searchinput"]))
	{		echo"<center><strong>ORDER ID =".$_GET["searchinput"]."</br>";	
	   $sql="select * from track where orderid='".trim($_GET["searchinput"])."'  order by trackid desc ";
         $result=mysqli_query($conn,$sql);
          $result1=mysqli_query($conn,$sql);
         if($rr=mysqli_num_rows($result1)==0)
         {
         	?>
	
	<script>
	alert("Opps!! Wrong Tracking ID");
	</script>
	
	<?php
         }
         else {
	?>
       </br>
	<table id="customers">
        <tr><th>Date</th><th>Time</th><th>Status</th></tr>
  
  
  <?php
 
  while($row=mysqli_fetch_array($result))
  {
	  
  
  ?>
  
  <tr>
    <td><?php echo $row['dyte'];?></td>
    <td><?php echo $row['time'];?></td>
    <td><?php echo $row['description'];?></td>
     
  </tr>
  
  <?php } ?>
  
  
  
  
  
</table>
	
	
	
	<?php
	}}
	?>

<br>
 <br>
  <br>
 <br>
 <br>
 <br>
 <br>

<br>
 <br>
 <br>
 <br> <br>
 <br>

<?php include("bottom.php");  ?>



