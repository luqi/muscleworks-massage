<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>

<h3>Archived Unpaid Gift Vouchers</h3>
<div class="actions">
	<ul>
	<li><?php echo $this->Html->link(__('Home'), array('controller' => 'Pagecontents')); ?> </li>
	</ul>
</div>
<div class="actions">
	<ul>
	<li><?php echo $this->Html->link("View Current Vouchers", array('controller'=>'vouchers','action'=>'index')) ?> </li>
	</ul>
</div>
<div class="actions">
	<ul>
	<li><?php echo $this->Form->postLink(__('Delete Unpaid Vouchers Older Than 3 Months'), array('action' => 'delete_month'), null, __('Are you sure you want to delete all the unpaid vouchers older than 3 months?')); ?>
</li>
	</ul>
</div>
<div id="search">
    <table width="250">
        <?php echo $this->Form->create('Archivevoucher', array('type' => 'get', 'url' => array('controller' => 'archivevouchers', 'action' => 'search'))); ?>
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
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
   
    <tr>
         <th><?php echo $this->Paginator->sort('id','ID'); ?></th>
        <th><?php echo $this->Paginator->sort('from_name','From'); ?></th>
        <th><?php echo $this->Paginator->sort('from_email','Email'); ?></th>
        <th><?php echo $this->Paginator->sort('to_name','To'); ?></th>
       
        <th nowrap><?php echo $this->Paginator->sort('date_purchase','Date'); ?></th>
        <th><?php echo $this->Paginator->sort('price','Price'); ?></th>
        <th><?php echo $this->Paginator->sort('status','Status'); ?></th>
        <th><?php echo $this->Paginator->sort('payment','Payment Status'); ?></th>
        <th><?php echo $this->Paginator->sort('payment_method','Payment Method'); ?></th>
        
        
        <th>Edit</th>
     
    </tr>

   <?php foreach ($archivevouchers as $archivevoucher): ?>
	<tr class="gradeA">
                <td><?php echo h($archivevoucher['Archivevoucher']['id']); ?>&nbsp;</td>
                <td><?php echo h($archivevoucher['Archivevoucher']['from_name']); ?>&nbsp;</td>
                <td><?php echo h($archivevoucher['Archivevoucher']['from_email']); ?>&nbsp;</td>
                <td><?php echo h($archivevoucher['Archivevoucher']['to_name']); ?>&nbsp;</td>

                <td><?php echo date('d-m-Y',  strtotime(h($archivevoucher['Archivevoucher']['date_purchase']))); ?>&nbsp;</td>
                <td><?php echo '$',h($archivevoucher['Archivevoucher']['price']); ?>&nbsp;</td> 
                <td><?php echo h($archivevoucher['Archivevoucher']['status']); ?>&nbsp;</td>
                <td><?php echo h($archivevoucher['Archivevoucher']['payment']); ?>&nbsp;</td>
                <td><?php echo h($archivevoucher['Archivevoucher']['payment_method']); ?>&nbsp;</td>
                <td><?php echo $this->Html->image("edit.png", array('url'=>array('action' => 'edit', $archivevoucher['Archivevoucher']['id']))); ?></td>     
	</tr>
<?php endforeach; ?>
</tbody>
</table>  
</div> 
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
<br><br><br>
