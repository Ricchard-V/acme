<?php 
	class Conexion
	{
		public static function connect(){
			$database = 'acme'; 	//nombre base de datos
			$user = 'root';			//usuario
			$key = 'admin';				//contraseña
			$server = 'localhost';	//servidor
			try {
				$conexion = new PDO('mysql::host='.$server.'; dbname='.$database, $user, $key);
				$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );// activa el modo para errores del gestor db
			} catch (Exception $e) {
				die($e->getMessage().' on '. $e->getline());
			}

			return $conexion;
		}
	}
 ?>