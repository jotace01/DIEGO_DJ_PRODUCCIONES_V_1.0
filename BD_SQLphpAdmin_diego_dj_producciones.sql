-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2024 a las 16:06:45
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `diego_dj_producciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `codigo` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Telefono` varchar(11) NOT NULL,
  `Correo` varchar(25) NOT NULL,
  `Tipo_De_Evento` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `Fecha_Evento` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`codigo`, `Nombre`, `Apellido`, `Telefono`, `Correo`, `Tipo_De_Evento`, `Fecha_Evento`) VALUES
(3, 'diana', 'mahecha', '3001234567', 'dianamahe@gmail.com', 'cumpleaños', 1012025),
(4, 'felipe', 'bernal', '3005824652', 'felipe@gmail.com', 'fiesta', 1202025),
(5, 'stephania', 'hernandez', '3154687913', 'tefa@gmail.com', 'grado', 1112024),
(6, 'mario', 'hernandez', '3045381746', 'mario@gmail.com', 'empresarial', 24122024),
(15, 'julio', 'hernandez', '3195669281', 'yualvili27@gmail.com', 'despedida empresarial', 1012025),
(18, 'diego', 'murillo', '3005468291', 'diego@hotmail.com', 'grado', 1122024),
(100, 'nicolas', 'saldarriaga', '123', 'nico@gmail.com', 'despedida de soltero', 30012025),
(101, 'carolina', 'bedoya', '3002584675', 'caro@gmail.com', 'matrimonio', 2024),
(102, 'carlos ', 'mora', '3004587952', 'carlos@gmail.com', 'despedida', 2024),
(103, 'diana', 'cruz', '300564567', 'hdfkgjsd@gmail.com', 'cumpleaños', 2024);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id` int(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id`, `nom`, `email`, `Pass`) VALUES
(1, 'diana', 'dianamahe@gmail.com', 'diana1234'),
(2, 'julio', 'yualvili27@gmail.com', 'julio1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
