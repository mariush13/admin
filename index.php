<?php
	
error_reporting(E_ALL);
ini_set('display_errors', true);

require 'autoloader.php'; 

$core = new engine\core();
$core->output->showSite();	

?>