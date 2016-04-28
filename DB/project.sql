-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 28 2016 г., 12:53
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
(10, 'Best Green Juice Recipe', 15, 'posted', '<p><strong>Ingredients:</strong></p>\r\n\r\n<ul>\r\n	<li>1 Gala apple - peeled, cored, and chopped</li>\r\n	<li>4 leaves kale, chopped</li>\r\n	<li>1 cup fresh coconut meat</li>\r\n	<li>1/2 cucumber, chopped</li>\r\n	<li>1 stalk celery, chopped</li>\r\n	<li>1/2 cup spinach</li>\r\n	<li>1 cup coconut water</li>\r\n	<li>1/2 cup almond milk</li>\r\n	<li>1/2 cup water</li>\r\n	<li>1 lemon, juiced</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Place apple, kale, coconut meat, cucumber, celery, and spinach in a blender; top with coconut water, almond milk, water, and lemon juice. Blend on high for 30 seconds to 1 minute.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Cook&#39;s Note:</em></p>\r\n\r\n<p>Blend until smooth depending on your blender&#39;s ability. You may need to strain your mixture to achieve a drinkable consistency.</p>\r\n', 0, 'Bes, Green, Juice, Recipe, healthy, breakfast', 'Recipes', '1989340.jpg'),
(11, 'Slow Cooker Risotto', 15, 'posted', '<p><em>&quot;The classic Italian rice dish, now simplified in a slow cooker near you!&quot;</em></p>\r\n\r\n<p><strong>Ingredients:</strong></p>\r\n\r\n<ul>\r\n	<li>3 3/4 cups chicken broth</li>\r\n	<li>1 1/4 cups Arborio rice</li>\r\n	<li>1/4 cup olive oil</li>\r\n	<li>1/4 cup white wine</li>\r\n	<li>4 cloves garlic, minced</li>\r\n	<li>1 teaspoon dried onion flakes</li>\r\n	<li>1 teaspoon salt</li>\r\n	<li>1/4 teaspoon ground black pepper</li>\r\n	<li>2/3 cup shredded Parmesan cheese</li>\r\n</ul>\r\n\r\n<p>Mix chicken broth, rice, olive oil, wine, garlic, onion flakes, salt, and black pepper in a slow cooker. Cook on High for 2 to 2 1/2 hours. Stir in Parmesan cheese; cook uncovered until Parmesan cheese is melted, about 15 minutes.</p>\r\n', 0, 'Slow Cooker, Risotto, lunch', 'Recipes', '2367901.jpg'),
(12, 'Healthier Stuffed Peppers', 15, 'posted', '<p><em>&quot;This healthier stuffed peppers recipe uses an assortment of colored peppers, lean ground beef, brown rice, fresh onion and garlic, and natural tomato sauce. So colorful and so healthy!&quot;</em></p>\r\n\r\n<p><strong>Ingredients:</strong></p>\r\n\r\n<ul>\r\n	<li>1/2 cup brown rice</li>\r\n	<li>1 cup water</li>\r\n	<li>1 pound lean ground beef</li>\r\n	<li>2 cloves garlic, minced</li>\r\n	<li>1 onion, chopped</li>\r\n	<li>2 green bell peppers</li>\r\n	<li>2 red bell peppers</li>\r\n	<li>2 yellow bell peppers</li>\r\n	<li>1 (8 ounce) can natural tomato sauce</li>\r\n	<li>1 tablespoon Worcestershire sauce</li>\r\n	<li>salt and ground black pepper to taste</li>\r\n	<li>1 (8 ounce) can natural tomato sauce</li>\r\n	<li>1 teaspoon Italian seasoning</li>\r\n	<li>1/4 cup grated Parmesan cheese, optional</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Steps</strong>:</p>\r\n\r\n<ol>\r\n	<li>Preheat oven to 350 degrees F (175 degrees C).</li>\r\n	<li>Bring brown rice and water to a boil in a saucepan. Reduce heat to medium-low, cover, and simmer until rice is tender and liquid has been absorbed, 45 to 50 minutes.</li>\r\n	<li>Cook and stir beef, garlic, and onion in a skillet over medium heat until meat is evenly browned and onion is softened, about 5 minutes.</li>\r\n	<li>Remove and discard the tops, seeds, and membranes of the green, red, and yellow bell peppers. Arrange peppers in a baking dish with the hollowed sides facing upward. Slice the bottoms off the peppers if necessary so that they stand upright.</li>\r\n	<li>Mix the browned beef, cooked rice, 1 can tomato sauce, Worcestershire sauce, salt, and pepper in a bowl. Spoon an equal amount of the mixture into each hollowed pepper. Mix the remaining tomato sauce and Italian seasoning in a bowl, and pour over the stuffed peppers.</li>\r\n	<li>Bake in the preheated oven, basting with sauce every 15 minutes, until the peppers are tender, about 1 hour. Sprinkle the peppers with grated Parmesan cheese after baking.</li>\r\n</ol>\r\n', 0, 'Healthy, Stuffed Peppers, dinner', 'Recipes', '3124339.jpg'),
(13, 'Key Lime Pie VII', 15, 'posted', '<p><em>&quot;This recipe uses condensed milk and sour cream. Fabulously easy. . . a summertime favorite! If you have time, a homemade graham cracker crust is better! Garnish with whipped cream and thin slices of lime if you like.&quot;</em></p>\r\n\r\n<p><strong>Ingredients:</strong></p>\r\n\r\n<ul>\r\n	<li>1 (9 inch) prepared graham cracker crust</li>\r\n	<li>3 cups sweetened condensed milk</li>\r\n	<li>1/2 cup sour cream</li>\r\n	<li>3/4 cup key lime juice</li>\r\n	<li>1 tablespoon grated lime zest</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>Preheat oven to 350 degrees F (175 degrees C).</li>\r\n	<li>In a medium bowl, combine condensed milk, sour cream, lime juice, and lime rind. Mix well and pour into graham cracker crust.</li>\r\n	<li>Bake in preheated oven for 5 to 8 minutes, until tiny pinhole bubbles burst on the surface of pie. DO NOT BROWN! Chill pie thoroughly before serving. Garnish with lime slices and whipped cream if desired.</li>\r\n</ol>\r\n', 0, 'Lime Pie, dessert, snack', 'Recipes', '231388.jpg'),
(14, 'Spinach Enchiladas', 15, 'posted', '<p><em>&quot;If you like spinach and Mexican food, you&#39;ll love these easy vegetarian enchiladas made with ricotta cheese and spinach.&quot;</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Ingredients</strong>:</p>\r\n\r\n<ul>\r\n	<li>1 tablespoon butter</li>\r\n	<li>1/2 cup sliced green onions</li>\r\n	<li>2 cloves garlic, minced</li>\r\n	<li>1 (10 ounce) package frozen chopped spinach , thawed, drained and squeezed dry</li>\r\n	<li>1 cup ricotta cheese</li>\r\n	<li>1/2 cup sour cream</li>\r\n	<li>2 cups shredded Monterey Jack cheese</li>\r\n	<li>10 (6 inch) corn tortillas</li>\r\n	<li>1 (19 ounce) can enchilada sauce</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Preheat the oven to 375 degrees F (190 degrees C).</li>\r\n	<li>Melt butter in a saucepan over medium heat. Add garlic and onion; cook for a few minutes until fragrant, but not brown. Stir in spinach, and cook for about 5 more minutes. Remove from the heat, and mix in ricotta cheese, sour cream, and 1 cup of Monterey Jack cheese.</li>\r\n	<li>In a skillet over medium heat, warm tortillas one at a time until flexible, about 15 seconds. Spoon about 1/4 cup of the spinach mixture onto the center of each tortilla. Roll up, and place seam side down in a 9x13 inch baking dish. Pour enchilada sauce over the top, and sprinkle with the remaining cup of Monterey Jack.</li>\r\n	<li>Bake for 15 to 20 minutes in the preheated oven, until sauce is bubbling and cheese is lightly browned at the edges.</li>\r\n</ol>\r\n', 0, 'Spinach, Enchiladas, Spinach Enchiladas, vegetarian', 'Recipes', '454897.jpg'),
(15, 'How to Become a Vegetarian, the Easy Way', 15, 'posted', '<p>While being a vegetarian isn&rsquo;t for everyone (and neither is Pamela Anderson), I talk to lots of people every day who tell me they&rsquo;d like to become vegetarian, but it seems like it would be too hard, and they don&rsquo;t have the willpower.</p>\r\n\r\n<p><strong>But becoming a vegetarian, for me and for many others, is the easiest thing in the world.</strong></p>\r\n\r\n<p>If you&rsquo;re not interested in becoming vegetarian or vegan, please skip this post (and don&rsquo;t flame me in the comments). But I&rsquo;ve had numerous people, just in the last week or so, ask me to post about becoming a vegetarian, as I seem to have become a poster boy for vegetarianism (move over, Pamela Anderson!).</p>\r\n\r\n<p>So in this post we&rsquo;ll look at some suggestions and tips for becoming a vegetarian without too much difficulty, and some reasons you might consider it.</p>\r\n\r\n<p><strong>Why Become Vegetarian?</strong><br />\r\nAgain, let me state that vegetarianism isn&rsquo;t for everyone. If you are fanatically devoted to meat (and I was at one time, so I understand), you might not be interested. If you already eat healthy, or you&rsquo;re not interested in your health, you might not be interested.</p>\r\n\r\n<p>But there are some reasons, for the rest of us, to consider it (and these are just a few &mdash; see these&nbsp;<a href="http://www.britishmeat.com/49.htm">49 reasons</a>&nbsp;or these&nbsp;<a href="http://www.giveusahome.co.uk/articles/vegetarianism.htm">21 reasons</a>&nbsp;for more):</p>\r\n\r\n<ol>\r\n	<li><strong>Cut the fat</strong>. While meat provides a lot of protein, it also provides a ton of fat &mdash; especially saturated fat. Which means that by cutting out meat, you&rsquo;ll be cutting out a lot of bad fat, and replacing it with things that are probably not only lower in fat, but that contain some good fats. This greatly reduces your risk of heart disease, and in fact numerous studies have shown that vegetarians tend to have a lower risk of heart disease, as well as hypertension, diabetes, cancer and other diseases. Read more&nbsp;<a href="http://goveg.com/healthConcerns.asp">here</a>.</li>\r\n	<li><strong>Less food poisoning</strong>. Food poisoning gets millions of people each year &mdash; and many of them from meat, which is a good breeding ground for harmful bacteria, especially if not stored, prepared or cooked exactly right. Cut out meat and you lower your risk of food poisoning (especially if you also cut out eggs and dairy, but that&rsquo;s optional).</li>\r\n	<li><strong>Reduce the suffering</strong>. You probably don&rsquo;t want to hear about the horrific treatment of animals that are raised for food, even before they are slaughtered for our benefit. But suffice it to say, there are great amounts of suffering involved, and by cutting out meat, you are reducing your involvement in that. Read more&nbsp;<a href="http://goveg.com/factoryFarming.asp">here</a>.</li>\r\n	<li><strong>Help the environment</strong>. There are actually numerous ways that the meat industry harms the environment, from a waste of our resources (animals raised for food eat enough grain to feed the world), to a waste of fuel, to the pollution caused by their waste matter, and much more. Read more about that&nbsp;<a href="http://goveg.com/environment.asp">here</a>.</li>\r\n	<li><strong>Help your weight loss</strong>. It&rsquo;s possible to be vegetarian and eat very unhealthy foods, including Coke and fries and fried stuff and pizza and chips. But it&rsquo;s much more difficult. Studies repeatedly show that vegetarians are slimmer and are less likely to be obese than meat eaters. If you&rsquo;re trying to lose weight, being a vegetarian can be a good part of your program.</li>\r\n	<li><strong>Get more nutrition</strong>. In general (though not necessarily), vegetarians replace meat with more nutritious foods, such as fruits, vegetables, beans, whole grains, and so on. If you do that, you will be getting more of the nutrients your body needs, giving you better health, less illness, and more energy.</li>\r\n</ol>\r\n\r\n<p><strong>20 Tips for Becoming a Vegetarian</strong><br />\r\nSo, if you&rsquo;d like to become a vegetarian, without too much trouble, here are my suggestions:</p>\r\n\r\n<ol>\r\n	<li><strong>Have good reasons</strong>. If you just want to become vegetarian for kicks, you probably won&rsquo;t stick with it for long &mdash; not because it&rsquo;s hard, but because any lifestyle change or habit change requires a little bit of motivation. You need to first think about why you want to become vegetarian, and really believe in it. The rest is easy.</li>\r\n	<li><strong>Read up</strong>. Before starting anything new, I tend to read as much as possible about whatever it is that I&rsquo;ll be doing. I suggest you do so with vegetarianism. Check out a couple of good books from the library (or better yet, borrow from vegetarian friends). And there are tons and tons of good sites on the Internet. One of my favorites is&nbsp;<a href="http://www.goveg.com/index.aspx">GoVeg.com</a>.</li>\r\n	<li><strong>Find good recipes</strong>. You don&rsquo;t need to go out and buy a bunch of new cookbooks, although that&rsquo;s certainly an option. But again, there are many great recipes online. Try GoVeg.com &hellip; another favorite of mine is<a href="http://www.theppk.com/">Post Punk Kitchen</a>&nbsp;(also see their&nbsp;<a href="http://www.postpunkkitchen.com/forum/index.php">forums</a>). In fact, it can all be a little overwhelming &hellip; but don&rsquo;t worry, you don&rsquo;t need to decide on anything. Just look through the recipes, take note of a few that look really good, and decide to try a few of them. You have the rest of your life to test out other recipes!</li>\r\n	<li><strong>Try one recipe a week</strong>. My suggestion is just to try one new vegetarian recipe a week. If you like it, add it to your collection of staple recipes that you eat on a regular basis. If the recipe isn&rsquo;t that great, try another next week. Soon, you&rsquo;ll have a good list of 5-10 great recipes that you love to cook and eat. And really, whether you&rsquo;re vegetarian or meat eater, that&rsquo;s probably all you really eat on a regular basis anyway (for dinner, at least). Most people only have 7-10 recipes that they cook regularly. Once you have that many vegetarian recipes, you are good to go.</li>\r\n	<li><strong>Substitutions</strong>. Also try your regular recipes that you love, but instead of using meat, use a meatless substitute. So if you love to eat spaghetti or chili, for example, substitute a ground-beef alternative from Bocca or Morning Star and just cook it the way you normally would. There are alternatives for just about any kind of meat, and some of them are quite good. You can go on eating what you normally eat, but meatless.</li>\r\n	<li><strong>Start with red meat</strong>. I suggest a gradual transition into vegetarianism &hellip; although you can do it all at once, I&rsquo;ve found that for many people, a gradual transition works better. There&rsquo;s no need to give up all meat at once. Try a few new recipes, maybe eat one vegetarian meal for the first week, two for the second, and so on. If you do this, start with red meat, as it is typically the least healthy.</li>\r\n	<li><strong>Then the other meats</strong>. After a couple of weeks of going without red meat, try cutting out pork for a couple of weeks. Then cut out chicken, the seafood. With this two-week approach (and you can even make it 3 weeks or a month for each stage if you want to go more slowly), you&rsquo;ll hardly notice the difference. I&rsquo;ve found that I don&rsquo;t crave meats anymore, although I did for about a week.</li>\r\n	<li><strong>Consider dairy &amp; eggs</strong>. Vegetarians vary widely on this, so there&rsquo;s no mandate to give up dairy or eggs if you&rsquo;re giving up meat. Do what feels right for you. But if you go meatless for awhile, and want to try to go a little further (in terms of health, the environment, and helping animal suffering), consider these foods. For one thing, they are often high in saturated fat, especially compared to soy alternatives. It was easy for me to give up eggs, as I&rsquo;ve never been a huge fan, but transitioning to soy milk took a few days to get used to &hellip; although I can&rsquo;t stand the taste of milk now. :)</li>\r\n	<li><strong>Think about your staples</strong>. A useful exercise is to make a list of foods you regularly eat, for breakfast, lunch, dinner, desserts and snacks. Not meals, but ingredients. And then think about vegetarian alternatives, and make a new list. For example, instead of eating chicken in a stir-fry dish, you might try tofu. With a new list of staples, you should have no trouble stocking your fridge and pantry.</li>\r\n	<li><strong>All in one go</strong>. Some people prefer to give up meat all at once. While this takes a little more determination than the gradual solution I advocate, it&rsquo;s not that hard, really. Just prepare yourself by taking some of the steps above (finding recipes, substitutes, a new list of staples, and reading as much as possible), and then give it a shot. It should only take a few days to get used to it, and then you&rsquo;ll have very little trouble after that. The only issues you&rsquo;ll have to work out, once you&rsquo;re used to going without meat, are things like eating out, eating at others&rsquo; houses, and other similar issues. Read on for more on these.</li>\r\n	<li><strong>Adequate protein</strong>. One myth about vegetarianism is that you don&rsquo;t get enough protein. Actually, meat eaters usually take in way more protein than they need. Protein requirements for the average adult are lower than people think. If you eat a varied diet (not just junk food, for example) that includes vegetables, grains, beans, nuts, soy protein and the like, you will be fine. It would hard to create an eating plan where you&rsquo;re getting inadequate protein (the junk food example would be one). Another myth is that you need to eat different types of protein within a single meal (or even a single day) to get complete protein from plants &hellip; actually, as long as you eat varied proteins (such as those listed above) over a few days, you&rsquo;ll be fine. And soy protein is a complete protein, just like meat.</li>\r\n	<li><strong>Junk food</strong>. Again, you can be a vegetarian and be very unhealthy, if you eat junk food. Being a vegetarian is not a license to eat junk food (although you can probably indulge yourself a little more often now that you&rsquo;re not eating meat). Try to stick with fruits and veggies, whole grains, beans, nuts, soy protein, low-fat dairy and other nutritious foods for the most part.</li>\r\n	<li><strong>Ethnic food</strong>. One of the great things about becoming a vegetarian is that it often spurs people to try new and interesting ethnic foods (or reminds them of foods they love but don&rsquo;t eat much). Great vegetarian dishes can be found all over the world, from Italian pasta to many Indian dishes to spicy Thai food to Chinese, Ethiopian, Moroccan, Mexican, South American and more. It can be interesting to do a series of theme weeks, trying vegetarian dishes from a certain country for one week, and then moving around the world and sampling other great ethnic foods.</li>\r\n	<li><strong>Tell friends &amp; family</strong>. If you&rsquo;re really going to become a vegetarian, you&rsquo;ll have to talk to the people you know and love about it. You&rsquo;ll still be dining with them, at restaurants, at their homes, at social gatherings, at work, and so it&rsquo;ll be better for everyone involved if they know what you&rsquo;re doing (they might prepare a vegetarian dish for you, or you might bring one for them to try), and if they know the reasons why. Some people might have a hard time with it. Just try to explain it to them, without getting defensive or argumentative, and ask them to be understanding (and maybe to give some of your food a try). Don&rsquo;t try to force vegetarianism on anyone, or sound preachy, but do give them more information if they&rsquo;re interested.</li>\r\n	<li><strong>Have fun</strong>. Most of all, don&rsquo;t make becoming a vegetarian be a restrictive, grueling ordeal. If you feel like you&rsquo;re depriving yourself, you won&rsquo;t last long. But if you feel like you&rsquo;re doing something good, and trying out some great-tasting food, you&rsquo;ll stick with it for much longer (for life, I hope). Have a great time along the way.</li>\r\n	<li><strong>Plan ahead</strong>. Often what gets in the way of new vegetarians is that they go somewhere, and don&rsquo;t think of what they might have to eat. Going to a party or a dinner can be much better if you prepare a great dish and bring it along (let the host know about it first). An errands trip doesn&rsquo;t have to result in you going to McDonalds, starving, if you pack a lunch or bring some snacks.</li>\r\n	<li><strong>Cook ahead</strong>. Another problem is when we don&rsquo;t have any vegetarian food ready to eat, and so we resort to whatever is easiest (if we don&rsquo;t feel like eating or are too hungry to wait). Instead, you could cook a big pot of vegetarian chili or soup or something, and have it in the fridge for when you&rsquo;re hungry and don&rsquo;t have time to cook.</li>\r\n	<li><strong>Vegetarian snacks</strong>. I love to eat fruits and cut-up veggies, but there are lots of other great snacks you can eat. Roasted (or raw) almonds, hummus and pitas or veggies, blue corn chips and salsa, low-fat granola, berries with soy yogurt, whole-grain cereals, Kashi crackers &hellip; dozens and dozens of snacks, actually, if you take a look around. Have plenty on hand, at home, at work, and on the road.</li>\r\n	<li><strong>Vegetarian restaurants</strong>. There&rsquo;s only one vegetarian restaurant on Guam, and unfortunately it&rsquo;s closed on nights and weekends (it&rsquo;s a Seventh-Day Adventist joint, open for lunch on weekdays, and it&rsquo;s great). But you might live in an area with dozens of great vegetarian restaurants. Give them a try! You might discover some wonderful food, and thank your lucky stars you decided to give vegetarianism a try. Otherwise, most restaurants will have some vegetarian options, or can cook you a vegetarian dish on request.</li>\r\n	<li><strong>Vegetarian convenience foods</strong>. In your supermarket&rsquo;s frozen section, you&rsquo;ll probably find a lot of vegetarian foods that can be microwaved. You might give some of these a try (I love the Amy&rsquo;s brand). Beware that, like most convenience foods, these are more expensive than home-cooked stuff, and most likely not as healthy. But you can find some fairly healthy foods there too. At any rate, it&rsquo;s always good to have a couple of convenience foods in the freezer, just in case.</li>\r\n</ol>\r\n', 0, '', 'Health', 'dxw7h4urx7c6d6p2gldf.jpg'),
(16, 'Yoga at Home', 15, 'posted', '<h2><strong>9 Tips to Practice Yoga at Home</strong></h2>\r\n\r\n<p>Daily yoga practice at home can help you stay healthy, more productive, calm and happy all day. Besides, these benefits are not just for you to enjoy. Doing these practices at home will not only keep you happy but your family members too will be able to feel the positive energy and happiness around. What&rsquo;s more, you get a chance to practice them right in the comfort of your home, any time you wish.</p>\r\n\r\n<p>Once you have learned yoga techniques properly from a Art of Living Yoga teacher, and are comfortable, you can start practicing them on your own. Here are a few tips to keep in mind as you prepare yourself for a fun yoga practice at home.</p>\r\n\r\n<ul>\r\n	<li><strong>1: Choose a convenient time</strong></li>\r\n</ul>\r\n\r\n<p><a href="http://www.artofliving.org/in-en/yoga/yoga-for-beginners/start-day-yoga-sundae">Practicing yoga in the morning</a>&nbsp;is generally considered to be the best as it keeps energy levels high during the day. Yet, if it doesn&rsquo;t happen, don&rsquo;t let it be an excuse to skip your practice. You may choose a time slot which seems most convenient. It could be late mornings, before lunch, or evenings. Yoga at these times can also be a good way to refresh the mind and release stress collected during the day.</p>\r\n\r\n<ul>\r\n	<li><strong>2: Choose a comfortable place</strong></li>\r\n</ul>\r\n\r\n<p>It would be best to have a small, private room in your house for daily yoga practice. Over time, your practices will create positive vibrations in the room, providing healing, strength and comfort to you and others at home. However, in case it is not possible, you may choose a quiet space anywhere at home, which is large enough to roll out your yoga mat and where you know you are not likely to be disturbed for a while.</p>\r\n\r\n<p>All you need to ensure is that your yoga space is clean, well-ventilated, and away from furniture or sharp objects (learn more about a yogis home).</p>\r\n\r\n<ul>\r\n	<li><strong>3: Practice on a relatively empty stomach</strong></li>\r\n</ul>\r\n\r\n<p>Yoga postures are always best practiced on a light or empty stomach. You can practice yoga poses and meditate about 2-3 hours after your meal.</p>\r\n\r\n<ul>\r\n	<li><strong>4: Keep your</strong>&nbsp;<a href="http://www.artofliving.org/in-en/yoga-for-beginners/yoga-wear-secrets">yoga wear</a><strong>&nbsp;simple</strong></li>\r\n</ul>\r\n\r\n<p>Go for loose, comfortable clothing &ndash; you wouldn&rsquo;t want tight body-hugging outfits coming in the way of doing some wide stretches! Also, keep aside any excessive jewelry that you are wearing and avoid heavy makeup.</p>\r\n\r\n<ul>\r\n	<li><strong>5: Warm up before doing intense yoga postures</strong></li>\r\n</ul>\r\n\r\n<p>This is an absolute must, else you may be at risk of straining your muscles. Start by warming up your body and do a few body stretches to bring flexibility, before moving on to more intense&nbsp;<a href="http://www.artofliving.org/in-en/yoga/yoga-poses/yoga-poses-categories">yoga postures</a>.</p>\r\n\r\n<ul>\r\n	<li><strong>6: It is your own body; be gentle on it</strong></li>\r\n</ul>\r\n\r\n<p>Respect your body and do yoga poses gently with a smile. Doing them increasingly fast or going beyond what your body can take will not bring faster results. It will only make the practice more difficult and painful.</p>\r\n\r\n<ul>\r\n	<li><strong>7: Be consistent</strong></li>\r\n</ul>\r\n\r\n<p>It is very important to be regular with your yoga practice &ndash; make it a part of your daily schedule (as mentioned above, find a time slot where you can comfortably fit yoga in) and then it would be easier to make it a habit. Krishan Verma, senior Art of Living Yoga teacher says, &quot;Twenty minutes of daily yoga practice is more likely to show positive results sooner than two hours of occasional practice.&quot;</p>\r\n\r\n<ul>\r\n	<li><strong>8: Make yoga time as &lsquo;family fun time&rsquo;</strong></li>\r\n</ul>\r\n\r\n<p>When you practice alone, it might get boring after a while or you may simply become lazy. Try doing it with family or friends and see the difference! Practicing yoga at home can be a great way for a family get-together. Learn more about how you can enrich your&nbsp;<a href="http://www.artofliving.org/in-en/yoga/yoga-and-lifestyle/enrich-family-time-with-fun-yoga">family time with yoga</a>.</p>\r\n\r\n<ul>\r\n	<li><strong>9: Include a variety of yoga techniques</strong></li>\r\n</ul>\r\n\r\n<p>Practice a variety of yoga poses and breathing techniques, or if you are crunched for time, you may fix a set of practices to be done daily and then treat your body with the complete package on a Sunday! Also, be sure to end your yoga pose practice with&nbsp;<a href="http://www.artofliving.org/in-en/yoga/health-and-wellness/yoga-nidra-benefits">Yoga Nidra</a>.</p>\r\n\r\n<p>Remember that yoga practice does not only include yoga postures. Our home yoga sessions should also make room for other techniques such as pranayama (breathing exercises), meditation, and Sudarshan Kriya (if you have done the&nbsp;<a href="http://www.artofliving.org/in-en/art-living-part-i-course-art-breathing">Happiness Program</a>).</p>\r\n', 0, 'yoga, healthy, health', 'Health', 'beach-yoga.jpg'),
(17, 'So you want to stop smoking?', 15, 'posted', '<h1>TIPS TO HELP YOU QUIT</h1>\r\n\r\n<p>If you&rsquo;re going to&nbsp;<strong>quit smoking</strong>, you&rsquo;ll need to&nbsp;<strong>deprogram yourself</strong>.</p>\r\n\r\n<p>As you smoke, not only have you become addicted &ndash; in other words, dependent physically, psychologically and in terms of your behaviour &ndash; but you&rsquo;ve also developed thoughts and habits that have strengthened the ties cigarettes have over your life.&nbsp; These ties are so strong that they have been described as a&nbsp;<strong>smoker&rsquo;s reflexes</strong>.&nbsp; You can&rsquo;t change thoughts, habits and reflexes like these simply by swallowing a pill or making a New Year&rsquo;s resolution.</p>\r\n\r\n<p>If you want to&nbsp;<strong>free yourself from cigarettes</strong>, you will have to deprogram yourself.&nbsp; To be successfully, you will need to examine yourself objectively and then identify and apply<strong>practices</strong>&nbsp;and&nbsp;<strong>tips</strong>&nbsp;that correspond to your personality and will help you through risky situations.</p>\r\n\r\n<p>The strategy behind the tips that will help you quit cigarettes can be summarized in three words :</p>\r\n\r\n<ul>\r\n	<li>Delay</li>\r\n	<li>Avoid</li>\r\n	<li>Replace</li>\r\n</ul>\r\n\r\n<h2>Tips to help you quit: Delay smoking your cigarette ...</h2>\r\n\r\n<ul>\r\n	<li>An urge to smoke lasts less than five minutes.&nbsp; Every time you feel an urge, find something else to do (preferably something you enjoy), and your urges will come less frequently.&nbsp; This is how you will succeed in deprogramming yourself.</li>\r\n</ul>\r\n\r\n<h2>Tips to help you quit: Avoid cigarettes ...</h2>\r\n\r\n<p>The idea is to change how you think and what you do, to reduce or eliminate your exposure to the things, people and situations that make you want to smoke, or that reduce your chances of success.</p>\r\n\r\n<ul>\r\n	<li>Eliminate a cigarette break by doing something else that you enjoy.</li>\r\n	<li>If people offer you cigarettes, say no.</li>\r\n	<li>Challenge some of your preconceived ideas or clich&eacute;s concerning your relationship with cigarettes (e.g. &ldquo;cigarettes are my best friends&rdquo;, &ldquo;it&rsquo;ll never be as enjoyable with a beer, a coffee, etc.&rdquo;, and so on).</li>\r\n	<li>Do things with non-smokers.</li>\r\n	<li>Smoke your first cigarette of the day later than usual.</li>\r\n	<li>Smoke a few less cigarettes each day.</li>\r\n	<li>Keep your pack of cigarettes, matches or lighter and ashtray out of reach.</li>\r\n	<li>Eliminate the smell of cigarette smoke from your clothes, your home, etc.</li>\r\n	<li>Reduce or avoid coffee, tea, cola and alcohol for as long as it takes.</li>\r\n	<li>Avoid negative thoughts; concentrate instead on your motivators and goals.</li>\r\n	<li>If you&rsquo;re a woman, schedule your quit date after your monthly period, when the withdrawal symptoms will be less severe.</li>\r\n</ul>\r\n\r\n<h2>Tips to help you quit: Replace cigarettes with something else...</h2>\r\n\r\n<p>You&rsquo;ve trained your brain and body to depend on cigarettes in order to feel good.&nbsp; It&rsquo;s therefore important to do things you enjoy, so as to break your cigarette-related habits.&nbsp; Obviously, as far as possible you&rsquo;ll need to avoid the activities and even the people you associate in your mind with cigarettes, until you&rsquo;ve been deprogrammed.</p>\r\n\r\n<ul>\r\n	<li><strong>Move!</strong>&nbsp; Replace cigarettes by sweat-inducing physical activities that you enjoy or would like to try (e.g. fast walking, fitness training, in-line skating, hockey, swimming, basketball, badminton, soccer, cycling, volleyball, climbing, dancing, boxing, karate, jogging, etc.).</li>\r\n	<li><strong>Have fun!</strong>&nbsp; Look around for other activities that you enjoy and that will allow you to laugh &ndash; for example, improvisation, acting, movies, reading, singing, music, etc.</li>\r\n	<li><strong>Keep your hands busy!</strong>&nbsp; Keep your hands busy with something else &ndash; for example, an elastic band, a paper clip or a pencil.&nbsp; If you&rsquo;re used to smoking while talking on the telephone, hold the receiver in the hand you would normally use to smoke.&nbsp; Get involved in DIY, draw something, take up photography, play a musical instrument, work on a computer, pet your dog, play with an anti-stress ball, etc.</li>\r\n	<li><strong>Keep your mouth busy!</strong>&nbsp; If you feel you need something in your mouth, chew gum, a cinnamon stick or a straw, brush your teeth several times a day (toothpaste makes cigarettes taste bad), eat carrot or celery sticks or other fresh foods, drink a lot of water, etc.</li>\r\n	<li><strong>Tip kit!</strong>&nbsp; Make a NS (non-smoking) kit from a selection of the items listed above, and keep it close by at all times.</li>\r\n	<li><strong>Positive thinking!</strong>&nbsp; If you&rsquo;re capable of finding a pretext to smoke, you should also be capable of finding an excuse not to smoke.&nbsp; It&rsquo;s a matter of positive thinking.</li>\r\n	<li><strong>Support person!&nbsp;</strong>&nbsp;Have someone you can talk to, both when things are going well and when they&rsquo;re not.</li>\r\n	<li><strong>Relax!</strong>&nbsp; Sleep a lot, stretch out, breathe deeply or yawn, decorate your environment and learn some relaxation techniques.</li>\r\n	<li><strong>Reward yourself!</strong>&nbsp; Reward yourself regularly with the money you save by not buying cigarettes.&nbsp; Suggestion: open a separate bank account for a vacation, a boat, a motorcycle or a dream you&rsquo;d like to turn into reality</li>\r\n</ul>\r\n', 0, 'stop smoking, tips, health', 'Health', 'getty_rm_photo_of_woman_cutting_cigarettes_with_scissors.jpg'),
(18, 'The Best Way to Clean Your Toaster Oven', 15, 'posted', '<p>From toasting bread to grilling pizza, or even&nbsp;<a href="http://www.goodhousekeeping.com/institute/a24390/things-you-can-do-in-a-toaster-oven/" target="_blank">roasting chicken</a>, the toaster oven is quite the diminutive workhorse in any kitchen. Here&#39;s how to get it gleaming again after a few rounds battling grease and crumbs (which, if left unattended for too long, are a&nbsp;<a href="http://www.goodhousekeeping.com/institute/a24780/toaster-oven-mistakes/" target="_blank">fire hazard</a>&nbsp;&mdash; eep!).</p>\r\n\r\n<h3><strong>1. Bust crumbs.</strong></h3>\r\n\r\n<p>Start by unplugging the toaster oven, and taking on the easy-to-dump debris first. Simply shake any crumbs or other food particles into the trash.</p>\r\n\r\n<h3><strong>2. Tackle the removable parts.</strong></h3>\r\n\r\n<p>Next, remove the rack and pans, and spray them and the crumb tray with all-purpose cleaner. &quot;Use a non-abrasive scrubbing sponge to get off gunk,&quot;&nbsp;<a href="http://www.goodhousekeeping.com/home/cleaning/tips/a18917/cleaning-kitchen-appliances/" target="_blank">says Carolyn Forte</a>, director of the Cleaning Lab at the&nbsp;<a href="http://www.goodhousekeeping.com/institute/about-the-institute/a16265/about-good-housekeeping-research-institute/" target="_blank">Good Housekeeping Institute</a>. &quot;Rinse, and let air dry.&quot;</p>\r\n\r\n<h3><strong>3. Wipe away oven grease.</strong></h3>\r\n\r\n<p>To tackle the oven itself, spray a scrubber sponge (or a regular sponge, if the interior is non-stick) with more cleaner. &quot;Never spray appliances directly,&quot; says Forte. &quot;And steer clear of the heating elements inside.&quot; Wipe the exterior as well, including the glass door.&nbsp;<em>Good Housekeeping</em>&nbsp;home care expert, Heloise, likes to use a&nbsp;<a href="http://www.goodhousekeeping.com/home/cleaning/tips/a12452/heloise-spring-cleaning-toaster-oven/" target="_blank">vinegar-and-water solution</a>&nbsp;on the glass.</p>\r\n\r\n<h3><strong>4. Allow to dry completely.</strong></h3>\r\n\r\n<p>&quot;Be sure the oven&#39;s dry (wait about five minutes), before plugging it back in,&quot; says Forte.</p>\r\n', 0, 'clean, toaster', 'House', 'landscape-1429562853-clean-toaster-oven.jpg');
INSERT INTO `page` (`ID_page`, `Title`, `ID_user`, `Status`, `Content`, `Rank`, `Tags`, `Menu`, `ID_image`) VALUES
(19, 'How to Save Money: Strategies for Saving in Canada', 15, 'posted', '<h2>How to Save: Strategies for Saving Money Each Month</h2>\r\n\r\n<h3>The Traditional Methods</h3>\r\n\r\n<p>There are many tried and true ways of&nbsp;<a href="http://globalnews.ca/news/1463277/how-to-pay-off-your-debt-and-save-money/" target="_blank">how to save money each month</a>.</p>\r\n\r\n<ul>\r\n	<li>Every day put all of your loose change into a jar. Every once in a while deposit the money in your savings account. In time the money will grow into a little nest egg.</li>\r\n	<li>Try to set aside a certain amount of money each month or each paycheque for your savings. People have been doing this for years, but it takes discipline.</li>\r\n</ul>\r\n\r\n<h3>A Newer Method: Pay Yourself First</h3>\r\n\r\n<p>How It Works<br />\r\nOne of the best saving strategies is to pay yourself first. What this means is that you designate a certain amount of your paycheque as your pay (how novel) and you pay that money to yourself before you pay your bills or anyone else. This amount can be $25, $100 or maybe 10% of your paycheque. It can be any amount that you decide. The important part is that you pay yourself first rather than last. Most people pay all of the bills first and then save anything that might be left over. For most people, that method of saving doesn&rsquo;t really work because nothing is left over to save.</p>\r\n\r\n<p>If you pay yourself first, then money will get saved because paying yourself is now your first priority. The nice thing about this method is if your budget is a little tight, it forces you to make adjustments elsewhere and your savings continue to grow.</p>\r\n\r\n<p>Paying yourself first also makes sense. Why are you going to work everyday anyway? To earn money for someone else? No way. You go to work to earn money for you and your family. That&rsquo;s why you should pay yourself first&mdash;to make sure that your first priority is taken care of: you. It is not likely that anyone else is going to take care of you because they assume that you are taking care of yourself.</p>\r\n\r\n<p>Pay Yourself Automatically<br />\r\nWhen you pay yourself first, you should set up an automatic way of doing this so that you don&rsquo;t even have to think about it&mdash;it just happens. You can get your employer to deduct a certain amount and put it in your RRSP or you can set up automatic transfers with your bank (either online or at your local branch).</p>\r\n\r\n<p>Most people who use this method find that they very quickly get use to living on a little less and soon they don&rsquo;t miss the amount that they are paying themselves in their savings account. When you almost forget about automatic savings and let them grow, amazing things happen&mdash;automatically. Automatically saving $25 a week turns into $1,300 a year. Now if someone did this over a lifetime, they would get some fantastic results&mdash;automatically. If someone automatically saved $100 every paycheque (bi-weekly) from when they were 25 until they were 65, they would end up with almost $415,000 if they only received a 6% rate of interest. Of course someone could afford to save more once they got their house paid off. So their final amount could be much higher. Hopefully you can see how easy it can be to accomplish big things with just a simple automatic setup where you pay yourself first.</p>\r\n\r\n<p>How to Become a Millionaire&mdash;Automatically<br />\r\nAnother amazing thing about using automatic deductions or transfers to pay yourself first is that you can use it to become a millionaire&mdash;automatically. This may sound crazy, but it actually works. If someone automatically had $200 transferred from each of their bi-weekly paycheques into their investment account from when they were 25 until they were 65, they would end up with over $1,000,000 if they averaged a 7% rate of return on their investments. So a normal person can become a millionaire automatically without winning the lottery. This plan would require a little more sacrifice than most people are willing to make in their twenties, but it is entirely possible. Now you know how to become a millionaire&hellip;..if only you were 25 again.</p>\r\n\r\n<h3>The Smartest Method to Save Money: Have a Spending Plan</h3>\r\n\r\n<p>The very best method to saving money is to create a Spending Plan or a Budget (<a href="http://www.mymoneycoach.ca/my_budget.html">learn how to make a budget</a>). With a budget you figure out what your income is and what your expenses are. Once you know these two things, you can look for ways to reduce your expenses or increase your income to allocate an amount of money that you can afford to save. This is how the world&rsquo;s largest corporations do it and this is how most of the world&rsquo;s successful business people do it. This method takes a little bit of work at the beginning and a check-up every year or two, but it works.</p>\r\n\r\n<p>The secret to this method (if you want to call it that) is to identify what you are spending money on so that you can begin to plan your spending. Once you begin to plan your spending, you will gain control over it and you will be able to plan to spend money on your savings. In other words, you will plan to put money into your savings account. Many people don&rsquo;t like to plan their spending because it involves a little bit of work (once a year). No one is saying that success will come easily, but this little bit of work will pay off big time in many areas of your finances. We dare you to try it - what have you got to lose?</p>\r\n\r\n<p><a name="2"></a></p>\r\n\r\n<h2>Ways to Save Money - How to Do It</h2>\r\n\r\n<h3>Use One Savings Account</h3>\r\n\r\n<p>For some people, keeping things really simple works best. Ideally you should have . . .<img alt="How to save money every month, and ways to save that money for the future." src="http://www.mymoneycoach.ca/sites/default/files/how-to-save-money-every-month.jpg" /></p>\r\n\r\n<ol>\r\n	<li>An emergency savings account</li>\r\n	<li>At least one savings account for major purchases</li>\r\n	<li>A retirement savings account</li>\r\n</ol>\r\n\r\n<p>If this is too much for you, get started by simply putting your money into one savings account, and then grow your savings from there.</p>\r\n\r\n<p>You can put money aside on a regular basis for a down payment for a house, a car, or for your retirement. To get started, all of this money can go into one account, and it can double as your emergency fund as long as you don&rsquo;t have &ldquo;emergencies&rdquo; on a regular basis.</p>\r\n\r\n<h3>Use Many Savings Accounts</h3>\r\n\r\n<p>If you find a bank or credit union that offers a free savings account, you can open up several savings accounts.&nbsp; Then every time you get paid, you can put money into each of these accounts for every specific thing that you are saving for. This way you can keep your money safe from accidently being spent, and it will be there when you need it.</p>\r\n\r\n<p>These accounts don&rsquo;t have to be actual bank or credit union savings accounts, they can be high interest accounts, Tax Free Savings Accounts (TFSAs), RRSPs, term deposits, mutual funds, or other investments. Just make sure that you don&rsquo;t lock up money in a long-term investment that you might need in the short term (<a href="http://www.mymoneycoach.ca/why_save/time_horizon.html">learn more about the differences between saving and investing for the short-term versus long-term</a>).</p>\r\n\r\n<p><strong>Related:</strong>&nbsp;Where to find money to save every month.&nbsp;<a href="http://www.mymoneycoach.ca/saving-money/saving-tips/how-to-save-money#4">Here are 10 places to get it from</a></p>\r\n\r\n<p><a name="3"></a></p>\r\n\r\n<h2>Places to Save Your Money - Where You Can Save Your Money in Canada</h2>\r\n\r\n<h3>Under Your Mattress</h3>\r\n\r\n<p>We hope that you don&rsquo;t do this. Every thief knows that this is the first place to look. Ditto with a roommate. Then there was that guy who dug a hole in his back yard and put $10,000 in cash into a glass jar and buried it. Later when he dug it up, he discovered that the water in the soil surrounding the jar had frozen in the winter and cracked the jar. Water then filled the jar and turned the money into a soupy mess. Because most of the bills were unrecognizable, he was not able to cash most of them in. All he was left with was one broken jar of expensive soup.</p>\r\n\r\n<h3>In Your Safety Deposit Box</h3>\r\n\r\n<p>Lots of people do this&mdash;just ask your bank&rsquo;s tellers&mdash;they can smell it (old money stinks). Stashing cash in your safety deposit box is definitely safer than using a mattress or burying the money in the back yard, but not much smarter. Money in a safety deposit box does no one any good. It doesn&rsquo;t earn you any interest. The government insures the money you deposit into an account at a bank up to $100,000 (and there are some ways to get higher coverage than this), and if you can&rsquo;t trust the bank with your money, then how can you trust the bank with the stuff in your safety deposit box?</p>\r\n\r\n<h3>In Your Bank Account</h3>\r\n\r\n<p>A chequing account or a regular savings account is no place to save your money. Most of them pay hardly any interest. This is because the bank lends your money to other people when you aren&rsquo;t using it. Money in a regular bank account might get used often, or you might need to withdraw it quickly, so the bank can&rsquo;t lend that money out for very long because you might need it. The bank makes money when they can lend your money out for extended periods of time, and at higher interest rates, so then you earn more interest when they are able to do that. Look to earn more interest with High Interest Savings Accounts and Term Deposits or GICs.</p>\r\n\r\n<h3>High Interest Savings Accounts</h3>\r\n\r\n<p>These types of savings accounts are usually more restrictive than regular savings accounts, but they pay a lot more interest. Make sure that your bank or credit union is paying you a competitive rate (you can&rsquo;t negotiate but you can move) and then save away. These types of accounts are usually safe, convenient and their interest rates usually move up as bank interest rates move up.</p>\r\n\r\n<h3>Term Deposits or Guaranteed Income Certificates (GICs)</h3>\r\n\r\n<p>If you know that you are not going to need your savings for a year or more, consider putting your savings into a Term Deposits or GIC (they are pretty much the same thing). These are a great way to try to get more interest on your money than a High Interest Savings Account can offer. However, this is not always the case, but it pays to check. Most banks and credit unions will allow you to put your money into a Term Deposit or GIC with a thousand dollars or more.<a id="tfsa" name="tfsa"></a></p>\r\n\r\n<h3>Tax Free Savings Account (TFSA)</h3>\r\n\r\n<p>For most Canadians, these are the best way to save. A Tax Free Savings Account is your own little tax haven. A TFSA is an official setup that shelters your investment from taxes. A TFSA account allows you to put up to $5,500 per year into your tax shelter and not pay any tax on the interest that you earn or on the growth of your investment. Then when you take your money out of the TFSA, you don&rsquo;t pay any tax either. So now you don&rsquo;t have to sneak off to the Bahamas or the Cayman Islands to invest your money and protect yourself from taxes. The government has kindly brought the tax haven to you. Whether you are saving up for a car, a down payment for a house or your retirement, a TFSA is a smart way to save and invest.</p>\r\n\r\n<h3>Register Retirement Savings Plan (RRSP)</h3>\r\n\r\n<p>Before the Canadian government introduced the Tax Free Savings Account (TFSA), an RRSP used to be one of the best ways for many people to save. An RRSP is still a good way to save money, but it is now primarily meant to be a way to save for your retirement. You and your tax advisor (if you have one) will have to decide if an RRSP is right for you.</p>\r\n\r\n<p>An RRSP is basically just a setup that shelters your investment from tax until you withdraw your money from the RRSP tax shelter. With an RRSP setup, you can choose to invest in a vast array or normal investments: savings accounts, term deposits, mutual funds, stocks, bonds, and other investments.</p>\r\n\r\n<p>The Benefits of an RRSP</p>\r\n\r\n<ul>\r\n	<li>All contributions (within limits that most people never reach) can be used to reduce the amount of income tax that you pay. If you are paying a lot of income tax, contributing to an RRSP may be a good way of reducing what you are paying.</li>\r\n	<li>As your investment grows in your RRSP, you don&rsquo;t have to pay any tax until you take the money out of your RRSP. If you are saving for retirement and you know that your income will be lower than it is now, than contributing to an RRSP may be a good idea because when you take the money out when you are retired, your income will be lower, so the amount of tax that you pay on the money then will be less than what you would pay now.</li>\r\n	<li>RRSP savings can be withdrawn for a down payment on your first home. The catch is that you have to pay the money back into your RRSP within 15 years. If you don&rsquo;t do this, then the RRSP redemption becomes taxable and the government sends you a tax bill. Up to $20,000 can be withdrawn. The program that allows you to withdraw this money is called the Home Buyer&rsquo;s Plan (HBP).</li>\r\n	<li>Money can also be withdrawn from your RRSP for your education. Under the Lifelong Learning Plan (LLP) you can withdraw up to $20,000 for your education. This program gives you 10 years to pay the money back, but fortunately, you aren&rsquo;t required to begin paying it back until 5 years after you graduate.</li>\r\n	<li>If you ever have to&nbsp;<a href="http://www.nomoredebts.org/debt-help/bankruptcy-canada.html" target="_blank">declare bankruptcy</a>, the money in your RRSPs is protected. The only portion that&#39;s not protected is anything you contribute in the 12 months before filing for bankruptcy.</li>\r\n</ul>\r\n\r\n<p>The Disadvantages of an RRSP</p>\r\n\r\n<ul>\r\n	<li>All withdrawals from your RRSP plan are taxed as income.</li>\r\n	<li>10% to 30% of the money you withdraw from your RRSP is held back for taxes. The percentage that is held back depends on how much you are withdrawing. You can possibly get this money back when you do your taxes if you don&rsquo;t end up owing the government any money.</li>\r\n	<li>You must begin to withdraw money from your RRSP when you turn 69. The government has created a schedule that determines how much you must withdraw each year. Most people have been encouraged to use an RRSP to save for retirement. However, many retirees whose incomes have not declined in their retirement years have found that it was not in their best interest to invest in an RRSP. Once these people turn 69 and are forced to withdraw money from their RRSPs and pay tax on the money that they withdraw, they find that they are paying just as much tax&nbsp;&ndash; and in some cases more &ndash; as they would have to pay if they had invested outside of ', 0, 'money, save money', 'Finances', 'tips-for-how-to-save-money-canada-banner-image.jpg'),
(20, 'Your First Year of College: 25 Strategies and Tips to Help You Survive and Thrive Your Freshman Year and Beyond', 15, 'posted', '<h3>How to Survive &mdash; and Excel in &mdash; Your College Years</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Perhaps you were class president in high school. Or perhaps you were a member of the honor society. You could have graduated in the top percentile of your graduating class; perhaps you were even valedictorian. Maybe your were in the honors program or the International Baccalaureate program. Actually, it doesn&rsquo;t really matter what you did in high school as you make the transition to college. High school success (or lack of it) doesn&rsquo;t automatically apply to college.</p>\r\n\r\n<p>You start college with a clean academic slate, along with a lot of independence and a myriad of critical decisions as you begin the transition into adulthood. The decisions that you make and the actions you take during this first year of college will have a major impact on the rest of your college experience.</p>\r\n\r\n<p>According to American College Testing (ACT), one in every four college students leaves before completing their sophomore year &mdash; and nearly half of all freshmen will either drop out before obtaining a degree or complete their college education elsewhere.</p>\r\n\r\n<p>But wait! This article is not meant to scare you or take away any of the joy, excitement, and anticipation you feel about going to college. Quite the opposite. This article is all about the things you need to do to not only survive your first year of college, but to thrive in college. And many of the tools, skills, and habits you develop through this article can not only be used to help you succeed in college, but in your future career as well.</p>\r\n\r\n<p>The first few weeks on campus are extremely critical for all new students. It is during this time that you make critical decisions that will have an effect on the rest of your life. Some of these 25 tips are critical during your first weeks, while the others are meant for longer-term guidance and survival. Whatever you do, be sure to be yourself and try to enjoy your college experience as much as possible. Expect to feel some stress and homesickness, but don&rsquo;t let these issues wear you down.</p>\r\n\r\n<h3>25 Strategies and Tips to Help You Survive and Thrive Your Freshman Year</h3>\r\n\r\n<ol>\r\n	<li><strong>Go to all orientations.</strong>&nbsp;Do you really need to go on yet&nbsp;<em>another</em>&nbsp;campus tour? Yes. The faster you learn your way around campus &mdash; and around all the red tape &mdash; the more at ease you&rsquo;ll feel and the better prepared you&rsquo;ll be when issues arise.</li>\r\n	<li><strong>Get to know your roommate and others in your residence hall.</strong>&nbsp;The people you live with, most of whom are going through similar experiences and emotions, are your main safety net &mdash; not only this year, but for all your years. You may change roommates after the first semester or you may stay roommates for all four years &mdash; just take the time to get to know your fellow first-year students.</li>\r\n	<li><strong>Get Organized.</strong>&nbsp;In high school, the teachers tended to lead you through all the homework and due dates. In college, the professors post the assignments &mdash; often for the entire semester &mdash; and expect you to be prepared. Buy an organizer, use an app, or get a big wall calendar &mdash; whatever it takes for you to know when assignments are due.</li>\r\n	<li><strong>Find the ideal place for you to study.</strong>&nbsp;It may be your dorm room or a cozy corner of the library, but find a place that works best for you to get your work done &mdash; while avoiding as many distractions as possible.</li>\r\n	<li><strong>Go to class.</strong>&nbsp;Obvious, right? Maybe, but sleeping in and skipping that 8 am class will be tempting at times. Avoid the temptation. Besides learning the material by attending classes, you&rsquo;ll also receive vital information from the professors about what to expect on tests, changes in due dates, etc.</li>\r\n	<li><strong>Become an expert on course requirements and due dates.</strong>&nbsp;Professors spend hours and hours preparing course syllabi and calendars so that you will know exactly what is expected of you &mdash; and when. One of the lamest excuses a student can give a professor: &ldquo;I didn&rsquo;t know it was due today.&rdquo;</li>\r\n	<li><strong>Meet with your professors.</strong>&nbsp;Speaking as a professor, I can assure you there are only upsides to getting to know your professors, especially if later in the semester you run into some snags. Professors schedule office hours for the sole purpose of meeting with students &mdash; take advantage of that time.</li>\r\n	<li><strong>Get to know your academic adviser.</strong>&nbsp;This is the person who will help you with course conflicts, adding or dropping courses, scheduling of classes for future semesters, deciding on majors and minors. This person is a key resource for you &mdash; and should be the person you turn to with any academic issues or conflicts. And don&rsquo;t be afraid of requesting another adviser if you don&rsquo;t click with the one first assigned to you.</li>\r\n	<li><strong>Seek a balance.</strong>&nbsp;College life is a mixture of social and academic happenings. Don&rsquo;t tip the balance too far in either direction. One of my favorite former students always used to say her motto was to &ldquo;study hard so she could play hard.&rdquo;</li>\r\n	<li><strong>Get involved on campus.</strong>&nbsp;A big problem for a lot of new students is a combination of homesickness and a feeling of not quite belonging. A solution? Consider joining a select group &mdash; and be careful not to go overboard &mdash; of student organizations, clubs, sororities or fraternities, or sports teams. You&rsquo;ll make new friends, learn new skills, and feel more connected to your school.</li>\r\n	<li><strong>Strive for good grades.</strong>&nbsp;Another obvious one here, right? Remember the words of the opening paragraph; while good grades could have come naturally to you in high school, you will have to earn them in college &mdash; and that means setting some goals for yourself and then making sure you work as hard as you can to achieve them.</li>\r\n	<li><strong>Take advantage of the study resources on campus.</strong>&nbsp;Just about all colleges have learning labs and tutors available. If you&rsquo;re having some troubles, these resources are another tool available to you. Another idea: form study groups.</li>\r\n	<li><strong>Make time for you.</strong>&nbsp;Be sure you set aside some time and activities that help you relax and take the stress out of your day or week. Whether it&rsquo;s enlisting yoga techniques, watching your favorite television shows, or writing in a journal, be good to yourself.</li>\r\n	<li><strong>Don&rsquo;t feel pressured to make a hasty decision about a career or a major.</strong>&nbsp;It doesn&rsquo;t matter if it seems as though everyone else seems to know what they&rsquo;re doing with their lives &mdash; believe me, they don&rsquo;t &mdash; college is the time for you to really discover who you are, what you enjoy doing, what you&rsquo;re good at, and what you want to be. It&rsquo;s not a race; take your time and enjoy exploring your options.</li>\r\n	<li><strong>Take responsibility for yourself and your actions.</strong>&nbsp;Don&rsquo;t look to place the blame on others for your mistakes; own up to them and move on. Being an adult means taking responsibility for everything that happens to you.</li>\r\n	<li><strong>Make connections with students in your classes.</strong>&nbsp;One of my best students said his technique in the first week of classes was to meet at least one new person in each of his classes. It expanded his network of friends &mdash; and was a crucial resource at times when he had to miss a class.</li>\r\n	<li><strong>Find the Career Services Office.</strong>&nbsp;Regardless of whether you are entering college as undeclared or have your entire future mapped out, seek out the wonderful professionals in your college&rsquo;s career services office and get started on planning, preparing, and acting on your future.</li>\r\n	<li><strong>Don&rsquo;t procrastinate; prioritize your life.</strong>&nbsp;It may have been easy in high school to wait until the last minute to complete an assignment and still get a good grade, but that kind of stuff will not work for you in college. Give yourself deadlines &mdash; and stick to them.</li>\r\n	<li><strong>Stay healthy/Eat Right.</strong>&nbsp;A lot of problems first-year students face can be traced back to an illness that kept them away from classes for an extended period of time that led to a downward spiraling effect. Get enough sleep, take your vitamins, and eat right. If you haven&rsquo;t heard the jokes about college food, you soon will. And without mom or dad there to serve you a balanced meal, you may be tempted to go for those extra fries or cookies. Stay healthy and avoid the dreaded extra &ldquo;Freshman 15&rdquo; pounds by sticking to a balanced diet.</li>\r\n	<li><strong>Learn to cope with homesickness.</strong>&nbsp;It&rsquo;s only natural that there will be times when you miss your family, even if you were one of those kids who couldn&rsquo;t wait to get away. Find a way to deal with those feelings, such as making a phone call or sending some email home.</li>\r\n	<li><strong>Stay on campus as much as possible.</strong>&nbsp;Whether it&rsquo;s homesickness, a job, or a boyfriend or girlfriend from home, try not to leave campus too soon or too often. The more time you spend on getting to know the campus and your new friends, the more you&rsquo;ll feel at home at school. And why not take advantage of all the cultural and social events that happen on campus?</li>\r\n	<li><strong>Seek professional help when you need it.</strong>&nbsp;Most colleges have health and counseling centers. If you&rsquo;re sick or feeling isolated or depressed, please take advantage of the many services these offices provide students. You don&rsquo;t have to face these issues by yourself.</li>\r\n	<li><strong>Keep track of your money.</strong>&nbsp;If you&rsquo;ve never had to create a budget, now is the time to do so. Find ways to stretch your money &ndash; and as best you can, avoid all those credit card solicitations you&rsquo;ll soon be receiving. The average credit card debt of college grads is staggering.</li>\r\n	<li><strong>Don&rsquo;t cut corners.</strong>&nbsp;College is all about learning. If you procrastinate and cram, you may still do well on tests, but you&rsquo;ll learn very little. Even worse, don&rsquo;t cheat on term papers or tests.</li>\r\n	<li><strong>Be prepared to feel overwhelmed.</strong>&nbsp;There&rsquo;s a lot going in your life right now. Expect to have moments where it seems a bit too much. As one student says, be prepared to feel completely unprepared. The trick is knowing that you&rsquo;re not the only one feeling that way.</li>\r\n</ol>\r\n\r\n<p>Final Words of Advice for First-Year College Students</p>\r\n\r\n<p>You&rsquo;ve done all the prep work &mdash; you&rsquo;ve gotten good grades in high school, scored well on a standardized test, and been accepted into the college you want to attend &mdash; so enjoy all your hard work while laying the groundwork for a successful college career. Don&rsquo;t be a statistic; be determined to make it through your freshman year &mdash; and beyond. Take advantage of your network of new friends and professors, have fun while learning as much as you can, and get the most out of your college experience.</p>\r\n\r\n<p>Useful College Resources</p>\r\n\r\n<p>Here are some useful articles and links that you may find useful:</p>\r\n\r\n<ul>\r\n	<li><a href="https://www.quintcareers.com/choosing_major.html">Choosing a College Major: How to Chart Your Ideal Path</a></li>\r\n	<li><a href="https://www.quintcareers.com/college_professor_pet_peeves.html">College Professor Pet Peeves and Positive Student Behaviors</a></li>\r\n	<li><a href="https://www.quintcareers.com/college_different_high-school.html">How College is Different from High School</a></li>\r\n	<li><a href="https://www.quintcareers.com/college_career_office.html">It&rsquo;s Never Too Early &mdash; or Too Late &mdash; to Visit Your College Career Office</a></li>\r\n	<li><a href="https://www.quintcareers.com/getting_better_grades.html">10 Tips for Getting Good (or Better) Grades</a></li>\r\n	<li><a href="https://www.quintcareers.com/college_education_value.html">What Good is a College Education Anyway? The Value of a College Education</a></li>\r\n	<li><a href="https://www.quintcareers.com/college_life.html">Teen Life/College Life Resources</a></li>\r\n</ul>\r\n\r\n<p>See also my companion article published on our sister site, MyCollegeSuccessStory.com:&nbsp;<a href="http://www.mycollegesuccessstory.com/academic-success-tools/high-school-vs-college.html" target="_NEW">Ways in Which College is Different From High School</a>.</p>\r\n\r\n<p>Finally, you can get even greater depth in one of more of these&nbsp;<a href="https://www.quintcareers.com/college_success_books.html">College Success Books</a>, available in our online bookstore &hellip; or perhaps at your local library.</p>\r\n\r\n<table border="1" style="width:96%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<table style="width:92%">\r\n				<tbody>\r\n					<tr>\r\n						<td>&nbsp;</td>\r\n						<td>\r\n						<h3>Top 10 Reasons College Students Leave/Drop-Out</h3>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<ol>\r\n							<li>Too much fun at the expense of classes and grades</li>\r\n							<li>A sense of not belonging; a sense of isolation, homesickness</li>\r\n							<li>Academically unprepared; burned-out on education</li>\r\n							<li>Financial constraints; low on funds</li>\r\n							<li>Personal family issues</li>\r\n							<li>Academic climate/fit</li>\r\n							<li>Choice of wrong major; major not offered</li>\r\n							<li>Lack of advising, guidance</li>\r\n							<li>Demands from part-time or full-time employment</li>\r\n							<li>Move to a different geographic location</li>\r\n						</ol>\r\n\r\n						<p>Source: A variety of college institutional research sources</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 0, 'tips, college, school', 'People', 'CollegeCounseling.jpg'),
(21, 'What is Time Management?', 15, 'posted', '<p>It seems that there is never enough time in the day. But, since we all get the same 24 hours, why is it that some people achieve so much more with their time than others?&nbsp;The answer lies in good time management.</p>\r\n\r\n<p>The highest achievers manage their time exceptionally well. By using the time-management techniques in this section, you can improve your ability to function more effectively &ndash; even when time is tight and pressures are high.</p>\r\n\r\n<p>Good time management requires an important shift in focus from activities to results:&nbsp;<strong>being busy isn&rsquo;t the same as being effective</strong>. (Ironically, the opposite is often closer to the truth.)</p>\r\n\r\n<p>Spending your day in a frenzy of activity often achieves less, because you&rsquo;re dividing your attention between so many different tasks. Good time management lets you work smarter &ndash; not harder &ndash; so you get more done in less time.</p>\r\n\r\n<h2>What is &ldquo;Time Management?&rdquo;</h2>\r\n\r\n<p>&ldquo;Time management&rdquo; refers to the way that you organize and plan how long you spend on specific activities.</p>\r\n\r\n<p>It may seem counter-intuitive to dedicate precious time to learning about time management, instead of using it to get on with your work, but the benefits are enormous:</p>\r\n\r\n<ul>\r\n	<li>Greater productivity and efficiency.</li>\r\n	<li>A better professional reputation.</li>\r\n	<li>Less stress.</li>\r\n	<li>Increased opportunities for advancement.</li>\r\n	<li>Greater opportunities to achieve important life and career goals.</li>\r\n</ul>\r\n\r\n<p>Failing to manage your time effectively can have some very undesirable consequences:</p>\r\n\r\n<ul>\r\n	<li>Missed deadlines.</li>\r\n	<li>Inefficient work flow.</li>\r\n	<li>Poor work quality.</li>\r\n	<li>A poor professional reputation and a stalled career.</li>\r\n	<li>Higher stress levels.</li>\r\n</ul>\r\n\r\n<p>Spending a little time&nbsp;learning about time-management techniques&nbsp;will have huge benefits now &ndash;&nbsp;and throughout your career.</p>\r\n\r\n<h2>Key Points</h2>\r\n\r\n<p>Time management is the process of organizing and planning how much time you spend on specific activities. Invest some time in our comprehensive collection of time management articles to learn about managing your own time more efficiently, and save yourself time in the future.</p>\r\n\r\n<p>This site teaches you the skills you need for a happy and successful career; and this is just one of many tools and resources that you&#39;ll find here at Mind Tools. Subscribe to our&nbsp;<a href="https://www.mindtools.com/subscribe.htm?tag=upsp">free newsletter</a>, or&nbsp;<a href="https://www.mindtools.com/signup/monthly/usd?trackingtag=upsp">join the Mind Tools Club</a>&nbsp;and really supercharge your career!</p>\r\n', 0, 'time management, time, tips', 'Time management', '24_IS_3185737_trait2lumiere_2x1.jpg');

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
(1, 'Shadow', 'Shadow', '1', '11111', 'Shadow', 'nick@gmail.com', 'signed', '6479347479', '1'),
(2, 'Helen', 'Boitsova', '2', '12345', 'Lenchezzz', 'l@gmail.com', 'signed', '6755438765', '2'),
(15, 'Helena', 'Boitsova', '1', '$2y$10$4F2OJ6pKczhQlT1sOGoA2.EbkEtbCpV9GSpZ3xESt4.G4Xk7Vwcq.', 'helen', 'helen.boitsova@gmail.com', '', '6479367479', 'helen.jpg'),
(16, '', '', '2', '$2y$10$9O2SRik7Fsz4qTtQuKeN5eBL8ZL2U3ym/CHXVFKCMcQy/VgRX7nm2', 'antonio', 'antonio@gmail.com', '', '', 'user.png'),
(18, '', '', '2', '$2y$10$e1hUHcT2e2/WA4gBob4wBeJ1Un/rTkIwBkRACdMcIQLD7OE1ijS96', 'alex', 'alex@gmail.com', '', '', 'user.png'),
(19, '', '', '2', '$2y$10$tirKMkR5gWkmp/DMFyvqFOcGAHSq4N0dPRtOyXc1k44QU9XFfWbR6', 'aysen', 'aysen@gmail.com', '', '', 'user.png');

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
  MODIFY `ID_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
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
  MODIFY `ID_page` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
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
  MODIFY `ID_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
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
