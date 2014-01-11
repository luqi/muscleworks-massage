<?php $this->layout='admin'?>
<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>
<h3>View Price</h3>
<table cellpadding="0" cellspacing="0">
    
    <tr>
        <th>Minutes</th>
        <th><?php echo $price['Price']['minutes'] ?></th>
    </tr>
    <tr>
        <th>Price</th>
        <th><?php echo $price['Price']['value'] ?></th>
    </tr>
</table>
<br><br><br><br><br>
<?php echo $this->Html->link(__('Back'), array('action' => 'price_list')); ?>