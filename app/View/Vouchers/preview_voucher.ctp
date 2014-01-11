<?php
// in your view file
$this->Html->script('dropdown.js', array('inline' => false));
$this->Html->css('global', null, array('inline' => false));
?>

<div id="mainContent">




<h1>PAYMENT OPTIONS</h1><p style="font-size:12px;">(Click the image underneath to pay)</p>
<br><br><br>
<table  style = "border:1px solid #EAEAEA;"cellpadding="0" cellspacing="0" bgcolor="#F7F7F7">
     <col width="30px" />
    <col width="250px" />
    <col width="250px" />
  <tr>
   <td style="text-align: center; border:1px solid #EAEAEA;"> <form name="_xclick" 
          action="https://www.paypal.com/cgi-bin/webscr"
          method="post">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="upload" value="1">
        <input type="hidden" name="lc" value="AU">
        <input type="hidden" name="business" value="muscleworksmassage@live.com.au">
        <input type="hidden" name="currency_code" value="AUD">
        <input type="hidden" name="cancel_return" value="http://www.muscleworksmassage.com.au/muscleworks">
        <input type="hidden" name="item_name" value="GIFT VOUCHER">
        <input type="hidden" name="amount" value="<?php echo sprintf('%.2f',$voucher_data['Voucher']['price']*1.024+0.3); ?>">
        <input type="hidden" name='no_shipping' value="0">
        <input type="hidden" name="bn" value="PP-BuyNowBF">
        <input type="hidden" name="notify_url" value="http://www.muscleworksmassage.com.au/muscleworks/vouchers/cacheInfo?id=<?php echo $voucher_data['Voucher']['id']?>">
        <input type="hidden" name="return" value="http://www.muscleworksmassage.com.au/muscleworks/vouchers/print_voucher?id=<?php echo $voucher_data['Voucher']['id']?>"/>
        <input type="image" src="http://www.sonoma.com.au/assets/Uploads/paypal-big2.png" name="submit" alt="Make Payment with Paypal - It is fast, free and secure!" width="20px" height="60px">
    </form>    
    </td>
    <td style="text-align: center;border:1px solid #EAEAEA; font-size: 18px">
 <?php echo $this->Html->image('bt.png', array('url'=>array('action' => 'send_instruction'),'width'=>'170px','height'=>'60px')); ?>
    </td> 
    <td style="text-align: center; font-size: 18px;border:1px solid #EAEAEA;">
    <?php echo $this->Html->image('pbc.png', array('url'=>array('action'=>'confirmation_cash',$voucher_data['Voucher']['id']),'width'=>'170px','height'=>'60px')); ?>
    </td>    
  <tr>  
<td style="border:1px solid #EAEAEA;vertical-align:top">
    <p style="font-size:12px; padding:4px 8px;">Pay via PayPal will incur 2.4%+30cent surcharge for each transaction. Please press the above PayPal image to be redirected to the PayPal website. Login, pay by credit card or create a PayPal account to submit your payment. Click the 'Pay Now' button and you will be redirected to the confirmation page. To generate your voucher instantly, Click the 'return to Muscleworks Massage Store' to be directed to your print ready copy. A confirmation email will be sent with the voucher link.</p>
</td>
<td style="border:1px solid #EAEAEA;vertical-align:top;padding:4px 8px;">
<p style="font-size:12px;">There is no surcharge for a bank transfer payment. Click the 'Bank Transfer' image above and you will receive payment instruction via email. After your transfer 
has been confirmed, we will send you the voucher to your email address specified. Please allow up to 5 days for funds to clear to receive your gift voucher email.</p>
</td>
<td style="border:1px solid #EAEAEA;vertical-align:top;padding:4px 8px;">
<p style="font-size:12px;">Your gift voucher purchase is now in our system. To purchase with cash payment - save on time, call ahead for your gift voucher to be processed and ready for pick-up. A confirmation email can also be sent with the voucher link.<br><br>Telephone: <?php echo '<p style="font-size:12px;">'.$phone['Pagecontent']['content'].'</p>'; ?> Please keep the GV No. in mind for reference.</p>
</td>  
</tr>
</table><br>
<h1><?php echo __('PREVIEW'); ?>  </h1><br>

	<?php 
$urlChange = array('controller'=>'vouchers','action'=>'back_format',$voucher_data['Voucher']['id']);
echo $this->Form->button('Make Changes', array('onclick' => "location.href='".$this->Html->url($urlChange)."'"));
?>
<br>
<p style="font-size:12px;">Click on "Make Changes" above to edit the information you have entered.</p>
    <?php
	echo	$this->Html->image('Voucher.png',array('width'=>'500px', 'height'=>'800px','border'=>'0','style'=>'z-index:-1'));
    ?>
   

	<table class="table3">
		     <tr>
                    <td style="width:50px;"><b><?php echo __('GV NO.'); ?></b></td>
		    <td style="width:50px;">
			<?php echo h($voucher_data['Voucher']['id']); ?>
			&nbsp;</td>
		</tr>
                
                <tr>
                    <td style="width:50px;"><b><?php echo __('To'); ?></b></td>
		    <td style="width:50px;">
			<?php echo h($voucher_data['Voucher']['to_name']); ?>
			&nbsp;</td>
		</tr>
		
		    <tr>
                    <td style="width:50px;"><b><?php echo __('From'); ?></b></td>
		    <td style="width:50px;">
			<?php echo h($voucher_data['Voucher']['from_name']); ?>
			&nbsp;</td>
		</tr>
  		<tr>
                    <td style="width:50px;"><b><?php echo __('Price'); ?></b></td>
                    <td style="width:50px;">
			<?php echo '$',h($voucher_data['Voucher']['price']); ?>
			&nbsp;</td>
                </tr>
                
                <tr>
                    <td style="width:50px;"><b><?php echo __('Expiry Date'); ?></b></td>
                    <td style="width:50px;">
			<?php 
                        $expiry = strtotime(h($voucher_data['Voucher']['date_purchase']) ."+ 90 day" );
                        echo date('d/m/Y', $expiry); ?>
			&nbsp;</td></tr>
			              <tr>
                   <td style="width:50px;"><b><?php echo __('Message'); ?></b></td>
		   <td style="width:50px;">
			<?php echo h($voucher_data['Voucher']['message']); ?>
			&nbsp;</td>
		</tr>
		   </table>
	  <table class="table6">
		<tr>
                    <td>
			<?php echo $phone['Pagecontent']['content']; ?>
			&nbsp;</td>
		</tr>
        </table>        
         <table class ="address">       
             <td>
                 <?php echo $address['Pagecontent']['content']; ?>
             </td>
         </table>
</div>