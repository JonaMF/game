<?php

$view = isset($_GET['view']) ? $_GET['view'] : 'home';

file_exists('core/controllers/files/'.strtolower($view).'Controller.php') ?
	require 'core/controllers/files/'.$view.'Controller.php'
	:
	require 'core/controllers/files/404Controller.php';
	
?>
