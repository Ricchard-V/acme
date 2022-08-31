-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para acme
CREATE DATABASE IF NOT EXISTS `acme` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `acme`;

-- Volcando estructura para tabla acme.conductor
CREATE TABLE IF NOT EXISTS `conductor` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `cedula` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `nombre_2` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla acme.conductor: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `conductor` DISABLE KEYS */;
INSERT INTO `conductor` (`id`, `cedula`, `nombre`, `nombre_2`, `apellidos`, `direccion`, `telefono`, `ciudad`) VALUES
	(1, 10101010, 'Juan', 'Alonzo', 'Pineda', 'CHIA', 3111111111, 'chia');
/*!40000 ALTER TABLE `conductor` ENABLE KEYS */;

-- Volcando estructura para tabla acme.propietario
CREATE TABLE IF NOT EXISTS `propietario` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `cedula` bigint(20) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `nombre_2` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla acme.propietario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `propietario` DISABLE KEYS */;
INSERT INTO `propietario` (`id`, `cedula`, `nombre`, `nombre_2`, `apellidos`, `direccion`, `telefono`, `ciudad`) VALUES
	(1, 1075682445, 'Rafael', 'Ricardo', 'Marin', 'Chia', 3111111111, 'chia');
/*!40000 ALTER TABLE `propietario` ENABLE KEYS */;

-- Volcando estructura para tabla acme.vehiculos
CREATE TABLE IF NOT EXISTS `vehiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `tipo_vehiculo` varchar(50) DEFAULT NULL,
  `conductor_id` bigint(20) DEFAULT NULL,
  `propietario_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `placa` (`placa`),
  KEY `FK_vehiculos_conductor` (`conductor_id`),
  KEY `FK_vehiculos_propietario` (`propietario_id`),
  CONSTRAINT `FK_vehiculos_conductor` FOREIGN KEY (`conductor_id`) REFERENCES `conductor` (`id`),
  CONSTRAINT `FK_vehiculos_propietario` FOREIGN KEY (`propietario_id`) REFERENCES `propietario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla acme.vehiculos: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `vehiculos` DISABLE KEYS */;
INSERT INTO `vehiculos` (`id`, `placa`, `color`, `marca`, `tipo_vehiculo`, `conductor_id`, `propietario_id`) VALUES
	(1, 'ADS123', 'Negro', 'Aveo', 'Privado', 1, 1),
	(2, 'QWE123', 'Rojo', 'Clio', 'Privado', 1, 1);
/*!40000 ALTER TABLE `vehiculos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
