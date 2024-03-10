-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2024 a las 15:42:36
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `form_burguer`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` int(50) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `consulta` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `form`
--

INSERT INTO `form` (`id`, `nombre`, `email`, `telefono`, `pais`, `fecha`, `consulta`) VALUES
(1, 'Anabella', 'anabella@hotmail.com', 2147483647, 'Argentina', '2007-02-24', ''),
(2, 'Anabella', 'anabellabertola@hotmail.com', 2147483647, 'Argentina', '2007-02-24', 'yhfgnghjkjk'),
(3, 'Anabella', 'anabellabertolalujan@hotmail.com', 2147483647, 'Argentina', '2008-02-24', 'hola que tal quiero consultar por'),
(4, 'Anabella', 'anibertola@hotmail.com', 2147483647, 'Argentina', '2008-02-24', 'fdkgflknhmh'),
(5, 'ddhfghj', 'ani@hotmail.com', 2147483647, 'asfdf', '2008-02-24', 'sdgdff'),
(6, 'dgf', 'ani@hotmail.com', 786452, 'sdf', '2008-02-24', 'xcv'),
(7, 'dgf', 'ani@hotmail.com', 786452, 'sdf', '2008-02-24', 'xcv'),
(8, 'dgf', 'ani@hotmail.com', 786452, 'sdf', '2008-02-24', 'xcv'),
(9, 'dgf', 'ani@hotmail.com', 786452, 'sdf', '2008-02-24', 'xcv'),
(10, 'dgf', 'ani@hotmail.com', 786452, 'sdf', '2008-02-24', 'xcv'),
(11, 'dgf', 'ani@hotmail.com', 786452, 'sdf', '2008-02-24', 'xcv'),
(12, 'dgf', 'ani@hotmail.com', 786452, 'sdf', '2008-02-24', 'xcv'),
(13, 'dgf', 'ani@hotmail.com', 786452, 'sdf', '2008-02-24', 'xcv'),
(14, 'dgf', 'ani@hotmail.com', 786452, 'sdf', '2008-02-24', 'xcv'),
(15, 'sdgfdgn', 'ani@bertola.com', 245543345, 'sfddg', '2012-02-24', 'fhfggjgh'),
(16, 'sdgfdgn', 'ani@bertola.com', 245543345, 'sfddg', '2012-02-24', 'fhfggjgh'),
(17, 'sdgfdgn', 'ani@bertola.com', 245543345, 'sfddg', '2012-02-24', 'fhfggjgh'),
(18, 'sdgfdgn', 'ani@bertola.com', 245543345, 'sfddg', '2012-02-24', 'fhfggjgh'),
(19, 'sdgfdgn', 'ani@bertola.com', 245543345, 'sfddg', '2012-02-24', 'fhfggjgh'),
(20, 'sdgfdgn', 'ani@bertola.com', 245543345, 'sfddg', '2012-02-24', 'fhfggjgh'),
(21, 'sdgfdgn', 'ani@bertola.com', 245543345, 'sfddg', '2012-02-24', 'fhfggjgh'),
(22, 'sdgfdgn', 'ani@bertola.com', 245543345, 'sfddg', '2012-02-24', 'fhfggjgh'),
(23, 'sdgfdgn', 'ani@bertola.com', 245543345, 'sfddg', '2012-02-24', 'fhfggjgh'),
(24, 'sdgfdgn', 'ani@bertola.com', 245543345, 'sfddg', '2012-02-24', 'fhfggjgh'),
(25, 'sdgfdgn', 'ani@bertola.com', 245543345, 'sfddg', '2012-02-24', 'fhfggjgh'),
(26, 'sdgfdgn', 'ani@bertola.com', 245543345, 'sfddg', '2012-02-24', 'fhfggjgh'),
(27, 'sdgfdgn', 'ani@bertola.com', 245543345, 'sfddg', '2012-02-24', 'fhfggjgh'),
(28, 'sdgfdgn', 'ani@bertola.com', 245543345, 'sfddg', '2012-02-24', 'fhfggjgh'),
(29, 'sdgfdgn', 'ani@bertola.com', 245543345, 'sfddg', '2012-02-24', 'fhfggjgh'),
(30, 'sdgfdgn', 'ani@bertola.com', 245543345, 'sfddg', '2012-02-24', 'fhfggjgh'),
(31, 'sdgfdgn', 'ani@bertola.com', 245543345, 'sfddg', '2012-02-24', 'fhfggjgh'),
(32, 'sdgfdgn', 'ani@bertola.com', 245543345, 'sfddg', '2012-02-24', 'fhfggjgh'),
(33, 'sdgfdgn', 'ani@bertola.com', 245543345, 'sfddg', '2012-02-24', 'fhfggjgh'),
(34, 'sdgfdgn', 'ani@bertola.com', 245543345, 'sfddg', '2012-02-24', 'fhfggjgh'),
(35, 'sdgfdgn', 'ani@bertola.com', 245543345, 'sfddg', '2012-02-24', 'fhfggjgh');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
