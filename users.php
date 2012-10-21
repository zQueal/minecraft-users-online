<?php

/*
 * This work is licensed under the Creative Commons Attribution-Non
 * Commercial-ShareAlike 3.0 Unported License. To view a copy of this license,
 * visit http://creativecommons.org/licenses/by-nc-sa/3.0/
 */

function numberOnline() {
	global $file, $lines, $text, $pieces;
	$file = "http://direct.wonderproject.net/uonline.txt"; // Update to suit you
	$lines = count(file($file));
	$text = "No one is online right now!|person|people"; // No one online message
	                                                     // and person(s) tense
	$pieces = explode('|', $text);

	if($lines == 0) { // If usercount == 0
		echo $pieces[0] . "<br /><br />";
	}
	if($lines == 1) { // If usercount == 1
		echo $lines . " " . $pieces[1] . " is online!<br /><br />";
	}
	if($lines > 1) { // If usercount is more than 1
		echo "There are " . $lines . " " . $pieces[2] . " are online!<br /><br />";
	}
}

numberOnline();
?>
