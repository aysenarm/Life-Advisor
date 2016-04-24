-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 23 Nis 2016, 18:32:35
-- Sunucu sürümü: 5.6.13
-- PHP Sürümü: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `life_advisor`
--
CREATE DATABASE IF NOT EXISTS `life_advisor` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `life_advisor`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `ID_comment` int(11) NOT NULL AUTO_INCREMENT,
  `ID_page` int(11) NOT NULL,
  `ID_user` int(11) NOT NULL,
  `Text` varchar(5000) NOT NULL,
  `state` set('published','not published') NOT NULL,
  PRIMARY KEY (`ID_comment`),
  KEY `ID_page` (`ID_page`),
  KEY `ID_page_2` (`ID_page`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Tablo döküm verisi `comments`
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
-- Tablo için tablo yapısı `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `questionID` int(50) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `question` text NOT NULL,
  `category` varchar(20) NOT NULL,
  `questionDate` date NOT NULL,
  `answer` text,
  `answerDate` date DEFAULT NULL,
  PRIMARY KEY (`questionID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Tablo döküm verisi `contactus`
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
-- Tablo için tablo yapısı `donations`
--

CREATE TABLE IF NOT EXISTS `donations` (
  `donationID` int(11) NOT NULL AUTO_INCREMENT,
  `amount` varchar(50) NOT NULL,
  `cardholderName` varchar(500) NOT NULL,
  `cardNumber` varchar(500) NOT NULL,
  `expiryDate` varchar(500) NOT NULL,
  `cvs` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNumber` varchar(50) NOT NULL,
  `regularity` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `firstTransaction` date NOT NULL,
  PRIMARY KEY (`donationID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Tablo döküm verisi `donations`
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
-- Tablo için tablo yapısı `forum_categories`
--

CREATE TABLE IF NOT EXISTS `forum_categories` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(50) DEFAULT NULL,
  `userID` int(11) NOT NULL,
  `datePublished` date NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Tablo döküm verisi `forum_categories`
--

INSERT INTO `forum_categories` (`categoryID`, `categoryName`, `userID`, `datePublished`) VALUES
(2, '22222', 0, '0000-00-00'),
(8, '8888888', 1, '2016-04-12'),
(15, 'fghjh', 1, '2016-04-12'),
(18, '33333', 1, '2016-04-12'),
(20, 'jkjkbkj', 1, '2016-04-05');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `forum_comments`
--

CREATE TABLE IF NOT EXISTS `forum_comments` (
  `commentID` int(11) NOT NULL AUTO_INCREMENT,
  `commentName` varchar(50) DEFAULT NULL,
  `userID` int(11) NOT NULL,
  `datePublished` date NOT NULL,
  `topicID` int(11) NOT NULL,
  PRIMARY KEY (`commentID`),
  KEY `topicID` (`topicID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Tablo döküm verisi `forum_comments`
--

INSERT INTO `forum_comments` (`commentID`, `commentName`, `userID`, `datePublished`, `topicID`) VALUES
(2, '22222222222', 0, '0000-00-00', 1),
(3, 'dsgfgs', 0, '0000-00-00', 3),
(5, '55555', 1, '2016-04-05', 1),
(7, 'kjbk', 1, '2016-04-05', 1),
(8, 'bjkkj', 1, '2016-04-05', 1),
(9, 'kjbhk', 1, '2016-04-05', 1),
(10, '99999', 1, '2016-04-05', 1),
(11, 'nlbnl', 1, '2016-04-05', 1),
(12, 'lljkjl', 1, '2016-04-05', 1),
(13, 'fvdg', 1, '2016-04-05', 1),
(15, 'bir daha 62', 1, '2016-04-12', 62),
(17, '20 56', 1, '2016-04-12', 56),
(18, 'dsfgthyjkl', 1, '2016-04-12', 56),
(19, 'efwrgthyjuky', 1, '2016-04-12', 56),
(20, 'fbgnhjyku', 1, '2016-04-12', 56),
(21, '18 60', 1, '2016-04-12', 60),
(22, 'fsggs', 1, '2016-04-12', 65),
(23, 'sgsg', 1, '2016-04-12', 65),
(24, 'jnllnl', 1, '2016-04-12', 62),
(25, 'fdsgsfg', 1, '2016-04-12', 74),
(26, 'dsgdsgs', 1, '2016-04-12', 74),
(27, 'sdgsg', 1, '2016-04-12', 74),
(28, 'tyuÄ±opÄŸÃ¼', 1, '2016-04-12', 69),
(29, 'fdghjkÄ±lopÄŸ', 1, '2016-04-12', 69),
(30, 'dsgery', 1, '2016-04-12', 57),
(31, 'afewfe', 1, '2016-04-12', 53),
(32, 'dfrwfs', 1, '2016-04-12', 53),
(33, '33 uncuu', 1, '2016-04-18', 53),
(34, '34uncuuu', 1, '2016-04-18', 53),
(35, '35', 1, '2016-04-18', 53),
(36, '36', 1, '2016-04-18', 53),
(37, '37 blablabalabalbalab', 1, '2016-04-18', 53),
(38, 'dfhdghdr', 1, '2016-04-20', 62),
(39, 'mhbkbkjb', 1, '2016-04-20', 62),
(40, 'khgvhgvj\r\nkljhjlhn\r\nnbvmvk\r\n', 1, '2016-04-20', 62);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `forum_topics`
--

CREATE TABLE IF NOT EXISTS `forum_topics` (
  `topicID` int(11) NOT NULL AUTO_INCREMENT,
  `topicName` varchar(50) DEFAULT NULL,
  `categoryID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `datePublished` date NOT NULL,
  PRIMARY KEY (`topicID`),
  KEY `categoryID` (`categoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Tablo döküm verisi `forum_topics`
--

INSERT INTO `forum_topics` (`topicID`, `topicName`, `categoryID`, `userID`, `datePublished`) VALUES
(1, '111111', 8, 0, '0000-00-00'),
(3, 'gftxffxffgmm', 2, 1, '2016-04-05'),
(45, 'khkuh', 2, 1, '2016-04-11'),
(47, 'dsfsd', 8, 4, '2016-04-27'),
(48, 'mcfds', 2, 1, '2016-04-05'),
(49, '50', 2, 1, '2016-04-11'),
(50, 'dsfaege', 2, 1, '2016-04-11'),
(52, '2 ye ekle kafayÄ± yicem', 2, 1, '2016-04-12'),
(53, '2 ye ekle tekrar', 2, 1, '2016-04-12'),
(56, '20 ye ekliyorum', 20, 1, '2016-04-12'),
(57, '18 e edit gari', 18, 1, '2016-04-12'),
(58, '18 e mnb kjbn', 18, 1, '2016-04-12'),
(60, 'kkj', 18, 1, '2016-04-12'),
(61, 'hbkbnmb', 18, 1, '2016-04-12'),
(62, '15 ekle', 15, 1, '2016-04-12'),
(63, 'ekliyom', 15, 1, '2016-04-12'),
(64, 'hjbkhbkh', 18, 1, '2016-04-12'),
(65, 'kbjbkjkj', 15, 1, '2016-04-12'),
(66, 'kjbkjn', 15, 1, '2016-04-12'),
(67, 'kjbnl', 2, 1, '2016-04-12'),
(68, 'bhjkhb', 18, 1, '2016-04-11'),
(69, 'kbjkbk', 18, 1, '2016-04-11'),
(70, 'fghfg', 18, 1, '2016-04-11'),
(71, 'jfd', 18, 1, '2016-04-11'),
(72, 'dsjnds', 18, 1, '2016-04-11'),
(73, 'n bk', 18, 1, '2016-04-11'),
(74, 'sfsfewfew', 8, 1, '2016-04-12'),
(75, 'fgrgwrg', 8, 1, '2016-04-12'),
(76, 'rgytrut', 18, 1, '2016-04-12'),
(77, 'fghs', 2, 1, '2016-04-12'),
(78, 'fgseh6r', 2, 1, '2016-04-12'),
(79, 'ghdghtydj', 2, 1, '2016-04-12');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gallery_galleries`
--

CREATE TABLE IF NOT EXISTS `gallery_galleries` (
  `galleryID` int(11) NOT NULL AUTO_INCREMENT,
  `galleryName` varchar(50) NOT NULL,
  `datePublished` date NOT NULL,
  `userID` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`galleryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Tablo döküm verisi `gallery_galleries`
--

INSERT INTO `gallery_galleries` (`galleryID`, `galleryName`, `datePublished`, `userID`, `image`) VALUES
(14, 'kmÅŸk', '2016-04-19', 1, '2.jpg'),
(15, 'mcsdsk', '2016-04-19', 1, '1.jpg'),
(16, 'cxgfsgsd', '2016-04-20', 1, 'Untitled.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gallery_images`
--

CREATE TABLE IF NOT EXISTS `gallery_images` (
  `imageID` int(11) NOT NULL AUTO_INCREMENT,
  `galleryID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `datePublished` date NOT NULL,
  `alt` varchar(50) NOT NULL,
  `fileName` varchar(100) NOT NULL,
  PRIMARY KEY (`imageID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Tablo döküm verisi `gallery_images`
--

INSERT INTO `gallery_images` (`imageID`, `galleryID`, `userID`, `datePublished`, `alt`, `fileName`) VALUES
(24, 3, 1, '2016-04-19', 'apple', 'apple.jpg'),
(25, 3, 1, '2016-04-19', 'banana', 'banana.jpg'),
(29, 3, 1, '2016-04-19', 'apple', 'apple.jpg'),
(30, 3, 1, '2016-04-19', 'hbhbkh', 'apple.jpg'),
(31, 3, 1, '2016-04-19', 'mb hh', 'apple.1461039583.jpg'),
(35, 3, 1, '2016-04-19', 'rwsdfgwds', 'apple.1461039770.jpg'),
(37, 3, 1, '2016-04-19', 'dsff', 'apple.1461041090.jpg'),
(38, 3, 1, '2016-04-19', 'wgsg', 'apple.1461041274.jpg'),
(39, 3, 1, '2016-04-19', 'mdmd', '1.jpg'),
(40, 3, 1, '2016-04-19', 'mdmd', '2.jpg'),
(41, 3, 1, '2016-04-19', 'mdmdm', '1.1461041384.jpg'),
(42, 3, 1, '2016-04-19', 'mdmdm', '2.1461041384.jpg'),
(43, 1, 1, '2016-04-19', 'kkskds', '1.jpg'),
(44, 1, 1, '2016-04-19', 'kkskds', '2.jpg'),
(45, 14, 1, '2016-04-19', 'kdkdk', '1.jpg'),
(46, 14, 1, '2016-04-19', 'kdkdk', '2.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `ID_image` int(11) NOT NULL AUTO_INCREMENT,
  `alt_text` varchar(100) NOT NULL,
  `link` varchar(500) NOT NULL,
  PRIMARY KEY (`ID_image`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `images`
--

INSERT INTO `images` (`ID_image`, `alt_text`, `link`) VALUES
(1, 'image 1', 'http://flymama.info/wp-content/uploads/2013/04/general1.jpg'),
(2, 'test pic 2', 'http://localhost/Life-Advisor/img/test.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `ID_page` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ID_user` int(11) NOT NULL,
  `Status` set('posted','not posted') COLLATE utf8_unicode_ci NOT NULL,
  `Content` varchar(15000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Rank` int(11) DEFAULT NULL,
  `Tags` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Menu` set('Recipes','Finances','Time management','Health','House','People') COLLATE utf8_unicode_ci NOT NULL,
  `ID_image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_page`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Tablo döküm verisi `page`
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
-- Tablo için tablo yapısı `questionnaire_answers`
--

CREATE TABLE IF NOT EXISTS `questionnaire_answers` (
  `userID` int(50) NOT NULL AUTO_INCREMENT,
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
  `aDate` date NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Tablo döküm verisi `questionnaire_answers`
--

INSERT INTO `questionnaire_answers` (`userID`, `answer1`, `answer2`, `answer3`, `answer4`, `answer5`, `answer6`, `answer7`, `answer8`, `answer9`, `answer10`, `aDate`) VALUES
(1, 'user1_answer1', 'user1_answer2', 'user1_answer3', 'user1_answer4', 'user1_answer5', 'user1_answer6', 'user1_answer7', 'user1_answer8', 'user1_answer9', 'user1_answer10', '2015-12-01'),
(2, 'user2_answer1', 'user2_answer2', 'user2_answer3', 'user2_answer4', 'user2_answer5', 'user2_answer6', 'user2_answer7', 'user2_answer8', 'user2_answer9', 'user2_answer10', '2015-12-15'),
(7, 'user7_answer1', 'user7_answer2', 'user7_answer3', 'user7_answer4', 'user7_answer5', 'user7_answer6', 'user7_answer7', 'user7_answer8', 'user7_answer9', 'user7_answer10', '2015-12-19');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `questionnaire_questions`
--

CREATE TABLE IF NOT EXISTS `questionnaire_questions` (
  `questionID` int(50) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  PRIMARY KEY (`questionID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Tablo döküm verisi `questionnaire_questions`
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
-- Tablo için tablo yapısı `rights`
--

CREATE TABLE IF NOT EXISTS `rights` (
  `ID rigths` int(11) NOT NULL AUTO_INCREMENT,
  `Name` set('admin','ordinary') NOT NULL,
  PRIMARY KEY (`ID rigths`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `rights`
--

INSERT INTO `rights` (`ID rigths`, `Name`) VALUES
(1, 'admin'),
(2, 'ordinary');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID_user` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Surname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Rights` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Newsletter` set('signed','not signed') COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ID_image` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`ID_user`, `Name`, `Surname`, `Rights`, `Password`, `Username`, `Email`, `Newsletter`, `Phone`, `ID_image`) VALUES
(1, 'User 1', 'Surname 1', '1', '11111', 'Nick', 'nick@gmail.com', 'signed', '6479347479', 1),
(2, 'Helen', 'Boitsova', '2', '12345', 'Lenchezzz', 'l@gmail.com', 'signed', '6755438765', 2),
(15, '', '', '1', '$2y$10$4F2OJ6pKczhQlT1sOGoA2.EbkEtbCpV9GSpZ3xESt4.G4Xk7Vwcq.', 'helen', 'helen.boitsova@gmail.com', '', '', 0),
(16, '', '', '2', '$2y$10$9O2SRik7Fsz4qTtQuKeN5eBL8ZL2U3ym/CHXVFKCMcQy/VgRX7nm2', 'antonio', 'antonio@gmail.com', '', '', 0);

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `forum_comments`
--
ALTER TABLE `forum_comments`
  ADD CONSTRAINT `Comment_Topic` FOREIGN KEY (`topicID`) REFERENCES `forum_topics` (`topicID`);

--
-- Tablo kısıtlamaları `forum_topics`
--
ALTER TABLE `forum_topics`
  ADD CONSTRAINT `Topic_Category` FOREIGN KEY (`categoryID`) REFERENCES `forum_categories` (`categoryID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
