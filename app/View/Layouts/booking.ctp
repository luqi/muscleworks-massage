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
			<li><a href='http://www.muscleworksmassage.com.au/muscleworks/pages/<?php echo $service['Service']['id'];?>'><?php echo $service['Service']['type'];?></a></li>
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
	
	</ul>

<div id="mainContent">
	
<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>

		
		
	</div>
		<div id="footer">
		
		<li>&copy; 2013 Muscleworks Massage - ABN: 60091717064</li>
	<li><?php echo $this->Html->link('Contact us', '/pages/contactus');?></li>
	<li><?php echo $this->Html->link('Privacy policy', '/pages/faq');?></li>
	<li><?php echo $this->Html->link('Terms of service', '/pages/faq');?></li>
	<li><?php echo $this->Html->link('Admin', '/pagecontents');?></li>
	
	
	
</div>
			
		
	</div>
	
</body>
</html>