
<center>
<?php  $this->Html->css('global', null, array('inline' => false));
?>



<h2>Muscleworks Massage</h2>
<br></br>


<fieldset>
<br></br>


<?php echo $this->Form->create('User'); ?>
	
		<h2><?php echo __('Change My Password'); ?></h2>
	<?php
		echo $this->Form->input('id');
        echo $this->Form->input('password',array('type' => 'password', 'value' => '', 'label' => 'Password'));

		echo $this->Form->input('password_confirmation',array('type'=>'password','label'=>'Confirm Password'));


	?>
	</fieldset>

<br></br>

<?php echo $this->Form->Button(__('Submit')); ?>
	
<center/>