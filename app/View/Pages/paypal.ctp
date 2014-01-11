<?php
// in your view file
$this->Html->script('dropdown.js', array('inline' => false));
$this->Html->css('global', null, array('inline' => false));
?>

<h3>Pay your voucher</h3>
<div>
    <form name="_xclick" 
          action="http://www.sandbox.paypal.com/cgi-bin/webscr"
          method="post">
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="upload" value="1">
        <input type="hidden" name="business" value="254571149@qq.com">
        <input type="hidden" name="currency_code" value="AUD">
        <input type="hidden" name="item_name" value="My voucher">
        <input type="hidden" name="amount" value="99.99">
        <input type="hidden" name="return" value="http://localhost:8888/cakephp/Vouchers/index">
        <input type="image" src="http://www.stoppalpitations.com/wp-content/uploads/2011/11/buyitnow.png"
                    border="0" name="submit" alt="Make Payment with Paypal - It is fast, free and secure!"
                    width="100">
    </form>    
</div>