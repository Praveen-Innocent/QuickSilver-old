<?php 

function error_style($msg) {
		return '<center><div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert">×</button>
  					<h4>Oops! '.$msg.' </h4>
				</div> </center>';	
}

function success_style($msg) {
		return '<center><div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">×</button>
  					<h4>Success! '.$msg.' </h4>
				</div> </center>';	
}

function warning_style($msg) {
		return '<center><div class="alert alert-warning">
				<button type="button" class="close" data-dismiss="alert">×</button>
  					<h4>Oops! '.$msg.' </h4>
				</div> </center>';	
}

function info_style($msg) {
		return '<center><div class="alert alert-info">
				<button type="button" class="close" data-dismiss="alert">×</button>
  					<h4>Oops! '.$msg.' </h4>
				</div> </center>';	
}
	
?>