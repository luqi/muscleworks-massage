<?php
// in your view file
$this->Html->script('dropdown.js', array('inline' => false));
$this->Html->css('global', null, array('inline' => false));
?>

<div id="mainContent">

<h2><?php echo __('GIFT VOUCHER'); ?></h2>

<?php echo $this->Form->create('Voucher', array('controller' => 'vouchers', 'action' => 'preview', 'name' => 'information')); ?>
<p>Please enter the following information (Please fill out all the fields)</p>


<fieldset> 
<select name="data[Voucher][price]">
    <?php foreach ($allPrices as $row_price): ?>
        <option value ="<?php echo h($row_price['Price']['stdvalue']);?>"
 <?php   if( !empty($this->request->data['Voucher']) &&  strtolower($row_price['Price']['stdvalue']) == strtolower($this->request->data['Voucher']['price'])){ echo('selected'); } ?>>
                <?php echo $row_price['Price']['minutes']."minutes $".$row_price['Price']['stdvalue'];?>

        </option>

     <?php endforeach; ?>
</select>


<br><br><br>
<?php echo $this->Form->input('from_name', array('label' => 'Your Name', 'style' => 'width:400px')); ?>
<br><br><br>
<?php echo $this->Form->input('phoneNumber_1', array('label' => 'Your Phone Number (10 Digits)', 'style' => 'width:400px')); ?>
<br><br><br>
<?php echo $this->Form->input('from_email', array('label' => 'Your Email', 'style' => 'width:400px')); ?>
<br><br><br>
<?php echo $this->Form->input('to_name', array('label' => 'Recipient\'s Name', 'style' => 'width:400px')); ?>
<br><br><br>
<?php echo $this->Form->input('message', array( 'label' => 'Message to Recipient (Maximum 50 characters)', 'style' => 'height:35px','maxLength'=>'50')); ?>

<br><br><br>

<?php echo $this->Form->end('Next') ?>&nbsp;&nbsp;&nbsp;&nbsp;   

</fieldset>
</div>
