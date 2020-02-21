-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 17 2019 г., 08:58
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rps`
--

-- --------------------------------------------------------

--
-- Структура таблицы `assessment`
--

CREATE TABLE `assessment` (
  `idAssessment` int(5) NOT NULL,
  `idThemes` int(5) NOT NULL,
  `idSubject` int(5) NOT NULL,
  `idTypeAssessment` int(5) NOT NULL,
  `Hind` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Date` datetime NOT NULL,
  `DescriptionAssessment` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `idGroup` int(5) NOT NULL,
  `idPupil` int(5) NOT NULL,
  `idSubject` int(5) NOT NULL,
  `NameGroup` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `pupil`
--

CREATE TABLE `pupil` (
  `idPupil` int(5) NOT NULL,
  `idStatus` int(5) NOT NULL,
  `NameP` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `idStatus` int(5) NOT NULL,
  `NameStatus` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `subjects`
--

CREATE TABLE `subjects` (
  `idSubject` int(5) NOT NULL,
  `idTeather` int(5) NOT NULL,
  `NameSubject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DescriptionSubject` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `teather`
--

CREATE TABLE `teather` (
  `idTeather` int(5) NOT NULL,
  `NameTeather` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SurnameTeather` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idStatus` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `themes`
--

CREATE TABLE `themes` (
  `idthemes` int(5) NOT NULL,
  `idSubject` int(5) NOT NULL,
  `DateThemes` datetime NOT NULL,
  `HeadingThemes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Material` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `type_assessment`
--

CREATE TABLE `type_assessment` (
  `idtypeassessment` int(5) NOT NULL,
  `NameTypeAssessment` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `idUser` int(5) NOT NULL,
  `NameU` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SurnameU` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `GenderU` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TelephoneU` int(5) NOT NULL,
  `E-psotU` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `E-psot2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Pass` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `RPG_experience` int(5) NOT NULL,
  `idStatus` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`idAssessment`),
  ADD KEY `idThemes` (`idThemes`),
  ADD KEY `idSubject` (`idSubject`),
  ADD KEY `idTypeAssessment` (`idTypeAssessment`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`idGroup`),
  ADD KEY `idPupil` (`idPupil`),
  ADD KEY `idSubject` (`idSubject`);

--
-- Индексы таблицы `pupil`
--
ALTER TABLE `pupil`
  ADD PRIMARY KEY (`idPupil`),
  ADD KEY `idStatus` (`idStatus`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idStatus`);

--
-- Индексы таблицы `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`idSubject`),
  ADD KEY `idTeather` (`idTeather`);

--
-- Индексы таблицы `teather`
--
ALTER TABLE `teather`
  ADD PRIMARY KEY (`idTeather`),
  ADD KEY `idStatus` (`idStatus`);

--
-- Индексы таблицы `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`idthemes`),
  ADD KEY `idSubject` (`idSubject`);

--
-- Индексы таблицы `type_assessment`
--
ALTER TABLE `type_assessment`
  ADD PRIMARY KEY (`idtypeassessment`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idStatus` (`idStatus`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `assessment`
--
ALTER TABLE `assessment`
  MODIFY `idAssessment` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `idGroup` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `pupil`
--
ALTER TABLE `pupil`
  MODIFY `idPupil` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `idStatus` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `subjects`
--
ALTER TABLE `subjects`
  MODIFY `idSubject` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `teather`
--
ALTER TABLE `teather`
  MODIFY `idTeather` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `themes`
--
ALTER TABLE `themes`
  MODIFY `idthemes` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `type_assessment`
--
ALTER TABLE `type_assessment`
  MODIFY `idtypeassessment` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(5) NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `assessment`
--
ALTER TABLE `assessment`
  ADD CONSTRAINT `assessment_ibfk_1` FOREIGN KEY (`idSubject`) REFERENCES `subjects` (`idSubject`),
  ADD CONSTRAINT `assessment_ibfk_2` FOREIGN KEY (`idThemes`) REFERENCES `themes` (`idthemes`),
  ADD CONSTRAINT `assessment_ibfk_3` FOREIGN KEY (`idTypeAssessment`) REFERENCES `type_assessment` (`idtypeassessment`);

--
-- Ограничения внешнего ключа таблицы `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`idPupil`) REFERENCES `pupil` (`idPupil`);

--
-- Ограничения внешнего ключа таблицы `pupil`
--
ALTER TABLE `pupil`
  ADD CONSTRAINT `pupil_ibfk_1` FOREIGN KEY (`idStatus`) REFERENCES `status` (`idStatus`);

--
-- Ограничения внешнего ключа таблицы `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`idSubject`) REFERENCES `groups` (`idSubject`),
  ADD CONSTRAINT `subjects_ibfk_2` FOREIGN KEY (`idTeather`) REFERENCES `teather` (`idTeather`);

--
-- Ограничения внешнего ключа таблицы `teather`
--
ALTER TABLE `teather`
  ADD CONSTRAINT `teather_ibfk_1` FOREIGN KEY (`idStatus`) REFERENCES `status` (`idStatus`);

--
-- Ограничения внешнего ключа таблицы `themes`
--
ALTER TABLE `themes`
  ADD CONSTRAINT `themes_ibfk_1` FOREIGN KEY (`idSubject`) REFERENCES `subjects` (`idSubject`);

--
-- Ограничения внешнего ключа таблицы `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idStatus`) REFERENCES `status` (`idStatus`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
