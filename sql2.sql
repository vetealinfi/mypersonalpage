-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-01-2015 a las 05:28:43
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mipagina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cards`
--

CREATE TABLE IF NOT EXISTS `cards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `edition` varchar(500) DEFAULT NULL,
  `cast` varchar(1500) DEFAULT NULL,
  `full_power` varchar(500) DEFAULT NULL,
  `full_type` varchar(500) DEFAULT NULL,
  `rarity` varchar(50) DEFAULT NULL,
  `oracle_text` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `card_pages`
--

CREATE TABLE IF NOT EXISTS `card_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `card_pages`
--

INSERT INTO `card_pages` (`id`, `name`) VALUES
(1, 'CardKingdom');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `card_prices`
--

CREATE TABLE IF NOT EXISTS `card_prices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `card_page_id` int(11) DEFAULT NULL,
  `specific_card_id` int(11) DEFAULT NULL,
  `nm` varchar(20) DEFAULT NULL,
  `ex` varchar(20) DEFAULT NULL,
  `v` varchar(20) DEFAULT NULL,
  `vg` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editions`
--

CREATE TABLE IF NOT EXISTS `editions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) DEFAULT NULL,
  `sigla` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `specific_cards`
--

CREATE TABLE IF NOT EXISTS `specific_cards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `edition_id` int(11) DEFAULT NULL,
  `card_id` int(11) DEFAULT NULL,
  `artist` varchar(150) DEFAULT NULL,
  `flavour_text` text,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
