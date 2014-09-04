<?php

class ConfigOverride {
	
 	public static function __override() {
		
		Config :: $Host = 'localhost';
   		Config :: $User = 'root';
   		Config :: $Password = '123';
		Config :: $Database = 'schoolneuron';
		
		//URLs
		Config :: $URL = 'http://new.local/';
		Config :: $base_url = 'http://new.local/schgoogle/schgoogle/in/home/';
		Config :: $js_url = 'http://new.local/QuickSilver/js/';
		Config :: $css_url = 'http://new.local/QuickSilver/css/';
		Config :: $images_url = 'http://new.local/QuickSilver/css/';
	}
	
	public static function is_local() {
		$serverList = array('localhost','new.local', '127.0.0.1');
		if(in_array($_SERVER['HTTP_HOST'], $serverList)) {
			return true;
		}
		else return false;
	}
}

?>
