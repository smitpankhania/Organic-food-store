<?php include("top.php"); ?>
<?php
include 'config.php';
  session_start(); 
if(isset($_POST) & !empty($_POST)){
      $cancel = filter_var($_POST['cancel'], FILTER_SANITIZE_STRING);
      $sellid = filter_var($_POST['orderid'], FILTER_SANITIZE_NUMBER_INT);

         $cansql = "INSERT INTO sold (orderid, status, det, order_time) VALUES ('$sellid', 'Cancelled', '$cancel')";
         $canres = mysqli_query($config, $cansql) or die(mysqli_error($config));
         if($canres){
            $ordupd = "UPDATE sold SET orderstatus='Cancelled' WHERE sellid=$sellid";
            if(mysqli_query($config, $ordupd)){
               header('location: account.php');
            }
         }
}
    ?>

 
<h3 class="uppercase">Cancel Order</h3>

    <form action="cancel-order.php" method="post">
            <div class="space30"></div>


                     <div class="clearfix space20"></div>
                     <label>Reason :</label>
                     <textarea class="form-control" name="cancel" cols="10"> </textarea>

               <input type="hidden" name="orderid" value="<?php echo $_GET['sellid']; ?>">     
                  <div class="space30"></div>
               <input type="submit" class="button btn-lg" value="Cancel Order">
        </form>

<?php  include("bottom.php"); ?>