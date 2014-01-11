<?php
// in your view file
$this->Html->script('dropdown.js', array('inline' => false));
$this->Html->css('global', null, array('inline' => false));
?>

<div id="mainContent">

<h3><?php echo __('Preview Voucher'); ?></h3>
<div>	
    <?php
	echo	$this->Html->image('gift voucher blank.png',array('width'=>'500px', 'height'=>'500px','style'=>'z-index:-1'));
    ?>
</div>   
<div id="result">
	<table>
		
                
                <tr>
                    <td><b><?php echo __('Recipient\'s name'); ?></b></td>
		    <td>
			<?php echo h($vouchers['Voucher']['to_name']); ?>
			&nbsp;</td>
		</tr>
		
		<tr>
                   <td><b><?php echo __('Message'); ?></b></td>
		   <td>
			<?php echo h($vouchers['Voucher']['message']); ?>
			&nbsp;</td>
		</tr>
                
                <tr>
                    <td><b><?php echo __('Price'); ?></b></td>
                    <td>
			<?php echo '$',h($vouchers['Voucher']['price']); ?>
			&nbsp;</td>
		</tr>
                
                <tr>
                    <td><b><?php echo __('Date(Expires in 3 MONTHS)'); ?></b></td>
                    <td>
			<?php echo date('d/m/Y',  strtotime(h($vouchers['Voucher']['date_purchase']))); ?>
			&nbsp;<td>
		</tr><br>
	</table>
    <br><br><br><br><br>
    <table>Our clinic is located: 178 Hotham St, Elsternwick, VIC 3185 <br>
                    bookings are essential. Your can either booking online or call 0451 118 071
    </table>
</div>
<br><br><br><br><br>
   <?php echo $this->Html->link(__('Make Changes'), array('action' =>'back_format')); ?>
<br><br>
<div>
    <form name="_xclick" 
          action="https://www.sandbox.paypal.com/cgi-bin/webscr"
          method="post">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="upload" value="1">
        <input type="hidden" name="business" value=" 369786185-facilitator@qq.com">
        <input type="hidden" name="currency_code" value="AUD">
        <input type="hidden" name="item_name" value="GIFT VOUCHER">
        <input type="hidden" name="amount" value="<?php echo $vouchers['Voucher']['price']; ?>">
        <input type="hidden" name='no_shipping' value="0">
        <input type="hidden" name="bn" value="PP-BuyNowBF">
        <input type="hidden" name="return" value="http://ie.infotech.monash.edu/team04/DEVELOPMENT/cakeMuscle/vouchers/confirmation">
        <input type="image" src="http://www.paypal.com/en_US/i/btn/btn_paynowCC_LG.gif" name="submit" alt="Make Payment with Paypal - It is fast, free and secure!" style="width:200px;">
    </form>    
</div>

</div>
