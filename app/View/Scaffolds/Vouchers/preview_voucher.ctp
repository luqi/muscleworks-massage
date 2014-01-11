<?php
// in your view file
$this->Html->script('dropdown.js', array('inline' => false));
$this->Html->css('global', null, array('inline' => false));
?>

<div id="mainContent">

<h1><?php echo __('PREVIEW'); ?></h1>

	
    <?php
	echo	$this->Html->image('Voucher.png',array('width'=>'500px', 'height'=>'800px','border'=>'0','style'=>'z-index:-1'));
    ?>
   

	<table class="table3">
		
                
                <tr>
                    <td><b><?php echo __('To'); ?></b></td>
		    <td>
			<?php echo h($voucher_data['Voucher']['to_name']); ?>
			&nbsp;</td>
		</tr>
		
		    <tr>
                    <td><b><?php echo __('From'); ?></b></td>
		    <td>
			<?php echo h($voucher_data['Voucher']['from_name']); ?>
			&nbsp;</td>
		</tr>
  		<tr>
                    <td><b><?php echo __('Price'); ?></b></td>
                    <td>
			<?php echo '$',h($voucher_data['Voucher']['price']); ?>
			&nbsp;</td>
		</tr>
	
  
                
              
                
                <tr>
                    <td><b><?php echo __('Expiry Date'); ?></b></td>
                    <td>
			<?php 
                        $expiry = strtotime(h($voucher_data['Voucher']['date_purchase']) ."+ 90 day" );
                        echo date('d/m/Y', $expiry); ?>
			&nbsp;</td></tr>
			              <tr>
                   <td><b><?php echo __('Message'); ?></b></td>

		   <td>
			<?php echo h($voucher_data['Voucher']['message']); ?>
			&nbsp;</td>
		</tr>
	  <table class="table4">
		<tr>
                    <td>
			<?php echo $phone['Pagecontent']['content']; ?>
			&nbsp;</td>
		</tr>
		</table>
        </table>
<h2><?php echo $this->Html->link(__('Make Changes'), array('action' =>'back_format')); ?></h2>
<br>
<p style="font-size:12px;">Click "Make Changes" above to edit the information you have entered.</p>
<br><br><br><br><br><br>
<h2>PAYMENT OPTIONS</h2>
<br><br><br>
<table border="1">
     <col width="30px" />
    <col width="200px" />
    <col width="200px" />
  <tr>
   <td style="text-align: center;"> <form name="_xclick" 
          action="https://www.sandbox.paypal.com/cgi-bin/webscr"
          method="post">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="upload" value="1">
        <input type="hidden" name="business" value="ieteam04-facilitator@gmail.com">
        <input type="hidden" name="currency_code" value="AUD">
        <input type="hidden" name="item_name" value="GIFT VOUCHER">
        <input type="hidden" name="amount" value="<?php echo $voucher_data['Voucher']['price']*1.024+0.3; ?>">
        <input type="hidden" name='no_shipping' value="0">
        <input type="hidden" name="bn" value="PP-BuyNowBF">
        <input type="hidden" name="return" value="http://ie.infotech.monash.edu/team04/DEVELOPMENT/cakeMuscle/vouchers/confirmation">
        <input type="image" src="http://www.sonoma.com.au/assets/Uploads/paypal-big2.png" name="submit" alt="Make Payment with Paypal - It is fast, free and secure!" width="20px" height="60px">
    </form>    
    </td>
    <td style="text-align: center; font-size: 18px">
 <?php echo $this->Html->image('bt.jpg', array('url'=>array('action' => 'send_instruction'),'width'=>'170px','height'=>'60px')); ?>
    </td> 
    <td style="text-align: center; font-size: 18px">
    <?php echo $this->Html->image('paybycash.png', array('width'=>'170px','height'=>'60px')); ?>
    </td>    
  <tr>  
<td>
    <p style="font-size:12px;">Pay via PayPal will incur 2.4%+30cents surcharge for each transaction. When you press the above button you will be redirected to the PayPal website 
    where you can login or create a PayPal account or pay by credit card without PayPal account and submit your payment. Upon full payment, you will be transferred back into the our website to generate your voucher instantly.</p>
</td>
<td>
<p style="font-size:12px;">No surcharge for this payment method, once you click "Banking Transfer" above, you will get payment instruction via email. After your transfer 
has been confirmed, we will send you the voucher to your email. Please allow up to 5 days to receive your voucher after making payment.</p>
</td>
<td>
<p style="font-size:12px;">Purchase in clinic - save on time, call ahead on 0451 118 071 for your gift voucher to be processed and ready for pick-up. Address: 178 Hotham Street, Elsternwick 3185.</p>
</td>  
</tr>
</table>
</div>