
<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=1025" />
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('global');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<script type="text/javascript" src="http://ie.infotech.monash.edu/team04/REVIEW/muscleworks/js/search_bar/jquery.js"></script>
	<script type="text/javascript" src="http://ie.infotech.monash.edu/team04/REVIEW/muscleworks/js/jquery.tinycarousel.min.js"></script>
        <link rel="stylesheet" href="http://ie.infotech.monash.edu/team04/REVIEW/muscleworks/css/tinyscrollbar.css" type="text/css" media="screen"/>
        <script type="text/javascript">
           $(document).ready(function() {      
              var oSlider = $('#section_testimonial');
              oSlider.tinycarousel({ controls: true, interval: true, rewind: false, loop: true, animation: true, duration: 2000, intervaltime: 20000 });
           });
        </script>
		
</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<div id="container">
		<div id="header">
		<div id="masthead" style="z-index:1"  >
		
<?php
echo $header['Pagecontent']['content'];
?>
</div>

</div>
		</div>
		


<div id="content">

		<ul id='nav'>		
		<li><?php echo $this->Html->link('HOME', '/pages/home', array('class' => 'button'));?></li>
	
	<li class='menu sfHover'><?php echo $this->Html->link('SERVICES', 'javascript:void(0)', array('class' => 'button'));?>
		<ul>
			<li><?php echo $this->Html->link('SERVICES OVERVIEW', '/pages/services', array('class' => 'button'));?></li>
			
			<?php foreach ($services as $service): ?> 
			<li><a href='http://ie.infotech.monash.edu/team04/REVIEW/muscleworks/pages/<?php echo $service['Service']['id'];?>'><?php echo $service['Service']['type'];?></a></li>
			<?php endforeach; ?>
		</ul> 
	</li>
	<li class='menu sfHover'><?php echo $this->Html->link('BOOKINGS', 'javascript:void(0)',array('class' => 'button'));?>
		<ul>
			<li><?php echo $this->Html->link('PRICES', '/pages/prices', array('class' => 'button'));?></li>
			<li><?php echo $this->Html->link('BOOK NOW', '/pages/booknow', array('class' => 'button'));?></li>
		</ul>	
	</li>
	<li class='menu sfHover'><?php echo $this->Html->link('ABOUT US', 'javascript:void(0)',array('class' => 'button'));?>
		<ul>
			<li><?php echo $this->Html->link('OUR PRACTITIONERS', '/pages/aboutus', array('class' => 'button'));?></li>
			<li><?php echo $this->Html->link('FAQS', '/pages/faq', array('class' => 'button'));?></li>
			<li><?php echo $this->Html->link('PREFERRED PROVIDERS', '/pages/provider', array('class' => 'button'));?></li>
		</ul>	
	</li>
	<li class='menu sfHover'><?php echo $this->Html->link('CONTACT', 'javascript:void(0)', array('alt' => 'Contact'));?>
			<ul>
			<li><?php echo $this->Html->link('CONTACT US', '/pages/contactus', array('class' => 'button'));?></li>
			<li><?php echo $this->Html->link('LEAVE A TESTIMONIAL', '/Testimonials/add', array('class' => 'button'));?></li>
			</ul>
	</li>
<div id="icons">
<div class="fb-like" data-href="https://www.facebook.com/MuscleworksMassage" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false" style="z-index:5" data-font="arial"></div>
<?php echo $this->Html->image('fbicon3.png', array('alt' => 'Facebook', 'width' => '22.3%' , 'url' => 'https://www.facebook.com/MuscleworksMassage'));?>
<?php echo $this->Html->image('truelocalgrey.png', array('alt' => 'True local', 'width' => '22.3%' , 'url' => 'http://www.truelocal.com.au/business/muscleworks-massage/elsternwick'));?>
</div>


<?php if(!empty($viewTest) && is_array($viewTest)) { ?>
<div id="rightcontent">

<?php

if($title_for_layout == 'Home') {echo $homePicture['Pagecontent']['content'];}

else if($title_for_layout == '3') {echo $remedialPicture['Pagecontent']['content'];}

else if($title_for_layout == '4') {echo $natalPicture['Pagecontent']['content'];}

else if($title_for_layout == '5') {echo $sportsPicture['Pagecontent']['content'];}

else if($title_for_layout == '6') {echo $relaxPicture['Pagecontent']['content'];}

else if($title_for_layout == '7') {echo $corpPicture['Pagecontent']['content'];}

else if($title_for_layout == '8') {echo $eventPicture['Pagecontent']['content'];}

else if($title_for_layout == '9') {echo $otherPicture['Pagecontent']['content'];}

?> 



<div id="section_testimonial" class="rightcontentBox">  
    <div class="viewport">
    <ul class="overview">    
<?php foreach($viewTest as $oneTestimonial): ?> 
                      <li>
                          <div style='padding-bottom: 15px; margin-left: -5px; margin-top: -15px;'>
                      <?php echo $oneTestimonial['Testimonial']['content'];?><br><br>
		      <span style='font-weight: bold;'><?php if(strtolower($oneTestimonial['Testimonial']['consent']) == "yes") echo $oneTestimonial['Testimonial']['Name']; else echo("Anonymous"); ?>
                      <?php 
                      //echo(">>> ".$oneTestimonial['Testimonial']['created']);
                      list($day, $month, $year) = explode('/',  $oneTestimonial['Testimonial']['created']);
                      echo " (".date('M Y', mktime(0, 0, 0, $month, $day, $year)).")"; 
                      ?>
                      </span>
                          </div>
                      </li>
<?php endforeach; ?>
                      
    </ul>
    </div>
</div>
</div>
<?php } ?>          
    
<div id="mainContent" <?php if(!empty($viewTest) && is_array($viewTest)) echo("class='mainContent_3cols'");  ?>   >

	<?php echo $this->Session->flash(); ?>

	<?php echo $this->fetch('content'); ?>
			
</div>

		
		
<div id='secondaryContent'>



	<?php echo $this->Html->image('button_7.png', array('alt' => 'Book online', 'width' => '100%' , 'url' => array('controller' => 'pages', 'action' => 'booknow')));?>
	<?php echo $this->Html->image('button_5.png', array('alt' => 'Buy gift voucher', 'width' => '100%' , 'url' => array('controller' => 'prices', 'action' => 'index')));?>
	<?php echo $this->Html->image('button_6.png', array('alt' => 'Subscribe to our newsletter', 'width' => '100%' , 'url' => array('controller' => 'pages', 'action' => 'mailchimp')));?>
	<?php echo $this->Html->image('button_4.png', array('alt' => 'Leave a testimonial', 'width' => '100%' , 'url' => array('controller' => 'testimonials', 'action' => 'add')));?>
	<br></br>
	<div class='secondaryContentBox'>

<?php
echo $details['Pagecontent']['content'];
?>


	</div>

</div>
	

</div>

	
	
	
<div id="footer">
		
		<li>&copy; 2013 Muscleworks Massage - ABN: 60091717064</li>
	<li><?php echo $this->Html->link('Contact us', '/pages/contactus');?></li>
	<li><?php echo $this->Html->link('Privacy policy', '/pages/faq');?></li>
	<li><?php echo $this->Html->link('Terms of service', '/pages/faq');?></li>
	<li><?php echo $this->Html->link('Admin', '/pagecontents');?></li>
	
	<div id="statcounter_image" style="display:inline;"><a
title="free hit counters"

class="statcounter"><img
src="http://c.statcounter.com/9070602/0/10f4fef0/0/"
alt="free hit counters" style="border:none;" /></a></div>
	
	
</div>
			
		
	</div>
	
</body>
</html>
