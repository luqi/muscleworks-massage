<?php $this->layout='admin'?>
<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>





<div class="testimonials view">
<h3><?php echo __('Testimonial Details'); ?></h3>
	<dl>

		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($testimonial['Testimonial']['Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo $testimonial['Testimonial']['created']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service'); ?></dt>
		<dd>
			<?php echo h($testimonial['Testimonial']['Service']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($testimonial['Testimonial']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Show Name'); ?></dt>
		<dd>
			<?php echo h($testimonial['Testimonial']['consent']); ?>
			&nbsp;
		</dd>
                <dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($testimonial['Testimonial']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
	    <li><?php echo $this->Html->link(__('List Testimonials'), array('action' => 'index')); ?> </li>    
		<li><?php echo $this->Form->postLink(__('Delete Testimonial'), array('action' => 'delete', $testimonial['Testimonial']['id']), null, __('Are you sure you want to delete "%s" testimonial?', $testimonial['Testimonial']['Name'])); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Testimonial'), array('action' => 'edit', $testimonial['Testimonial']['id'])); ?></li>
		
	</ul>
</div>
