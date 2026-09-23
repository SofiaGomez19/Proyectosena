-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2026 a las 15:20:23
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `zybyng`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iniciosesion`
--

CREATE TABLE `iniciosesion` (
  `id_inicio` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `correo_electronico` varchar(50) DEFAULT NULL,
  `contrasena` varchar(50) DEFAULT NULL,
  `fecha_inicio` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `iniciosesion`
--

INSERT INTO `iniciosesion` (`id_inicio`, `id_usuario`, `correo_electronico`, `contrasena`, `fecha_inicio`) VALUES
(1, 1, 'juan@hola.com', 'a1b2', '2026-08-19 21:26:24'),
(2, 1, 'juan@hola.com', 'a1b2', '2026-08-20 07:35:55'),
(3, 9, 'carlos@hola.com', '12345678', '2026-08-20 08:10:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `correo_electronico` varchar(50) DEFAULT NULL,
  `contrasena` varchar(50) DEFAULT NULL,
  `confirmar_contrasena` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_usuario`, `usuario`, `correo_electronico`, `contrasena`, `confirmar_contrasena`) VALUES
(1, 'juan', 'juan@hola.com', 'a1b2', 'a1b2'),
(2, 'luis', 'luis@hola.com', 'c3d4', 'c3d4'),
(3, 'ana', 'ana@hola.com', 'e5f6', 'e5f6'),
(4, 'sofi', 'sofi@hola.com', 'g7h8', 'g7h8'),
(5, 'pablo', 'pablo@hola.com', 'i9j0', 'i9j0'),
(9, 'Carlos', 'carlos@hola.com', '12345678', '12345678'),
(10, 'pipe', 'pipe@adios.com', 'pipe77', 'pipe77'),
(11, 'solifican12', 'solifican12@f.com', 'solifican123', 'solifican123'),
(12, 'prueba1', 'prueba1@si.com', 'prueba1111', 'prueba1111'),
(13, 'Carlos', 'Carlos@8.com', 'Carlos5', 'Carlos5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sugerencias`
--

CREATE TABLE `sugerencias` (
  `id_sugerencia` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `sugerencia` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sugerencias`
--

INSERT INTO `sugerencias` (`id_sugerencia`, `nombre`, `correo`, `sugerencia`) VALUES
(1, 'ELDER', 'ELDER@CORREO.ORG', 'HOLA SI '),
(3, 'Ramiro', 'Ramiro@5.com', 'añadan gta 6'),
(4, 'Daniel', 'prueba@correo.com', 'Esta es una prueba del CRUD'),
(5, 'camilo', 'camilo@camilo', 'camilo'),
(8, 'señor', 'senor5@4', 'señorseñorseñor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `iniciosesion`
--
ALTER TABLE `iniciosesion`
  ADD PRIMARY KEY (`id_inicio`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `sugerencias`
--
ALTER TABLE `sugerencias`
  ADD PRIMARY KEY (`id_sugerencia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `iniciosesion`
--
ALTER TABLE `iniciosesion`
  MODIFY `id_inicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `sugerencias`
--
ALTER TABLE `sugerencias`
  MODIFY `id_sugerencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
