<form action="confirmprocess.php" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="rzp_live_UpvxZwqz41d1b9" // Enter the Key ID generated from the Dashboard
    data-amount="<?php echo $_SESSION["amount"];?>" // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise or INR 500.
    data-currency="INR"
  
    data-buttontext="Pay now"
    data-name="<?php echo "Nishu Raj Marketing";?>"
    data-description="Payment for your order"
    data-image=""
    data-prefill.name="<?php echo $_SESSION["fname"];?>"
    data-prefill.email="<?php echo $_SESSION["email"];?>"
    data-prefill.contact="<?php echo $_SESSION["mobile"];?>"
    data-theme.color="#2874F0"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>


 






                     