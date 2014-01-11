<center>
<?php  $this->Html->css('global', null, array('inline' => false));
?>


<?php echo $this->Session->flash(); ?>


<h2>Muscleworks Massage - Log In</h2>
<br></br>

<fieldset>
<?php
echo $this->Form->create();?>
<br></br>
<?php echo $this->Form->input('username');?>
<br></br>
<?php echo $this->Form->input('password');?>
<br></br>
<?php echo $this->Form->submit('Log in',array('width'=>'30px','height'=>'80px')); ?><br>
<?php echo $this->Html->link('Forgot password?', '/users/forgotpassword');?>
</fieldset>
<br></br>


   </center>
