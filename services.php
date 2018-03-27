<?php
//Change page name here:
$PageName = 'Services';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_top.php');
?>
	
	<div id = "Content">
		
		<div class = "contentContainer">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->

			<img src="/images/digital_dev.jpg" style = "width: 100%;">

			<h2><?php echo "$PageName";?></h2>
			
			<p>Ars Semantica provides consulting and development services for the e-health, biomedical and pharmaceutical domains.</p>
			
			<div class = "section">
				<h3><a name="ehealth_strategy"></a>e-health Strategy</h3>
				<p>We advise governments and companies in the UK, Australia, Sweden, Denmark, US, Brazil and others, on e-health strategy. Topics have included the following:</p>
				<ul>
					<li>e-health programme design;</li>
					<li>flexibly standardising clinical information models;</li>
					<li>integrating clinical information and terminology;</li>
					<li>safely using e-health standards.</li>
				</ul>
			</div>
			
			<div class = "section">
				<h3><a name="ehealth_standards"></a>e-health Standards</h3>
				<p>A recognised expert on e-health standards, Thomas Beale has worked on development of e-health standards, specifications within CEN TC 215, HL7, OMG HDTF, and the openEHR Foundation.</p>
			</div>
			
			<div class = "section">
				<h3><a name="openehr"></a>openEHR</h3>
				<p>Thomas Beale is the original technical architect of the <a href="https://www.openehr.org/programs/specification/workingbaseline">openEHR specifications</a>, having worked since 2000 alongside numerous clinical and other colleagues in their development. These specifications are now managed by the <a href="https://www.openehr.org/programs/specification/editorialcommittee">openEHR Specifications Editorial Committee (SEC)</a>, and used in dozens of countries. They include the <a href="https://www.openehr.org/releases/RM/latest/docs/index">Reference Model</a>, the <a href="https://www.openehr.org/releases/AM/latest/docs/index">Archetype Formalism (ISO 13606-2)</a>, and the <a href="https://www.openehr.org/releases/BASE/latest/docs/bmm/bmm.html">Basic Meta-Model (BMM) formalism</a> used by openEHR and HL7 CIMI.</p>
			</div>
			
			<div class = "section">
				<h3><a name="specification_development"></a>Health IT Specifications Development</h3>
				<p>Expertise can be provided on undertaking new specifications development, including on:</p>
				<ul>
					<li>development of formal languages and models for e-health information modelling and querying;</li>
					<li>use of terminology;</li>
					<li>defining specifications as a platform ecosystem.</li>
				</ul>
			</div>
			
			<div class = "section">
				<h3><a name="architecture"></a>Semantic Architecture Development</h3>
				<p>The 'semantic architecture' of a component or system is the key to its ability to represent what goes on in the real world. We design large-scale model / software architectures for solutions in healthcare and other domains, using:</p>
				<ul>
					<li>ontology-based approach, including choice up upper and domain-level ontologies;</li>
					<li>separation of layers;</li>
					<li>approaches to future-proofing;</li>
					<li>appropriate use of archetyping and terminology.</li>
				</ul>
			</div>
			
			<div class = "section">
				<h3><a name="ontology"></a>Using Biomedical Ontologies</h3>
				<p>The use of formal ontologies such as BFO (Basic Formal Ontology), BioTopLite, RO (Relation Ontology), IAO (Information Artefact Ontology) and others is becoming essential in bio-informatics and health informatics, to enable reliable machine inferencing on data. Using ontologies requires:</p>
				<ul>
					<li>understanding how to use upper ontologies such as BFO;</li>
					<li>development of existing and new domain ontologies for relevant purposes;</li>
					<li>integrating ontologies in information system technologies and environments.</li>
				</ul>
			</div>
			
			<div class = "section">
				<h3><a name="specifications_publishing"></a>Specifications Governance and Publishing</h3>
				<p>We provide expertise on how to manage and publish technical specifications, such as for standards, a solution or product. Our governance approach includes a formal issue handling process, the use of <a href="https://www.atlassian.com/software/jira">Jira</a> issue trackers, a release lifecycle and a fully defined change process. Our publishing approach is based on the toolchain developed for openEHR Foundation, using <a href="http://asciidoctor.org/">Asciidoctor</a> and <a href="https://www.nomagic.com/products/magicdraw">MagicDraw UML</a>.</p>
				<p>A specification ecosystem enables the creation of specifications from numerous input sources, including text, images, UML models, syntax specifications (e.g. Antlr) and so on. An example is the <a href="https://www.openehr.org/releases/PROC/latest/task_planning.html">openEHR Task Planning specification</a>. An overall ecosystem may include dozens or hundreds of specification artefacts, which have to be managed in a system of components in order for long-term governance to be possible. We provide advice based on long-term experience for building such ecosystems.</p>
			</div>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>
			
	</div>
	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
