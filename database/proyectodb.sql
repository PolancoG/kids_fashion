-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-02-2023 a las 18:43:31
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectodb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproductos` int(11) NOT NULL,
  `tipodeproductos` varchar(20) NOT NULL,
  `Nombredelproducto` varchar(20) NOT NULL,
  `CodigoInterno` decimal(20,0) NOT NULL,
  `codigodeBarra` decimal(20,0) NOT NULL,
  `Categoria` decimal(20,0) NOT NULL,
  `Marca` varchar(20) NOT NULL,
  `PreciodeEntrada` decimal(20,0) NOT NULL,
  `PreciodeSalida` decimal(20,0) NOT NULL,
  `Unidad` decimal(20,0) NOT NULL,
  `Peso` decimal(10,0) NOT NULL,
  `Descripcion` varchar(40) NOT NULL,
  `Foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproductos`, `tipodeproductos`, `Nombredelproducto`, `CodigoInterno`, `codigodeBarra`, `Categoria`, `Marca`, `PreciodeEntrada`, `PreciodeSalida`, `Unidad`, `Peso`, `Descripcion`, `Foto`) VALUES
(1, '', '', '0', '0', '0', '', '0', '0', '0', '0', 'color rojo', ''),
(2, '', '', '0', '0', '0', '', '0', '0', '0', '0', '', ''),
(3, '', '', '1', '4556456', '0', 'chanel', '50', '100', '0', '60', 'color rojo', ''),
(4, '', '', '0', '0', '0', '', '0', '0', '0', '0', '', ''),
(5, '', '', '0', '0', '0', '', '0', '0', '0', '0', '', ''),
(6, '', '', '2', '4645', '0', 'chanel', '50', '100', '0', '50', 'color', ''),
(7, '', '', '0', '0', '0', '', '0', '0', '0', '0', '', ''),
(8, '', '', '0', '0', '0', '', '0', '0', '0', '0', '', ''),
(9, '', '', '0', '0', '0', '', '0', '0', '0', '0', '', ''),
(10, '', '', '0', '0', '0', '', '0', '0', '0', '0', '', ''),
(11, '', '', '0', '0', '0', '', '0', '0', '0', '0', '', ''),
(12, '', '', '0', '0', '0', '', '0', '0', '0', '0', '', ''),
(13, '', '', '0', '0', '0', '', '0', '0', '0', '0', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `NombreCompleto` varchar(20) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `CorreoElectronico` varchar(30) NOT NULL,
  `Usuario` varchar(11) NOT NULL,
  `Clave` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `NombreCompleto`, `Telefono`, `CorreoElectronico`, `Usuario`, `Clave`) VALUES
(378, 'marian', '829-388-3546', 'zooey2705@gmail.com', 'MPP', '1234'),
(380, '', '', '', '', ''),
(381, 'yesica', '809-662-9708', 'zooey2705@gmail.com', 'yesica', '1234'),
(382, '', '', '', '', ''),
(383, '', '', '', '', ''),
(384, '', '', '', '', ''),
(385, 'jose', '809-662-9708', 'zooey2705@gmail.com', 'jose', '1234'),
(386, '', '', '', '', ''),
(387, '', '', '', '', ''),
(388, 'nelson', '8092651489', 'zooey2705@gmail.com', 'nelson', '1234'),
(389, '', '', '', '', ''),
(390, '', '', '', '', ''),
(391, '', '', '', '', ''),
(392, 'marian', '829-388-3546', 'zooey2705@gmail.com', 'yesica', '1234'),
(393, '', '', '', '', ''),
(394, '', '', '', '', ''),
(395, '', '', '', '', ''),
(396, '', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproductos`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproductos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=397;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
