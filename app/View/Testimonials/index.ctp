<?php $this->layout='admin'?>
<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>
<?php echo $this->Html->script(array('search_bar/jquery.js', 'search_bar/jquery.dataTables.js')); ?>
<script type="text/javascript" charset="utf-8">
$.extend( jQuery.fn.dataTableExt.oSort, {
    "date-uk-pre": function ( a ) {
        var ukDatea = a.split('/');
        return (ukDatea[2] + ukDatea[1] + ukDatea[0]) * 1;
    },
 
    "date-uk-asc": function ( a, b ) {
        return ((a < b) ? -1 : ((a > b) ? 1 : 0));
    },
 
    "date-uk-desc": function ( a, b ) {
        return ((a < b) ? 1 : ((a > b) ? -1 : 0));
    }
} );
   
    $(document).ready(function() {
        $('#example').dataTable({ "aaSorting": [[ 1, "desc" ]],
            "aoColumns": [
                null,
                { "sType": "date-uk" },
                null,
                null,
                null,
                null,
                null,
                null,
                null
            ]
        });
    } );
</script>

<div class="actions">
	<h3><?php echo __(''); ?></h3>
	<ul>
	<li><?php echo $this->Html->link(__('Home'), array('controller' => 'Pagecontents')); ?> </li>
       
	</ul>
</div>
<?php
$this->Html->css(array('search/demo_page', 'search/demo_table'), 'stylesheet', array('inline' => false));
?>
<h3>All Testimonials</h3>
<div id="demo"> 
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
 <thead>
	<tr>
			
			<th>Name</th>
			<th>Date created</th>
			<th>Service</th>
			<th>Comment</th>
                        <th>Consent</th>
			<th>Status</th>
                        
			<th>Edit</th>
                        <th>View</th>
                        <th>Delete</th>
	</tr>
        
        </thead>
	<?php foreach ($testimonials as $testimonial): ?>
	
            
		<tr class="gradeA">
		<td><?php echo h($testimonial['Testimonial']['Name']); ?>&nbsp;</td>
                <td><?php echo $testimonial['Testimonial']['created'] ?></td>
               <td><?php echo h($testimonial['Testimonial']['Service']); ?>&nbsp;</td>
		<td><?php echo substr( h($testimonial['Testimonial']['content']), 0, 50)." ..."; ?>&nbsp;</td>
                <td><?php echo h($testimonial['Testimonial']['consent']); ?>&nbsp;</td>
                <td><?php echo h($testimonial['Testimonial']['status']); ?>&nbsp;</td>
		
                   
	       <td><?php echo $this->Html->image('edit.png', array('url'=>array('action' => 'edit', $testimonial['Testimonial']['id']))); ?></td>	   
               <td><?php echo $this->Html->image('view.png', array('url'=>array('action'=>'view', $testimonial["Testimonial"]["id"])));?></td>
               <td>
               <?php echo $this->Html->link(
				$this->Html->image("delete.gif"),
				array( 'action' => 'delete', $testimonial["Testimonial"]["id"]),
				array('escape' => false),
				'Are you sure you want to delete ' . $testimonial["Testimonial"]["Name"] . '\'s testimonial?');?>
               
               </td>
	        
</tr>

<?php endforeach; ?>
</tbody>
</table>    
</div> 


</div>


