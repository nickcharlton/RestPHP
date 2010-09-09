# A RestClient like library for PHP

Inspired by the Ruby library "[RestClient](http://github.com/archiloque/rest-client)", but thrown into PHP. Depends only upon [Curl](http://uk.php.net/manual/en/book.curl.php), tested with PHP 5.3.2.

The is to simplify making RESTful requests using PHP.

## Example

	require 'lib/rest.php';
	
	$client = new RestClient;
	
	$client->get("url")
	
	echo $client

## Copyright

Copyright (c) 2010 Nick Charlton. See LICENSE for details.