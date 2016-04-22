-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 22 2016 г., 18:58
-- Версия сервера: 10.1.9-MariaDB
-- Версия PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `ID_comment` int(11) NOT NULL,
  `ID_page` int(11) NOT NULL,
  `ID_user` int(11) NOT NULL,
  `Text` varchar(5000) NOT NULL,
  `state` set('published','not published') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`ID_comment`, `ID_page`, `ID_user`, `Text`, `state`) VALUES
(10, 2, 1, 'xdfgh', 'not published'),
(14, 2, 1, 'SUPER COMMENT', 'published'),
(31, 2, 1, 'hahahaha', 'published'),
(34, 3, 2, 'Helen test', 'published'),
(44, 2, 1, 'fgh', 'published'),
(46, 2, 1, 'tester', 'published'),
(47, 3, 1, 'my comment this night!', 'published');

-- --------------------------------------------------------

--
-- Структура таблицы `contactus`
--

CREATE TABLE `contactus` (
  `questionID` int(50) NOT NULL,
  `userID` int(11) NOT NULL,
  `question` text NOT NULL,
  `category` varchar(20) NOT NULL,
  `questionDate` date NOT NULL,
  `answer` text,
  `answerDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `contactus`
--

INSERT INTO `contactus` (`questionID`, `userID`, `question`, `category`, `questionDate`, `answer`, `answerDate`) VALUES
(1, 5, 'Question Example 1', 'House', '2015-05-01', 'Answer Example 1', '2015-05-07'),
(2, 3, 'Question Example 2', 'General', '2015-05-12', 'Answer Example 2', '2015-05-14'),
(3, 3, 'Question Example 3', 'Recipes', '2015-06-07', 'Answer Example 3', '2015-06-09'),
(4, 2, 'Question Example 4', 'House', '2015-06-09', 'Answer Example 4', '2015-06-14'),
(5, 2, 'Question Example 5', 'Finances', '2015-07-18', 'Answer Example 5', '2015-07-20'),
(6, 2, 'Question Example 6', 'House', '2015-07-20', 'Answer Example 6', '2015-07-23'),
(7, 5, 'Question Example 7', 'General', '2015-08-01', 'Answer Example 7', '2015-08-03');

-- --------------------------------------------------------

--
-- Структура таблицы `donations`
--

CREATE TABLE `donations` (
  `donationID` int(11) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `cardholderName` varchar(500) NOT NULL,
  `cardNumber` varchar(500) NOT NULL,
  `expiryDate` varchar(500) NOT NULL,
  `cvs` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNumber` varchar(50) NOT NULL,
  `regularity` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `firstTransaction` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `donations`
--

INSERT INTO `donations` (`donationID`, `amount`, `cardholderName`, `cardNumber`, `expiryDate`, `cvs`, `email`, `phoneNumber`, `regularity`, `status`, `firstTransaction`) VALUES
(1, '2500', 'JiIhZ5e1IB+4mCwUt8+9YRPRBWM+3VYPZaSO3sKszvY=', 'A6o1M68kS01sS7mmwGNfhM6WlLj9wtnF/Ax5x2Xdu9M=', 'YXWGLPPZXOOd96t9LARUKocD8xE/YYgLRQXwVOqBdTI=', 'F+17TG7s1yihj++O5sy/4HSIsGNWPYsM+l7a9ALL0t0=', 'smith@gmail.com', '(416)567-4326', 'One-time donation', 'Closed', '2015-05-13'),
(2, '100', 'YRGf73hYcjao3Wva2yMUOHZoCtg7ff2l1KW66ieZkXw=', 'R0j/NLsbI82GH48IR/LMPRi2EUUthWpVEV1NEfBeBf8=', 'qfgBAuDnTkqxFU3YGVo+Z7bxJa6m4yAuRv59UfN7dNA=', '9wmGvS1OcwlXRcyEoKnKnwfmd12GeqC5SAlEJn1rF+I=', 'jones@gmail.com', '(416)357-64-85', 'Every day donation', 'Open', '2015-06-15'),
(3, '750', 'lVZWIj3dM541QZxRqZ4QFpNQ+OEfGtPnuQMs8Oec/Oc=', 'jPAYoJBFsDrMPZNXWDwMxZT425hey/jGo/RoGuRkegA=', 'rjjJvAW+meQbA5oLQJDlcKBfK9c47sZIW+oJiTUxJoo=', 'QEvyTvlJ5NHan4QYmZKH5SRVVHcBr0qlztlM5z28ek4=', 'williams@gmail.com', '(416)835-63-29', 'Every month donation', 'Closed', '2015-08-27'),
(4, '12000', '1RpwDwLdXCRbmK3K26q1PaHvlwmeEiym2n5jPMZ2qsA=', 'k5xLJvLLxZhafV9b5t8gF2JNJLYINU2BBFRlOnrjuow=', 'yNipVXif0Xek8hargpg2tzqeyNiyy5plnPS3+h7xaqE=', '4pbwI2WUE2y2FXFK16JM+1u1yvlm1Ad6NVZ99TXXRZI=', 'gibbs@gmail.com', '(416)695-65-34', 'Every year donation', 'Open', '2015-09-05'),
(5, '5000', 'eR2gEbwW5ut4u8eT46lf58pHmQiAs0HKlRD1x5OTdKY=', 'JTrvpxz/WyUUCmYNJ9FgTjcoKssP35gD4qM+xqTh16k=', 'lryJAmppJZGnVyky7hV0cv5Z5OUdgRQnQGbBLcpNNrw=', 'Ry1FB1fzVIwQtmK1bS62cpFMPZHj5mo3FSVeBEt9kOE=', 'moore@gmail.com', '(416)754-12-98', 'Every year donation', 'Open', '2015-09-12'),
(6, '15', 'bu7bj1OCJpO9FfW3zDGnzgPebnQDyEojkk4Pun2Mync=', 'FPurgCgcz9B7jeAYkdF0mugncb3kHSAn88EE8isPhQI=', 'mYVcbfZ4IIoa1hvJC3ys79H8/JDvZPaPPQC+g7x+nHQ=', 'F3nxd21fN28k54EWvPbsDTaAb3kfqUr0lySBAISfAgU=', 'miller@gmail.com', '416-3345876', 'Every day donation', 'Open', '2015-09-23'),
(7, '620', '2S/FQ06uVUzXNYvGqaK0iCURIrf97/QDmp3roPrLuSE=', 'kB2W4PLO5Tq3HKJ0169UziziVtI4Y4EJ1H8HleLQaOM=', 'Nv+hzVqOy3uRK0Du2D3YwLgYpOUGH3rFliO4m31aS3U=', 'STxdEUe4b8DFEFt9X/cXMe3SGE++IjkBwy8H0xku7sg=', 'evans@gmail.com', '416-8885534', 'One-time donation', 'Closed', '2015-10-03'),
(8, '15000', '1rYvtF4XlF4eF/tQnUpDvGtnTAU4iTUuH9w68J0InaY=', '9yWSgPVJZisPcjSAm6TRw/ss98ljzwR1kGvq1tdVl+w=', 'zBpbXOVeID+T1QoqAFYCAeaq/ZKn8DtPlKzAWJ9PniI=', 'NAo1cRqCRZHjfI+5lmhuMszpZsfvZ0SgJcs/2p7oMo8=', 'brown@gmail.com', '416-9857687', 'One-time donation', 'Open', '2015-11-29'),
(9, '1700', 'tYX/IigorzIBwAzgtklL+SfWSkKYkAvdfQ0CcFKQYIU=', 'siRvXJk9FfghIJxuZUAnTi7aQE1xTQIuKv9cdBxYV68=', 'eUJcNz7etx4SRhWAWj9NwxKn5XuUnpkwHYI8CUSAp+g=', 'uzUzhSGeIMxOABTXOXlkU6XDyjVHk4T3Ki9t4xh6tQ8=', 'anderson@gmail.com', '416-8794534', 'Every month donation', 'Open', '2015-12-03'),
(10, '550', 'PTNGFxZBSODxW/JIFnD2ZjdSc0c2m7TYZvD1Pu5hZu8=', 'lxocuHg8E/kciQDAL9cdAWVmW2QWebmoZ2rEaHRRB/I=', '8SUrZ5qN34/OKPQ4oXjDYY7/Wy02s06MEils1t4pa1A=', 'VZV/p98qs/eK1uTDVxUYY4rxVmyPL/cAHr3K0t5c+to=', 'ellington@gmail.com', '416-1092890', 'Every month donation', 'Open', '2016-01-17');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `ID_image` int(11) NOT NULL,
  `alt_text` varchar(100) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`ID_image`, `alt_text`, `link`) VALUES
