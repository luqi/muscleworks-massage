<?php
// in your view file
$this->Html->css('global', null, array('inline' => false));
?>

<table class="table2">

<tr>
                    <td><b><?php echo __('GV Number:'); ?></b></td>
		    <td>
			<?php echo h($vouchers['Voucher']['id']); ?>
			&nbsp;</td>
		</tr>
                
                <tr>
                    <td><b><?php echo __('To:'); ?></b></td>
		    <td>
			<?php echo h($vouchers['Voucher']['to_name']); ?>
			&nbsp;</td>
		</tr>
  		<tr>
                    <td><b><?php echo __('From:'); ?></b></td>
		    <td>
			<?php echo h($vouchers['Voucher']['from_name']); ?>
			&nbsp;</td>
		</tr>
  		<tr>
                    <td><b><?php echo __('Price:'); ?></b></td>
                    <td>
			<?php echo '$',h($vouchers['Voucher']['price']); ?>
			&nbsp;</td>
		</tr>	

                
              
               
                <tr>
                    <td><b><?php echo __('Date:'); ?></b></td>
                    <td>
			<?php echo date('d/m/Y',  strtotime(h($vouchers['Voucher']['date_purchase']))); ?>
			&nbsp;</td>
		</tr>
				<tr>
                   <td><b><?php echo __('Message'); ?></b></td>
		   <td>
			<?php echo h($vouchers['Voucher']['message']); ?>
			&nbsp;</td>
		</tr>

</table>
<table class="table5">
		<tr>
                    <td>
			<?php echo $phone['Pagecontent']['content']; ?>
			&nbsp;</td>
		</tr>
		</table>
		    

<center><?php echo $this->Html->image('Voucher.png', array('width'=>'75%', 'height'=>'75%','style'=>'z-index:-1'));?>

 

