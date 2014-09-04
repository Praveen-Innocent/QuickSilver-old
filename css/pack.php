<?php header('Content-type: text/css');
require dirname(__FILE__)."/scss.inc.php";

$scss = new scssc();
$scss->setImportPaths("");

// will search for `assets/stylesheets/mixins.scss'
$scss->setFormatter("scss_formatter_compressed");
echo $scss->compile('@import "style.scss"'); ?>