-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 25 2023 г., 14:30
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `eshata`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orderdb`
--

CREATE TABLE `orderdb` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `providerId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `orderdb`
--

INSERT INTO `orderdb` (`id`, `number`, `date`, `providerId`, `created_at`, `updated_at`) VALUES
(39, 43572, '2023-04-24 10:02:24', 11, '2023-04-24 05:02:24', '2023-04-24 05:02:24'),
(40, 12448, '2023-04-24 10:02:31', 12, '2023-04-24 05:02:31', '2023-04-24 05:02:31'),
(41, 55328, '2023-04-24 10:02:49', 13, '2023-04-24 05:02:49', '2023-04-24 05:02:49'),
(42, 30058, '2023-04-24 10:03:24', 11, '2023-04-24 05:03:24', '2023-04-25 07:28:32');

-- --------------------------------------------------------

--
-- Структура таблицы `orderitem`
--

CREATE TABLE `orderitem` (
  `id` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `quantity` float NOT NULL,
  `unit` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `orderitem`
--

INSERT INTO `orderitem` (`id`, `orderId`, `name`, `quantity`, `unit`, `created_at`, `updated_at`) VALUES
(39, 39, 453, 67837, 3753, NULL, NULL),
(40, 39, 453, 4567480, 4561, NULL, NULL),
(41, 39, 4534546, 8375380, 34573, NULL, NULL),
(42, 40, 453756, 456, 4534, NULL, NULL),
(43, 41, 54564534, 53453, 45345345, NULL, NULL),
(44, 41, 453453, 45345, 3453453, NULL, NULL),
(45, 42, 1, 1, 1, NULL, '2023-04-25 07:28:32'),
(46, 42, 1, 1, 1, NULL, '2023-04-25 07:28:32'),
(47, 42, 1, 1, 1, NULL, '2023-04-25 07:28:32');

-- --------------------------------------------------------

--
-- Структура таблицы `provider`
--

CREATE TABLE `provider` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `provider`
--

INSERT INTO `provider` (`id`, `name`, `created_at`, `updated_at`) VALUES
(11, 'Adidas', '2023-04-20 11:03:20', '2023-04-20 11:03:20'),
(12, 'Abibas', '2023-04-20 11:03:20', '2023-04-20 11:03:20'),
(13, 'Samsung', '2023-04-20 11:03:44', '2023-04-20 11:03:44'),
(14, 'Samson', '2023-04-20 11:03:44', '2023-04-20 11:03:44');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orderdb`
--
ALTER TABLE `orderdb`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orderdb`
--
ALTER TABLE `orderdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT для таблицы `orderitem`
--
ALTER TABLE `orderitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT для таблицы `provider`
--
ALTER TABLE `provider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
