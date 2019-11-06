-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2019 a las 02:24:14
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cuponera`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuponventa`
--

CREATE TABLE `cuponventa` (
  `idcuponventa` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `monto` float NOT NULL,
  `usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproductos` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `precio` float NOT NULL,
  `codgio` varchar(8) NOT NULL,
  `categoria_idcategoria` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `imagen` varchar(60) DEFAULT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproductos`, `nombre`, `precio`, `codgio`, `categoria_idcategoria`, `usuario_idusuario`, `imagen`, `fecha`, `cantidad`) VALUES
(2, 'celular samsung', 20000, '3f06a1c2', 3, 2, 'image/cel.jpg', '2019-10-31', 20),
(3, 'comidas', 2345, '4f11c66f', 1, 2, 'image/comida.jpg', '2019-10-31', 20),
(4, 'viajes', 8500, '180f8e72', 5, 4, 'image/cataratas.jpg', '2019-10-30', 10),
(5, 'viajes', 3500, '9b178fe0', 3, 4, 'image/bariloche.jpg', '2019-10-28', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_has_cuponventa`
--

CREATE TABLE `productos_has_cuponventa` (
  `productos_idproductos` int(11) NOT NULL,
  `cuponventa_idcuponventa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE `subcategoria` (
  `idcategoria` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subcategoria`
--

INSERT INTO `subcategoria` (`idcategoria`, `tipo`) VALUES
(1, 'gastronomia'),
(2, 'productos'),
(3, 'tecnologia'),
(4, 'cine'),
(5, 'viajes'),
(6, 'servicios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `mail` varchar(45) NOT NULL,
  `tipousuario` varchar(45) NOT NULL,
  `contrasena` varchar(45) NOT NULL,
  `provincia` varchar(45) DEFAULT NULL,
  `localidad` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `estado` varchar(85) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `mail`, `tipousuario`, `contrasena`, `provincia`, `localidad`, `direccion`, `estado`) VALUES
(1, 'jose', 'gonzalez@gmail.com', 'administrador', '123456', NULL, NULL, NULL, ''),
(2, 'ramos jun', 'calor@gmail.com', 'proveedor', '123456', 'Buenos Aires', 'Abasto', 'segui 878', ''),
(3, 'alexis ezequiel', 'alexislacour08@gmail.com', 'usuario', '123456', NULL, NULL, NULL, ''),
(4, 'hugo juan', 'hugo@gmail.com', 'proveedor', '123456', 'Buenos Aires', 'Agustin Roca', 'segui 878', ''),
(8, 'Miguel angel', 'miguelacour@gmail.com', 'usuario', '123456', NULL, NULL, NULL, ''),
(9, 'juan ramos', 'calor@gmail.com', 'usuario', '123456', NULL, NULL, NULL, '406a11c697b4f012abd5c79025c39784'),
(10, 'juan dias', 'alex@gef.com', 'usuario', '123456', NULL, NULL, NULL, '1034688e77d20392417b4ca354d6770b'),
(11, 'alexis ezequiel', 'juanjose@gmial.com', 'usuario', '123456', NULL, NULL, NULL, '51286ca8516109ce0e87905a9df04031'),
(12, 'juan fee', 'ofertasaldia07@gmail.com', 'usuario', '123456', NULL, NULL, NULL, '4dba34106be5c9b203d236f1dbfb0147'),
(13, 'juan ramos', 'juan@gmail.com', 'usuario', '123456', NULL, NULL, NULL, '965354eaef0f0ea5cb1e7aa975903d55'),
(14, 'RAMON DIAS', 'ramos12@gmail.com', 'proveedor', '123456', 'Buenos Aires', 'Abasto', 'segui 878', ''),
(15, 'luis desi', 'juanjose@gmial.com', 'proveedor', '123456', 'Buenos Aires', 'Abasto', 'segui 878', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuponventa`
--
ALTER TABLE `cuponventa`
  ADD PRIMARY KEY (`idcuponventa`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproductos`);

--
-- Indices de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuponventa`
--
ALTER TABLE `cuponventa`
  MODIFY `idcuponventa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproductos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
