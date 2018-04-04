<?php
//Change page name here:
$PageName = 'Ars Semantica';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_top.php');
?>
	
	<div id = "Content">
		<div class = "titleContainer">
			
			<div class = "titleTop imageContainer">
				<img src = "/images/home_image.png" class = "titleTopImage" />
				<img src = "/images/home_image_small.png" class = "titleTopImageSmall" />
				<div class="title-text-container"><p class = "title">In order to create IT solutions that <em>radically improve</em> a complex work environment such as a modern hospital or a regional health network, we need an approach that is <em>adaptive</em> with respect to domain semantics, but <em>stable</em> with respect to technology.</p></div>
				
				<a href = "/introduction#ehealth_challenge"><button type="button" id = "EhealthChallenge" class = "frontButtonA">eHealth Challenge</button></a>
				<a href = "/introduction#semantic_framework"><button type="button" id = "SemanticFramework" class = "frontButtonB">Semantic Framework</button></a>
				<a href = "/introduction#process_orientation"><button type="button" id = "ClinicalProcess" class = "frontButtonB">Distributed Clinical Process</button></a>
				<a href = "/introduction#taming_standards"><button type="button" id = "TamingStandards" class = "frontButtonB">Taming Standards</button></a>
				<a href = "/introduction#platform_paradigm"><button type="button" id = "PlatformDefinition" class = "frontButtonB">Platform Definition</button></a>
				<a href = "/introduction#platform_economy"><button type="button" id = "PlatformEconomy" class = "frontButtonC">Sustainable e-Health Economy</button></a>

				<br class="clear">
			</div>
				
			<div class = "fullFrame">
			</div>
			
			<br class="clear">
			
		</div>
			
	</div>
	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
