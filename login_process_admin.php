<?php include("config.php");

$username=$_POST['textinput'];$password=$_POST['passwordinput'];

$sql = "SELECT * FROM registration where email='". $username."' and password='".$password."'";
$result =mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
$temp=0;


if ($num > 0)
{
                                            if($row = mysqli_fetch_assoc($result))
                                            {
                                            if($row['type']=="Admin"){
                                            ob_clean();
                                            header("Location:admin/dashboard.php");
                                            }
                                            
                                            
                                           
									 
									 }
 
									}
									else
									{										 
	 							 header("location:adminlogin.php?st=fail");
									}
 
 
 
 ?>