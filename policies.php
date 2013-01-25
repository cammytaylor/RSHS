<?php require_once('config.php');

/**
* Contains all the policies I apply to my RSHS 3rd party highscore grabber.
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

$switch = @$_GET['policy'];

switch($switch) {

case 'terms':
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>
			<?php echo TERMS_CON_NAME ?>
		</title>
	</head>
<body>

Under construction.

	</body>
</head>
<?php
break;
case 'privacy':
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>
			<?php echo PRIV_POL_NAME ?>
		</title>
	</head>
<body>

Under construction.

	</body>
</html>
<?php
break;
default:
?>
<title>
<?php echo SITE_NAME; ?>
</title>
Are you looking for one of <?php echo SITE_NAME; ?> policies?
<br />
<br />
If so, look on our <a href="index.php">homepage</a> at the bottom, on the left and click the direct link.

<?php
break;
}
?>