<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
	<li><?php echo $this->Html->link(__('Home'), array('controller' => 'Pagecontents')); ?> </li>
        <li><?php echo $this->Html->link(__('New Price'), array('action' => 'add')); ?></li>
	</ul>
</div>
<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>





<div class="price index">
<h3>Minutes and Prices</h3>

<div id="demo"> 
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">

    <tr>
        <th>ID</th>
        <th>Minutes</th>
        <th>Initial price</th>
		<th>Standard price</th>
        <th>Delete</th>
 
        <th>Edit</th>
    </tr>

   <?php foreach ($prices as $price): ?>
	<tr>
                <td><?php echo h($price['Price']['id']); ?>&nbsp;</td>
                <td><?php echo h($price['Price']['minutes']); ?>&nbsp;</td>
                <td><?php echo h($price['Price']['value']); ?>&nbsp;</td>
		 <td><?php echo h($price['Price']['stdvalue']); ?>&nbsp;</td>
                <td><?php echo $this->Html->link(
				$this->Html->image("delete.gif"),
				array( 'action' => 'delete', $price["Price"]["id"]),
				array('escape' => false),
				'Are you sure you want to delete ' . $price["Price"]["id"] . '?');?></td>
               
                <td><?php echo $this->Html->image('edit.png', array('url'=>array('action' => 'edit', $price['Price']['id']))); ?></td>
                
	</tr>
<?php endforeach; ?>
</tbody>
</table> 


</div> 
</div>