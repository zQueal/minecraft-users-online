<?php

function numberOnline() {
  global $file, $lines, $text, $pieces;
  $file = "http://hostname.ext/uonline.txt";
  $lines = count(file($file));
  $text = "No one is online right now!|person|people";

  $pieces = explode('|', $text);

  if($lines == 0) {
    echo $pieces[0] . "<br /><br />";
  }
  if($lines == 1) {
    echo $lines . " " . $pieces[1] . " is online!<br /><br />";
  }
  if($lines > 1) {
    echo "There are " . $lines . " " . $pieces[2] . " are online!<br /><br />";
  }
}

numberOnline();
