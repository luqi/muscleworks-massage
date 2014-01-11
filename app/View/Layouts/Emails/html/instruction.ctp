<?php echo "Dear Customer, ";?><br><br>
<?php 
$content = <<<CONTENT
Thanks for your recent booking with Muscleworks Massage, your purchase is now On Hold.
CONTENT;

echo $content;
?></br>
<?php echo 'Amount Due is: $' ?><?php echo $aVoucher['Voucher']['price'] ?><br>
<?php
$info = <<<CONTENT
As you have elected to pay using banking transfer, please follow the steps below to complete your purchasing.
CONTENT;
echo $info; ?><br><br>
<h2>Step 1</h2><br><br>
<p>Login to your Internet banking website and enter the following details: <br>
   <b>Australia (in Australian Dollar only) </b><br>
   <b>Bank account name: muscle works massage</b><br>
   <b>BSB number: 000-000</b><br>
   <b>Account number: 00000000</b>
</p><br><br>
<h2>Step 2</h2><br><br>
<p>Enter your name in the Payment Page payee description or payee reference filed(that gets provided to Muscleworks). 
   Payment must be made within <b>48 hours</b> to reach Muscleworks within the allowable time period of <b>3 business days</b>.
</p><br><br>
<h2>Step 3</h2><br><br>
<?php echo 'Enter Amount Due: $' ?><?php echo $aVoucher['Voucher']['price'] ?> <?php echo 'to the amount field to finalise your purchasing' ?><br><br>
<h2>Step 4</h2><br><br>
<p>Your purchasing will be confirmed once the funds are successfully applied against your purchasing and we will sent you the copy of 
gift voucher to your email inbox. After making payment, please allow up to 5 business days to receive your voucher.</p><br><br>

<h2>Important Information about your purchasing</h2><br><br>
<p>Your purchasing will be automatically cancelled if Muscleworks does not receive any payment, if the payment is not forwarded within our listed timeframes or if the payment is forwarded incorrectly. </p>
<br><br>

<b>Yours Sincerely,</b><br>
<b>Muscleworks Massage</b>


