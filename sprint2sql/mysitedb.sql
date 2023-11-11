-- MariaDB dump 10.19  Distrib 10.11.4-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: mysitedb
-- ------------------------------------------------------
-- Server version	10.11.4-MariaDB-1~deb12u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tComentarios`
--
DROP DATABASE IF EXISTS mysitedb;
CREATE DATABASE mysitedb;
USE mysitedb;

DROP TABLE IF EXISTS `tComentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tComentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` varchar(2000) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `juego_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  KEY `juego_id` (`juego_id`),
  CONSTRAINT `tComentarios_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `tUsuarios` (`id`),
  CONSTRAINT `tComentarios_ibfk_2` FOREIGN KEY (`juego_id`) REFERENCES `tJuegos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tComentarios`
--

LOCK TABLES `tComentarios` WRITE;
/*!40000 ALTER TABLE `tComentarios` DISABLE KEYS */;
INSERT INTO `tComentarios` VALUES
(1,'Me engancho desde el minuto 1',2,1),
(2,'Muchisimas opciones a elegir',3,3),
(3,'Muy simple pero muy efectivo',5,4),
(4,'No se conseguir el final V',1,2),
(5,'Una buena maner de pasar un laaaargo rato',5,5);
/*!40000 ALTER TABLE `tComentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tJuegos`
--

DROP TABLE IF EXISTS `tJuegos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tJuegos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `url_imagen` varchar(500) DEFAULT NULL,
  `anyo` int(11) DEFAULT NULL,
  `genero` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tJuegos`
--

LOCK TABLES `tJuegos` WRITE;
/*!40000 ALTER TABLE `tJuegos` DISABLE KEYS */;
INSERT INTO `tJuegos` VALUES
(1,'League of Legends','https://www.google.com/url?sa=i&url=https%3A%2F%2Fstore.epicgames.com%2Fes-MX%2Fp%2Fleague-of-legends&psig=AOvVaw2rcT9s_XkU8s5YBupmzCnc&ust=1697552749880000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCLjd3Pfi-oEDFQAAAAAdAAAAABAE',2009,'Accion, Rol, Multijugador'),
(2,'NieR Automata','https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.filmaffinity.com%2Fes%2Ffilm346273.html&psig=AOvVaw2M5uAT7Ose6C3FpNT42Mnn&ust=1697552892558000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCIjx37vj-oEDFQAAAAAdAAAAABAE',2017,'Accion, Rol'),
(3,'Detroit: Become Human','https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.playstation.com%2Fes-es%2Fgames%2Fdetroit-become-human%2F&psig=AOvVaw2RFMZwHffVpS6aLvW22gEc&ust=1697552973530000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCLCSoeLj-oEDFQAAAAAdAAAAABAJ',2018,'Accion, Aventura'),
(4,'Tetris','https://www.google.com/url?sa=i&url=https%3A%2F%2Fstock.adobe.com%2Fes%2Fsearch%3Fk%3Dtetris&psig=AOvVaw39GmPp7s486ggIYRm_ZVr5&ust=1697553079210000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCPj72pTk-oEDFQAAAAAdAAAAABAE',1984,'Puzzle, Estrategia'),
(5,'Civilization VI','https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.nintendo.es%2FJuegos%2FJuegos-de-Nintendo-Switch%2FSid-Meier-s-Civilization-VI-1460609.html&psig=AOvVaw0HIV3-0wLuom1Un7R3XuIN&ust=1697553151247000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCPC4pLfk-oEDFQAAAAAdAAAAABAR',2016,'Estrategia');
/*!40000 ALTER TABLE `tJuegos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tUsuarios`
--

DROP TABLE IF EXISTS `tUsuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tUsuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `contraseña` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tUsuarios`
--

LOCK TABLES `tUsuarios` WRITE;
/*!40000 ALTER TABLE `tUsuarios` DISABLE KEYS */;
INSERT INTO `tUsuarios` VALUES
(1,'Jorge','Seijas Garcia','jorgete2000@gmail.com','1234'),
(2,'Javier','Lopez Lopez','jlopezl@gmail.com','Tornillo'),
(3,'Sara','Martinez Rey','sarmarrey@gmail.com','MiCasa04'),
(4,'Maria','Rodriguez Alonso','mariaroal@hotmail.com','meri2003'),
(5,'Alfonso','Garcia Martinez','alfonsitogmar@hotmail.com','fonsi01');
/*!40000 ALTER TABLE `tUsuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-16 16:41:47
