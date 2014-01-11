<?php $this->layout='admin'?>
<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>



<div class="services form">
<?php echo $this->Form->create('Service'); ?>
	<fieldset>
		<h3><?php echo __('Edit'); ?></h3>
	<?php
		
		echo $this->Form->input('type');
		
	?>
	</fieldset>
<?php 
echo $this->Form->input('id', array('hiddenField' => 'Y') );
echo $this->Form->end(__('Submit')); 
?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		
		<li><?php echo $this->Html->link(__('List Services'), array('action' => 'index')); ?></li>
	</ul>
</div>
