<?php 

//Utility loader
foreach(Config::$utilities as $utility) {
	$utilityFile = ABSPATH . "utilities/".$utility.".php";
	if(file_exists($utilityFile)) {
		try {
			require_once( $utilityFile );
		}
		catch(Exception $e) {
			echo 'Utility Error: ',  $e->getMessage(), "\n";
		}
	}
}


//Class loader
foreach(Config::$classes as $class) {
	$classFile = ABSPATH . "classes/".$class.".class.php";
	if(file_exists($classFile)) {
		try {
			require_once( $classFile );
		}
		catch(Exception $e) {
			echo 'Class Error: ',  $e->getMessage(), "\n";
		}
	}
}
 ?>