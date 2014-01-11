<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>
<h3>Current Gift Vouchers</h3>
<div class="actions">
	<ul>
	<li><?php echo $this->Html->link(__('Home'), array('controller' => 'pageContents')); ?> </li>
		</ul>
</div>
<div class="actions">
	<ul>
	<li><?php echo $this->Html->link('Sell In Store', array('action'=>'hardcopy'));?></li>
		</ul>
</div>
<div class="actions">
	<ul>
	<li><?php echo $this->Form->postLink(__('Archive Unpaid Vouchers'), array('action' => 'archive'), null, __('Are you sure you want to archive all the unpaid vouchers?')); ?></li>
		</ul>
</div>
<div class="actions">
	<ul>
	<li><?php echo $this->Form->postLink('Archive Paid Vouchers', array('action'=>'archive_paid'),null,__('Are you sure you want to archive all the paid vouchers?'));?> </li>
		</ul>
</div>
<div class="actions">
	<ul>
	<li><?php echo $this->Html->link('Change Status of Vouchers Older Than 90 Days to Expired', array('action'=>'expire'));?></li>
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

<div id="demo"> 
<table  class="display" id="example">
 <thead>
    <tr>
        <th>ID</th>
        <th>From</th>
        <th>Email</th>
        <th>To</th>
       
        <th>Date</th>
        <th>Price</th>
        <th>Status</th>
        <th>Payment Status</th>
        <th>Payment Method</th>
        <th>View</th>
        
        <th>Edit</th>
     
    </tr>
</thead>
   <?php foreach ($vouchers as $voucher): ?>
	<tr class="gradeA">
                <td><?php echo h($voucher['Voucher']['id']); ?>&nbsp;</td>
                <td><?php echo h($voucher['Voucher']['from_name']); ?>&nbsp;</td>
                <td><?php echo h($voucher['Voucher']['from_email']); ?>&nbsp;</td>
                <td><?php echo h($voucher['Voucher']['to_name']); ?>&nbsp;</td>                    
                <td><?php echo date('d-m-Y',  strtotime(h($voucher['Voucher']['date_purchase']))); ?>&nbsp;</td>
                <td><?php echo '$',h($voucher['Voucher']['price']); ?>&nbsp;</td>
                <td><?php echo h($voucher['Voucher']['status']); ?>&nbsp;</td>
                <td><?php echo h($voucher['Voucher']['payment']); ?>&nbsp;</td>
                <td><?php echo h($voucher['Voucher']['payment_method']); ?>&nbsp;</td>
                <td><?php echo $this->Html->image("view.png", array('url'=>array("controller"=>"vouchers", "action"=>"view", $voucher["Voucher"]["id"])));?></td>
                <td><?php echo $this->Html->image('edit.png', array('url'=>array('action' => 'edit', $voucher['Voucher']['id']))); ?></td>

	</tr>
<?php endforeach; ?>
</tbody>
</table>    
</div> 
<br><br><br><br>


