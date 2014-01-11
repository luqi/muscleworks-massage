<?php
// in your view file
$this->Html->css('global', null, array('inline' => false));
?>

<div>
	<td>

		<p> <?php echo h($testimonial['Testimonial']['Name']); ?></p>

		<html>
		<body>
			<?php echo $testimonial['Testimonial']['content']; ?>
		</body>
		</html>
		
	</td>
</div>
