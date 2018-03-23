<?php
//Change page name here:
$PageName = 'Clients';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_top.php');
?>
	
	<div id = "Content">
		
		<div class = "contentContainer">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->

			<h1><?php echo "$PageName";?></h1>
			
			<div class = "section">
				<h2><a name="openehr_foundation"></a>openEHR Foundation</h2>
				<p>The principal of Ars Semantica is the original senior architect of <a href="https://www.openehr.org">openEHR</a>, and today co-leads the <a href="https://www.openehr.org/programs/specification/editorialcommittee">Specifications Editorial Committee (SEC)</a></p>
			</div>
			
			<div class = "section">
				<h2><a name="ihc"></a>Intermountain Healthcare</h2>
				<p>Intermountain Healthcare, Salt Lake City, US has been a valued client and partner, with consulting provided on their Activity-Based Design (ABD) project, and on general healthcare IT standards, strategy and tool development.</p>
			</div>
			
			<div class = "section">
				<h2><a name="ehr_vendors"></a>e-Health Solution Vendors</h2>
				<p>We provide consulting and development services to e-Health solution vendors, healthcare delivery enterprises around the world.</p>
			</div>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>
			
	</div>
	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
