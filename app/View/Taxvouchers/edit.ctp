<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>

<?php echo $this->Form->create('Taxvoucher'); ?>
	<fieldset>
		<h3><?php echo __('Edit Voucher Status'); ?></h3>
	 <label>Voucher ID:</label><?php echo $id;?>
            <?php
		echo $this->Form->input('id');
                echo $this->Form->input('status',array('options'=>array(
                    
                    'unredeemed'=>'unredeemed',
                )));?>
                
      	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
