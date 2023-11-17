<?php include("config.php");

$username=$_POST['textinput'];$password=$_POST['passwordinput'];

$sql = "SELECT * FROM registration where email='". $username."' or mnum='".$username."' and password='".$password."'";
$result =mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
$temp=0;


if ($num > 0)
{
                                            if($row = mysqli_fetch_assoc($result))
                                            {
                                                if($row['type']=="Admin")
                                                {
                                                ob_clean();
                                                header("Location:admin/dashboard.php");
                                                }
                                                
                                            
                                            else if($row['type']=="customer")
										    {
											
										    $_SESSION["client_name"]=$row['fname'];
											$_SESSION["client_lname"]=$row['lname'];
											$_SESSION["client_id"]=$row['custid'];
											$_SESSION["client_DOB"]=$row['DOB'];
											$_SESSION["client_email"]=$row['email'];
											$_SESSION["mnum"]=$row['mnum'];
										 
									 	header("location:index.php?username=".$row['fname'].""); 
										 }
									 
									 }
 
									}
									else
									{										 
	 							 header("location:login.php?st=fail");
									}
 
 
 
 ?>