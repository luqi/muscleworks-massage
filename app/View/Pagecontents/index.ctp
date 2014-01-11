<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>

<div class="pagecontents index">
	<h2><?php echo __('Home'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('page'); ?></th>
			<th><?php echo $this->Paginator->sort('content'); ?></th>

	</tr>
	<?php foreach ($pagecontents as $pagecontent): ?>
	<tr>
		<td class="actions"><?php echo h($pagecontent['Pagecontent']['id']); 
		echo $this->Html->link(__('Edit'), array('action' => 'edit', $pagecontent['Pagecontent']['id'])); ?></td>
		<td><?php echo h($pagecontent['Pagecontent']['page']);?>
		</td>
		<td><?php echo ($pagecontent['Pagecontent']['content']); ?>&nbsp;</td>

	</tr>
<?php endforeach; ?>
	</table>
	<p>
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
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
<li><h5>Users</h5></li>
<li><?php echo $this->Html->link(__('Users'), array('controller' => 'users')); ?>&nbsp; </li>
<li><h5>Gift Vouchers</h5></li>	
<li><?php echo $this->Html->link(__('Current Gift Vouchers'), array('controller' => 'vouchers','action'=>'index')); ?> </li>
<li><?php echo $this->Html->link(__('Archived Unpaid Gift Vouchers'), array('controller' => 'archivevouchers', 'action'=>'index')); ?> </li>
<li><?php echo $this->Html->link(__('Archived Paid (Redeemded or Expired) Gift Vouchers'), array('controller' => 'taxvouchers', 'action'=>'index')); ?> </li>
<li><?php echo $this->Html->link(__('Select Paid Vouchers Between Certain Dates'), array('controller' => 'taxvouchers', 'action'=>'select')); ?>&nbsp; </li>
<li><?php echo $this->Html->link(__('Sell Gift Voucher In Store'), array('controller' => 'vouchers', 'action'=>'hardcopy')); ?>&nbsp; </li>
<li><h5>Customer Testimonials</h5></li>	
<li><?php echo $this->Html->link(__('Testimonials'), array('controller' => 'testimonials')); ?>&nbsp; </li>
<li><h5>Massage Prices</h5></li>	
<li><?php echo $this->Html->link(__('Change Prices'), array('controller' => 'prices', 'action'=>'price_list')); ?> &nbsp;</li>
<li><h5>Massage Service Names</h5></li>	
<li><?php echo $this->Html->link(__('Change Services'), array('controller' => 'services')); ?> &nbsp;</li>
<li><h5>Website Images</h5></li>		
<li><?php echo $this->Html->link(__('Upload an image'), array('controller' => 'imageuploads')); ?>&nbsp; </li>

        </ul>
</div>
