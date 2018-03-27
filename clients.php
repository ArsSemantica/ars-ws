<?php
//Change page name here:
$PageName = 'Clients';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_top.php');
?>
	
	<div id = "Content">
		
		<div class = "contentContainer">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->

			<img src="/images/hospital.jpg" style = "width: 100%;">

			<h2><?php echo "$PageName";?></h2>
			
			<div class = "section">
				<h3><a name="openehr_foundation"></a>openEHR Foundation</h3>
				<p>The principal of Ars Semantica is the principal technical architect of <a href="https://www.openehr.org">openEHR</a>, and today co-leads the <a href="https://www.openehr.org/programs/specification/editorialcommittee">Specifications Editorial Committee (SEC)</a>.</p>
			</div>
			
			<div class = "section">
				<h3><a name="ihc"></a>Intermountain Healthcare</h3>
				<p>Intermountain Healthcare, Salt Lake City, US has been a valued client and partner, with consulting provided on the Activity-Based Design (ABD) project, and on healthcare IT standards, strategy and tool development since 2012.</p>
			</div>
			
			<div class = "section">
				<h3><a name="government"></a>Government</h3>
				<p>Previous clients have included state and federal government of Australia, the UK NHS, SKL Sweden, and Brazil Ministry of Health.</p>
			</div>

			<div class = "section">
				<h3><a name="ehr_developers"></a>e-Health Solution Developers</h3>
				<p>We provide consulting and development services to e-Health solution vendors, healthcare delivery enterprise IT departments around the world.</p>
			</div>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>
			
	</div>
	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
