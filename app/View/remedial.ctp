<?php $this->layout='admin'?>
<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
	<li><?php echo $this->Html->link(__('Home'), array('controller' => 'pageContents')); ?> </li>
	</ul>
</div>

<?php
$this->Html->css(array('search/demo_page', 'search/demo_table'), 'stylesheet', array('inline' => false));
?>
<?php echo $this->Html->script(array('jquery', 'search_bar/jquery.js')); ?>
<?php echo $this->Html->script(array('jquery', 'search_bar/jquery.dataTables.js')); ?>
<?php echo $this->Html->script(array('jquery', 'search_bar/jquery.js')); ?>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('#example').dataTable();
    } );
</script>


<h3>All Remedial Massage Testimonials</h3>
<div id="demo"> 
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
 <thead>
	<tr>
			
			<th>Name</th>
			<th>Date created</th>
			<th>Service</th>
			<th>Comment</th>
			<th>Status</th>
			<th>Edit</th>
                        <th>View</th>
                        <th>delete</th>
	</tr>
        
        </thead>
	<?php foreach ($testimonials as $testimonial): ?>
	
		<tr class="gradeA">
		<td><?php echo h($testimonial['Testimonial']['Name']); ?>&nbsp;</td>
               
		<td><?php echo h($testimonial['Testimonial']['created']); ?>&nbsp;</td>
		<td><?php echo h($testimonial['Testimonial']['Service']); ?>&nbsp;</td>
		<td><?php echo h($testimonial['Testimonial']['Comment']); ?>&nbsp;</td>
                <td><?php echo h($testimonial['Testimonial']['status']); ?>&nbsp;</td>
		
		
                
               
                <td><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $testimonial['Testimonial']['id'])); ?></td>
                <td><?php echo $this->Html->link(__('View'), array('action' => 'view', $testimonial['Testimonial']['id'])); ?></td>
	        <td><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $testimonial['Testimonial']['id']), null, __('Are you sure you want to delete %s comment?', $testimonial['Testimonial']['Name'])); ?></td>
</tr>




<?php endforeach; ?>
</tbody>
</table>    
</div> 
	
