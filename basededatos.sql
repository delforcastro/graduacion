-- Adminer 5.4.1 MariaDB 10.11.8-MariaDB-0ubuntu0.24.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;

CREATE DATABASE `benavento` /*!40100 DEFAULT CHARACTER SET utf32 COLLATE utf32_general_ci */;
USE `benavento`;

DROP VIEW IF EXISTS `agroecologia`;
CREATE TABLE `agroecologia` (`id_alumno` int(11), `nombre` varchar(50), `apellido` varchar(50), `id_carrera` int(11));


SET NAMES utf8mb4;

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE `alumnos` (
  `id_alumno` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `id_carrera` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_alumno`),
  KEY `id_carrera` (`id_carrera`),
  CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`id_carrera`) REFERENCES `carreras` (`id_carrera`)
) ENGINE=InnoDB AUTO_INCREMENT=175 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `carreras`;
CREATE TABLE `carreras` (
  `id_carrera` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_carrera` varchar(100) NOT NULL,
  PRIMARY KEY (`id_carrera`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP VIEW IF EXISTS `enfermeria`;
CREATE TABLE `enfermeria` (`id_alumno` int(11), `nombre` varchar(50), `apellido` varchar(50), `id_carrera` int(11));


DROP VIEW IF EXISTS `enologia`;
CREATE TABLE `enologia` (`id_alumno` int(11), `nombre` varchar(50), `apellido` varchar(50), `id_carrera` int(11));


DROP VIEW IF EXISTS `gastronomia`;
CREATE TABLE `gastronomia` (`id_alumno` int(11), `nombre` varchar(50), `apellido` varchar(50), `id_carrera` int(11));


DROP TABLE IF EXISTS `partes_del_programa`;
CREATE TABLE `partes_del_programa` (
  `id_paso` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `orden` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  PRIMARY KEY (`id_paso`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP VIEW IF EXISTS `programa`;
CREATE TABLE `programa` (`id_paso` int(11), `titulo` varchar(100), `descripcion` varchar(250), `orden` int(11));


DROP VIEW IF EXISTS `software`;
CREATE TABLE `software` (`id_alumno` int(11), `nombre` varchar(50), `apellido` varchar(50), `id_carrera` int(11));


DROP TABLE IF EXISTS `agroecologia`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `agroecologia` AS select `alumnos`.`id_alumno` AS `id_alumno`,`alumnos`.`nombre` AS `nombre`,`alumnos`.`apellido` AS `apellido`,`alumnos`.`id_carrera` AS `id_carrera` from `alumnos` where `alumnos`.`id_carrera` = 5 order by `alumnos`.`apellido`;

DROP TABLE IF EXISTS `enfermeria`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `enfermeria` AS select `alumnos`.`id_alumno` AS `id_alumno`,`alumnos`.`nombre` AS `nombre`,`alumnos`.`apellido` AS `apellido`,`alumnos`.`id_carrera` AS `id_carrera` from `alumnos` where `alumnos`.`id_carrera` = 2 order by `alumnos`.`apellido`;

DROP TABLE IF EXISTS `enologia`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `enologia` AS select `alumnos`.`id_alumno` AS `id_alumno`,`alumnos`.`nombre` AS `nombre`,`alumnos`.`apellido` AS `apellido`,`alumnos`.`id_carrera` AS `id_carrera` from `alumnos` where `alumnos`.`id_carrera` = 4 order by `alumnos`.`apellido`;

DROP TABLE IF EXISTS `gastronomia`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `gastronomia` AS select `alumnos`.`id_alumno` AS `id_alumno`,`alumnos`.`nombre` AS `nombre`,`alumnos`.`apellido` AS `apellido`,`alumnos`.`id_carrera` AS `id_carrera` from `alumnos` where `alumnos`.`id_carrera` = 3 order by `alumnos`.`apellido`;

DROP TABLE IF EXISTS `programa`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `programa` AS select `partes_del_programa`.`id_paso` AS `id_paso`,`partes_del_programa`.`titulo` AS `titulo`,`partes_del_programa`.`descripcion` AS `descripcion`,`partes_del_programa`.`orden` AS `orden` from `partes_del_programa` order by `partes_del_programa`.`orden`;

DROP TABLE IF EXISTS `software`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `software` AS select `alumnos`.`id_alumno` AS `id_alumno`,`alumnos`.`nombre` AS `nombre`,`alumnos`.`apellido` AS `apellido`,`alumnos`.`id_carrera` AS `id_carrera` from `alumnos` where `alumnos`.`id_carrera` = 1 order by `alumnos`.`apellido`;

-- 2026-04-15 20:50:09 UTC