<?
/**
* 
*/
class RestClient
{
	function __construct(argument)
	{
		// first check if curl is enabled
		CheckCurlExists();
	}
	
	private function CheckCurlExists()
	{
	   if (!function_exists(curl_exec)) {
	       echo "You need to enable curl in your php.ini to use this library."
	   }
	}
}
?>