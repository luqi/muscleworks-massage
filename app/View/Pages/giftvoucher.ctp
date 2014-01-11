<?php
// in your view file
$this->Html->script('dropdown.js', array('inline' => false));
$this->Html->css('global', null, array('inline' => false));
?>

<div id="mainContent">

<h3><?php echo __('Gift Voucher'); ?></h3>
<?php 
$content = <<<CONTENT
Massage is a beautiful gift for spoiling a friend or a partner. The recipient can choose remedial massage
,pregnancy care massage, sports massage, relaxation massage and so on when she/he sees us! 
CONTENT;

echo $content;
?>
<br><br><br>
        <div>
          <h3>MASSAGE PRICES</h3>
          <h3>
             30 minutes: $55.00 <br>
             45 minutes: $70.00 <br>
             60 minutes: $85.00 <br>
             75 minutes: $105.00 
          </h3>       
        </div>
	
 <?php echo $this->Html->image('buy-now-button.jpg', array('id'=>'buy_now', 'width'=>'25%', 'url'=>array('controller'=>'vouchers', 'action'=>'gvinformation'))); ?>    
        <br>
        <br>
        <br>
        
        
  </div>
