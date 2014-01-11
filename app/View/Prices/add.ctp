
<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>
<?php echo $this->Form->create('Price'); ?>
	
	<h3><?php echo __('Add New Price'); ?></h3>
	<?php
		echo $this->Form->input('minutes',array('style'=>'width:400px'));
		echo $this->Form->input('value',array('style'=>'width:400px'));
		echo $this->Form->input('stdvalue',array('style'=>'width:400px'));
	?>
<?php echo $this->Form->end(__('Submit')); ?>

