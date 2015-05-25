<?php
require_once('popup-contactform.php');
?>



<!DOCTYPE html>
<html lang="en-US">

	<!-- CSS FAJLOVI -->
	<link rel="stylesheet" type="text/css" href="css/css_board/popup-contact.css">
	<link rel="stylesheet" type="text/css" href="css/css_board/style.css">
	
	<!-- SKRIPT FAJLOVI -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script src="js/js_menu/script.js"> </script>
	
	
	<!-- Title of the page -->
	<head>
		<title>	Pinboard	</title>	<!-- username korisnika -->
	</head>

	<body onload="javascript:fg_hideform('fg_formContainer','fg_backgroundpopup');">
		
		<!-- Container -->
		<div class="Container">
		
			<!--	Toolbar	-->
			<div class="Toolbar">
				
				<!-- Menu Buttons -->
				<div class="ToolButton AddButton" onClick="menuClick(3)">
						<div class="ToolbarImg" id="1">
							<img src="images/png/plus.png" />
						</div>
				</div>
				<div class="HiddenMenu AddMenu" id="3">
					<div class="MenuButton">
						<div class="MenuImg">
							<img src="images/png/plus.png" />
						</div>
					</div>
					<div class="MenuButton">
						<div class="MenuImg">
							<img src="images/png/group.png" />
						</div>
					</div>
					<div class="MenuButton">
						<div class="MenuImg">
							<img src="images/png/settings.png" />
						</div>
					</div>
					<div class="MenuButton">
						<div class="MenuImg">
							<img src="images/png/important.png" />
						</div>
					</div>
				</div>
				
				<div class="ToolButton NotifButton" onClick="menuClick(4)">
						<div class="ToolbarImg" id="2">
							<img src="images/png/notification.png" />
						</div>
				</div>	
				<div class="HiddenMenu NotifMenu" id="4">
					<div class="NotifWrapper"> </div>
					<div class="NotifWrapper"> </div>
					<div class="NotifWrapper"> </div>	
					<div class="NotifWrapper"> </div>				
				</div>
				<!-- End of Menu Buttons -->
				
				<!-- Search bar -->
				<div class="Searchbar">
					<div class="Flexsearch">
							<form class="Flexsearch--form" action="#" method="post">
								<div class="Flexsearch--input-wrapper">
									<input class="Flexsearch--input" type="search" placeholder="Search...">
								</div>
								<input class="Flexsearch--submit" type="submit" value="&#10140;"/>
							</form>
					</div>
				</div>
				<!-- End of Search bar -->
				
			</div>
			<!--	End of Toolbar		-->
			
			
			<!-- NOTES -->
			<div class="Notes">
				<div class="one-row">
					<div class="one-note">
						<h1><a href='javascript:fg_popup_form("fg_formContainer","fg_form_InnerContainer","fg_backgroundpopup");'> dodaj novu belesku</a></h1>
					</div>
					<div class="one-note">
						<h1> ovo je jedna beleska </h1>
					</div>
					<div class="one-note">
						<h1> ovo je jedna beleska </h1>
					</div>
					<div class="one-note">
						<h1> ovo je jedna beleska </h1>
					</div>
					<div class="one-note">
						<h1> ovo je jedna beleska </h1>
					</div>		
					<a id="addemail" href="#">dodaj novu belesku </a>
				</div>
			</div>
		
		</div>

		<?PHP
		require_once('contactform-code.php');
		?>
		
	</body>

</html>