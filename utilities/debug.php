<?php 
function _d($string='') {
		_e($string); die();
	}

function _list($array) {
	print '<ul>';
	foreach($array as $a) {
		echo '<li>';
		_e($a); 
		echo '<li>';
			
	}
	print '</ul>';
}
	
?>