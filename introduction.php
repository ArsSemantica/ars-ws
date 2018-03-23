<?php
//Change page name here:
$PageName = 'Introduction';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_top.php');
?>

	<div id = "Content">
		
		<div class = "contentContainer">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->

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

				<h2><a name="health_platform"></a>The open Platform as a Paradigm</h2>
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
                    <li>formalisms and knowledge models of the <em>problem space</em>;</li>
                    <li>information and process models for the <em>deployment context</em>;</li>
                    <li>a <em>map of the components</em> of the platform, since these are the unit of specification.</li>
                </ul>
                
                <p>A well-designed platform must be specified and maintained by the industry it serves. If it does this well, the result will be a <em>platform economy</em>, consisting of plug-and-play vendors competing on quality rather than lock-in.</p>

			</div>
						
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>
			
	</div>
	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
