<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
<script >
 $(function() { 
var d=new Date();
		 $( "#from" ).datepicker({
		defaultDate: "-3w",
		
		dateFormat: 'dd/mm/yy',
		changeMonth: true,
		numberOfMonths: 2,
                maxDate: new Date(d.setDate(d.getDate())),
		onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#to" ).datepicker({
		defaultDate: "-3w",
		changeMonth: true,
	  	dateFormat: 'dd/mm/yy',
                maxDate: new Date(d.setDate(d.getDate())),
		numberOfMonths: 2,
		onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
		 
});		 
		 


  </script>

<h3>Select vouchers between certain date</h3> 
<div class="actions">
    <ul>
        <li><?php echo $this->Html->link(__('Home'), array('controller' => 'Pagecontents')); ?> </li>
    </ul>
</div>	
<div class="actions">

	<ul>
	<li><?php echo $this->Html->link('View Current Vouchers', array('controller'=>'vouchers','action'=>'index'));?></li>
	</ul>
</div>
<div class="actions">

	<ul>
	<li><?php echo $this->Html->link('View redeemed and paid Vouchers', array('controller'=>'taxvouchers','action'=>'index'));?></li>
	</ul>
</div>
<?php
 

        echo $this->Form->create('Taxvoucher',array('action'=>'pdf','enctype' => 'multipart/form-data'));//,'action' => 'viewall/0/')); 
		?>

 
 <?php echo $this->Form->input('from',array('type'=>'text','id'=>'from')); ?>

 <?php echo $this->Form->input('to',array('type'=>'text','id'=>'to')); ?>

<br><br><br>

 

 
                   <?php echo $this->Form->submit(__('Find', true), array('name' => 'Save', 'div' => false)); ?>


