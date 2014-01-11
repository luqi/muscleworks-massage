<?php $this->layout='admin'?>
<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>

<h3>Current Gift Vouchers</h3>
<div class="actions">
	<ul>
	<li><?php echo $this->Html->link(__('Home'), array('controller' => 'Pagecontents')); ?> </li>
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
	<li><?php echo $this->Form->postLink('Archive Paid and Redeemed Vouchers', array('action'=>'archive_paid'),null,__('Are you sure you want to archive all the paid and redeemed vouchers?'));?> </li>
		</ul>
</div>
<div class="actions">
	<ul>
	<li><?php echo $this->Html->link('Expire Vouchers Older Than 90 Days', array('action'=>'expire'));?></li>
		</ul>
</div>
<div id="search">
    <table width="250">
        <?php echo $this->Form->create('Voucher', array('type' => 'get', 'url' => array('controller' => 'vouchers', 'action' => 'search'))); ?>
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


   <?php foreach ($vouchers as $voucher): ?>
	<tr class="gradeA">
                <td><?php echo h($voucher['Voucher']['id']); ?>&nbsp;</td>
                <td><?php echo h($voucher['Voucher']['from_name']); ?>&nbsp;</td>
                <td><?php echo h($voucher['Voucher']['from_email']); ?>&nbsp;</td>
                <td><?php echo h($voucher['Voucher']['to_name']); ?>&nbsp;</td>                    
                <td nowrap><?php echo date('d-m-Y',  strtotime(h($voucher['Voucher']['date_purchase']))); ?>&nbsp;</td>
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
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>    
</div> 
<br><br><br><br>







