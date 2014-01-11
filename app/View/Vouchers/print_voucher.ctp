<?php
// in your view file
$this->Html->css('global', null, array('inline' => false));
?>

<table class="table2">

<tr>
                    <td style="width:100px;"><b><?php echo __('GV Code:'); ?></b></td>
		    <td style="width:100px;">
			<?php echo h($voucher_data['Voucher']['id']); ?>
			&nbsp;</td>
		</tr>
                
                <tr>
                    <td style="width:100px;"><b><?php echo __('To:'); ?></b></td>
		    <td style="width:100px;">
			<?php echo h($voucher_data['Voucher']['to_name']); ?>
			&nbsp;</td>
		</tr>
 		<tr>
                    <td style="width:100px;"><b><?php echo __('From:'); ?></b></td>
		    <td style="width:100px;">
			<?php echo h($voucher_data['Voucher']['from_name']); ?>
			&nbsp;</td>
		</tr>
  		<tr>
                    <td style="width:100px;"><b><?php echo __('Price:'); ?></b></td>
                    <td style="width:100px;">
			<?php echo '$',h($voucher_data['Voucher']['price']); ?>
			&nbsp;</td>
		</tr>
	
	
                
              
               
                <tr>
                    <td style="width:100px;"><b><?php echo __('Expiry Date:'); ?></b></td>
                    <td style="width:100px;">
			<?php 
                        $expiry = strtotime(h($voucher_data['Voucher']['date_purchase']) ."+ 90 day" );
                        echo date('d/m/Y', $expiry); ?>
			&nbsp;</td>
		</tr>
			<tr>
                   <td style="width:100px;"><b><?php echo __('Message'); ?></b></td>
		   <td style="width:100px;">
			<?php echo h($voucher_data['Voucher']['message']); ?>
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
				 <table class="address">
		<tr>
                    <td>
			<?php echo $address['Pagecontent']['content']; ?>
			&nbsp;</td>
		</tr>
		</table>
		    

<center><?php echo $this->Html->image('Voucher.png', array('width'=>'75%', 'height'=>'75%','style'=>'z-index:-1'));?>

 



 

