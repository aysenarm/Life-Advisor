-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 28 2016 г., 08:53
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
(7, 5, 'Question Example 7', 'General', '2015-08-01', 'Answer Example 7', '2015-08-03'),
(8, 15, 'dfdgchjnk', 'House', '2016-04-28', NULL, NULL);

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
-- Структура таблицы `forum_categories`
--

CREATE TABLE `forum_categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(50) DEFAULT NULL,
  `userID` int(11) NOT NULL,
  `datePublished` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `forum_categories`
--

INSERT INTO `forum_categories` (`categoryID`, `categoryName`, `userID`, `datePublished`) VALUES
(21, 'Cleaning', 1, '2016-04-28'),
(22, 'Appliances', 1, '2016-04-28'),
(23, 'Finance', 1, '2016-04-28'),
(24, 'People', 1, '2016-04-28'),
(25, 'Time Management', 1, '2016-04-28'),
(26, 'Recipes', 1, '2016-04-28'),
(27, 'House', 1, '2016-04-28');

-- --------------------------------------------------------

--
-- Структура таблицы `forum_comments`
--

CREATE TABLE `forum_comments` (
  `commentID` int(11) NOT NULL,
  `commentName` varchar(50) DEFAULT NULL,
  `userID` int(11) NOT NULL,
  `datePublished` date NOT NULL,
  `topicID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `forum_comments`
--

INSERT INTO `forum_comments` (`commentID`, `commentName`, `userID`, `datePublished`, `topicID`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 1, '2016-04-28', 80);

-- --------------------------------------------------------

--
-- Структура таблицы `forum_topics`
--

