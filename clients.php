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
				<h3><a name="sdo"></a>Standards Development</h3>
				<p>The principal of Ars Semantica is the principal technical architect of the <a href="https://www.openehr.org/programs/specification/workingbaseline">openEHR specifications</a>, on which he worked since 2000. Today he co-leads the <a href="https://www.openehr.org/programs/specification/editorialcommittee">Specifications Editorial Committee (SEC)</a>.</p>
				<p>Thomas Beale was a Technical Committee member at IHTSDO (now <a href="https://www.snomed.org/">SNOMED International</a>) 2009-2010 and Implementation and Innovation Committee Member 2011-2012.</p>
			</div>
			
			<div class = "section">
				<h3><a name="hcp"></a>Healthcare Provider / Manager</h3>
				<p>Clients include:</p>
				<ul>
					<li>Intermountain Healthcare, Salt Lake City, US, is a world-class healthcare provider and internationally recognised centre of advanced clinical computing, led by Chief Clinical Quality Officer Dr Brent James and CMIO Dr Stan Huff. Ars Semantica provides ongoing review and software architecture and development services to the Activity-Based Design (ABD) project, run by David Edwards, lead architect Alan James since 2016; as well as general review on healthcare IT standards, strategy and tool development, since 2012.</li>
				</ul>
			</div>
			
			<div class = "section">
				<h3><a name="government"></a>Government</h3>
				<p>Previous clients have included state and federal government of Australia, the UK NHS, SKL Sweden, and Brazil Ministry of Health. Work has generally focussed on developing e-Health strategy on which to based time-planning and budgetting at either state or country levels.</p>
			</div>
			
			<div class = "section">
				<h3><a name="ehr_developers"></a>e-Health Solution Developers</h3>
				<p>We provide training, consulting and development services to HIS solution vendors, and healthcare delivery enterprise IT departments, including in Norway, Slovenia, Brazil, and the UK.</p>
			</div>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>
			
	</div>
	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
