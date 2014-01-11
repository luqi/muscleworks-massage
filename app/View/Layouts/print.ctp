
<!DOCTYPE html>
<html>

<body>
<?php
		

		echo $this->Html->css('global');

		//echo $this->fetch('meta');
		//echo $this->fetch('css');
		//echo $this->fetch('script');
		
	?>
<FORM>
<INPUT value="Print" style="width:100px; height:50px; font-size: 50" TYPE="button" onClick="window.print()">
</FORM>
		
		
                <div id="container">
	
                        <?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>

		
		
	
		
			
		
	</div>
	
</body>
</html>
