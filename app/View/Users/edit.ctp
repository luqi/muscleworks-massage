<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>

<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
 		<legend>Edit User</legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('username');
		// echo $this->Form->input('password');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end('Submit');?>
</div>
<div class="actions">
	<h3>Actions</h3>
	<ul>
		<li><?php echo $this->Html->link('List Users', array('action' => 'index'));?></li>
	</ul>
</div>
