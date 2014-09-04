<?php

class Config {
	public static $DB_type = "mysql";
 	public static $Host = 'localhost';
    public static $User = 'ideasr_demoroot';
    public static $Password = 'demoroot123';
	public static $Database = "ideasr_schgoogle";
	
	//URLs
	public static $URL = "http://in.schoolneuron.com/";
	public static $base_url = "http://in.schoolneuron.com/home/";
	public static $js_url = "http://in.schoolneuron.com/home/";
	public static $css_url = "http://in.schoolneuron.com/home/";
	public static $images_url = "http://in.schoolneuron.com/home/";
	
	
	public static $js_files = array("jquery.min.js","bootstrap.js","app.js");
	public static $utilities = array("common","debug","ui");
	public static $classes = array("db","generic","user");
	
	public static $enableLocalOverride = true;
	public static $useTemplates = false;	
	
	public static $isBlocked = false;
	public static $key = "neTc4JCUoerg5pyl4snmu8rgoNLd3KTTzd7Kk9Xi1p7Xo+TN4sTG3rS5uJ2c1dyexs3istTU53I";	
	
	//emails
	public static  $noreply_email="no-reply@schoolneuron.com";	
	public static  $Contact_email ="arunprakashraman@gmail.com,pravin.innocent@gmail.com";
	public static  $send_alerts_to ="arunprakashraman@gmail.com,pravin.innocent@gmail.com";
	public static  $alerts_from ="alerts@schoolneuron.com";	
	
		
}

date_default_timezone_set('Asia/Calcutta');

if(ConfigOverride :: is_local() && Config :: $enableLocalOverride) {
	error_reporting();
	ConfigOverride :: __override();	
}
else error_reporting(0);

$dbOptions = array(
	'db_host' => Config::$Host,
	'db_user' => Config::$User,
	'db_pass' => Config::$Password,
	'db_name' => Config::$Database
);

	$settings['title'] = ":: Schoogle | The School Community";
	$settings['meta_description'] = "site description";
	$settings['meta_keywords'] = "site keywords";

	$settings['name'] = "Schoogle";
	
	define('URL', Config :: $URL);
?>
