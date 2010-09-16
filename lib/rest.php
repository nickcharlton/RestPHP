<?php
class RestClient
{
    /*
    *   Define some internal methods to make life easier.
    */
    private $userAgent = "RestPHP/0.1";
    
    function __construct()
	{
		// check if curl is enabled
		$this->CheckCurlExists();
	}
	
	private function CheckCurlExists()
	{
	   if (!function_exists("curl_exec")) {
	       // if it doesn't, throw up a friendly error message
	       echo "You need to enable curl in your php.ini file to use this library.";
	   }
	}
	/*
	*   Define the methods for Rest requests.
	*/
	public function get($url)
    {    
        $ch = curl_init($url);
        
        curl_setopt($ch, CURLOPT_USERAGENT, $this->userAgent);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
        $output = curl_exec($ch);

        curl_close($ch);
        
        return $output;
    }
}