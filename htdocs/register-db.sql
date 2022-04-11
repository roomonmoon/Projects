-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 11 2022 г., 18:43
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `register-db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `login` varchar(11) NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lastname` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `middlename` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `place_born` text NOT NULL,
  `speciality` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `place_work` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `general_experience` text NOT NULL,
  `teacher_experience` text NOT NULL,
  `qualification_category` text NOT NULL,
  `pass` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `avatar` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `login`, `name`, `lastname`, `middlename`, `place_born`, `speciality`, `place_work`, `general_experience`, `teacher_experience`, `qualification_category`, `pass`, `avatar`) VALUES
(1, 'degtyar2023@mail.ru', 'admin', 'Сергей', 'Дегтярь', 'Игоревич', 'г. Махачкала', 'Программист', 'ДГУ', '12', '12', '12', '123', 'Forrest Gump.jpg'),
(2, 'nado_bit_vejlviim@mail.ru', 'root', 'Иван', 'Иванов', 'Иванович', 'г. Москва', 'Начальник', 'Нархоз', '1', '3', '6', '123', 'mem.jpg'),
(3, 'renorny@mail.ru', 'qwerty', 'Али', 'Магомедов', 'Магомедович', 'г.Дербент', 'Экономист', 'Дагестанский государственный университет', '20 лет', '15 лет', '1 высшая', '123', '123.jpg'),
(13, 'привет@mail.ru', 'jook', 'Леонид', 'Боярский', 'Васильевич', 'г. Екатеренбург', 'Эколог', 'Дагестанский государственный технический универ', '42 года', '16 лет', '2 средняя', '123', 'приве.jpg'),
(14, 'user@mail.ru', 'user', 'Леонид', 'Башкаров', 'Валерьевич', 'г.Сочи', 'Экономик в среде жизнедеятельности', 'Дагестанский государственный технический универ', '51 год', '32 лет', '3 низшая', '123', 'non-avatar.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
