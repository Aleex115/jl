-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: herbolario
-- ------------------------------------------------------
-- Server version	8.0.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `proveedores` (
  `dni` char(9) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefono` char(9) DEFAULT NULL,
  PRIMARY KEY (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedores`
--

LOCK TABLES `proveedores` WRITE;
/*!40000 ALTER TABLE `proveedores` DISABLE KEYS */;
INSERT INTO `proveedores` VALUES ('11234567K','Gabriela Romero','gabriela.romero@email.com','692345678'),('12234567L','Diego Vargas','diego.vargas@email.com','693456789'),('12345678A','Juan Pérez','juan.perez@email.com','612345678'),('13234567M','Natalia Ortiz','natalia.ortiz@email.com','694567890'),('14234567N','Andrés Silva','andres.silva@email.com','695678901'),('15234567O','Valeria Castro','valeria.castro@email.com','696789012'),('16234567P','Daniel Ruiz','daniel.ruiz@email.com','697890123'),('17234567Q','Claudia Flores','claudia.flores@email.com','698901234'),('18234567R','Esteban Mendoza','esteban.mendoza@email.com','699012345'),('19234567S','Raquel Moreno','raquel.moreno@email.com','600123456'),('20234567T','Fernando Reyes','fernando.reyes@email.com','601234567'),('21234567U','Inés Domínguez','ines.dominguez@email.com','602345678'),('22234567V','Alberto Vega','alberto.vega@email.com','603456789'),('23234567W','Marcela Paredes','marcela.paredes@email.com','604567890'),('23456789B','María García','maria.garcia@email.com','623456789'),('24234567X','Germán Guzmán','german.guzman@email.com','605678901'),('25234567Y','Elena Suárez','elena.suarez@email.com','606789012'),('26234567Z','Ramón Espinoza','ramon.espinoza@email.com','607890123'),('27234567A','Laura Núñez','laura.nunez@email.com','608901234'),('28234567B','Clara Peña','clara.pena@email.com','609012345'),('29234567C','Emilio Soto','emilio.soto@email.com','610123456'),('30234567D','Susana Aguirre','susana.aguirre@email.com','611234567'),('34567890C','Carlos López','carlos.lopez@email.com','634567890'),('45678901D','Laura González','laura.gonzalez@email.com','645678901'),('56789012E','Luis Sánchez','luis.sanchez@email.com','656789012'),('66666666A','Almighty Noriel','trapcapos@br.com','666666666'),('67890123F','Ana Ramírez','ana.ramirez@email.com','667890123'),('78901234G','Miguel Torres','miguel.torres@email.com','678901234'),('89012345H','Lucía Martínez','lucia.martinez@email.com','689012345'),('90123456I','Sofía Díaz','sofia.diaz@email.com','690123456');
/*!40000 ALTER TABLE `proveedores` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-04 12:04:33
