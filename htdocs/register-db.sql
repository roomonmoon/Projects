-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 14 2022 г., 01:08
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
  `login` varchar(11) NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lastname` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `middlename` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `place_born` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `speciality` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `place_work` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `general_experience` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `teacher_experience` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `qualification_category` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `institution_address` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `institution_phone` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `taught_disciplines` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `additional_load` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `about_me` text NOT NULL,
  `pass` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `avatar` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `name`, `lastname`, `middlename`, `place_born`, `speciality`, `place_work`, `general_experience`, `teacher_experience`, `qualification_category`, `institution_address`, `institution_phone`, `taught_disciplines`, `additional_load`, `about_me`, `pass`, `avatar`) VALUES
(24, '', 'root@mail.ru', 'Иван', 'Иванов', 'Иванович', 'Махачкала', 'Старший программист', 'Дагестанский государственный технический универ', '11 лет', '9 лет', '2 средняя', '694411, Сахалинская область, Тымовский район, с.Воскресеновка, ул.Школьная, д. 11', '+7 (424) 479-31-43', 'Математика, русский язык и т.д.', 'Классное руководство, заместитель директора и т.д.', 'Lorem Ipsum - это текст-&#34;рыба&#34;, часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной &#34;рыбой&#34; для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.', '123', 'Forrest Gump.jpg'),
(23, '', 'degtyar2023@mail.ru', 'Сергей', 'Дегтярь', 'Игоревич', 'Санкт-Петербург', 'Младший программист', 'Дагестанский государственный университет', '6 лет', '3 года', '3 низкая', '367000, Россия, Республика Дагестан, Махачкала, ул. Магомеда Гаджиева, д. 43-а (ректорат ДГУ).', '+7 (8722) 68-23-26', 'C++, C+, C#, PHP, Python', 'Рисую космические корабли...', 'А вот личностные качества — то, что надо. Ведь до этого вы указывали результаты деятельности: этапы образовательного процесса, места работы, достижения, навыки. Личность при этом словно оставалась за кадром. Указание личностных качеств в последнем разделе — это как будто подведение итогов, объяснение ваших высоких результатов, причина того, как вы достигли всего перечисленного в предыдущих разделах. Кроме того, это ещё и заверение работодателя в том, что с приходом на новую работу в положительной динамике ничего не поменяется, так как ваша личность останется неизменной.', '123', 'Example.jpeg'),
(36, '', 'renorny@mail.ru', 'Николай', 'Басков', 'Вальерьевич', 'Волгоград', 'Народный артист', 'Театр Таганка', '2 года', '1 год', 'Средняя', 'г. Москва, ул. Марксистская, д. 3 стр. 1 этаж 4, офис 414, ком. 83А', '+7 (495) 912-01-04', 'Информатика, ИЗО, Физкультура', 'Секция по шахматам', 'Lorem ipsum — классический текст-«рыба». Является искажённым отрывком из философского трактата Марка Туллия Цицерона «О пределах добра и зла», написанного в 45 году до н. э. на латинском языке, обнаружение сходства приписывается Ричарду МакКлинтоку.', '123', 'A-753180-1619179655-2800.jpg'),
(35, '', 'user2023@mail.ru', 'Максим', 'Марценкевич', 'Тесакович', '', '', '', '', '', '', '', '', '', '', '', '123', 'non-avatar.jpg');

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
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
