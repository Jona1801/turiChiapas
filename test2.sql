-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.39-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para test2
DROP DATABASE IF EXISTS `test2`;
CREATE DATABASE IF NOT EXISTS `test2` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `test2`;

-- Volcando estructura para tabla test2.datos
DROP TABLE IF EXISTS `datos`;
CREATE TABLE IF NOT EXISTS `datos` (
  `nombre` varchar(200) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `paquete` varchar(200) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla test2.datos: ~0 rows (aproximadamente)
DELETE FROM `datos`;
/*!40000 ALTER TABLE `datos` DISABLE KEYS */;
INSERT INTO `datos` (`nombre`, `telefono`, `paquete`, `direccion`) VALUES
	('', 0, '', ''),
	('fernando', 2147483647, '15', '25698'),
	('', 2147483647, '', ''),
	('', 2147483647, '', ''),
	('', 2147483647, '', ''),
	('', 0, '', ''),
	('', 0, '', ''),
	('', 0, '', ''),
	('', 0, '', ''),
	('', 0, '', ''),
	('', 0, '', ''),
	('', 0, '', ''),
	('', 0, '', '');
/*!40000 ALTER TABLE `datos` ENABLE KEYS */;

-- Volcando estructura para tabla test2.login
DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `usuario` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla test2.login: ~6 rows (aproximadamente)
DELETE FROM `login`;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` (`usuario`, `password`) VALUES
	('fernando', '12345'),
	('jonatan', '12345'),
	('jonatan', '12345'),
	('rodiber', '12345'),
	('chuchin', '12345'),
	('admin@gmail.com', '1234');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
