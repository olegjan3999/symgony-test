-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 05 2016 г., 23:38
-- Версия сервера: 5.5.47-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `symfony`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `description` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'PHP', NULL),
(2, 'Java', NULL),
(3, 'JavaScript', NULL),
(4, 'Python', NULL),
(5, 'Ruby', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`) VALUES
(1, 'Ivanov'),
(2, 'Petrov'),
(3, 'Orlov'),
(4, 'Sokolov'),
(5, 'Sidorov'),
(6, 'Makarov'),
(7, 'Mamaev'),
(8, 'Vorona'),
(9, 'Didenko'),
(10, 'Kosenko'),
(11, 'Romanenko');

-- --------------------------------------------------------

--
-- Структура таблицы `products_categories`
--

CREATE TABLE IF NOT EXISTS `products_categories` (
  `product_Id` int(11) NOT NULL,
  `category_Id` int(11) NOT NULL,
  KEY `fk_products_idx` (`product_Id`),
  KEY `fk_categories_idx` (`category_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `products_categories`
--

INSERT INTO `products_categories` (`product_Id`, `category_Id`) VALUES
(1, 1),
(2, 1),
(1, 2),
(1, 4),
(2, 3),
(11, 1),
(10, 5),
(10, 4),
(3, 2),
(4, 2),
(4, 3),
(5, 1),
(5, 2),
(6, 2),
(7, 2),
(8, 1),
(9, 5),
(9, 1),
(9, 3);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `products_categories`
--
ALTER TABLE `products_categories`
  ADD CONSTRAINT `fk_categories` FOREIGN KEY (`category_Id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_products` FOREIGN KEY (`product_Id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
