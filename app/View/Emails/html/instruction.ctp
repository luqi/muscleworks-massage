<?php echo "Dear Customer, ";?><br><br>
<?php 
$content = <<<CONTENT
Thank you for your recent purchase with Muscleworks Massage, your gift voucher is now on hold until payment has cleared.
CONTENT;

echo $content;
?></br>
<?php echo 'Amount Due is: $' ?><?php echo $aVoucher['Voucher']['price'] ?><br>
<?php
$info = <<<CONTENT
As you have elected to pay via banking transfer, please follow the steps below to complete your purchase.
CONTENT;
echo $info; ?><br>
<h2>Step 1</h2>
<p>Login to your internet banking and enter the following details: <br>
   <b>(Australian Dollars only) </b><br>
   <b>Bank account name: Megan Laraia</b><br>
   <b>BSB number: 083-876</b><br>
   <b>Account number: <p>16-268-7909</p></b>
</p><br>
<h2>Step 2</h2>
<p>Please enter your full surname and gift voucher number <b><?php echo $aVoucher['Voucher']['id']?></b> in the payee description/payee reference field. 
   Payment must be made within <b>48 hours</b> to reach Muscleworks Massage for transaction clearance and in house processing.
</p><br>
<h2>Step 3</h2>
<?php echo 'Enter Amount Due: $' ?><?php echo $aVoucher['Voucher']['price'] ?> <?php echo 'to the amount field.' ?><br><br><br>
<h2>Step 4</h2>
<p>Once payment has cleared, we will send you a print ready copy of your gift voucher to the specified email. Please allow up to 5
business days for the funds to clear against the purchase to receive your personalised gift voucher.</p><br>
<h2>Important information about your purchase</h2><br>
<p>Your purchase will be automatically cancelled if Muscleworks Massage does not receive any payment, if the payment is not forwarded within the listed time frames or if the payment is forwarded incorrectly. </p>
<br>

<b>Yours Sincerely,</b><br>
<b>Muscleworks Massage</b><br>
<b>Telephone: <?php echo $aPhone['Pagecontent']['content']; ?></b><br>
<b>Address: <?php echo $aAddress['Pagecontent']['content']; ?></b><br>
<b>Website: www.muscleworksmassage.com.au</b>


