-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 08-10-2019 a las 11:51:04
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `productos`
--
CREATE DATABASE IF NOT EXISTS `productos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `productos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `stock` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `imagen`, `stock`, `precio`) VALUES
(1, 'Manzanas', 'Deliciosas manzanas del parana', 'https://i0.pngocean.com/files/268/867/674/red-delicious-fruit-salad-apple-food-apple.jpg', 56, 15),
(2, 'Bananas', 'MMMMMM como te gusta la banananoide', 'https://i5.walmartimages.com/asr/209bb8a0-30ab-46be-b38d-58c2feb93e4a_1.1a15fb5bcbecbadd4a45822a11bf6257.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF', 150, 17),
(3, 'Pomelo', 'Los deliciosos pomelos que come el dueno de esta verduleria y la cerda que cria', 'https://img.vixdata.io/pd/jpg-large/es/sites/default/files/imj/vivirsalud/B/Beneficios%20del%20pomelo%20para%20la%20salud_1.jpg', 200, 56),
(4, 'Kiwi', 'Los kiwis rikis', 'https://media.mercola.com/assets/images/foodfacts/kiwi-nutrition-facts.jpg', 33, 60),
(5, 'Pera', 'Peras de Washington', 'https://media.mercola.com/assets/images/foodfacts/pear-nutrition-facts.jpg', 200, 20),
(6, 'Uvas', 'Es la fruta que se come dios en el cielo, asi que son sagradas', 'https://media.mercola.com/assets/images/foodfacts/grapes-nutrition-facts.jpg', 150, 5),
(7, 'Cereza', 'Frutas para gente con osde', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-IIomNlRqoHDuIKjw3vdF8uVVj2SEKJNCDurVBNnj3W7fq-aBqA&s', 66, 200);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
