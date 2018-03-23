<!DOCTYPE html>
<html lang="en">

<head>
	
	<title><?php echo $pageName ?></title>
	
	<meta charset="utf-8"> 
	<meta name="description" content="Ars Semantica - consulting on semantic technologies in healthcare">
	<meta name="keywords" content="archetypes, openEHR, EHR, electronic health record, electronic medical record, ADL, reference model, clinical models, healthcare, health informatics, medical informatics, EHR standards, health care software, knowledge modelling, patient-centric">
	<meta name="author" content="Thomas Beale">
	<meta name="designer" content="Adriana Danilakova">
	<meta name="rating" content="General">
	<meta name="robots" content="All">
	<meta name="revisit-after" content="15 days">
	
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="/styles/basic.css"  type="text/css">
	
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="home" href="/">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
		
	<script>
	$(document).ready(function(){
		$(window).scroll(function() {
			var height = $(window).scrollTop();

			if(height  > 0) {
				$("#Header").addClass("scrolled");
			}
			else {
				$("#Header").removeClass("scrolled");
			}
			
		});
	});
	</script>
		
	<script>
	$(document).ready(function(){

		$( "#MenuIcon" ).on( "click" , function(e) {
			e.preventDefault();
			var status = $('#MenuList').attr('class'); 

			if(status == "hiddenSmall") {
				$("#MenuList").removeClass("hiddenSmall");
				$("#MenuList").addClass("activeSmall");
			}
			else {
				$("#MenuList").removeClass("activeSmall");
				$("#MenuList").addClass("hiddenSmall");
			}
		});
	});
	</script>
	
</head>

<body>

	<header id = "Header">
		
		<div class = "headerContainer">
			
			<div class = "headerPanel">

				<div id = "Logo" class = "logo">
					<a href="/index"><img src = "/logo.png" alt = "Logo"/></a>
				</div>
	
				<div id="Menu" class = "menu">
					<nav class = "menuContainer">
					
						<a href="" id = "MenuIcon"><img src = "/images/menu.png" alt = "Menu Icon"></a>
						<ul id = "MenuList" class = "hiddenSmall">
							<li><a href="/introduction">Introduction</a></li>
							<li><a href="/services">Services</a></li>
							<li><a href="/clients">Clients</a></li>
							<li><a href="/about">About</a></li>
							<li><a href="/contact">Contact</a></li>
						</ul>
						
					</nav>
				
				</div>
				<br class="clear">
			
			</div>
			
		</div>
	
	</header>