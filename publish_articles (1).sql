-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Апр 15 2019 г., 12:50
-- Версия сервера: 5.7.25-0ubuntu0.18.04.2
-- Версия PHP: 5.6.40-5+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `magento1941`
--

-- --------------------------------------------------------

--
-- Структура таблицы `publish_articles`
--

CREATE TABLE `publish_articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `dscr` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `publish_articles`
--

INSERT INTO `publish_articles` (`id`, `name`, `dscr`) VALUES
(9, 'rule2', 'qwe'),
(10, '1', '1'),
(11, 'qwe', 'qwe'),
(13, 'rule2', 'qwer'),
(14, 'hjk', 'hjgkhgjk'),
(15, '123qwe', 'qwe'),
(16, 'rule2', 'qwe'),
(17, 'qwe', 'qwe'),
(18, 'hjk', 'hjgkhgjk'),
(19, '22', '111222'),
(21, 'rule2345', 'tyu');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `publish_articles`
--
ALTER TABLE `publish_articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `publish_articles`
--
ALTER TABLE `publish_articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
