-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.19-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para cfe2
DROP DATABASE IF EXISTS `cfe2`;
CREATE DATABASE IF NOT EXISTS `cfe2` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cfe2`;

-- Volcando estructura para tabla cfe2.cursos
DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `id_instructor` int(11) DEFAULT NULL,
  `id_mes` int(11) DEFAULT NULL,
  `nombre_curso` varchar(50) DEFAULT NULL,
  `archivo_curso` text,
  PRIMARY KEY (`id_curso`),
  KEY `id_mes` (`id_mes`),
  KEY `id_instructor` (`id_instructor`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla cfe2.cursos: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` (`id_curso`, `id_instructor`, `id_mes`, `nombre_curso`, `archivo_curso`) VALUES
	(2, 2, 2, 'Pintura', 'uno.pdf'),
	(4, 4, 4, 'El Amor', 'uno.pdf'),
	(5, 5, 5, 'Valentin', 'uno.pdf'),
	(7, 3, 1, 'Cables', 'uno.pdf'),
	(14, 1, 1, 'Maria del amor', 'archivos/SAAE980417MCSNRS03.pdf'),
	(15, 4, 1, 'hola amigo como estas', 'archivos/12345678X-Convenio-COGITI-Empresa de ejemplo.pdf'),
	(16, 1, 1, 'hjhjhj', 'archivos/SAAE980417MCSNRS03.pdf');
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;

-- Volcando estructura para tabla cfe2.directoriotelefonico
DROP TABLE IF EXISTS `directoriotelefonico`;
CREATE TABLE IF NOT EXISTS `directoriotelefonico` (
  `extencionAnterior` varchar(50) DEFAULT NULL,
  `extencionNueva` varchar(50) DEFAULT NULL,
  `Usuario` varchar(65) NOT NULL,
  `telefonoDirecto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla cfe2.directoriotelefonico: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `directoriotelefonico` DISABLE KEYS */;
INSERT INTO `directoriotelefonico` (`extencionAnterior`, `extencionNueva`, `Usuario`, `telefonoDirecto`) VALUES
	('11542', '17073', 'oficina de tesorería', NULL);
/*!40000 ALTER TABLE `directoriotelefonico` ENABLE KEYS */;

-- Volcando estructura para tabla cfe2.instructores
DROP TABLE IF EXISTS `instructores`;
CREATE TABLE IF NOT EXISTS `instructores` (
  `id_instructor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_instructor` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id_instructor`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla cfe2.instructores: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `instructores` DISABLE KEYS */;
INSERT INTO `instructores` (`id_instructor`, `nombre_instructor`) VALUES
	(1, 'Alberto perez'),
	(4, 'Esther Arcos'),
	(5, 'Regina Lopez');
/*!40000 ALTER TABLE `instructores` ENABLE KEYS */;

-- Volcando estructura para tabla cfe2.meses
DROP TABLE IF EXISTS `meses`;
CREATE TABLE IF NOT EXISTS `meses` (
  `id_mes` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_mes` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_mes`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla cfe2.meses: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `meses` DISABLE KEYS */;
INSERT INTO `meses` (`id_mes`, `nombre_mes`) VALUES
	(1, 'Enero'),
	(2, 'Febrero'),
	(3, 'Marzo'),
	(4, 'Abril'),
	(5, 'Mayo'),
	(6, 'Junio'),
	(7, 'Julio'),
	(8, 'Agosto'),
	(9, 'Septiembre'),
	(10, 'Octubre'),
	(11, 'Noviembre'),
	(12, 'Diciembre');
/*!40000 ALTER TABLE `meses` ENABLE KEYS */;

-- Volcando estructura para tabla cfe2.slider
DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id_slider` int(11) NOT NULL AUTO_INCREMENT,
  `ruta_slider` text,
  `nombre_slider` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla cfe2.slider: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
INSERT INTO `slider` (`id_slider`, `ruta_slider`, `nombre_slider`) VALUES
	(20, 'img/vision3.jpg', 'diamadres'),
	(21, 'img/vision3.jpg', 'vision3'),
	(22, 'img/vision2.jpg', 'vision2');
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;

-- Volcando estructura para tabla cfe2.superintendencia
DROP TABLE IF EXISTS `superintendencia`;
CREATE TABLE IF NOT EXISTS `superintendencia` (
  `id_superintendencia` int(10) NOT NULL AUTO_INCREMENT,
  `mensaje` text,
  `ruta_ubicacion` text,
  `ruta_filosofia` text,
  PRIMARY KEY (`id_superintendencia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla cfe2.superintendencia: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `superintendencia` DISABLE KEYS */;
/*!40000 ALTER TABLE `superintendencia` ENABLE KEYS */;

-- Volcando estructura para tabla cfe2.tarjetas
DROP TABLE IF EXISTS `tarjetas`;
CREATE TABLE IF NOT EXISTS `tarjetas` (
  `id_tarjeta` int(11) NOT NULL AUTO_INCREMENT,
  `ruta_tarjeta` text,
  `descripcion_tarjeta` text,
  PRIMARY KEY (`id_tarjeta`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla cfe2.tarjetas: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `tarjetas` DISABLE KEYS */;
INSERT INTO `tarjetas` (`id_tarjeta`, `ruta_tarjeta`, `descripcion_tarjeta`) VALUES
	(7, 'img/uno.jpg', 'Somo una familia y Todos somos competentes'),
	(9, 'img/uno.jpg', 'hola linduraaaaa hajabknaka jkakjajka'),
	(15, 'img/uno.jpg', 'kkk');
/*!40000 ALTER TABLE `tarjetas` ENABLE KEYS */;

-- Volcando estructura para tabla cfe2.usuarios
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL DEFAULT '0',
  `contrasenia` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla cfe2.usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `usuario`, `contrasenia`) VALUES
	(1, 'admin', '123');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
