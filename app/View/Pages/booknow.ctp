<?php
// in your view file
$this->Html->script('dropdown.js', array('inline' => false));
$this->Html->css('globalBooking', null, array('inline' => false));
$this->layout="booking";
?>


<p><iframe id="iframe" src="https://muscleworksmassage.cliniko.com/bookings" align="left" frameborder="0" scrolling="no" width="975" height="1150"></iframe></p>