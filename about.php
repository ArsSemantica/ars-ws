<?php
//Change page name here:
$PageName = 'About';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_top.php');
?>

	<div id = "Content">
		
		<div class = "contentContainer">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->

			<h1><?php echo "$PageName";?></h1>
			
			<div class = "section">
				<h2><a name="thomas_beale"></a>Thomas Beale (principal)</h2>
			</div>
			
			<div class = "section">
				<h3>Experience</h3>
				<p>20 years' experience in EHR technology and standards, information modelling, semantic interoperability, e-health strategy and open health computing platforms.</p>
			</div>

			<div class = "section">
				<h3>Creator of</h3>
				<ul>
					<li>The <a href="https://www.openehr.org/releases/AM/latest/docs/index">Archetype Definition Language (ADL)</a>, now an ISO standard.</li>
					<li>The <a href="https://www.openehr.org/releases/BASE/latest/bmm.html">Basic-Meta Model (BMM)</a> alternative to XMI.</li>
					<li>The <a href="https://www.openehr.org/releases/BASE/latest/odin.html">ODIN object data notation</a></li>
					<li>The <a href="https://www.openehr.org/downloads/ADLworkbench/home">ADL Workbench</a></li>
				</ul>
			</div>

			<div class = "section">
				<h3>Architect of (with many esteemed colleagues)</h3>
				<ul>
					<li>The <a href="https://www.openehr.org/releases/RM/latest/docs/index">openEHR Reference Model</a></li>
					<li>Asciidoctor-based documentation toolchain used in openEHR specifications</li>
				</ul>
			</div>

			<div class = "section">
				<h3>Articles and publications</h3>
				<ul>
					<li><a href="https://wolandscat.net/2017/01/29/fhir-compared-to-openehr/">FHIR Compared to openEHR</a></li>
					<li><a href="https://wolandscat.net/2017/01/23/initial-foundations-for-clinical-workflow/">Initial Foundations for Clinical Workflow</a></li>
					<li><a href="http://wolandscat.net/2014/05/07/what-is-an-open-platform/">What is an open platform?</a></li>
					<li><a href="http://wolandscat.net/2009/09/17/the-crisis-in-e-health-standards/">The crisis in e-health standards</a></li>
					<li><a href="http://wolandscat.net/2009/09/17/the-crisis-in-e-health-standards/">The crisis in e-health standards</a></li>
					<li><a href="https://wolandscat.net/publications/">Publications page</a></li>
				</ul>
			</div>

			<div class = "section">
				<h3>History</h3>
				<p>Knowledge-based standards development, software engineering, education, business development, industry analysis and thought leadership since 1986, including in real time control, finance, and e-health. Lead of openEHR.org Specification Program.</p>
				
				<p>Thomas's early experience was in CMM level 4 engineering of real-time control systems. He also worked in some of the largest financial enterprises in Australia, in both a strategic advisory capacity and on project implementation. He has worked in e-health since 1994, when he was the technical advisor for the Good European Health Record (GEHR) project.</p> 

				<p>Since 1998, he has been involved in international e-health standards development (OMG, HL7, CEN, IHTSDO), including as an IHTSDO Technical Committee member 2009-2012. He has worked on the openEHR architecture since 2001.</p>
			</div>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>
			
	</div>
	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
