<?php
// in your view file
$this->Html->script('dropdown.js', array('inline' => false));
$this->Html->css('global', null, array('inline' => false));
?>
<h2>Confirmation</h2>
<p>Thank you, your payment has been successful. Please click the generate voucher button to print it off. We have also sent your voucher to your email!</p>
<br><br><br><br><br><br>
<?php 
$urlGenerate = array('controller'=>'vouchers','action'=>'change_payment');
echo $this->Form->button('Generate Voucher', array('onclick' => "location.href='".$this->Html->url($urlGenerate)."'"));
?>
