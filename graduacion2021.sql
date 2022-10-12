-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 08-09-2022 a las 18:35:34
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `graduacion2021`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `contrasena` varchar(300) NOT NULL,
  `edad` int NOT NULL,
  `email` varchar(50) NOT NULL,
  `saldo` int NOT NULL,
  `oro` int NOT NULL,
  `plata` int NOT NULL,
  `bronce` int NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=111 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `nombre`, `contrasena`, `edad`, `email`, `saldo`, `oro`, `plata`, `bronce`) VALUES
(1, 'Arturo', '123', 19, 'arturo.ha@gmail.com', -1000, 4, 2, 1),
(66, 'Jaime', '123', 0, 'jaime@gmail.com', 6500, 1, 1, 0),
(84, 'prueba', '1234567', 0, 'prueba@gmail.com', 8000, 1, 0, 0),
(85, 'usuario', '1234567', 18, 'arturo.hzb14@gmail.com', 8000, 1, 0, 0),
(91, 'holaaa', '12345', 91, 'arturo.hzb14@gmail.com', 10000, 0, 0, 0),
(90, 'olaaaa', '12344', 19, 'arturo.hzb14@gmail.com', 10000, 0, 0, 0),
(89, 'Arturo', '1234567', 19, 'arturo.hzb14@gmail.com', 7000, 0, 1, 1),
(92, 'holaaa', '12345', 29, 'as', 10000, 0, 0, 0),
(93, 'holaaa', '12345', 29, 'as', 10000, 0, 0, 0),
(94, 'holaaa', '12345', 29, 'as', 10000, 0, 0, 0),
(95, 'holaaa', '12345', 29, 'as', 10000, 0, 0, 0),
(96, 'holaaa', '12345', 29, 'as', 10000, 0, 0, 0),
(97, 'holaaa', '12345', 29, 'as', 10000, 0, 0, 0),
(98, 'holaaa', '12345', 28, '1', 10000, 0, 0, 0),
(99, 'holaaa', '12345', 21, 'a', 10000, 0, 0, 0),
(100, 'Arturo', '12345', 19, 'arturo.hzb14@gmail.com', 8000, 1, 0, 0),
(101, 'jorges', '12345', 19, 'sjs', 0, 2, 1, 0),
(102, 'Arturo', '1234567', 19, 'arturo.hzb14@gmail.com', 10000, 0, 0, 0),
(103, 'juanito', '1234567', 19, 'juanitogmail.com', 0, 1, 2, 2),
(104, 'Arturoo', '1234567', 19, '12', 10000, 0, 0, 0),
(105, 'marian', '123456', 19, 'mariana@gmail.com', 0, 1, 2, 2),
(106, 'Arturo', '1234567', 21, 'WAS', 10000, 0, 0, 0),
(107, 'lichita', '1234567', 29, 'alicia@gmail.com', 0, 2, 1, 0),
(108, 'Miriam', '1234567', 21, 'miriam@gmail.com', 6000, 1, 0, 0),
(109, 'juanito', '12345', 20, 'arturo.hzb14@gmail.com', 0, 2, 1, 0),
(110, 'andrea', '12345', 20, 'andres@gmail.com', 10000, 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
