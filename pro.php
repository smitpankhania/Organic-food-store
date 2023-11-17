
<?php include("top.php");
include 'config.php';
  session_start();
?> 

    
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
<!DOCTYPE html>
<html>	
<style type="text/css">
#form_profile{
  height:500px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;  
}
</style>
<head>
	<meta charset="utf-8">
	<title>profile</title>
</head>						
<?php
  
$custid=$_SESSION['client_id'];
$query=mysqli_query($conn,"SELECT * FROM registration where custid='".$custid."' ")or die(mysqli_error());
$row=mysqli_fetch_array($query);
  ?>								



<body>
 
        
<div style="text-align: center;">
        <img src="p.jpg"height=110 width=120>
        </div>
      
        
        <form method="post" id="form_profile" >
          <h1>User Profile</h1>
          <p>
            <label>Name</label>
            <input type="text" class="form-control" name="name" style="width:20em;" placeholder="Enter your Name" value="<?php echo $row['fname']; ?>" required />
          </p>
          <p>
            <label>Email</label>
            <input type="text" class="form-control" name="Email" style="width:20em;" placeholder="Enter your Email" required value="<?php echo $row['email']; ?>" />
          </p>
          <p>
            <label>Password</label>
            <input type="number" class="form-control" name="Password" style="width:20em;" placeholder="Enter your Password" value="<?php echo $row['password']; ?>">
          </p>
          <p>
            <label>Mobile</label>
            <input type="text" class="form-control" name="number" style="width:20em;" required placeholder="Enter your Mobile.No " value="<?php echo $row['mnum']; ?>"></textarea>
          </p>
          <p>
            <input type="submit" name="submit" class="btn btn-primary" style="width:20em; margin:0;"><br><br>
          </p>
          <p>  
            <center>
             <a href="logout.php">Log out</a>
           </center>
          </p> 
         
        </form>
      
  
</body>
</html>
<?php
      if(isset($_POST['submit'])){
        $Name = $_POST['name'];
        $Emailname = $_POST['Email'];
        $Password = $_POST['Password'];
        $Mobile = $_POST['number'];
      $query = "UPDATE registration SET fname = '".$Name."',email ='".$Emailname."', password = '".$Password."', mnum = '".$Mobile."' WHERE custid = '".$custid."' ";
                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            location = "index.php";
        </script>
        <?php
             }              
?>

<?php include("bottom.php");?>