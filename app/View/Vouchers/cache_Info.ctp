<?php
// in your view file
$this->Html->script('dropdown.js', array('inline' => false));
$this->Html->css('global', null, array('inline' => false));
?>
<h2>Confirmation</h2>
<p>Thank you, your payment has been successfully completed and an email contains the link of your voucher has been sent to you (If you cannot get the email, please check spam folder). If you want to the print voucher off, please click "Generate Voucher" button below.</p>
<?php 
$urlGenerate = array('controller'=>'vouchers','action'=>'change_payment');
echo $this->Form->button('Generate Voucher', array('onclick' => "location.href='".$this->Html->url($urlGenerate)."'"));
?>

