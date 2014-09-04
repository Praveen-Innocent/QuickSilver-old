<?php

class ConfigOverride {
	
 	public static function __override() {
		
		Config :: $Host = 'localhost';
   		Config :: $User = 'root';
   		Config :: $Password = '123';
		Config :: $Database = 'schoolneuron';
		
		//URLs
		Config :: $URL = 'http://localhost/schgoogle/schgoogle/in/';
		Config :: $base_url = 'http://localhost/schgoogle/schgoogle/in/home/';
		Config :: $js_url = 'http://localhost/QuickSilver/js/';
		Config :: $css_url = 'http://localhost/QuickSilver/css/';
		Config :: $images_url = 'http://localhost/QuickSilver/css/';
	}
	
	public static function is_local() {
		$serverList = array('localhost', '127.0.0.1');
		if(in_array($_SERVER['HTTP_HOST'], $serverList)) {
			return true;
		}
		else return false;
	}
}

?>
