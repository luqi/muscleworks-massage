<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>

<?php echo $this->Form->create('Archivevoucher'); ?>
	<fieldset>


		<h3><?php echo __('Edit Voucher Status'); ?></h3>
 <label>Voucher ID:</label><?php echo $id;?>               
 <?php
		echo $this->Form->input('id');
                echo $this->Form->input('status',array('options'=>array(
                    'redeemed'=>'redeemed',
                    'unredeemed'=>'unredeemed',
                    'expired'=>'expired',
                )));?>
                <?php
		echo $this->Form->input('id');
                echo $this->Form->input('payment',array('options'=>array(
                    'paid'=>'paid',
                    'unpaid'=>'unpaid',
                )));?>
                  
     <?php
		echo $this->Form->input('id');
               echo $this->Form->input('date_purchase', array('label'=>'Date (If unpaid,this is created date otherwise paid date.)','dateFormat'=>'DMY'));

        ?>
<?php
		echo $this->Form->input('id');
                echo $this->Form->input('payment_method',array('options'=>array(
                    'PayPal'=>'PayPal',
                    'Bank Transfer'=>'Bank Transfer',
                    'Cash'=>'Cash',
                    ''=>'None',
                )));?>
      	</fieldset>


	
<div class="actions">
	<ul>
	<li><?php echo $this->Html->link(__('Go Back'), array('controller' => 'archivevouchers','action'=>'index')); ?> </li>
	</ul>

	
	
<?php echo $this->Form->end(__('Submit')); ?>
