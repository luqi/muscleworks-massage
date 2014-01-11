<?php $this->layout='admin'?>
<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>
<div class="actions">
	<h3><?php echo __(''); ?></h3>
	<ul>
	<li><?php echo $this->Html->link(__('Home'), array('controller' => 'Pagecontents')); ?> </li>
        
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

<h3>All Services</h3>
<div id="demo"> 
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
 <thead>
    <tr>
			
        
        
                       <th>Page Number</th>
                       <th>type</th>
			
			
			
                        <th>edit</th>
                        
                       
                        
	   </tr>
</thead>
	<?php foreach ($services as $service): ?>
	<tr class="gradeA">
		<td><?php echo h($service['Service']['pagename']); ?>&nbsp;</td>
		<td><?php echo h($service['Service']['type']); ?>&nbsp;</td>
		
		
		
			    
         
                <td><?php echo $this->Html->image('edit.png', array('url'=>array('action' => 'edit', $service['Service']['id']))); ?></td>
	       
</tr>
<?php endforeach; ?>
</tbody>
</table>    
</div> 


	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
