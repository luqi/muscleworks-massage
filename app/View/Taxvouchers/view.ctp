<?php $this->layout='admin'?>
<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>
<h3>Voucher Details</h3>
<table cellpadding="0" cellspacing="0">
    <tr>
        <th>ID</th>
        <th><?php echo $voucher['Taxvoucher']['id'] ?></th>
    </tr>
    <tr>
        <th>Your Name</th>
        <th><?php echo $voucher['Taxvoucher']['from_name'] ?></th>
    </tr>
    <tr>
        <th>Your Mobile Number</th>
        <th><?php echo $voucher['Taxvoucher']['phoneNumber_1'] ?></th>
    </tr>
    <tr>
        <th>Your Email</th>
        <th><?php echo $voucher['Taxvoucher']['from_email'] ?></th>
    </tr>
    <tr>
        <th>Recipient</th>
        <th><?php echo $voucher['Taxvoucher']['to_name'] ?></th>
    </tr>
    <tr>
       
    <tr>
        <th>Price</th>
        <th><?php echo '$', $voucher['Taxvoucher']['price'] ?></th>
    </tr>
    <tr>
        <th>Message</th>
        <th><?php echo $voucher['Taxvoucher']['message'] ?></th>
    </tr>
</table>
<br><br><br><br><br>
<?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?>
&nbsp;&nbsp;
