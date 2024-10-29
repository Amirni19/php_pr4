-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 29 2024 г., 09:56
-- Версия сервера: 5.7.29
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `manual`
--

-- --------------------------------------------------------

--
-- Структура таблицы `book`
--

CREATE TABLE `book` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `id_category` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`id`, `name`, `text`, `date`, `author`, `id_category`) VALUES
(1, 'Как найти мечту в этой жизни? ', 'В 20 лет Вы думаете что жизнь только-только начинается. Но это Вам так кажется! Через 20 лет Вы поймете что жизнь только сейчас начинается!', '12.10.2024', 'Виктор Пилевин', 1),
(2, 'Был рожден деловым человеком', 'Книга, рассказывающая о пути бизнесмена Игоря Буянова, от квартиры в \"сталинке\" до квартиры в \"Москва сити\"', '11.10.2024', 'Михаил Буянов ', 2),
(3, 'Мысли на работе', 'Как понять человека, поговорив с ним всего 5 минут!', '25.10.2024', 'Людмилла Калугина ', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `book_id`
--

CREATE TABLE `book_id` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `book_id`
--

INSERT INTO `book_id` (`id`, `name`) VALUES
(1, 'Философия'),
(2, 'Бизнес'),
(3, 'Психология');

-- --------------------------------------------------------

--
-- Структура таблицы `tovar`
--

CREATE TABLE `tovar` (
  `id` int(10) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `tovar`
--

INSERT INTO `tovar` (`id`, `photo`, `name`, `comm`) VALUES
(1, 'icon/imag.png', 'Hair Loss1111111110', 'Now hair loss is treatable. There are clinically proven treatments<br>effective in 9/10 men.'),
(2, 'icon/imag.png', 'Hair Loss', 'Now hair loss is treatable. There are clinically proven treatments<br>effective in 9/10 men.');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'apple', 'apple@gmail.com', '$2y$10$MkcBZthP4AmFRMRCXWsj1OHd04C/T.ulNn8UjzItmtXMpfazdmNGC', '1'),
(2, 'potato', 'potato@gmail.com', '$2y$10$tigT9mo9SQFQl19p4einne9Y6FqVMEwj6FpWLEC4DkVbtUFU7.ipW', '1'),
(3, 'melon', 'melon@gmail.com', '$2y$10$SJeypDenp9S48qV3ec10X.DXKRd7jRLOzDzNhATVHAmqVIYVsd52i', '1'),
(4, 'Banan', 'banan@gmail.com', '$2y$10$Ej4g5xt9q1NW2ERIMYBiI.NLwIp00ckgy91Lg2W3xlVIuLh1pJGo6', '1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- Индексы таблицы `book_id`
--
ALTER TABLE `book_id`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tovar`
--
ALTER TABLE `tovar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `book`
--
ALTER TABLE `book`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `book_id`
--
ALTER TABLE `book_id`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `tovar`
--
ALTER TABLE `tovar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `book_id` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
