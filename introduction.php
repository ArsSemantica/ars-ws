<?php
//Change page name here:
$PageName = 'Introduction';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_top.php');
?>

	<div id = "Content">
		
		<div class = "contentContainer">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->

			<img src="/images/platform_pontoon.png" style = "width: 100%;">
			<h1><?php echo "$PageName";?></h1>

			<div class = "section">
				<h2><a name="ehealth_challenge"></a>The Challenge of e-Health for IT</h2>
				<p>Developing effective and economic IT solutions for e-health has proven very difficult over some decades, although the general needs are easy to grasp:</p>
                <ul>
                    <li>semantic interoperability <em>within and across enterprises</em>;</li>
                    <li>semantic interoperability <em>between layers</em> of functionality within a system;</li>
                    <li>being able to compute intelligently on the data;</li>
                    <li>being able to directly support team-based, long-running <em>clinical processes</em>.</li>
                </ul>
                
                <p>The question of interoperability across enterprises is no longer just a question of sharing lab results or even moving a patient record when the patient moves; today it is about being able to aggregate <em>all</em> the data of the patient, no matter where created, so as to employ analytics for <em>personalised and preventative medicine</em>.</p>
                
                <p>Various universal difficulties are well-known: massive data diversity, and a high rate of change in workflows, clinical protocols, and data definitions. There problems mean that <em>conventional IT methods cannot be used</em>.</p>
                
                <p>At a practical level, other problems conspire within the health provider context to prevent easy improvements:</p>
                
                <ul>
                    <li><em>Rogue clinical DBs</em>: the main EMR solution rarely supports the data richness actually required by clinicians – it  is  well  known  that  many  hospitals  contain  dozens  if  not  hundreds  of  hidden  specialist’s  databases, often referred to as the 'Access Database problem';</li>
                    <li><em>Changeover costs</em>: the incoherence of current environments and huge data volumes, coupled with the need for 24x365 availability typically paralyse management for years, until the current system becomes untenable, and a new massively expensive monolithic purchase is made, to restart the cycle of constant failure;</li>
                    <li><em>No one vendor is big enough</em> to produce all the functionality needed in a healthcare enterprise, and they will never be able to do so, due to the wide variation in business processes across enterprises, jurisdictions, and particularly across countries;</li>
                    <li><em>Prohibitive integration costs</em> turn seemingly attractive 'best-of-breed' procurements into a financial nightmare;</li>
                    <li><em>Big bang procure and deploy disasters</em>: no enterprise can afford to logistically deploy a new monolitic solution in one go, so it makes little sense to do the procurement that way;</li>
                    <li><em>Data lock-in</em>: big vendors do not publish their data models, and make it difficult for data produced by the enterprise to be re-used.</li>
                </ul>
                
                <p>In summary, the two problems that must be overcome to make IT successful in healthcare are: <em>semantic complexity</em> of the problem space and
                <em>logistic complexity</em> of the work environment.</p>
			</div>

			<div class = "section">
				<h2><a name="platform_paradigm"></a>The open Platform as a Paradigm</h2>
				<p>Existing major products in healthcare are monolithic private data siloes, blocking users from working effectively. The future is solution components produced by an eco-system of plug-and-play vendors. By freeing data to move across enterprises, we free the business.</p>
				<img class = "mainImage" src="images/home_page_platform.svg">

				<p>An open health computing platform, based on open, integrated specifications for <em>incrementally deployable components</em> is the key to getting value from IT in healthcare.</p>
				
				<p>Naive conceptions of 'platform' must be avoided:</p>
				<ul>
					<li>a platform isn’t the same thing as a list of standards;</li>
					<li>a platform is not just a set of APIs - it also requires information models, models of domain content and process and solid underlying formalisms;</li>
					<li>a platform is a process, not a product;</li>
					<li>a platform cannot be designed by a committee;</li>
					<li>a platform must be efficient for developers to use.</li>
				</ul>

                <p>The keys to moving to a platform in e-health are as follows:</p>
                <ul>
                    <li><em>model everything</em>: formalisms and knowledge models of the problem space; information and process models for the work context;</li>
                    <li>a <em>map of the components</em> of the platform, since these are the unit of specification;</li>
                </ul>
                
                <p>A well-designed platform must be specified and maintained by the industry it serves. If it does this well, the result will be a <em>platform economy of plug-and-play vendors</em> competing on quality rather than lock-in.</p>

				<p>More on the platform paradigm:</p>
				<ul>
					<li>Blog post: <a href="https://wolandscat.net/2017/11/18/the-open-e-health-platform-coming-to-an-economy-near-you/" target="_blank">Apperta Foundation - defining an open platform.</a></li>
					<li>Blog post: <a href="https://wolandscat.net/2015/10/21/new-openehr-whitepaper-for-an-open-platform-future/" target="_blank">New openEHR Whitepaper – for an open platform future.</a></li>
					<li>Blog post: <a href="https://wolandscat.net/2014/10/02/health-interoperability-standards-are-a-pre-platform-concept-discuss/" target="_blank">Health interoperability standards are a pre-platform concept.</a></li>
					<li>Blog post: <a href="https://wolandscat.net/2014/05/07/what-is-an-open-platform/" target="_blank">What is an 'open platform'?</a></li>
				</ul>

			</div>
						
			<div class = "section">
				<h2>Semantic Architecture</h2>
				<img class = "mainImage" src="images/home_page_semarch.svg">
				<p>An open platform defines coarse-grained components whose semantics need to be defined in such a way that:</p>
                <ul>
                    <li>fully model domain concepts as well as work environment processes;</li>
                    <li>separate domain modelling from IT development, and make domain models runtime-deployable;</li>
                    <li>ensure domain models are defined independently of technology, including OS, DB, message and document formats.</li>
                </ul>

				<p>Achieving these outcomes requires an advanced approach to modelling:</p>
                <ul>
                    <li><em>domain-level formal languages and tools</em> in which information and work processes can be flexibly modelled;</li>
                    <li>a repository+factory approach to managing domain modelling by domain professionals;</li>
                    <li>multi-level modelling, with distinct layers for persistable data, domain data groups, domain data-sets, domain process plans, UI/UX precursors;</li>
                    <li>each platform component should be architected as a <em>model-execution engine</em>.</li>
                </ul>
			
				<p>More on semantic architecture:</p>
				<ul>
					<li>Blog post: <a href="https://wolandscat.net/2015/11/29/why-it-people-cant-build-information-systems/" target="_blank">Why IT people can't build information systems (on their own).</a></li>
					<li>Blog post: <a href="https://wolandscat.net/2016/04/10/openehr-technical-basics-for-hl7-and-fhir-users/" target="_blank">openEHR technical basics for HL7 and FHIR users.</a></li>
					<li>Blog post: <a href="https://wolandscat.net/2014/12/15/semantic-scalability-the-core-challenge-in-e-health/" target="_blank">Semantic scalability – the core challenge in e-health?</a></li>
					<li>Blog post: <a href="https://wolandscat.net/2014/03/11/why-clinical-models-are-essential-to-big-data/" target="_blank">Why clinical models are essential to big data.</a></li>
					<li>Blog post: <a href="https://wolandscat.net/2013/07/30/what-is-a-clinical-statement/" target="_blank">What is a 'clinical statement'?</a></li>
					<li>Blog post: <a href="https://wolandscat.net/2012/06/28/openehr-archetypes-visualised/" target="_blank">The power of the openEHR archetype formalism – visualised.</a></li>
					<li>Blog post: <a href="https://wolandscat.net/2011/07/07/information-models-dcms-and-archetypes/" target="_blank">Information models, DCMs and Archetypes.</a></li>
				</ul>
			</div>

			<div class = "section">
				<h2><a name="process_orientation"></a>Process Orientation</h2>
				<img class = "mainImage" src="images/home_page_process.svg">
				<p>In healthcare working environments, work is done in terms of <em>goal-oriented processes</em>, designed to respond to an endless stream of real-world events, from customer requests to changes in a patient's heart rate. To make IT support processes in health, we need to formalise two things:</p>
                <ul>
                    <li>models of ideal process - known as Care Pathways and Guidelines in healthcare;</li>
                    <li>models of patient-specific Work Plans - based on Care Pathways where available.</li>
                </ul>
				<p>This requires modelling of <em>plans</em> of processes, tasks, and data-sets as first-order domain artefacts for deployment in an <em>plan execution engine</em> that <em>supports</em> human workflow rather than trying to replace it. Process models require a formalism, which is a significant challenge in healthcare not satisfiable by deterministic approaches such as BPMN. The <a href="https://www.openehr.org/releases/PROC/latest/task_planning.html" target="_blank">openEHR Task Planning formalism</a>, based on advanced industry work such as <a href="https://www.amazon.co.uk/Modern-Business-Process-Automation-Environment/dp/364203120X" target="_blank">YAWL</a> as well as our long-term involvement in the Activity-Based Design (ABD) project at Intermountain Healthcare provides an alternative.</p>

				<p>More on the process orientation:</p>
				<ul>
					<li>Blog post: <a href="https://wolandscat.net/2017/10/22/openehr-task-planning-heading-for-implementatoin/" target="_blank">openEHR Task Planning – heading for implementation.</a></li>
					<li>Blog post: <a href="https://wolandscat.net/2017/01/23/initial-foundations-for-clinical-workflow/" target="_blank">Initial foundations for clinical workflow.</a></li>
					<li>Blog post: <a href="https://wolandscat.net/2016/11/29/future-of-the-ehr-adaptive-clinical-workflow-support/" target="_blank">Future of the EHR: adaptive clinical workflow support.</a></li>
				</ul>
			</div>

			<div class = "section">
				<h2><a name="taming_standards"></a>Taming e-Health Standards</h2>
				<img class = "mainImage" src="https://upload.wikimedia.org/wikipedia/commons/9/94/Gartner_Hype_Cycle.svg">
				<p>Standards in e-Health have had a chequered history, with extremely limited success beyond HL7v2 messages historically (and still) used for lab results and prescriptions. Twenty years involvement has led us to certain conclusions:</p>
				<ul>
					<li>ad hoc collections of standards do not work together - significant costs are involved, and integration may not be achievable;</li>
					<li>standards designed by committees are of poor quality and should be avoided;</li>
					<li>the only way to create standards that work together is to design them together, as a platform;</li>
					<li>avoid standards that are not published with formal expressions and an open source implementation.</li>
				</ul>

				<p>More on standards in e-Health:</p>
				<ul>
					<li>Blog post: <a href="https://wolandscat.net/2017/01/29/fhir-compared-to-openehr/" target="_blank">FHIR compared to openEHR.</a></li>
					<li>Blog post: <a href="https://wolandscat.net/2016/04/05/e-health-standards-beyond-messages/" target="_blank">e-Health standards – beyond the message mentality.</a></li>
					<li>Blog post: <a href="https://wolandscat.net/2015/12/20/making-fhir-work-for-everybody/" target="_blank">Making FHIR work for everybody.</a></li>
					<li>Blog post: <a href="https://wolandscat.net/2015/09/25/yet-another-e-health-standards-comparison-corrected/" target="_blank">Yet another e-health standards comparison, corrected.</a></li>
					<li>Blog post: <a href="https://wolandscat.net/2014/10/30/does-anyone-actually-understand-what-terminology-is-for/" target="_blank">Does anyone actually understand what terminology is for?</a></li>
					<li>Blog post: <a href="https://wolandscat.net/2014/10/25/what-is-a-standard-legislation-or-utilisation/" target="_blank">What is a ‘standard’: legislation or utilisation?</a></li>
					<li>Blog post: <a href="https://wolandscat.net/2014/08/19/beyond-the-hype-evaluating-e-health-standards/" target="_blank">Beyond the hype: evaluating e-health standards.</a></li>
					<li>Blog post: <a href="https://wolandscat.net/2014/08/12/onc-hearing-on-the-jason-report/" target="_blank">ONC Hearing on the JASON Report – openEHR perspective.</a></li>
					<li>Blog post: <a href="https://wolandscat.net/2013/07/06/what-is-a-standard/" target="_blank">What is a standard?.</a></li>
					<li>Blog post: <a href="https://wolandscat.net/2010/12/19/design-in-ehealth/" target="_blank">Ruminations on ‘design’ in e-health standards.</a></li>
					<li>Blog post: <a href="https://wolandscat.net/2009/09/17/the-crisis-in-e-health-standards/" target="_blank">The crisis in e-health standards (4 posts).</a></li>
				</ul>
			</div>

<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>
			
	</div>
	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
