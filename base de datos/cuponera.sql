-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2019 a las 22:06:41
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
  `usuario_idusuarios` int(11) NOT NULL,
  `productos_idproductos` int(11) NOT NULL,
  `codigoventa` varchar(8) DEFAULT NULL,
  `canti` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuponventa`
--

INSERT INTO `cuponventa` (`idcuponventa`, `fecha`, `monto`, `usuario_idusuarios`, `productos_idproductos`, `codigoventa`, `canti`) VALUES
(1, '2019-11-10', 200000, 1, 1, '45ty56jo', 1),
(11, '2019-11-13', 23456, 1, 2, 'f5d0bb16', 1),
(12, '2019-11-16', 2500, 15, 5, 'f6a34283', 1),
(13, '2019-11-16', 3750, 15, 6, '031ce5e4', 3),
(14, '2019-11-19', 1000, 15, 4, 'b1e7fb04', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `idpermisos` int(11) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`idpermisos`, `tipo`) VALUES
(1, 'CARGAR_CUPON'),
(2, 'EDITAR_ELIMINAR'),
(3, 'CARGAR_PROVEEDOR'),
(4, 'EDITAR_PROVEDOR'),
(6, 'VER_VENTAS'),
(7, 'COMPRAS'),
(8, 'VER_MIS_COMPRAS'),
(9, 'VER_TUS_CUPONES');

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
(1, 'celular samsung A8', 18800, '50cb30f9', 6, 6, 'image/cel.jpg', '2019-11-15', 20),
(2, 'samgsun s10', 23456, 'f2bd07e3', 6, 6, 'image/sams.jpg', '2019-11-17', 48),
(3, 'viaje a las cataratas', 3500, '5bef94de', 5, 6, 'image/cataratas.jpg', '2019-11-15', 10),
(4, 'cena para 2', 1000, '00d2e635', 1, 6, 'image/comida.jpg', '2019-11-19', 15),
(5, 'parrillada para  4', 2500, 'a782770b', 1, 6, 'image/Parrillada.jpg', '2019-11-18', 7),
(6, 'celular lg k10', 1250, '1de51081', 6, 16, 'image/celu.jpg', '2019-11-24', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idroles` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `permisos` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idroles`, `nombre`, `permisos`) VALUES
(1, 'administrador', '1,2,3,4'),
(2, 'usuario', '7,8'),
(3, 'proveedor', '6,9');

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
(2, 'servicios'),
(3, 'cine'),
(4, 'productos'),
(5, 'viajes'),
(6, 'tecnologia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `mail` varchar(45) NOT NULL,
  `tipousuario` int(11) NOT NULL,
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
(1, 'alexis ezequiel', 'alexislacour08@gmail.com', 2, '123456', NULL, NULL, NULL, ''),
(3, 'juan', 'gonzalez@gmail.com', 1, '123456', NULL, NULL, NULL, ''),
(6, 'juan ramos', 'calor@gmail.com', 3, '123456', 'Buenos Aires', 'Abasto', 'segui 878', ''),
(14, 'alexis ezequiel', 'alexislacour8@gmail.com', 2, '123456', NULL, NULL, NULL, 'd3e90ef382d1853e5b996ef53818b849'),
(15, 'juan ramos', 'ofertasaldia07@gmail.com', 2, '123456', NULL, NULL, NULL, ''),
(16, 'hugo juan', 'hugo@gmail.com', 3, '123456', 'Buenos Aires', 'Aeropuerto Internacional Ezeiza', 'moreno123', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuponventa`
--
ALTER TABLE `cuponventa`
  ADD PRIMARY KEY (`idcuponventa`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`idpermisos`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproductos`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idroles`);

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
  MODIFY `idcuponventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproductos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
