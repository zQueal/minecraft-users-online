<?php

/* This work is licensed under the Creative Commons Attribution-Non
Commercial-ShareAlike 3.0 Unported License. To view a copy of this
license, visit http://creativecommons.org/licenses/by-nc-sa/3.0/ */

function numberOnline(){
	global $file,$lines,$text,$pieces;
        $file = "http://direct.wonderproject.net/uonline.txt";
        $lines = count(file($file));
        $text = "No one is online right now!|person|people";
        $pieces = explode('|', $text);

        if($lines == 0){
                echo $pieces[0]."<br /><br />";
        } if($lines == 1){
                echo $lines." ".$pieces[1]." is online!<br /><br />";
        } if($lines > 1){
                echo "There are ".$lines." ".$pieces[2]." are online!<br /><br />";
        }
}

/* Work in progresa

function usersOnline(){
	global $users;
	$users = file_get_contents('uonline.txt');
	json_encode($users);
	//echo json_encode($users);
	print_r($users);
}
*/

numberOnline();
?>