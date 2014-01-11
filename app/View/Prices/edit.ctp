<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>

<?php echo $this->Form->create('Price'); ?>
	<fieldset>
		<h3><?php echo __('Edit Price'); ?></h3>
	<?php
		echo $this->Form->input('id');
                echo $this->Form->input('minutes');
                echo $this->Form->input('value');
                echo $this->Form->input('stdvalue');
        ?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>