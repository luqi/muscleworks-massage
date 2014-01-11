<?php
// in your view file
$this->Html->script('dropdown.js', array('inline' => false));
$this->Html->css('global', null, array('inline' => false));
?>

<div id="mainContent">



<?php 
$urlGenerate = array('controller'=>'vouchers','action'=>'generate_voucher',$vouchers['Voucher']['id']);
echo $this->Form->button('Go to print', array('onclick' => "location.href='".$this->Html->url($urlGenerate)."'"));
?>
	
    <?php
	echo	$this->Html->image('Voucher.png',array('width'=>'500px', 'height'=>'800px','style'=>'z-index:-1'));
    ?>
  

	<table class='table3'">
		
                
                <tr>
                    <td><b><?php echo __('To'); ?></b></td>
		    <td>
			<?php echo h($vouchers['Voucher']['to_name']); ?>
			&nbsp;</td>
		</tr>
		  <tr>
                    <td><b><?php echo __('From'); ?></b></td>
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
                    <td><b><?php echo __('Expiry Date:'); ?></b></td>
                    <td>
			<?php 
                        $expiry = strtotime(h($vouchers['Voucher']['date_purchase']) ."+ 90 day" );
                        echo date('d/m/Y', $expiry); ?>
			&nbsp;</td>
		</tr>
				<tr>
                   <td><b><?php echo __('Message'); ?></b></td>
		   <td>
			<?php echo h($vouchers['Voucher']['message']); ?>
			&nbsp;</td>
		</tr>
	</table>
  <table class="table4">
		<tr>
                    <td>
			<?php echo $phone['Pagecontent']['content']; ?>
			&nbsp;</td>
		</tr>
		</table>

</div>

