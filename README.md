# A RestClient like library for PHP

Inspired by the Ruby library "[RestClient](http://github.com/archiloque/rest-client)", but thrown into PHP. Depends only upon [Curl](http://uk.php.net/manual/en/book.curl.php), tested with PHP 5.3.2.

The aim is to simplify making RESTful requests using PHP.

## Usage

	require 'lib/rest.php';
	
	$client = new RestClient;
	
	$client->get("url");

The other methods (PUT, POST, DELETE), work in a similar way. With PUT and POST, you should pass any parameters through as an array. 

	$params = array('name' => 'James Bond');
	
	$client->post("url", $params);
	
You can specify the user-agent string by calling setUserAgent(). This sets a string which is used by Curl. By default, this is "RestPHP/0.1".

## Copyright

Copyright (c) 2010 Nick Charlton. See LICENSE for details.