(1, 'image 1', 'http://flymama.info/wp-content/uploads/2013/04/general1.jpg'),
(2, 'test pic 2', 'http://localhost/Life-Advisor/img/test.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `page`
--

CREATE TABLE `page` (
  `ID_page` int(11) NOT NULL,
  `Title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ID_user` int(11) NOT NULL,
  `Status` set('posted','not posted') COLLATE utf8_unicode_ci NOT NULL,
  `Content` varchar(15000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Rank` int(11) DEFAULT NULL,
  `Tags` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Menu` set('Recipes','Finances','Time management','Health','House','People') COLLATE utf8_unicode_ci NOT NULL,
  `ID_image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `page`
--

INSERT INTO `page` (`ID_page`, `Title`, `ID_user`, `Status`, `Content`, `Rank`, `Tags`, `Menu`, `ID_image`) VALUES
(1, 'Students', 2, 'posted', '<h3> hjk</h3>', 0, 'student', 'People', '0'),
(2, 'Test', 1, 'posted', '<h1>jkhfg</h1>\r\n', 5, 'test', 'Finances', '1'),
(3, 'Test page', 2, 'posted', '<h1>NGKDGVk</h1>', 13, 'test', 'Finances', '2'),
(9, 'Student', 15, 'not posted', '<p><em>sedrftyo</em></p>\r\n', 0, 'friday', 'Recipes', '0'),
(4, 'Newsletter template Helen', 15, 'not posted', '<h1>FRIDAYYYYY!</h1>\r\n', 1, 'test', 'Recipes', '1'),
(7, 'Manitoba list', 15, 'not posted', '<p><s>vbnhjkl;</s></p>\r\n', 0, 'friday', 'House', '0'),
(6, 'Helen''s try 1', 15, 'not posted', '<p><em>cvhjkl;</em></p>\r\n', 0, 'friday', 'Finances', '0'),
(8, 'Student', 15, 'not posted', '<p><em>sedrtguj</em></p>\r\n', 0, 'friday', 'Recipes', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `questionnaire_answers`
--

CREATE TABLE `questionnaire_answers` (
  `userID` int(50) NOT NULL,
  `answer1` text,
  `answer2` text,
  `answer3` text,
  `answer4` text,
  `answer5` text,
  `answer6` text,
  `answer7` text,
  `answer8` text,
  `answer9` text,
  `answer10` text,
  `aDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `questionnaire_answers`
--

INSERT INTO `questionnaire_answers` (`userID`, `answer1`, `answer2`, `answer3`, `answer4`, `answer5`, `answer6`, `answer7`, `answer8`, `answer9`, `answer10`, `aDate`) VALUES
(1, 'user1_answer1', 'user1_answer2', 'user1_answer3', 'user1_answer4', 'user1_answer5', 'user1_answer6', 'user1_answer7', 'user1_answer8', 'user1_answer9', 'user1_answer10', '2015-12-01'),
(2, 'user2_answer1', 'user2_answer2', 'user2_answer3', 'user2_answer4', 'user2_answer5', 'user2_answer6', 'user2_answer7', 'user2_answer8', 'user2_answer9', 'user2_answer10', '2015-12-15'),
(7, 'user7_answer1', 'user7_answer2', 'user7_answer3', 'user7_answer4', 'user7_answer5', 'user7_answer6', 'user7_answer7', 'user7_answer8', 'user7_answer9', 'user7_answer10', '2015-12-19');

-- --------------------------------------------------------

--
-- Структура таблицы `questionnaire_questions`
--

CREATE TABLE `questionnaire_questions` (
  `questionID` int(50) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `questionnaire_questions`
--

INSERT INTO `questionnaire_questions` (`questionID`, `question`) VALUES
(1, 'Question 1 Text'),
(2, 'Question 2 Text'),
(3, 'Question 3 Text'),
(4, 'Question 4 Text'),
(5, 'Question 5 Text'),
(6, 'Question 6 Text'),
(7, 'Question 7 Text'),
(8, 'Question 8 Text'),
(9, 'Question 9 Text'),
(10, 'Question 10 Text');

-- --------------------------------------------------------

--
-- Структура таблицы `rights`
--

CREATE TABLE `rights` (
  `ID rigths` int(11) NOT NULL,
  `Name` set('admin','ordinary') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `rights`
--

INSERT INTO `rights` (`ID rigths`, `Name`) VALUES
(1, 'admin'),
(2, 'ordinary');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `ID_user` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Surname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Rights` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Newsletter` set('signed','not signed') COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ID_image` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`ID_user`, `Name`, `Surname`, `Rights`, `Password`, `Username`, `Email`, `Newsletter`, `Phone`, `ID_image`) VALUES
(1, 'User 1', 'Surname 1', '1', '11111', 'Nick', 'nick@gmail.com', 'signed', '6479347479', 1),
(2, 'Helen', 'Boitsova', '2', '12345', 'Lenchezzz', 'l@gmail.com', 'signed', '6755438765', 2),
(15, '', '', '1', '$2y$10$4F2OJ6pKczhQlT1sOGoA2.EbkEtbCpV9GSpZ3xESt4.G4Xk7Vwcq.', 'helen', 'helen.boitsova@gmail.com', '', '', 0),
(16, '', '', '2', '$2y$10$9O2SRik7Fsz4qTtQuKeN5eBL8ZL2U3ym/CHXVFKCMcQy/VgRX7nm2', 'antonio', 'antonio@gmail.com', '', '', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID_comment`),
  ADD KEY `ID_page` (`ID_page`),
  ADD KEY `ID_page_2` (`ID_page`);

--
-- Индексы таблицы `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`questionID`);

--
-- Индексы таблицы `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`donationID`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`ID_image`);

--
-- Индексы таблицы `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`ID_page`);

--
-- Индексы таблицы `questionnaire_answers`
--
ALTER TABLE `questionnaire_answers`
  ADD PRIMARY KEY (`userID`);

--
-- Индексы таблицы `questionnaire_questions`
--
ALTER TABLE `questionnaire_questions`
  ADD PRIMARY KEY (`questionID`);

--
-- Индексы таблицы `rights`
--
ALTER TABLE `rights`
  ADD PRIMARY KEY (`ID rigths`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `ID_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT для таблицы `contactus`
--
ALTER TABLE `contactus`
  MODIFY `questionID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `donations`
--
ALTER TABLE `donations`
  MODIFY `donationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `ID_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `page`
--
ALTER TABLE `page`
  MODIFY `ID_page` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `questionnaire_answers`
--
ALTER TABLE `questionnaire_answers`
  MODIFY `userID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `questionnaire_questions`
--
ALTER TABLE `questionnaire_questions`
  MODIFY `questionID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `rights`
--
ALTER TABLE `rights`
  MODIFY `ID rigths` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `ID_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
