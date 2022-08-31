<?php
require_once("Models/consulta_model.php");
class conductoresController
{
	public static function index(){
		$tipo = 'Conductores';
		$conductores = new Consulta;
		$datos = $conductores->get('conductor');
		require_once('views/registros/index.php');
	}
	static function create(){
		$tipo = 'Conductores';
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
		$con = $con->store('conductores',$data); //funcion para crear nuevos registros necesita nombre de la tabla y datos
	}
}