create schema herbolario;
use herbolario;
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
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `dni` char(9) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contraseña` varchar(60) DEFAULT NULL,
  `direccion` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`dni`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES ('67123341R','Hector','hectorCamel@gmail.com','$2y$10$xYhxKoPRtgPSnm5hJzzOc.AhDaJKb/DTHx.7PcgOEk4ZNNPbNMoES','Calle de las bendiciones'),('71317778E','Alex','alex@gmail.com','$2y$10$b5oYkohb/4SMEhTZKt5ix.AUBoDRuSLFquu0D5MLHVnHo4P2viSHu','Paseo de Almighty');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-04 12:04:32

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
-- Table structure for table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empleados` (
  `dni` char(9) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contraseña` varchar(60) DEFAULT NULL,
  `sueldo` float unsigned DEFAULT NULL,
  PRIMARY KEY (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleados`
--

LOCK TABLES `empleados` WRITE;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` VALUES ('71317778E','Alex','alex@gmail.com','$2y$10$YIibNV6xJmFQeYkntH6Ew.kMBrl1elbvoxCOt.Vn5B7UTvETNvrXW',4000);
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-04 12:04:32
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
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `precio` float unsigned DEFAULT NULL,
  `descp` varchar(200) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `categoria` varchar(20) DEFAULT NULL,
  `dni_proveedor` char(9) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `productos_ibfk_1` (`dni_proveedor`),
  CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`dni_proveedor`) REFERENCES `proveedores` (`dni`) ON DELETE SET NULL ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,11.7,'Té verde orgánico de alta calidad','Té Verde ','Infusiones','12345678A','https://m.media-amazon.com/images/I/81F948ztUCL.__AC_SX300_SY300_QL70_ML2_.jpg'),(2,8.2,'Aceite esencial de lavanda para aromaterapia','Aceite de Lavanda','Aromaterapia','23456789B','https://m.media-amazon.com/images/I/81UIPM1X+pL._AC_SX679_.jpg'),(3,15.75,'Jabón natural de aloe vera para piel sensible','Jabón de Aloe Vera','Cuidado Personal','34567890C','https://m.media-amazon.com/images/I/71bs-ppdaIL.__AC_SX300_SY300_QL70_ML2_.jpg'),(4,20,'Vitaminas C y D en cápsulas','Vitaminas C y D','Suplementos','45678901D','https://m.media-amazon.com/images/I/71IDwJeAO2L.__AC_SX300_SY300_QL70_ML2_.jpg'),(5,25,'Crema de árnica para dolores musculares','Crema de Árnica','Cuidado Personal','56789012E','https://m.media-amazon.com/images/I/71JFliFi9ML.__AC_SX300_SY300_QL70_ML2_.jpg'),(6,9.9,'Infusión de manzanilla para digestión','Manzanilla','Infusiones','67890123F','https://m.media-amazon.com/images/I/61752i27lOL.__AC_SY300_SX300_QL70_ML2_.jpg'),(7,30.5,'Aceite de coco orgánico para cocinar y cuidado','Aceite de Coco','Superalimentos','78901234G','https://m.media-amazon.com/images/I/71v5fba7e4L.__AC_SX300_SY300_QL70_ML2_.jpg'),(8,5.75,'Menta piperita seca para infusiones','Menta Piperita','Hierbas','89012345H','https://m.media-amazon.com/images/I/61O885FtYTL._AC_SX679_.jpg'),(9,40,'Multivitaminas naturales para adultos','Multivitaminas','Suplementos','90123456I','https://m.media-amazon.com/images/I/61WRTDYUhlL.__AC_SX300_SY300_QL70_ML2_.jpg'),(10,18.5,'Extracto de propóleo para refuerzo inmunológico','Propóleo','Suplementos',NULL,'https://m.media-amazon.com/images/I/71460Z9hFPL.__AC_SX300_SY300_QL70_ML2_.jpg'),(11,22.75,'Bálsamo de caléndula para piel irritada','Bálsamo de Caléndula','Cuidado Personal','11234567K','https://m.media-amazon.com/images/I/41eqGLm79uL._QL70_ML2_.jpg'),(12,6.9,'Té de jengibre con limón para energía','Té de Jengibre y Limón','Infusiones','12234567L','https://m.media-amazon.com/images/I/71z61sWhg-L.__AC_SY300_SX300_QL70_ML2_.jpg'),(13,28,'Proteína vegetal en polvo de sabor neutro','Proteína Vegetal','Suplementos','13234567M','https://m.media-amazon.com/images/I/61D5K2a5bSL.__AC_SX300_SY300_QL70_ML2_.jpg'),(14,35.9,'Aceite esencial de eucalipto para resfriados','Aceite de Eucalipto','Aromaterapia','14234567N','https://m.media-amazon.com/images/I/61IxSpbzccL.__AC_SX300_SY300_QL70_ML2_.jpg'),(15,14.99,'Ginseng en cápsulas para vitalidad','Ginseng','Suplementos','15234567O','https://m.media-amazon.com/images/I/51QINrOxUyL.__AC_SX300_SY300_QL70_ML2_.jpg'),(16,7.5,'Infusión de rooibos con sabor natural','Té Rooibos','Infusiones','16234567P','https://m.media-amazon.com/images/I/715OqOiAU6L.__AC_SX300_SY300_QL70_ML2_.jpg'),(17,12,'Jarabe de saúco para el sistema inmunológico','Jarabe de Saúco','Suplementos','17234567Q','https://m.media-amazon.com/images/I/51XHRXH7uFL._AC_SX679_.jpg'),(18,17.25,'Cápsulas de cúrcuma y pimienta negra','Cúrcuma y Pimienta','Suplementos','18234567R','https://m.media-amazon.com/images/I/71gNe0HHlfL._AC_SX679_.jpg'),(19,19.8,'Crema de caléndula para el cuidado de la piel','Crema de Caléndula','Cuidado Personal','19234567S','https://m.media-amazon.com/images/I/61GRciUp9VL._AC_SX679_.jpg'),(20,26.3,'Aceite de rosa mosqueta para regeneración de la piel','Aceite de Rosa Mosqueta','Cuidado Personal','20234567T','https://m.media-amazon.com/images/I/81DwLyORcLL.__AC_SY300_SX300_QL70_ML2_.jpg'),(21,8.5,'Té de hibisco para regular la presión arterial','Té de Hibisco','Infusiones','21234567U','https://m.media-amazon.com/images/I/71SOx6nns2L.__AC_SX300_SY300_QL70_ML2_.jpg'),(22,11.6,'Gel de aloe vera puro para quemaduras y heridas','Gel de Aloe Vera','Cuidado Personal','22234567V','https://m.media-amazon.com/images/I/51GJrKugmLL.__AC_SX300_SY300_QL70_ML2_.jpg'),(23,16.75,'Suplemento de magnesio para el sistema nervioso','Magnesio','Suplementos','23234567W','https://m.media-amazon.com/images/I/71I29hJtBOL.__AC_SX300_SY300_QL70_ML2_.jpg'),(24,27.5,'Superalimento en polvo: espirulina','Espirulina','Superalimentos','24234567X','https://m.media-amazon.com/images/I/714N8e-drjL._AC_SX679_.jpg'),(25,13.4,'Jengibre en polvo para uso culinario y medicinal','Jengibre en Polvo','Superalimentos','25234567Y','https://m.media-amazon.com/images/I/71Fa0u1WfhL.__AC_SX300_SY300_QL70_ML2_.jpg'),(26,28.3,'Hojas Erythroxylum coca para hacer infusiones','Hojas de Erythroxylum ','Superalimentos','19234567S','https://www.tusplantasmedicinales.com/wp-content/uploads/2016/03/coca2.jpg'),(27,53.2,'Crema de cannabis de uso profesional con sativa y propiedades hidratantes , calmantes ','Crema de cannabis ','Cuidado Personal','26234567Z','https://m.media-amazon.com/images/I/51fbQmF6aaL._AC_SX679_.jpg');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
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
-- Table structure for table `compras`
--

DROP TABLE IF EXISTS `compras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `compras` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `dni` char(9) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `dni` (`dni`),
  CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `clientes` (`dni`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compras`
--

LOCK TABLES `compras` WRITE;
/*!40000 ALTER TABLE `compras` DISABLE KEYS */;
INSERT INTO `compras` VALUES (7,'71317778E','2024-10-30'),(8,'71317778E','2024-10-30'),(9,'71317778E','2024-10-31'),(10,'71317778E','2024-10-31'),(11,'71317778E','2024-10-31'),(12,'71317778E','2024-11-01'),(13,'71317778E','2024-11-01');
/*!40000 ALTER TABLE `compras` ENABLE KEYS */;
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
-- Table structure for table `lineas_compra`
--

DROP TABLE IF EXISTS `lineas_compra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lineas_compra` (
  `id_compra` int unsigned NOT NULL,
  `id_producto` int unsigned NOT NULL,
  `precio` float unsigned DEFAULT NULL,
  `cantidad` int unsigned DEFAULT NULL,
  PRIMARY KEY (`id_compra`,`id_producto`),
  KEY `id_producto` (`id_producto`),
  CONSTRAINT `lineas_compra_ibfk_1` FOREIGN KEY (`id_compra`) REFERENCES `compras` (`id`),
  CONSTRAINT `lineas_compra_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lineas_compra`
--

LOCK TABLES `lineas_compra` WRITE;
/*!40000 ALTER TABLE `lineas_compra` DISABLE KEYS */;
INSERT INTO `lineas_compra` VALUES (7,1,12.5,1),(7,4,20,2),(8,4,20,2),(9,3,15.75,2),(10,4,20,1),(11,13,28,1),(12,6,9.9,1),(13,9,40,1),(13,25,13.4,1);
/*!40000 ALTER TABLE `lineas_compra` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-04 12:04:32
