<?php ob_start();
include("config.php");
//echo $_SESSION["client_id"]=mysqli_real_escape_string($conn, $_SERVER['REMOTE_ADDR']);

if(isset($_SESSION["client_id"]))
{
 $_SESSION["client_id"];

 $pid=$_GET['pid'];
 $sql1="select * from cart where pid='".$_GET['pid']."' and userid='".$_SESSION["client_id"]."'";
$result=mysqli_query($conn,$sql1);
if($row=mysqli_fetch_row($result))
{
echo "product already added";	
header("location:index.php?status1=duplicate");
}
else
{


        echo $sql="insert into cart(userid,pid,qty) values ('".$_SESSION['client_id']."','".$_GET['pid']."','".$_GET['qty']."')";
        
        if (mysqli_query($conn,$sql)) 
        {
            echo "New record created successfully";
        	 header("location:cart.php?status2=success");
        	
        } else 
        {
           echo "Error 78: " . $sql . "<br>" . mysql_error($conn);
        }
        
       
	
}

 
}
else
{
	 header("location:login.php?login=false");

}




?>




   
 