

<?php

echo $this->Html->css('global');

		
//echo $this->fetch('meta');
		
//echo $this->fetch('css');
		
//echo $this->fetch('script');
		
	?>              
 <div id="container">
	
                      
  <?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		
</div>

	

<table width="auto" height="auto" border="10" cellspacing="0" cellpadding="20" background="http://www.muscleworksmassage.com.au/muscleworks/app/webroot/uploads/email.png">
  <tr>
    <td>

	
		
	
		
			
		
	

      <?php echo "Dear Customer, ";?><br>
 <p>
This is a confirmation e-mail from Muscleworks Massage.
Displayed below is your gift voucher information. This gift voucher 
expires in 3 months, please redeem it within this time period. You can view and print your voucher via: http://www.muscleworksmassage.com.au/muscleworks/vouchers/create_voucher/<?php echo $aVoucher['Voucher']['UUID']?></p>

<p>No walk-ins, bookings are essential. Monday-Friday 8am to 7pm.</p>



<p>Address: <?php echo $aAddress['Pagecontent']['content']; ?></p>
<p>Phone: <?php echo $aPhone['Pagecontent']['content']; ?></p>

  


