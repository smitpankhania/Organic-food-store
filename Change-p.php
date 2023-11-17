<?php include("top.php");?>
<?php 
session_start();

if (isset($_SESSION['custid']) && isset($_SESSION['fname'])) {

    include "config.php";

if (isset($_POST['Name']) && isset($_POST['Email'])
    && isset($_POST['Password'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $Name = validate($_POST['Name']);
    $Email = validate($_POST['Email']);
    $Password = validate($_POST['Password']);
    
    if(empty($Name)){
      header("Location: pro.php?error=Name is required");
      exit();
    }else if(empty($Email)){
      header("Location: pro.php?error=Email is required");
      exit();
    }else if(empty($Password){
      header("Location: pro.php?error=Password is required");
      exit();
    }else {
        // hashing the password
        $Name = md5($Name);
        $Email=md5($Email)
        $Password = md5($Password);
        $custid = $_SESSION['custid'];

        $sql = "SELECT *
                FROM registration WHERE 
                custid='$custid' AND Password='$Password'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
            
            $sql_2 = "UPDATE registration
                      WHERE custid ='$custid'";
            mysqli_query($conn, $sql_2);
            header("Location: pro.php?success=Your password has been changed successfully");
            exit();

        }else {
            header("Location: pro.php?error=Incorrect password");
            exit();
        }

    }

    
}else{
    header("Location: pro.php");
    exit();
}

}else{
     header("Location: index.php");
     exit();
}
 <?php include("bottom.php");?>