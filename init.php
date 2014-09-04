<?php
/*
Author:Praveen Innocent.
*/

// Start the session. Important.
if (!isset($_SESSION)) session_start();

define( 'ABSPATH', dirname(__FILE__) . '/' );
require_once( ABSPATH . "core/ConfigOverride.php" );
require_once( ABSPATH . "core/Config.php" );
require_once( ABSPATH . "core/loader.php" );

if(get_magic_quotes_gpc()){
	// If magic quotes is enabled, strip the extra slashes
	array_walk_recursive($_GET,create_function('&$v,$k','$v = stripslashes($v);'));
	array_walk_recursive($_POST,create_function('&$v,$k','$v = stripslashes($v);'));
}
try { 
	DB::init($dbOptions);
}
catch(Exception $e){
	die(json_encode(array('error' => $e->getMessage())));
}
$msg = "";
ob_start();
?>