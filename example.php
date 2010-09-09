<?php

#require 'lib/rest.php';

// create a new curl resource
$ch = curl_init("http://api.zefridge.com/users/all.json");

// set URL to download
//curl_setopt($ch, CURLOPT_URL, "http://api.zefridge.com/users/all.json");
// set referer:
//curl_setopt($ch, CURLOPT_REFERER, "http://www.google.com/");
// user agent:
curl_setopt($ch, CURLOPT_USERAGENT, "RestPHP/0.1");
// remove header? 0 = yes, 1 = no
curl_setopt($ch, CURLOPT_HEADER, 0);
// should curl return or print the data? true = return, false = print
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// timeout in seconds
//curl_setopt($ch, CURLOPT_TIMEOUT, 10);

// download the given URL, and return output
$output = curl_exec($ch);

// close the curl resource, and free system resources
curl_close($ch);

var_dump(json_decode($output));

?>