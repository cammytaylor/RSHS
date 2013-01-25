<?php

/**
* General configs for my RSHS 3rd party highscore grabber.
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
* Change this as you see fit, this is the title of the site and will be used as the site heading.
**/
define('SITE_NAME', 'Ruby\'s RSHS Highscore Grabber');

/**
* This is the abbreviation for the site name.
**/
define('SITE_ABBR', 'RSHS');

/**
* This is where we set the privacy policy name for policies.php
**/
define('PRIV_POL_NAME', 'RSHS Privacy Policy');

/**
* This is where we will set the terms and conditions name for policies.php
**/
define('TERMS_CON_NAME', 'RSHS Terms &amp; Conditions');

/**
* This is where the heading above the search bar is
**/
define('SITE_WORKING_SECTOR', 'RSHS Stat &amp; Level Retriever');

/**
* Database configurations, edit the variables to your information
**/
$db_host = 'localhost';
$db_user = 'RSHS';
$db_pass = '123';
$db_name = 'RSHS';

$con = new mysqli($db_host, $db_user, $db_pass, $db_name);
?>