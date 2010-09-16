<?php

require 'lib/rest.php';

header('Content-type: text/plain');

$client = new RestClient;

#$params = array('firstname' => 'Bob', 'lastname' => 'Test', 'email' => 'bob.test@zefridge.com');

echo $client->delete("http://api.zefridge.com/users/3");

?>