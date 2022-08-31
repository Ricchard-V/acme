<?php
require_once("Models/consulta_model.php");

class indexController
{
	private $model;

	public function __construct(){
		$tabla = 'vehiculos';
	}

	static function index(){
		$inner ="select vehiculos.*,
				conductor.Nombre AS c_nombre, conductor.Nombre_2 AS c_nombre2, conductor.apellidos AS c_apellidos ,
				propietario.Nombre AS p_nombre, propietario.Nombre_2 AS p_nombre2, conductor.apellidos AS p_apellidos
			FROM vehiculos
			INNER JOIN conductor ON conductor.id = vehiculos.conductor_id
			INNER JOIN propietario ON propietario.id = vehiculos.propietario_id";
		$con = new Consulta;
		$dato = $con->inner($inner); // funcion para realizar consultas personalizadas , necesita el script sql completo
		require_once('views/vehiculos/index.php');
	}


	static function create(){
		// se listan los propietarios y conducores para utilizar en lista desplegable
		$conductores = new Consulta;
		$propietarios = new Consulta;

		$conductores = $conductores->get('conductor');
		$propietarios = $propietarios->get('propietario');
		require_once('views/vehiculos/create.php');

	}

	static function store(){
		$placa = $_POST['placa'];//String
		$color = $_POST['color'];//String
		$marca = $_POST['marca'];//String
		$tipo = $_POST['tipo'];//String
		$propietario = $_POST['propietario'];//Int
		$conductor = $_POST['conductor'];//Int
		$data = "'".$placa."' , '".$color."' , '".$marca."' , '".$tipo."', " .$conductor." , ".$propietario ; //script a base de datos

		$con = new Consulta;
		$con = $con->store('vehiculos',$data); //funcion para crear nuevos registros necesita nombre de la tabla y datos
		header("location:/");
	}
	

	static function show($id){
		
		$con = new Consulta;
		$dato = $con->show('vehiculos',$id); //funcion para ver datos especificos de una tabla , necesita tabla y el id 
		
		//consultas de detalle de conductor y proveedor
		$conductores = new Consulta;
		$propietarios = new Consulta;

		$conductor = $conductores->show('conductor',$dato[0]['conductor_id']);
		$propietario = $propietarios->show('propietario',$dato[0]['propietario_id']);

		require_once('views/vehiculos/show.php');
	}
}