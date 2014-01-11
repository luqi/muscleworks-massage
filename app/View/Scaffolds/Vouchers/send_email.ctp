<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>

<?php $this->layout='admin'?>
<h2>Confirmation</h2>
<p>The voucher purchased by <b><?php echo $details['Voucher']['from_name'] ?></b> has been sent to <b><?php echo $details['Voucher']['from_email'] ?></b> successfully!</p>
