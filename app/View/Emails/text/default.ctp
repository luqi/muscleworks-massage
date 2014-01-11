<?php echo "Dear Customer, ";?><br>
<?php 
$content = <<<CONTENT
Thanks for your recent booking with Muscleworks Massage, your purchase is now On Hold.
CONTENT;

echo $content;
?><br>
    <?php echo 'Amount Due is:' ?>&nbsp;<?php echo $aVoucher['Voucher']['price'] ?>