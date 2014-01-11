<?php
$this->Html->script('dropdown.js', array('inline' => false));
$this->Html->css('global', null, array('inline' => false));
?>

<div class="testimonials form">
<?php echo $this->Form->create('Testimonial'); ?>
<fieldset>
<h1><?php echo __('LEAVE A TESTIMONIAL'); ?></h1>
<p><label>Select a service</label></p>
<select name="data[Testimonial][Service]">

<?php foreach ($services as $service): ?>
    <option value ="<?php echo h($service['Service']['type']); ?>" <?php if( !empty($this->request->data['Testimonial']) &&  strtolower($service['Service']['type']) == strtolower($this->request->data['Testimonial']['Service'])){ echo('selected'); } ?>>
 <?php echo $service['Service']['type']; ?>
 </option>
 <?php endforeach; ?>
 </select>
<br><br>

<br>
 <p><?php echo $this->Form->input('Name',array('label'=>'Name (eg.Full Name,Initials or Nickname)'));?></p>
<br><br>
 <p><?php echo $this->Form->input('content', array('label'=>'Testimonial  (Maximum 500 characters)','type' => 'textarea','maxLength'=>'500')); ?></p>
<br><br>
 <p><label>Do we have authorisation to display the name you have supplied</label>
 <?php 
     echo $this->Form->input('consent',array('label'=>false, 'options'=>array(
                
                     'Yes'=>'Yes',
                    'No'=>'No',
                )));
 ?>
 </p>
<br>
 <?php echo $this->Form->end(__('Submit')); ?>
 </fieldset>
</div>
