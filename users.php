<?php

$online = "http://hostname.ext/uonline.txt";

function url_get_contents($url) {
    if (!function_exists('curl_init')){ 
        die('CURL is not installed!');
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$count = url_get_contents($online);

if($count = 0) {
  echo 'No one is online.';
}

if($count = 1) {
  echo 'One person is online.';
}

if($count > 1) {
  echo 'There are '.$count.' people online.';
}
