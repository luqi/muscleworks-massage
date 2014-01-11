<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>
<div class="pagecontents view">
<h2><?php  echo __('Page content'); ?></h2>
	<dl>
		
		<dt><?php echo __('Page'); ?></dt>
		<dd>
			<?php echo h($pagecontent['Pagecontent']['page']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($pagecontent['Pagecontent']['content']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pagecontent['Pagecontent']['id'])); ?> </li>
		
		<li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?> </li>
		
	</ul>
</div>
