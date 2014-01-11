<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>


<div class="testimonials form">
<?php echo $this->Form->create('Testimonial'); ?>
	<fieldset>
		<h3><?php echo __('Edit Testimonial'); ?></h3>
                <?php
		echo $this->Form->input('id');
		//echo $this->Form->input('Name', array('readonly' => 'true', 'style' => 'border: none;'));
                ?>
                <div>Name</br><span style="font-weight: bold; font-size: 18px;"><?php echo($Name); ?></span></div>
                <input type="hidden" name="data[Testimonial][Name]" value="<?php echo($Name); ?>">

                <div style='margin-left: 3px;'><select name="data[Testimonial][Service]">
<option value="">Choose The Massage Type</option>
<?php foreach ($services as $service): ?>
<option value ="<?php echo $service['Service']['type']; ?>"
 <?php if($selected_service == $service['Service']['type']) echo("selected");  ?> >
 <?php echo $service['Service']['type']; ?>
 </option>
 <?php endforeach; ?>
 </select></div>
                
                <?php    
                echo $this->Form->input('created', array('type' => 'text', 'label' => 'Submission Date'));
		echo $this->Form->input('content', array('type' => 'textarea'), array('limit' => '10'));
                 echo "<div style='margin-left: 3px;'>Display Name: ". h($consent)."</div>";
                echo $this->Form->input('status',array('options'=>array(
                    'Published'=>'Published',
                    'Unpublished'=>'Unpublished',
                )));?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Testimonial.id')), null, __('Are you sure you want to delete  "%s"?', $this->Form->value('Testimonial.Name'))); ?></li>
		<li><?php echo $this->Html->link(__('List Testimonials'), array('action' => 'index')); ?></li>
	</ul>
</div>
