<?php

	include '../../../core/models/bin/class/usuario.php';
	
	$pais = $_GET['pais'];
	$dir  = $_GET['dire'];
	
	$user = new usuario();
	$user->get_usuario($pais, $dir);
	$user->set_usuario();

?>