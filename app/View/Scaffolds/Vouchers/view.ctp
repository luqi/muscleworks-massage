<?php $this->layout='admin'?>
<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>
<h3>Voucher Details</h3>
<div class="actions">
	<ul>
	<li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?> </li>
		</ul>
</div>
<div class="actions">
	<ul>
	<li><?php echo $this->Html->link(__('Email'), array('action' => 'sendEmail', $voucher['Voucher']['id'])); ?></li>
		</ul>
</div>
<div class="actions">
	<ul>
	<li><?php echo  $this->Html->link(__('Create Voucher'), array('action' => 'create_voucher', $voucher['Voucher']['id'])); ?></li>
		</ul>
</div>


<table cellpadding="0" cellspacing="0">
    <tr>
        <th width="300px">ID</th>
        <th><?php echo $voucher['Voucher']['id'] ?></th>
    </tr>
    <tr>
        <th width="300px">Your Name</th>
        <th><?php echo $voucher['Voucher']['from_name'] ?></th>
    </tr>
    <tr>
        <th width="300px">Your Mobile Number</th>
        <th><?php echo $voucher['Voucher']['phoneNumber_1'] ?></th>
    </tr>
    <tr>
        <th width="300px">Your Email</th>
        <th><?php echo $voucher['Voucher']['from_email'] ?></th>
    </tr>
    <tr>
        <th width="300px">Recipient</th>
        <th><?php echo $voucher['Voucher']['to_name'] ?></th>
    </tr>
    <tr>
       
    <tr>
        <th width="300px">Price</th>
        <th><?php echo '$', $voucher['Voucher']['price'] ?></th>
    </tr>
    <tr>
        <th width="300px">Message</th>
        <th><?php echo $voucher['Voucher']['message'] ?></th>
    </tr>
</table>
<br><br><br><br><br>
