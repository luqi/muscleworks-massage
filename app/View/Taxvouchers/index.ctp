<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>

<h3>Archived Paid (Redeemed or Expired) Gift Vouchers</h3>
<div class="actions">

	<ul>
	<li><?php echo $this->Html->link(__('Home'), array('controller' => 'Pagecontents')); ?> </li>
	</ul>
</div>
<div class="actions">

	<ul>
	<li><?php echo $this->Html->link('View Current Vouchers', array('controller'=>'vouchers','action'=>'index'));?></li>
	</ul>
</div>
<div class="actions">

	<ul>
	<li><?php echo $this->Html->link('View PDF', array('action'=>'view_pdf'));?></li>
	</ul>
</div>
<div class="actions">

	<ul>
	<li><?php echo $this->Form->postLink('Delete 5 year old Vouchers', array('action'=>'delete_year'),null,__('Are you sure you want to delete all the paid vouchers older than 5 years?'));?> </li>
	</ul>
</div>
<div id="search">
    <table width="250">
        <?php echo $this->Form->create('Taxvoucher', array('type' => 'get', 'url' => array('controller' => 'taxvouchers', 'action' => 'search'))); ?>
        <tr>

            <td><?php 
            $keywords = null;
            echo $this->Form->input('keywords', array('type' => 'text', 'empty' => '-- Enter Keywords --', 'value' => $keywords)); ?>
                <br>
                <?php echo $this->Form->submit('Go', array('name' => 'submitName', 'id' => 'search_button')); ?>
            </td>
        </tr>
        <?php echo $this->Form->end(); ?>

    </table>
</div>





<div id="demo"> 
<table  class="display" id="example">

    <tr>
         <th><?php echo $this->Paginator->sort('id','ID'); ?></th>
        <th><?php echo $this->Paginator->sort('from_name','From'); ?></th>
        <th><?php echo $this->Paginator->sort('from_email','Email'); ?></th>
        <th><?php echo $this->Paginator->sort('to_name','To'); ?></th>
       
        <th><?php echo $this->Paginator->sort('date_purchase','Date'); ?></th>
        <th><?php echo $this->Paginator->sort('price','Price'); ?></th>
        <th><?php echo $this->Paginator->sort('status','Status'); ?></th>
        <th><?php echo $this->Paginator->sort('payment','Payment Status'); ?></th>
        <th><?php echo $this->Paginator->sort('payment_method','Payment Method'); ?></th>
        <th>View</th>
        
        <th>Edit</th>     
    </tr>

   <?php foreach ($taxvouchers as $taxvoucher): ?>
	<tr class="gradeA">
                <td><?php echo h($taxvoucher['Taxvoucher']['id']); ?>&nbsp;</td>
                <td><?php echo h($taxvoucher['Taxvoucher']['from_name']); ?>&nbsp;</td>
                <td><?php echo h($taxvoucher['Taxvoucher']['from_email']); ?>&nbsp;</td>
                <td><?php echo h($taxvoucher['Taxvoucher']['to_name']); ?>&nbsp;</td>                    
                <td nowrap><?php echo date('d-m-Y',  strtotime(h($taxvoucher['Taxvoucher']['date_purchase']))); ?>&nbsp;</td>
                <td><?php echo '$',h($taxvoucher['Taxvoucher']['price']); ?>&nbsp;</td>
                <td><?php echo h($taxvoucher['Taxvoucher']['status']); ?>&nbsp;</td>
                <td><?php echo h($taxvoucher['Taxvoucher']['payment']); ?>&nbsp;</td>
                <td><?php echo h($taxvoucher['Taxvoucher']['payment_method']); ?>&nbsp;</td>
                <td><?php echo $this->Html->image("view.png", array('url'=>array("action"=>"view", $taxvoucher["Taxvoucher"]["id"])));?></td>
                <td><?php echo $this->Html->image('edit.png', array('url'=>array('action' => 'edit', $taxvoucher['Taxvoucher']['id']))); ?></td>

	</tr>
<?php endforeach; ?>
</tbody>
</table>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
    <br><br><br>

 




