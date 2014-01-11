
<?php $this->layout='admin'?>
<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>

<div class="services form">
<?php echo $this->Form->create('Service'); ?>
	<fieldset>
		<h3><?php echo __('Add Service'); ?></h3>
	<?php
		echo $this->Form->input('type');
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
	<li><?php echo $this->Html->link(__('Home'), array('controller' => 'pageContents')); ?> </li>
        <li><?php echo $this->Html->link(__('List Services'), array('action' => 'index')); ?></li>
	</ul>
</div>