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
			
			<p>Ars Semantica provides consulting and development services for the e-health, biomedical and pharmaceutical domains. Our <em>extensive network of experts</em> in the US, Europe, and South America can be leveraged for larger tasks.</p>

			<table class = "TableBasic">
				<tr>
                    <th>Who you are</th>
                    <th>Your need</th>
                    <th>How we can help</th>
				</tr>
                
                <!-- - - - - - - - - - - -  Government - - - - - - - - - - - - - - -->
				<tr>
                    <th rowspan = "4">Dept/Ministry of Health, large HMO</th>
                    <td>Develop multi-year <em>e-Health strategy</em></td>
                    <td>
                        <p>We advise governments and companies in the UK, Australia, Sweden, Denmark, US, Brazil and others, on e-health strategy. Topics have included the following:</p>
                        <ul>
                            <li>e-health programme design;</li>
                            <li>how to talk to industry;</li>
                            <li>flexibly standardising clinical information;</li>
                            <li>integrating terminology;</li>
                            <li>safely using e-health standards.</li>
                        </ul>
				        <p>A recognised expert on e-health standards, Thomas Beale has worked on development of e-health standards, specifications within CEN TC 215, HL7, OMG HDTF, and the openEHR Foundation since 2000.</p>
                    </td>
				</tr>
				<tr>
                    <td><em>Procurement & tendering</em></td>
                    <td>
                        <p>One of the greatest weaknesses in procuring organisations is the production of tenders that fail to include testable requirements for semantics, interoperability (B2B and C2B), sustainable development and TCO. For organisations interested in leveraging health data properly and avoiding contractual lock-in, a modest amount of expert help on a tender can change the following 10 years for users.</p>
                    </td>
				</tr>
				<tr>
                    <td>e-Health <em>Standards Development</em></td>
                    <td>
                        <p>Expertise can be provided on undertaking new specifications development, including on:</p>
                        <ul>
                            <li>development of formal languages and models for e-health information modelling and querying;</li>
                            <li>use of terminology;</li>
                            <li>defining specifications as a platform ecosystem.</li>
                        </ul>
                    </td>
				</tr>
				<tr>
                    <td>Standards <em>Governance and Publishing</em></td>
                    <td>
                        <p>We provide expertise on how to manage and publish technical specifications, such as for standards, a solution or product. Our governance approach includes a formal issue handling process, the use of <a href="https://www.atlassian.com/software/jira">Jira</a> issue trackers, a release lifecycle and a fully defined change process. Our publishing approach is based on the toolchain developed for openEHR Foundation, using <a href="http://asciidoctor.org/">Asciidoctor</a> and <a href="https://www.nomagic.com/products/magicdraw">MagicDraw UML</a>.</p>
                        <p>A specification ecosystem enables the creation of specifications from numerous input sources, including text, images, UML models, syntax specifications (e.g. Antlr) and so on. An example is the <a href="https://www.openehr.org/releases/PROC/latest/task_planning.html">openEHR Task Planning specification</a>. An overall ecosystem may include dozens or hundreds of specification artefacts, which have to be managed in a system of components in order for long-term governance to be possible. We provide advice based on long-term experience for building such ecosystems.</p>
                    </td>
				</tr>
                
                <!-- - - - - - - - - - - -  EMR / HIS Product Developer - - - - - - - - - - - - - - -->
				<tr>
                    <th rowspan="2">EMR / HIS Product Developer</th>
                    <td><em>openEHR Implementation</em></td>
                    <td>
				        <p>Thomas Beale is the original technical architect of the <a href="https://www.openehr.org/programs/specification/workingbaseline">openEHR specifications</a>, having worked since 2000 alongside numerous clinical and other colleagues in their development. These specifications are now managed by the <a href="https://www.openehr.org/programs/specification/editorialcommittee">openEHR Specifications Editorial Committee (SEC)</a>, and used in dozens of countries. They include the <a href="https://www.openehr.org/releases/RM/latest/docs/index">Reference Model</a>, the <a href="https://www.openehr.org/releases/AM/latest/docs/index">Archetype Formalism (ISO 13606-2)</a>, and the <a href="https://www.openehr.org/releases/BASE/latest/docs/bmm/bmm.html">Basic Meta-Model (BMM) formalism</a> used by openEHR and HL7 CIMI.</p>
                    </td>
				</tr>
				<tr>
                    <td><em>Semantic Architecture</em></td>
                    <td>
                        <p>The 'Semantic architecture' of a component or system is the key to its ability to represent what goes on in the real world. We design large-scale model / software architectures for solutions in healthcare and other domains, using:</p>
                        <ul>
                            <li>ontology-based approach, including choice of upper and domain-level ontologies;</li>
                            <li>separation of layers;</li>
                            <li>approaches to future-proofing;</li>
                            <li>appropriate use of archetyping and terminology.</li>
                        </ul>
                    </td>
				</tr>
                
                
                <!-- - - - - - - - - - - -  Healthcare providers, vendors - - - - - - - - - - - - - - -->
				<tr>
                    <th rowspan="2">Healthcare provider, Vendor</th>
                    <td><em>Clinical Process Support</em></td>
                    <td>
                        <p>Thomas Beale has worked on formalising clinical processes and pathways for a number of years, studying the literature (particularly the <a href="https://www.amazon.co.uk/Modern-Business-Process-Automation-Environment/dp/364203120X" target="_blank">YAWL work</a> by van der Aalst et al), and working on two major adaptive workflow projects, one at Intermountain Healthcare and the other the development of the <a href="https://www.openehr.org/releases/PROC/latest/task_planning.html">Task Planning specification</a> for openEHR. These projects are ongoing.</p>
                    </td>
				</tr>
				<tr>
                    <td>Using <em>Biomedical Ontologies</em></td>
                    <td>
                        <p>The use of formal ontologies such as <a href="https://github.com/BFO-ontology/BFO">BFO (Basic Formal Ontology)</a>, <a href="http://biotopontology.github.io/">BioTopLite</a>, <a href="http://obofoundry.org/ontology/ro.html">RO (Relations Ontology)</a>, <a href="https://github.com/information-artifact-ontology/IAO">IAO (Information Artefact Ontology)</a> and others is becoming essential in bio-informatics and health informatics, to enable reliable machine inferencing on data. Using ontologies requires:</p>
                        <ul>
                            <li>understanding how to use upper ontologies such as BFO;</li>
                            <li>development of existing and new domain ontologies for relevant purposes;</li>
                            <li>integrating ontologies in information system technologies and environments.</li>
                        </ul>
                    </td>
				</tr>
                
			</table>
						
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>
			
	</div>
	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
