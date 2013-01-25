<?php require_once('config.php');

/**
* Form and layout for my RSHS 3rd party highscore grabber.
*
* @Author - Ruby/Cammy Taylor
* @github - http://www.github.com/cammytaylor/RSHS/
* @date 24th January 2013
*
* All rights reserved, this code may be used for learning purposes or for personal use
* if this code is used on a website it must be under the consent of me, if you wish to
* get in contact with me you can contact me directly through the MoparScape, Moparisthebest
* MoparCraft, Rune-Server or RuneLocus forums under the username "Ruby" or you can send me a
* message on Skype - Ruby_Website_Developer. If you'd like to hire me as a freelance website
* developer you can also contact me through skype for a price list and quote.
**/


?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title><?php echo SITE_NAME ?></title>
		<link href="css/main.css" rel="stylesheet" type="text/css" media="all">
		<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
	</head>
<body>
	<div class="body-cont">
		<div class="heading" align="center">
			<?php echo SITE_NAME ?>
		</div>
			<div class="info">
				Hello and welcome to <?php echo SITE_NAME ?>. This is a fairly simple script written in the popular
				scripting language PHP. This script used for retrieving the statistics and levels for a certain user
				from the popular online MMORPG RuneScape&copy;. If you wish to play RuneScape, click <a href="http://www.runescape.com">
				here</a>. If you  wish to look at the code behind this script click <a href="#">this link</a> which 
				will takeyou to my github where you can watch my progress with the project, fork, and even contribute
				code towards <?php echo SITE_ABBR ?>. If you wish to make an enquiry about this script you can message
				me through skype - <hl>Ruby_Website_Developer</hl> or you can click the "Contact Ruby" link found in
				the right hand side of the footer of this page.
			</div>
				<hr color="#666">
			<div class="heading-two" align="center">
				<?php echo SITE_WORKING_SECTOR ?>
			</div>
			
			<div class="search">
				<form method="post" action="grabber.php" align="center">
					<input  type="text" name="user" value="Enter username..."><br />
					<input  type="submit" name="submit" value="Search">
				</form>
			</div>
				
			<div class="footer-left">
				<a href="./policies.php?policy=privacy">Privacy Policy</a> | <a href="./policies.php?policy=terms">Terms &amp; Conditions</a> | <a href="http://www.runescape.com">RuneScape&copy;</a>
			</div>
			<div class="footer-right">
				<a href="http://www.moparscape.org/smf/index.php?action=profile;u=534060">Contact Ruby</a> | <a href="http://www.github.com/cammytaylor/RSHS/">GitHub</a>
			</div>
		</div>
	</body>
</html>
