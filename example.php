<?php

require 'lib/rest.php';

header('Content-type: text/plain');

$client = new RestClient;

echo $client->get("http://api.zefridge.com/users/all.json");

?>