<?php
/**
* 
*/
class RestClient
{
    function __construct()
	{
		// check if curl is enabled
		$this->CheckCurlExists();
	}
	
	private function CheckCurlExists()
	{
	   if (function_exists(curl_close) == False) {
	       echo "You need to enable curl in your php.ini file to use this library.";
	   }
	}
	public function curl_get($url, array $get = array(), array $options = array()) 
    {    
        $defaults = array( 
            CURLOPT_URL => $url. (strpos($url, '?') === FALSE ? '?' : ''). http_build_query($get), 
            CURLOPT_HEADER => 0, 
            CURLOPT_RETURNTRANSFER => TRUE, 
            CURLOPT_TIMEOUT => 4 
        ); 

        $ch = curl_init(); 
        curl_setopt_array($ch, ($options + $defaults)); 
        if( ! $result = curl_exec($ch)) 
        { 
            trigger_error(curl_error($ch)); 
        } 
        curl_close($ch); 
        return $result; 
    }
}