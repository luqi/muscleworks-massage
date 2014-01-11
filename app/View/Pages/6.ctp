<?php
// in your view file
$this->Html->script('dropdown.js', array('inline' => false));
$this->Html->css('global', null, array('inline' => false));
?>

<h1><?php echo $relaxService['Service']['type'];?></h1>

<?php
echo $content['Pagecontent']['content'];
?>