-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Окт 13 2023 г., 00:45
-- Версия сервера: 5.7.37-0ubuntu0.18.04.1
-- Версия PHP: 7.2.24-0ubuntu0.18.04.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db0`
--

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `a`
-- (See below for the actual view)
--
CREATE TABLE `a` (
`ID_clienta` int(11)
,`much` bigint(21)
);

-- --------------------------------------------------------

--
-- Структура таблицы `Automobil`
--

CREATE TABLE `Automobil` (
  `ID_auto` int(11) NOT NULL,
  `Nomer` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Marka` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Nazzvaniye` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ID_vladeltsa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Automobil`
--

INSERT INTO `Automobil` (`ID_auto`, `Nomer`, `Marka`, `Nazzvaniye`, `ID_vladeltsa`) VALUES
(1, 'ра467с', 'Вольво', 'ХС90', 2),
(2, 'тн444у', 'Мерседес', 'S-Class', 4),
(3, 'оо456о', 'Мерседес', 'M-Class', 4),
(4, 'ев633в', 'Ауди', 'А6', 3),
(5, 'ук360о', 'Москвич', 'Москвич-6', 1),
(6, 'оо888н', 'Ауди', 'А2', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `Client`
--

CREATE TABLE `Client` (
  `ID_clienta` int(11) NOT NULL,
  `FIO` text NOT NULL,
  `Telefon` bigint(11) NOT NULL,
  `Pasport` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Client`
--

INSERT INTO `Client` (`ID_clienta`, `FIO`, `Telefon`, `Pasport`) VALUES
(1, 'Иванов Иван Иванович', 9811234567, 4121888465),
(2, 'Петров Петр Петрович', 9115673422, 4121576933),
(3, 'Сидоров Андрей Андреевич', 9215673399, 4020334232),
(4, 'Соболева Анна Михайловна', 9119578687, 4020758671),
(5, 'Листов Андрей Игоревич', 9811234567, 4121889909);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `howmuch`
-- (See below for the actual view)
--
CREATE TABLE `howmuch` (
`ID_clienta` int(11)
,`much` bigint(21)
);

-- --------------------------------------------------------

--
-- Структура таблицы `Jurnal`
--

CREATE TABLE `Jurnal` (
  `ID_zapici` int(11) NOT NULL,
  `ID_auto` int(11) NOT NULL,
  `ID_clienta` int(11) NOT NULL,
  `ID_mastera` int(11) NOT NULL,
  `ID_uslugi` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Stoimost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Jurnal`
--

INSERT INTO `Jurnal` (`ID_zapici`, `ID_auto`, `ID_clienta`, `ID_mastera`, `ID_uslugi`, `Date`, `Time`, `Stoimost`) VALUES
(1, 3, 4, 1, 4, '2023-09-28', '14:16:00', 70000),
(2, 5, 1, 2, 8, '2023-09-27', '14:24:00', 950),
(3, 3, 4, 2, 10, '2023-09-29', '18:24:00', 700),
(4, 4, 3, 3, 6, '2023-09-30', '14:59:00', 6000),
(5, 5, 1, 2, 8, '2023-10-01', '20:11:00', 950),
(6, 5, 1, 3, 9, '2023-10-01', '23:16:00', 1650),
(7, 1, 2, 1, 5, '2023-10-01', '17:18:00', 14500),
(8, 6, 5, 3, 7, '2023-10-02', '17:16:00', 630);

-- --------------------------------------------------------

--
-- Структура таблицы `Master`
--

CREATE TABLE `Master` (
  `ID_mastera` int(11) NOT NULL,
  `FIO` text NOT NULL,
  `Spetsializatsiya` text NOT NULL,
  `Staz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Master`
--

INSERT INTO `Master` (`ID_mastera`, `FIO`, `Spetsializatsiya`, `Staz`) VALUES
(1, 'Мастеренко Иван Иванович', 'Автомаляр', 6),
(2, 'Мастерова Мария Александровна', 'Мойщик авто', 1),
(3, 'Громов Илья Викторович', 'Сервисный инженер', 15);

-- --------------------------------------------------------

--
-- Структура таблицы `Usluga`
--

CREATE TABLE `Usluga` (
  `ID_uslugi` int(11) NOT NULL,
  `Nazvaniye` text NOT NULL,
  `Stoimost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Usluga`
--

INSERT INTO `Usluga` (`ID_uslugi`, `Nazvaniye`, `Stoimost`) VALUES
(1, 'Замена колес', 15000),
(2, 'Ремонт ДВС', 20000),
(3, 'Замена масла в ДВС', 500),
(4, 'Покраска кузова', 70000),
(5, 'Полировка кузова', 14500),
(6, 'Замена лобового стекла', 6000),
(7, 'Замена воздушного фильтра', 630),
(8, 'Уборка салона', 950),
(9, 'Замена тормозных дисков', 1650),
(10, 'Мойка автомобиля', 700);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `vyborka`
-- (See below for the actual view)
--
CREATE TABLE `vyborka` (
`ID_mastera` int(11)
,`SUM(Stoimost)` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Структура для представления `a`
--
DROP TABLE IF EXISTS `a`;

CREATE ALGORITHM=UNDEFINED DEFINER=`a1`@`%` SQL SECURITY DEFINER VIEW `a`  AS  select `db`.`Jurnal`.`ID_clienta` AS `ID_clienta`,count(0) AS `much` from `db`.`Jurnal` group by `db`.`Jurnal`.`ID_clienta` ;

-- --------------------------------------------------------

--
-- Структура для представления `howmuch`
--
DROP TABLE IF EXISTS `howmuch`;

CREATE ALGORITHM=UNDEFINED DEFINER=`a1`@`%` SQL SECURITY DEFINER VIEW `howmuch`  AS  select `a`.`ID_clienta` AS `ID_clienta`,`a`.`much` AS `much` from `db`.`a` order by `a`.`much` desc ;

-- --------------------------------------------------------

--
-- Структура для представления `vyborka`
--
DROP TABLE IF EXISTS `vyborka`;

CREATE ALGORITHM=UNDEFINED DEFINER=`a1`@`%` SQL SECURITY DEFINER VIEW `vyborka`  AS  select `db`.`Jurnal`.`ID_mastera` AS `ID_mastera`,sum(`db`.`Jurnal`.`Stoimost`) AS `SUM(Stoimost)` from `db`.`Jurnal` group by `db`.`Jurnal`.`ID_mastera` ;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Automobil`
--
ALTER TABLE `Automobil`
  ADD PRIMARY KEY (`ID_auto`),
  ADD KEY `ID_vladeltsa` (`ID_vladeltsa`);

--
-- Индексы таблицы `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`ID_clienta`);

--
-- Индексы таблицы `Jurnal`
--
ALTER TABLE `Jurnal`
  ADD PRIMARY KEY (`ID_zapici`),
  ADD KEY `ID_auto` (`ID_auto`),
  ADD KEY `ID_clienta` (`ID_clienta`),
  ADD KEY `ID_mastera` (`ID_mastera`),
  ADD KEY `ID_uslugi` (`ID_uslugi`);

--
-- Индексы таблицы `Master`
--
ALTER TABLE `Master`
  ADD PRIMARY KEY (`ID_mastera`);

--
-- Индексы таблицы `Usluga`
--
ALTER TABLE `Usluga`
  ADD PRIMARY KEY (`ID_uslugi`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Automobil`
--
ALTER TABLE `Automobil`
  MODIFY `ID_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `Client`
--
ALTER TABLE `Client`
  MODIFY `ID_clienta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `Jurnal`
--
ALTER TABLE `Jurnal`
  MODIFY `ID_zapici` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `Master`
--
ALTER TABLE `Master`
  MODIFY `ID_mastera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `Usluga`
--
ALTER TABLE `Usluga`
  MODIFY `ID_uslugi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Automobil`
--
ALTER TABLE `Automobil`
  ADD CONSTRAINT `Automobil_ibfk_1` FOREIGN KEY (`ID_vladeltsa`) REFERENCES `Client` (`ID_clienta`);

--
-- Ограничения внешнего ключа таблицы `Jurnal`
--
ALTER TABLE `Jurnal`
  ADD CONSTRAINT `Jurnal_ibfk_5` FOREIGN KEY (`ID_clienta`) REFERENCES `Client` (`ID_clienta`),
  ADD CONSTRAINT `Jurnal_ibfk_6` FOREIGN KEY (`ID_mastera`) REFERENCES `Master` (`ID_mastera`),
  ADD CONSTRAINT `Jurnal_ibfk_7` FOREIGN KEY (`ID_uslugi`) REFERENCES `Usluga` (`ID_uslugi`),
  ADD CONSTRAINT `Jurnal_ibfk_8` FOREIGN KEY (`ID_auto`) REFERENCES `Automobil` (`ID_auto`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
