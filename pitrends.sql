-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-01-2017 a las 00:32:51
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pitrends`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE IF NOT EXISTS `formulario` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `rsocial` varchar(100) NOT NULL,
  `fcreacion` varchar(12) NOT NULL,
  `ntrabajadores` int(5) NOT NULL,
  `rfc` varchar(12) NOT NULL,
  `estado` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`id`, `nombre`, `rsocial`, `fcreacion`, `ntrabajadores`, `rfc`, `estado`) VALUES
(1, 'TELCEL', 'RADIOMOVIL DIPSA, S.A. DE C.V.', '1981', 50, 'RDI841003QJ4', 'ACTIVO'),
(6, 'BANAMEX', 'Banco Nacional de MÃ©xico, S.A., InstituciÃ³n de Banca MÃºltiple, Grupo Financiero Banamex', '2017-01-2', 123, 'banamexfasdr', 'ACTIVO'),
(7, 'banorte', 'banco norte de mexico sa. de cv.', '1990-10-0', 60, 'bancofuerte_', 'INACTIVO'),
(8, 'coppel', 'coppel sa de cv', '1850-12-1', 50, 'COPPELCANADA', 'INACTIVO'),
(11, 'elektra', 'elektra sa de cv', '2017-01-06', 20, 'ELEKTRACAMPE', 'ACTIVO');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
