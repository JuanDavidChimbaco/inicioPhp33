-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2023 a las 02:09:55
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pokemon33`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE `prueba` (
  `nom_prueba` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `codigo_prueba` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `prueba`
--

INSERT INTO `prueba` (`nom_prueba`, `codigo_prueba`) VALUES
('Beedrill', 15),
('Blastoise', 9),
('Bulbasaur', 1),
('Butterfree', 12),
('Caterpie', 10),
('Charizard', 6),
('Charmander	', 4),
('Charmeleon', 5),
('Ivysaur', 2),
('Kakuna', 14),
('Metapod', 11),
('Pidgey', 16),
('Squirtle', 7),
('Venusaur', 3),
('Wartortle', 8),
('Weedle', 13);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `prueba`
--
ALTER TABLE `prueba`
  ADD PRIMARY KEY (`codigo_prueba`),
  ADD UNIQUE KEY `nom_prueba` (`nom_prueba`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
