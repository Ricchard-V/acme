<?php
	class Consulta
	{
		private $db;
		private $matriz;

		function __construct()
		{
			require_once('Conexion.php');
			$this->db = Conexion::connect();
			$this->matriz = array();
		}

		public function get($table){
			$query = $this->db->query("select * FROM ".$table);

			while($row = $query->fetch(PDO::FETCH_ASSOC)){
				$this->matriz[] = $row;
			}
			return $this->matriz;
		}

	// Funcion para realizar consultas personalizadas a la base de datos (riesgo de inyeccion SQL)
		public function inner($consulta){
			$query = $this->db->query($consulta);

			while($row = $query->fetch(PDO::FETCH_ASSOC)){
				$this->matriz[] = $row;
			}
			return $this->matriz;
		}

	// Funcion para guardar
		public function store($tabla, $data){
			$consulta = "insert into ".$tabla." values(null,". $data .")";
			$query = $this->db->query($consulta);
			if($query){
				return true;
			}else{
				return false;
			}
		}
	// Funcion para ver
		public function show($tabla, $key){
			$consulta = "select * FROM ".$tabla." where id = ". $key;
			$query = $this->db->query($consulta);
			
			while($row = $query->fetch(PDO::FETCH_ASSOC)){
				$this->matriz[] = $row;
			}
			return $this->matriz;
		}

	// Funcion para actualizar
		public function update($tabla, $data, $condicion){
			$consulta = "update ".$tabla." set" . $data . "where ". $condicion .")";
			$query = $this->db->query($consulta);
			if($query){
				return true;
			}else{
				return false;
			}
		}

	}
 ?>