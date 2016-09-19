-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 18 2016 г., 00:59
-- Версия сервера: 5.5.48
-- Версия PHP: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blogm`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `blog_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `datab` date DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `blog`
--

INSERT INTO `blog` (`blog_id`, `user_id`, `datab`, `message`) VALUES
(1, 1, '2016-09-01', 'Cборкой мусора - удалением устаревших файлов PHP тоже занимается сам. Как и кодированием данных и кучей всяких других нужных вещей. В результате этой заботы работа с сессиями оказывается очень простой.\r\nВот мы, собственно, и подошли к примеру работы сесси'),
(2, 2, '2016-09-08', 'По умолчанию в последних версиях PHP включены обе опции. Как PHP поступает в этом случае? Кука выставляется всегда. А ссылки автодополняются только если РНР не обнаружил cookies с идентификатором сессии. Когда пользователь в првый раз за этот сеанс заходи'),
(3, 2, '2016-09-17', 'Разведывательный самолет ВМС США P-8A Poseidon подлетел к российской авиабазе Хмеймим в Сирии и пункту материально-технического обеспечения ВМФ России в сирийском порту Тартус. Об этом сообщает «Интерфакс» со ссылкой на данные сайтов, отслеживающих передв');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) NOT NULL,
  `fio` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`user_id`, `fio`, `login`, `password`, `email`, `phone`, `country`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'nagine00@mail.ru', '', 'Россия'),
(2, 'Сидоров Е.К.', 'sidor', 'dfdd8f68c12ce895a86345be4eae3622', 'nagine100@mail.ru', '8-922-228-15-11', 'Россия'),
(3, 'Петров', 'ppp', '2bf0cc172582e38a49f38ae08309b8a7', 'ppp', '', 'Англия');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
