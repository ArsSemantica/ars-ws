<?php
//Change page name here:
$PageName = 'Contact';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_top.php');
?>
	
	<div id = "Content">
		
		<div class = "contentContainer">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->

			<img src="/images/london.jpg" style = "width: 100%;">

			<h2><?php echo "$PageName";?></h2>
			
			<div class = "section">
				<p>Email: thomas.beale at ars semantica dot com</p>
			</div>
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>
			
	</div>
	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
