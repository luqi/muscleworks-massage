<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
<li><?php echo $this->Html->link(__('Current Gift Vouchers'), array('controller' => 'vouchers','action'=>'index')); ?> </li>
</ul>
</div>

<div class="vouchers form">
<?php echo $this->Form->create('Voucher'); ?>
	<fieldset>
		<h3><?php echo __('Add Voucher'); ?></h3>
	
        <select name="data[Voucher][price]">
            <?php foreach ($allPrices as $row_price): ?>
                <option value ="<?php echo $row_price['Price']['value'];?>"><?php echo $row_price['Price']['minutes']."minutes $".$row_price['Price']['value'];?>
                </option>
            <?php endforeach; ?>
        </select>            
        <br><br>
        <hr></hr> 
        <br>
        <?php echo $this->Form->input('from_name', array('label' => 'Your Name', 'style' => 'width:400px')); ?>
        <br>
        <?php echo $this->Form->input('phoneNumber_1', array('label' => 'Your Mobile Number', 'style' => 'width:400px')); ?>
        <br>
        <?php echo $this->Form->input('from_email', array('label' => 'Your Email', 'style' => 'width:400px')); ?>
        <br>
        <?php echo $this->Form->input('to_name', array('label' => 'Recipient\'s Name', 'style' => 'width:400px')); ?>
        <br>
        <?php echo $this->Form->input('message', array( 'label' => 'Message For Recipient', 'style' => 'height:35px')); ?>
	<br>
        <?php echo $this->Form->input('payment_method',array('options'=>array(
          'Cash'=>'Cash',
          'PayPal'=>'PayPal',
          'Banking Transfer'=>'Banking Transfer',
        ))); ?>
        
        </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>