CREATE TABLE `forum_topics` (
  `topicID` int(11) NOT NULL,
  `topicName` varchar(50) DEFAULT NULL,
  `categoryID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `datePublished` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `forum_topics`
--

INSERT INTO `forum_topics` (`topicID`, `topicName`, `categoryID`, `userID`, `datePublished`) VALUES
(80, 'Car Cleaning', 21, 1, '2016-04-28'),
(81, 'Outdoor Cleaning', 21, 1, '2016-04-28'),
(82, 'Laundry', 21, 1, '2016-04-28'),
(83, 'Green Cleaning', 21, 1, '2016-04-28');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery_galleries`
--

CREATE TABLE `gallery_galleries` (
  `galleryID` int(11) NOT NULL,
  `galleryName` varchar(50) NOT NULL,
  `datePublished` date NOT NULL,
  `userID` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `gallery_galleries`
--

INSERT INTO `gallery_galleries` (`galleryID`, `galleryName`, `datePublished`, `userID`, `image`) VALUES
(17, 'Kitchen Designs', '2016-04-28', 1, 'can-stock-photo_csp13118945.jpg'),
(18, 'Cleaning', '2016-04-28', 1, 'cover.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery_images`
--

CREATE TABLE `gallery_images` (
  `imageID` int(11) NOT NULL,
  `galleryID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `datePublished` date NOT NULL,
  `alt` varchar(50) NOT NULL,
  `fileName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `gallery_images`
--

INSERT INTO `gallery_images` (`imageID`, `galleryID`, `userID`, `datePublished`, `alt`, `fileName`) VALUES
(47, 17, 1, '2016-04-28', 'Kitchen', '1-01-modern-kitchen-burnt-bamboo.jpg'),
(48, 17, 1, '2016-04-28', 'Kitchen', '15-kitchen1.jpg'),
(49, 17, 1, '2016-04-28', 'Kitchen', '60e7df1e04abf673acc0ba138619f23e.jpg'),
(50, 17, 1, '2016-04-28', 'Kitchen', 'b7448dde9b5f5bfc72ee57a8d4992436.jpg'),
(51, 17, 1, '2016-04-28', 'Kitchen', 'base.jpg'),
(52, 17, 1, '2016-04-28', 'Kitchen', 'breathtaking-modern-kitches-white-windows-frames-marble-countertop.jpg'),
(53, 17, 1, '2016-04-28', 'Kitchen', 'contemporary-kitchen.jpg'),
(54, 17, 1, '2016-04-28', 'Kitchen', 'csm_213-269-793-M01-285-222-188-j15_01_86c60950db.jpg'),
(55, 17, 1, '2016-04-28', 'Kitchen', 'csm_orlando-k-pur-fg-k_9551e85dbc.jpg'),
(56, 17, 1, '2016-04-28', 'Kitchen', 'csm_synthia-c-ceres-c_38dddf9ac6.jpg'),
(57, 17, 1, '2016-04-28', 'Kitchen', 'Felton-glossblack.jpg'),
(58, 17, 1, '2016-04-28', 'Kitchen', 'fs19.jpg'),
(59, 17, 1, '2016-04-28', 'Kitchen', 'kitchen_improvement_ideas.jpg'),
(60, 17, 1, '2016-04-28', 'Kitchen', 'Leicht-Kueche-weiss_01.jpg'),
(63, 17, 1, '2016-04-28', 'Kitchen', 'march2014-pg97-alexlukey-Modernkitchen.jpg'),
(64, 17, 1, '2016-04-28', 'Kitchen', 'modern-kitchen (1).jpg'),
(65, 17, 1, '2016-04-28', 'Kitchen', 'modern-kitchen (2).jpg'),
(66, 17, 1, '2016-04-28', 'Kitchen', 'modern-kitchen (3).jpg'),
(67, 17, 1, '2016-04-28', 'sdf', 'modern-kitchen (3).1461810144.jpg'),
(68, 17, 1, '2016-04-28', 'sdf', 'modern-kitchen (4).jpg'),
(69, 17, 1, '2016-04-28', 'sdf', 'modern-kitchen.jpg'),
(70, 17, 1, '2016-04-28', 'sdf', 'modern-kitchen-design1.jpg'),
(71, 17, 1, '2016-04-28', 'sdf', 'Modern-Kitchen-Wall-Murals-Designs.jpg'),
(72, 17, 1, '2016-04-28', 'sdf', 'modern-kitchen-with-extended-bar.jpg'),
(73, 17, 1, '2016-04-28', 'sdf', 'RYrlT.jpg'),
(74, 17, 1, '2016-04-28', 'sdf', 'yeni-ev-ve-dekorasyon.jpg'),
(75, 18, 1, '2016-04-28', 'Cleaning', '1b1c0be11a6f853a52ba79a0f7402f02.jpg'),
(76, 18, 1, '2016-04-28', 'Cleaning', '5-Minute-Cleaning-Tips.png'),
(77, 18, 1, '2016-04-28', 'Cleaning', '10-use-what-you-have-tips.jpg'),
(78, 18, 1, '2016-04-28', 'Cleaning', '24391a9b146a65090870fef1c207dcc0.jpg'),
(79, 18, 1, '2016-04-28', 'Cleaning', '1425421500-simple_tricks-3.png'),
(80, 18, 1, '2016-04-28', 'Cleaning', 'Best-Ever-Cleaning-Tips-from-Jamie-Novak.jpg'),
(81, 18, 1, '2016-04-28', 'Cleaning', 'cd25381f74ba7b39b3e820338d296f8d.jpg'),
(82, 18, 1, '2016-04-28', 'Cleaning', 'cleaning-essentials-big (1).jpg'),
(83, 18, 1, '2016-04-28', 'Cleaning', 'cleaning-essentials-big.jpg'),
(84, 18, 1, '2016-04-28', 'Cleaning', 'Country-Wide-Cleaining-Infographic.png'),
(85, 18, 1, '2016-04-28', 'Cleaning', 'cover.jpg'),
(86, 18, 1, '2016-04-28', 'Cleaning', 'green-home-cleaning.jpg'),
(87, 18, 1, '2016-04-28', 'Cleaning', 'GreenHouseEcoCleaning-DailyCleaningTips.jpg'),
(88, 18, 1, '2016-04-28', 'Cleaning', 'Infographic-tips2.jpg'),
(89, 18, 1, '2016-04-28', 'Cleaning', 'Lazy-Cleaning-Tips-and-Tricks-Lazy-Cleanings-All-Natural-Fridge-Deodorizer1-740x832.png'),
(90, 18, 1, '2016-04-28', 'Cleaning', 'Mop-Cleaning-Tips.jpg'),
(91, 18, 1, '2016-04-28', 'Cleaning', 'natural-cleaning-tips-for-the-bathroom.jpg'),
(92, 18, 1, '2016-04-28', 'Cleaning', 'SmellyRoomTip.jpg'),
(93, 18, 1, '2016-04-28', 'Cleaning', 'spring-cleaning-041.jpg'),
(94, 18, 1, '2016-04-28', 'Cleaning', 'SpringCleaningChecklist.png'),
(95, 18, 1, '2016-04-28', 'Cleaning', 'spring-cleaning-tip.jpg'),
(96, 18, 1, '2016-04-28', 'Cleaning', 'tip-feb-2015.png');

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
-- Структура таблицы `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `temp_name` varchar(50) NOT NULL,
  `sender_email` varchar(50) NOT NULL,
  `creator_name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `time` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `newsletter`
--

INSERT INTO `newsletter` (`id`, `temp_name`, `sender_email`, `creator_name`, `description`, `time`, `status`, `subject`) VALUES
(5, '', 'dhryshkova@gmail.com', '', '<p>sdfghm,</p>\r\n', '2016-04-27', 'active', 'group test'),
(6, '', 'dhryshkova@gmail.com', '', '<p>group test</p>\r\n', '2016-04-27', 'active', 'group test');

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
(1, 'Students', 2, 'posted', '<h3>hjk</h3>\r\n', 0, 'student', 'People', '3kRbHzu.jpg'),
(2, 'Test', 1, 'posted', '<h1>jkhfg</h1>\r\n', 5, 'test', 'Finances', '054c878f0aed51d9c46aac0fe4e1431c.jpg'),
(3, 'Test page', 2, 'posted', '<h1>NGKDGVk</h1>\r\n', 13, 'test', 'Finances', '00000203.jpg'),
(9, 'Student', 15, 'not posted', '<p><em>sedrftyo</em></p>\r\n', 0, 'friday', 'Recipes', '0'),
(4, 'Newsletter template Helen', 15, 'not posted', '<h1>FRIDAYYYYY!</h1>\r\n', 1, 'test', 'Recipes', '04172_HD.jpg'),
(7, 'Manitoba list', 15, 'not posted', '<p><s>vbnhjkl;</s></p>\r\n', 0, 'friday', 'House', '0'),
(6, 'Helen''s try 1', 15, 'not posted', '<p><em>cvhjkl;</em></p>\r\n', 0, 'friday', 'Finances', '00721_BG.jpg'),
(8, 'Student', 15, 'not posted', '<p><em>sedrtguj</em></p>\r\n', 0, 'friday', 'Recipes', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `promotions`
--

CREATE TABLE `promotions` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `pKey` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `dateValid` date NOT NULL,
  `datePublished` date NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `promotions`
--

INSERT INTO `promotions` (`id`, `title`, `pKey`, `image`, `dateValid`, `datePublished`, `userID`) VALUES
(4, 'April is Post-Secondary Student Month!', 'None', 'Students-Save-25-Promos-Page.jpg', '2016-04-30', '2016-04-28', 1),
(6, 'Buy a Ticket for Toronto Blue Jays vs. Texas Rangers to win #TBT T-Shirt Giveaway Night presented by', 'ILoveLifeAdvisor', 'tbt_tshirt_200x200.jpg', '2016-04-13', '2016-04-28', 1),
(7, 'Amazon.ca Deals of the Day: Up to 71% Off Barney Miller and Welcome Back, Kotter + Select Romance Ti', 'kindlier', 'Amazon-logo-700x433.jpg', '2016-04-15', '2016-04-28', 1);

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
-- Структура таблицы `signups`
--

CREATE TABLE `signups` (
  `id` int(10) NOT NULL,
  `signup_email_address` varchar(250) DEFAULT NULL,
  `signup_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `signups`
--

INSERT INTO `signups` (`id`, `signup_email_address`, `signup_date`) VALUES
(20, 'khdbb@gmail.com', '0000-00-00 00:00:00'),
(21, 'aysen.arm@gmail.comhbgdhfcjg', '2016-04-27 20:26:50'),
(22, 'dhryshedrfghkjnjova@gmail.mnb', '2016-04-27 20:29:47'),
(23, 'dhryshkjnjova@gmail.com', '2016-04-27 20:31:31'),
(24, 'jhgkhgjh@fdg.com', '2016-04-27 20:45:26'),
(25, 'jhgkhgjh@fdg.cjd', '2016-04-27 20:54:48'),
(26, 'aysen.arm@gmail.comhbddd', '2016-04-27 20:59:58'),
(27, 'aysen.armagan@gmail.com', '0000-00-00 00:00:00'),
(28, 'dhryshk5ova@gmail.com', '2016-04-28 01:17:36'),
(29, 'dhryshk8ova@gmail.com', '2016-04-28 01:24:33'),
(30, 'dhryshkjnjoggggva@gmail.com', '2016-04-28 04:20:04');

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
  `ID_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`ID_user`, `Name`, `Surname`, `Rights`, `Password`, `Username`, `Email`, `Newsletter`, `Phone`, `ID_image`) VALUES
(1, 'User 1', 'Surname 1', '1', '11111', 'Nick', 'nick@gmail.com', 'signed', '6479347479', '1'),
(2, 'Helen', 'Boitsova', '2', '12345', 'Lenchezzz', 'l@gmail.com', 'signed', '6755438765', '2'),
(15, 'Helena', 'Boitsova', '1', '$2y$10$4F2OJ6pKczhQlT1sOGoA2.EbkEtbCpV9GSpZ3xESt4.G4Xk7Vwcq.', 'helen', 'helen.boitsova@gmail.com', '', '6479367479', 'helen.jpg'),
(16, '', '', '2', '$2y$10$9O2SRik7Fsz4qTtQuKeN5eBL8ZL2U3ym/CHXVFKCMcQy/VgRX7nm2', 'antonio', 'antonio@gmail.com', '', '', 'home-user-icon.png'),
(18, '', '', '2', '$2y$10$e1hUHcT2e2/WA4gBob4wBeJ1Un/rTkIwBkRACdMcIQLD7OE1ijS96', 'alex', 'alex@gmail.com', '', '', 'home-user-icon.png');

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
-- Индексы таблицы `forum_categories`
--
ALTER TABLE `forum_categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Индексы таблицы `forum_comments`
--
ALTER TABLE `forum_comments`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `topicID` (`topicID`);

--
-- Индексы таблицы `forum_topics`
--
ALTER TABLE `forum_topics`
  ADD PRIMARY KEY (`topicID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Индексы таблицы `gallery_galleries`
--
ALTER TABLE `gallery_galleries`
  ADD PRIMARY KEY (`galleryID`);

--
-- Индексы таблицы `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`imageID`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`ID_image`);

--
-- Индексы таблицы `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`ID_page`);

--
-- Индексы таблицы `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

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
-- Индексы таблицы `signups`
--
ALTER TABLE `signups`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `questionID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `donations`
--
ALTER TABLE `donations`
  MODIFY `donationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `forum_categories`
--
ALTER TABLE `forum_categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT для таблицы `forum_comments`
--
ALTER TABLE `forum_comments`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `forum_topics`
--
ALTER TABLE `forum_topics`
  MODIFY `topicID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT для таблицы `gallery_galleries`
--
ALTER TABLE `gallery_galleries`
  MODIFY `galleryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT для таблицы `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `imageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `ID_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `page`
--
ALTER TABLE `page`
  MODIFY `ID_page` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `questionnaire_answers`
--
ALTER TABLE `questionnaire_answers`
  MODIFY `userID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
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
-- AUTO_INCREMENT для таблицы `signups`
--
ALTER TABLE `signups`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `ID_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `forum_comments`
--
ALTER TABLE `forum_comments`
  ADD CONSTRAINT `Comment_Topic` FOREIGN KEY (`topicID`) REFERENCES `forum_topics` (`topicID`);

--
-- Ограничения внешнего ключа таблицы `forum_topics`
--
ALTER TABLE `forum_topics`
  ADD CONSTRAINT `Topic_Category` FOREIGN KEY (`categoryID`) REFERENCES `forum_categories` (`categoryID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
