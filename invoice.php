<?php include('config.php'); ?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css" media="all" />
    <style type="text/css" media="print">
	@page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */
    }

 
</style>
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="../images/home/newlogo1.png">
      </div>
      <div id="company">
        <h2 class="name">RUSHI MALKAN</h2>
        <div>SIMANDHAR METHRO GOTA </div>
        <div>Phone:9328356116</div>
        <div><a href="mailto:help@swarajmart.in">help@RUSHIMALKAN.in</a></div>
      </div>
      </div>
      
    </header>
    <main>
        <?php
        $sql1="select * from sold where orderid='".$_GET['ordid']."'";
        $qq=mysqli_query($conn,$sql1);
        if($row=mysqli_fetch_assoc($qq))
        {
             $cust_id=$row['custid'];
             $address_id=$row['address_id'];
             $det=$row['det'];
             
             
                $sql11="select * from registration where custid='".$row['custid']."'";
                $qq1=mysqli_query($conn,$sql11);
                if($row1=mysqli_fetch_assoc($qq1))
                {
                $cust_name= $row1['fname']; 
                $cust_mobile= $row1['mnum'];  
                $cust_email= $row1['email'];  
                }
                
                //address
                $sqla="select * from shipping_address where address_id='".$row['address_id']."'";
                $qqa=mysqli_query($conn,$sqla);
                if($rowa=mysqli_fetch_assoc($qqa))
                {
                $address1= $rowa['address1']; 
                $address2= $rowa['address2'];
                $area= $rowa['area'];
                $landmark= $rowa['landmark'];
                $city= $rowa['city'];
                $state= $rowa['state'];
                $country= $rowa['country'];
                $pincode= $rowa['pincode'];
                
                
                }
            
        }
        ?>
        
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">INVOICE TO:</div>
          <h2 class="name"><?php echo $cust_name; ?> #<?php echo $cust_id; ?></h2>
          <div class="address"><?php echo  $address1; ?>,<?php echo  $address2; ?>,<?php echo  $area; ?></div>
           <div class="address"><?php echo  $landmark; ?>,<?php echo  $city; ?>,<?php echo  $state; ?>,<?php echo  $pincode; ?></div>
          <div class="email"><a href="mailto:john@example.com"><?php echo $cust_email; ?></a></div>
          <div class="email"><a href="mailto:john@example.com"><?php echo $cust_mobile; ?></a></div>
        </div>
        <div id="invoice">
          <h3>INVOICE NO: <?php echo $_GET['ordid']; ?></h3>
          <div class="date">Date of order: <?php echo $det; ?></div>
          <div class="date"> </div>
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc">DESCRIPTION</th>
            <th class="unit">UNIT PRICE</th>
            <th class="qty">QUANTITY</th>
            <th class="total">TOTAL</th>
          </tr>
        </thead>
        <tbody>
            
        <?php
        $i=0;
        $st=0;
        $dt=0;
        $sqlt="select * from sold
        inner join product on product.pid=sold.pid
        where sold.orderid='".$_GET['ordid']."'";
        $qqt=mysqli_query($conn,$sqlt);
        while($rowt=mysqli_fetch_assoc($qqt))
        {
          $i++;  
        ?>
          <tr>
            <td class="no"><?php echo $i; ?></td>
            <td class="desc"><h3><?php echo $rowt['pname']; ?></h3></td>
            <td class="unit"><?php echo $rowt['pprice']; ?></td>
            <td class="qty"><?php echo $rowt['qty']; ?></td>
            <td class="total"><?php echo $sbut=$rowt['pprice']*$rowt['qty']; ?></td>
          </tr>
          
        <?php
        $st=$st+$sbut;
        }
        ?>
        
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">SUBTOTAL</td>
            <td><?php echo $st; ?></td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">Delivery Charges</td>
            <td><?php echo $dt; ?></td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">GRAND TOTAL</td>
            <td>Rs <?php echo $st+$dt; ?> /-</td>
          </tr>
        </tfoot>
      </table>
      <div id="thanks">Thank you!</div>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">Returns is a scheme provided by respective sellers directly under this policy in terms of which the option of exchange, replacement and/ or refund is offered by the respective sellers to you.</div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>