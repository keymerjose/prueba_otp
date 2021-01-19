-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-01-2021 a las 12:25:31
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `keymer_chacon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programador`
--

CREATE TABLE `programador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `cedula` bigint(20) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `lenguajes` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `idestatus` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `programador`
--

INSERT INTO `programador` (`id`, `nombre`, `apellido`, `cedula`, `correo`, `lenguajes`, `created_at`, `idestatus`) VALUES
(1, 'asdfas', 'asdfsa', 2343242, 'keymerj@gmail.com', 0, '2021-01-19 04:13:14', 1),
(2, 'asdfsa', 'asdfsa', 2342342, 'keymerj@gmail.com', 0, '2021-01-19 04:13:53', 1),
(3, 'asdf', 'asdf', 5465464, 'keymerj@gmail.com', 0, '2021-01-19 04:14:14', 1),
(4, 'asdfsa', 'asdfas', 5345353, 'keymerj@gmail.com', 0, '2021-01-19 04:16:07', 1),
(5, 'asdf', 'asdf', 123, 'keymerj@gmail.com', 0, '2021-01-19 04:16:35', 1),
(6, 'asdfsfassdfafasfas', 'gfffffffhfghghd', 9999999, 'keymerj@gmail.com', 0, '2021-01-19 04:47:31', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `programador`
--
ALTER TABLE `programador`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `programador`
--
ALTER TABLE `programador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
