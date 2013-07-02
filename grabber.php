<?php require_once('config.php');

/**
* Action for my RSHS 3rd party highscore grabber.
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

	/**
	* Checks if the $_POST variable is empty, if it is empty the script dies with the error
	* If this doesn't happen the script will continue with empty values.
	**/
	if(empty($_POST['user'])) {
		die('You must input a username for the script to search!');
	}	
		
		/**
		* Preparing the SQL query for input into the database, assigned to the $stmt variable.
		**/
		$stmt = $con->prepare("INSERT INTO researched (username, date) VALUES (?, ?)");
		
		/**
		* Binding the parameters of the previously prepared statement.
		**/
		$stmt->bind_param('ss', $username, $date);
			
		/**
		* Changes the input inside $_POST['user'] to $username.
		**/
		$username = $_POST['user'];		
		
		/**
		* Assembles the date and assigns it into the the $date variable.
		**/
		$date = date("F j, Y, g:i a");
	
		/**
		* Execute the prepared statement
		**/
		$stmt->execute();
		
		/**
		* Closing the connection to the $con assigned database.
		**/
		$con->close();
		
		/**
		* This is where we actually retrieve the statistics and levels from the runescape highscores.
		* We use the file_get_contents function to return the values from our search. This function
		* returns the file in a string. We also trim this string to strip the whitespace from the string
		* and we assign it to the $fn variable.
		**/
		$fn = trim(@file_get_contents('http://hiscore.runescape.com/index_lite.ws?player='.$username));
		
		/**
		* Here we're exploding the $fn variable into an array of strings, the comma "," is the delimiter
		* in this case and this tells the file where to split up and finally assiging it all to the $stats
		* variable.
		**/
		$stats = explode(',',$fn);

		/**
		* Here is where we check if the $stats array hasn't returned any value when we try to access it.
		* if it doesn't, we make use of the die() function and output the error telling the user to
		* check their input.
		**/
		if(!isset($stats [1])) {
			die('We cannot locate this user, make sure you have spelled the name correctly.');
		}
	
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
		<hr color="#666">
			<div class="body-cont-stats">
				<div class="username">
				Currently viewing: <?php echo $username; ?>
				</div>
				<div class="rank">
				Overall rank: <?php echo $stats[0] ?>
				</div>
				<div class="total-level">
				Total level: <?php echo $stats[1] ?>
				</div>
				<div class="total-exp">
				Total Experience: <?php $total_exp = preg_split('/\s+/', $stats[2]);
										echo $total_exp[0] ?>
				</div>
				<div class="levels-col">
					<div class="attack">
						Attack Level: <?php echo $stats[3] ?>
					</div>
					<div class="strength">
						Strength Level: <?php echo $stats[7] ?>
					</div>
					<div class="constitution">
						Constitution Level: <?php echo $stats[9] ?>
					</div>
					<div class="ranged">
						Ranged Level: <?php echo $stats[11] ?>
					</div>
					<div class="defence">
						Defence Level: <?php echo $stats[5] ?>
					</div>
					<div class="prayer">
						Prayer Level: <?php echo $stats [13] ?>
					</div>
					<div class="magic">
						Magic Level: <?php echo $stats[15] ?>
					</div>
					<div class="cooking">
						Cooking Level: <?php echo $stats[17] ?>
					</div>
					<div class="woodcutting">
						Woodcutting Level: <?php echo $stats[19] ?>
					</div>
					<div class="fletching">
						Fletching Level: <?php echo $stats[21] ?>
					</div>
					<div class="fishing">
						Fishing Level: <?php echo $stats[23] ?>
					</div>
					<div class="firemaking">
						Firemaking Level: <?php echo $stats[25] ?>
					</div>
					<div class="crafting">
						Crafting Level: <?php echo $stats[27] ?>
					</div>
					<div class="smithing">
						Smithing Level: <?php echo $stats[29] ?>
					</div>
					<div class="mining">
						Mining Level: <?php echo $stats[31] ?>
					</div>
					<div class="herblore">
						Herblore Level: <?php echo $stats[33] ?>
					</div>
					<div class="agility">
						Agility Level: <?php echo $stats[35] ?>
					</div>
					<div class="thieving">
						Thieving Level: <?php echo $stats[37] ?>
					</div>
					<div class="slayer">
						Slayer Level: <?php echo $stats[39] ?>
					</div>
					<div class="farming">
						Farming Level: <?php echo $stats[41] ?>
					</div>
					<div class="runecrafting">
						Runecrafting Level: <?php echo $stats[43] ?>
					</div>
					<div class="hunter">
						Hunter Level: <?php echo $stats[45] ?>
					</div>
					<div class="construction">
						Construction Level: <?php echo $stats[47] ?>
					</div>
					<div class="summoning">
						Summoning Level: <?php echo $stats[49] ?>
					</div>
					<div class="dungeon">
						Dungeoneering Level: <?php echo $stats[51] ?>
					</div>
				</div>
			</div>	
		</div>
	</div><!-- Container Ends -->
</body>
</html>
