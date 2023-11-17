<?php include("top.php");?>
  <?php
									if(isset($_SESSION["client_name"]))
				 						{
											 
				 						}
										else
										{
											echo "Hi, Guest";
											header("location:login.php?login please");
										}
								?>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
  
  
    <script>
  $(function() {
    $( "#datepicker1" ).datepicker();
  });
  </script>
 
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
 
 

<div class="w3-container w3-pale-blue w3-leftbar w3-border-blue">
<p>				  
<?php

// $_SESSION["address_id"];
 

 
 

 
if(isset($_SESSION["client_name"]))
				 {
					echo "Name : ".$_SESSION["client_name"]." ";
					echo $_SESSION["client_lname"];
					?>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
					echo "Coustomer ID : ".$_SESSION["client_id"]." ";
				 }
					?>
                    <br>
                   

</p>
</div>

<br>
<div class="w3-container w3-pale-green w3-leftbar w3-border-green">
<form action="shopping_history.php" method="get">
 From: <input type="date" id="datepicker" name="cal1"> To: <input type="text" id="datepicker1" name="cal2">
 
<button id="button1id" name="button1id" class="btn btn-success">Search</button>
 </form>
 
 
 </div>

<br>
<div class="w3-container w3-pale-red w3-leftbar w3-border-red">
<p>
 <style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:#f5f5f5}
</style>

<?php

  
if(isset($_GET["cal1"]) && isset($_GET["cal2"]))
{
	 
  $sql="select distinct orderid,det from sold where custid='".$_SESSION['client_id']."' and det BETWEEN '".$_GET["cal1"]."' AND '".$_GET["cal2"]."'";



}
 else
 {

$sql="select distinct orderid,det from sold where custid='".$_SESSION['client_id']."'";
 }
$result=mysql_query($sql);
if( mysql_num_rows($result)>0)
{
echo "TOTAL NO.OF ORDER :" .mysql_num_rows($result);
}
else
{
echo "<center><strong> No Transaction Found </strong></center>";
}
?>
<table>
  <tr>
    <th>SR.NO.</th>
    <th>ORDER ID</th>
    <th>DATE</th>
   <th>Bill</th>
  </tr>
  
  <?php
   $count=0;
  while($row=mysql_fetch_array($result))
  {
	  $count++;
   ?>
   <SCRIPT TYPE="text/javascript">
  function popup(mylink, windowname)
   { 
   	if (! window.focus)return true; var href; if (typeof(mylink) == 'string') href=mylink; else href=mylink.href; window.open(href, windowname, 'width=700,height=650,scrollbars=yes'); return false; } 
 </SCRIPT>
  <tr>
    <td><?php echo $count;  ?></td>
    <td><?php echo $row["orderid"];  ?></td>
    <td><?php echo $row["det"];  ?></td>
   <td> <a href="bill.php?orderid=<?php  echo $row["orderid"]; ?>" onClick="return popup(this, 'notes')"><img src="admin/icon/bill.png" height="80"/></a></td>
  </tr>
  
  <?php
  }
  ?>
  
</table>
 
</p>
</div>

<br>
<div class="w3-container w3-pale-yellow w3-leftbar w3-border-yellow">
<p>
 We appriciate Your Order.. Thank you
</p>

</div>
<br>
<br>
<form action="confirmprocess.php">
  	
</form> 
<?php include("bottom.php");?>
