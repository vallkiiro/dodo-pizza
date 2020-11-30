-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 30 2020 г., 03:53
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `DodoPizza`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pizza`
--

CREATE TABLE `pizza` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `info` varchar(150) NOT NULL,
  `img` varchar(10) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pizza`
--

INSERT INTO `pizza` (`id`, `name`, `info`, `img`, `price`) VALUES
(1, 'Пицца из половинок', 'Соберите свою пиццу 35 см с двумя разными вкусами', 'img/1.jpeg', 630),
(2, 'Пепперони фреш', 'Пикантная пепперони, увеличенная порция моцареллы, томаты, томатный соус', 'img/2.jpeg', 295),
(3, 'Сырная', 'Увеличенная порция моцареллы, томатный соус', 'img/3.jpg', 295),
(4, 'Ветчина и сыр', 'Ветчина, моцарелла, соус альфредо', 'img/4.jpg', 375),
(5, 'Додо', 'Ветчина, митболы из говядины, пикантная пепперони, томатный соус, шампиньоны, сладкий перец, красный лук, моцарелла, маслины', 'img/5.jpeg', 545),
(6, 'Цезарь', 'Свежие листья салата айсберг в конверте, цыплёнок, томаты черри, сыры чеддер и пармезан, моцарелла, сливочный соус, соус цезарь', 'img/6.jpeg', 545),
(7, 'Ветчина и грибы', 'Ветчина, шампиньоны, увеличенная порция моцареллы, томатный соус', 'img/7.jpeg', 435),
(8, 'Пепперони', 'Пикантная пепперони, увеличенная порция моцареллы, томатный соус', 'img/8.jpg', 495);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `pizza`
--
ALTER TABLE `pizza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
