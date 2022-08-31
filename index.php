<?php
	require_once("config.php");


	//Controladores para vehiculos
	if(isset($_GET['v'])):
		$id = $_GET['id'] ?? '';
		$method = $_GET['v'] ?? '';
		indexController::{$method}($id);

	//Controladores para Propietarios
	elseif(isset($_GET['p'])):
		$id = $_GET['id'] ?? '';
		$method = $_GET['p'] ?? '';
		propietarioController::{$method}($id);	

	//Controladores para conductores
	elseif(isset($_GET['c'])):
		$id = $_GET['id'] ?? '';
		$method = $_GET['c'] ?? '';
		conductoresController::{$method}($id);

	//Controlador por defecto
	else:
		indexController::index();
	endif;
?>