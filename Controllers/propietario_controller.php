<?php
require_once("Models/consulta_model.php");
class propietarioController
{	
	public static function index(){
		$tipo = 'Propietarios';  // variable paraevaluar el controlador que responde la peticion
		$propietarios = new Consulta;
		$datos = $propietarios->get('propietario');
		require_once('views/registros/index.php');
	}

	static function create(){
		$tipo = 'Propietarios';  // variable paraevaluar el controlador que responde la peticion
		require_once('views/registros/create.php');

	}
	static function store(){
		$cedula = $_POST['cedula'];//Int
		$nombre = $_POST['nombre'];//String
		$nombre2 = $_POST['nombre2'];//String
		$apellidos = $_POST['apellidos'];//String
		$direccion = $_POST['direccion'];//String
		$telefono = $_POST['telefono'];//Int
		$ciudad = $_POST['ciudad'];//string
		$data =  $cedula .",'".$nombre."','".$nombre2."','".$apellidos."','".$direccion."',".$telefono.",'".$ciudad."'";

		$con = new Consulta;
		$con = $con->store('propietario',$data); //funcion para crear nuevos registros necesita nombre de la tabla y datos
		header("location:/index.php?p=index");
	}
}