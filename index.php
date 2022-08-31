<?php
	require_once("config.php");
	require_once("Controllers/index_controller.php");
	
	if(isset($_GET['v'])):
		$id = $_GET['id'] ?? '';
		$method = $_GET['v'] ?? '';
		indexController::{$method}($id);

	else:
		indexController::index();
	endif;

?>