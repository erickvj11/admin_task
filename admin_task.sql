-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-08-2018 a las 14:22:45
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `admin_task`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaciontareas`
--

CREATE TABLE IF NOT EXISTS `asignaciontareas` (
  `idAsignacion` int(11) NOT NULL AUTO_INCREMENT,
  `idProyecto` int(11) NOT NULL,
  `idTarea` int(11) NOT NULL,
  `idDesarrollador` int(11) NOT NULL,
  `horasEstimadas` int(11) NOT NULL,
  `comentarios` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idAsignacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desarrolladores`
--

CREATE TABLE IF NOT EXISTS `desarrolladores` (
  `idDesarrollador` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Cedula` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idDesarrollador`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Registra los desarrolladores' AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `desarrolladores`
--

INSERT INTO `desarrolladores` (`idDesarrollador`, `Nombre`, `Cedula`) VALUES
(1, 'Erick Vega JimÃ©nez', '111760371'),
(2, 'Alejandro Vega', '112430865'),
(3, 'Stephanie Conejo', '112780527');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE IF NOT EXISTS `proyectos` (
  `idproyecto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fechaInicio` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `fechaEntrega` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idproyecto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Alamacena los proyectos del Sistema' AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`idproyecto`, `nombre`, `fechaInicio`, `fechaEntrega`, `descripcion`) VALUES
(1, '23/08/2018', '23/09/2018', 'Sistema de', 'Punto de ventas'),
(2, '18/08/2019', '18/09/2019', 'Sistema de', 'Control de Cartera'),
(3, 'Sistema de Facturacion', '23/08/2018', '23/09/2018', 'Punto de Venta, CXC CXP Contabilidad'),
(4, 'Sistema de Cobros', '30/08/2018', '30/09/2018', 'Control de las cartera de clientes'),
(5, 'Sistema de Cobros', '26/08/2018', '27/09/2018', 'Control de Cartera de Clientes'),
(6, 'Sistema de Registro de Tareas', '23/08/2018', '09/12/2018', 'Control de Tareas de la empresa'),
(7, 'Sistema de Facturacion e Inventario', '23/08/2018', '23/09/2018', 'Punto de Venta, CXC CXP Inventarios'),
(8, 'Sistema de Facturacion e Inventario', '23/08/2018', '23/09/2018', 'Punto de Venta, CXC CXP Inventarios'),
(9, 'sistemas de gerencia', '23/08/2018', '23/09/2018', 'Generacion de reportes'),
(10, 'Sistema de Facturacion v2', '23/08/2018', '23/09/2018', 'Punto de Venta, CXC CXP Contabilidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE IF NOT EXISTS `tareas` (
  `idTarea` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idTarea`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`idTarea`, `Nombre`, `Descripcion`) VALUES
(1, 'Crear tabla de clientes', 'Segun diagrama realizar la tabla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Password` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `Email`, `nombre`, `apellido`, `Password`) VALUES
(1, 'erickvj11@hotmail.com', 'Erick', 'Vega', 'erveji');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
