<?php
// in your view file
$this->Html->script('dropdown.js', array('inline' => false));
$this->Html->css('global', null, array('inline' => false));
?>

<div id="mainContent">

<h2><?php echo __('Gift Voucher'); ?></h2>


<?php echo $this->Form->create('Voucher', array('controller' => 'vouchers', 'action' => 'preview?voucherID='.$vouchers['Voucher']['id'])); ?>
<p>Please enter the following information (fill out all the fields)</p>

<fieldset>
<select name="data[Voucher][price]">
      <option value ="<?php echo h($vouchers['Voucher']['price']); ?>" <?php if( !empty($this->request->data['Voucher']) &&  strtolower($vouchers['Voucher']['price']) == strtolower($this->request->data['Voucher']['price'])){ echo('selected'); } ?>>
 $<?php echo $vouchers['Voucher']['price']; ?>
 </option>
     <?php foreach ($allPrices as $row_price): ?>
    
        <option value ="<?php echo $row_price['Price']['stdvalue'];?>"><?php echo $row_price['Price']['minutes']."minutes $".$row_price['Price']['stdvalue'];?>
        </option>
     <?php endforeach; ?>
</select>


<br><br><br>

<?php echo $this->Form->input('from_name', array('label' => 'Your Name', 'style' => 'width:400px','default'=>$vouchers['Voucher']['from_name'])); ?>
<br><br><br>
<?php echo $this->Form->input('phoneNumber_1', array('label' => 'Your Phone Number', 'style' => 'width:400px','default'=>$vouchers['Voucher']['phoneNumber_1'])); ?>
<br><br><br>
<?php echo $this->Form->input('from_email', array('label' => 'Your Email', 'style' => 'width:400px','default'=>$vouchers['Voucher']['from_email'])); ?>
<br><br><br>
<?php echo $this->Form->input('to_name', array('label' => 'Recipient\'s Name', 'style' => 'width:400px','default'=>$vouchers['Voucher']['to_name'])); ?>
<br><br><br>
<?php echo $this->Form->input('message', array( 'label' => 'Message For Recipient (Maximum 50 characters)', 'style' => 'height:35px','maxLength'=>'50','default'=>$vouchers['Voucher']['message']));?>
<br><br><br>
<?php echo $this->Form->end('Next') ?>&nbsp;&nbsp;&nbsp;&nbsp;     
</form>
</fieldset>
</div>
