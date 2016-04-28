-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 28, 2016 at 04:00 AM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
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
-- Dumping data for table `comments`
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
-- Table structure for table `contactus`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `contactus`
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
-- Table structure for table `donations`
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
-- Dumping data for table `donations`
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
-- Table structure for table `forum_categories`
--

CREATE TABLE IF NOT EXISTS `forum_categories` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(50) DEFAULT NULL,
  `userID` int(11) NOT NULL,
  `datePublished` date NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `forum_categories`
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
-- Table structure for table `forum_comments`
--

CREATE TABLE IF NOT EXISTS `forum_comments` (
  `commentID` int(11) NOT NULL AUTO_INCREMENT,
  `commentName` varchar(50) DEFAULT NULL,
  `userID` int(11) NOT NULL,
  `datePublished` date NOT NULL,
  `topicID` int(11) NOT NULL,
  PRIMARY KEY (`commentID`),
  KEY `topicID` (`topicID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `forum_comments`
--

INSERT INTO `forum_comments` (`commentID`, `commentName`, `userID`, `datePublished`, `topicID`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 1, '2016-04-28', 80);

-- --------------------------------------------------------

--
-- Table structure for table `forum_topics`
--

CREATE TABLE IF NOT EXISTS `forum_topics` (
  `topicID` int(11) NOT NULL AUTO_INCREMENT,
  `topicName` varchar(50) DEFAULT NULL,
  `categoryID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `datePublished` date NOT NULL,
  PRIMARY KEY (`topicID`),
  KEY `categoryID` (`categoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `forum_topics`
--

INSERT INTO `forum_topics` (`topicID`, `topicName`, `categoryID`, `userID`, `datePublished`) VALUES
(80, 'Car Cleaning', 21, 1, '2016-04-28'),
(81, 'Outdoor Cleaning', 21, 1, '2016-04-28'),
(82, 'Laundry', 21, 1, '2016-04-28'),
(83, 'Green Cleaning', 21, 1, '2016-04-28');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_galleries`
--

CREATE TABLE IF NOT EXISTS `gallery_galleries` (
  `galleryID` int(11) NOT NULL AUTO_INCREMENT,
  `galleryName` varchar(50) NOT NULL,
  `datePublished` date NOT NULL,
  `userID` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`galleryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `gallery_galleries`
--

INSERT INTO `gallery_galleries` (`galleryID`, `galleryName`, `datePublished`, `userID`, `image`) VALUES
(17, 'Kitchen Designs', '2016-04-28', 1, 'can-stock-photo_csp13118945.jpg'),
(18, 'Cleaning', '2016-04-28', 1, 'cover.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE IF NOT EXISTS `gallery_images` (
  `imageID` int(11) NOT NULL AUTO_INCREMENT,
  `galleryID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `datePublished` date NOT NULL,
  `alt` varchar(50) NOT NULL,
  `fileName` varchar(100) NOT NULL,
  PRIMARY KEY (`imageID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `gallery_images`
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
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `ID_image` int(11) NOT NULL AUTO_INCREMENT,
  `alt_text` varchar(100) NOT NULL,
  `link` varchar(500) NOT NULL,
  PRIMARY KEY (`ID_image`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`ID_image`, `alt_text`, `link`) VALUES
(1, 'image 1', 'http://flymama.info/wp-content/uploads/2013/04/general1.jpg'),
(2, 'test pic 2', 'http://localhost/Life-Advisor/img/test.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `temp_name` varchar(50) NOT NULL,
  `sender_email` varchar(50) NOT NULL,
  `creator_name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `time` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `temp_name`, `sender_email`, `creator_name`, `description`, `time`, `status`, `subject`) VALUES
(5, '', 'dhryshkova@gmail.com', '', '<p>sdfghm,</p>\r\n', '2016-04-27', 'active', 'group test'),
(6, '', 'dhryshkova@gmail.com', '', '<p>group test</p>\r\n', '2016-04-27', 'active', 'group test');

-- --------------------------------------------------------

--
-- Table structure for table `page`
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
-- Dumping data for table `page`
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
-- Table structure for table `promotions`
--

CREATE TABLE IF NOT EXISTS `promotions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `pKey` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `dateValid` date NOT NULL,
  `datePublished` date NOT NULL,
  `userID` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `title`, `pKey`, `image`, `dateValid`, `datePublished`, `userID`) VALUES
(4, 'April is Post-Secondary Student Month!', 'None', 'Students-Save-25-Promos-Page.jpg', '2016-04-30', '2016-04-28', 1),
(6, 'Buy a Ticket for Toronto Blue Jays vs. Texas Rangers to win #TBT T-Shirt Giveaway Night presented by', 'ILoveLifeAdvisor', 'tbt_tshirt_200x200.jpg', '2016-04-13', '2016-04-28', 1),
(7, 'Amazon.ca Deals of the Day: Up to 71% Off Barney Miller and Welcome Back, Kotter + Select Romance Ti', 'kindlier', 'Amazon-logo-700x433.jpg', '2016-04-15', '2016-04-28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `questionnaire_answers`
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
-- Dumping data for table `questionnaire_answers`
--

INSERT INTO `questionnaire_answers` (`userID`, `answer1`, `answer2`, `answer3`, `answer4`, `answer5`, `answer6`, `answer7`, `answer8`, `answer9`, `answer10`, `aDate`) VALUES
(1, 'user1_answer1', 'user1_answer2', 'user1_answer3', 'user1_answer4', 'user1_answer5', 'user1_answer6', 'user1_answer7', 'user1_answer8', 'user1_answer9', 'user1_answer10', '2015-12-01'),
(2, 'user2_answer1', 'user2_answer2', 'user2_answer3', 'user2_answer4', 'user2_answer5', 'user2_answer6', 'user2_answer7', 'user2_answer8', 'user2_answer9', 'user2_answer10', '2015-12-15'),
(7, 'user7_answer1', 'user7_answer2', 'user7_answer3', 'user7_answer4', 'user7_answer5', 'user7_answer6', 'user7_answer7', 'user7_answer8', 'user7_answer9', 'user7_answer10', '2015-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `questionnaire_questions`
--

CREATE TABLE IF NOT EXISTS `questionnaire_questions` (
  `questionID` int(50) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  PRIMARY KEY (`questionID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `questionnaire_questions`
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
-- Table structure for table `rights`
--

CREATE TABLE IF NOT EXISTS `rights` (
  `ID rigths` int(11) NOT NULL AUTO_INCREMENT,
  `Name` set('admin','ordinary') NOT NULL,
  PRIMARY KEY (`ID rigths`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `rights`
--

INSERT INTO `rights` (`ID rigths`, `Name`) VALUES
(1, 'admin'),
(2, 'ordinary');

-- --------------------------------------------------------

--
-- Table structure for table `signups`
--

CREATE TABLE IF NOT EXISTS `signups` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `signup_email_address` varchar(250) DEFAULT NULL,
  `signup_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `signups`
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
-- Table structure for table `user`
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
  `ID_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_user`, `Name`, `Surname`, `Rights`, `Password`, `Username`, `Email`, `Newsletter`, `Phone`, `ID_image`) VALUES
(1, 'User 1', 'Surname 1', '1', '11111', 'Nick', 'nick@gmail.com', 'signed', '6479347479', '1'),
(2, 'Helen', 'Boitsova', '2', '12345', 'Lenchezzz', 'l@gmail.com', 'signed', '6755438765', '2'),
(15, '', '', '1', '$2y$10$4F2OJ6pKczhQlT1sOGoA2.EbkEtbCpV9GSpZ3xESt4.G4Xk7Vwcq.', 'helen', 'helen.boitsova@gmail.com', '', '', '0'),
(16, '', '', '2', '$2y$10$9O2SRik7Fsz4qTtQuKeN5eBL8ZL2U3ym/CHXVFKCMcQy/VgRX7nm2', 'antonio', 'antonio@gmail.com', '', '', '0');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `forum_comments`
--
ALTER TABLE `forum_comments`
  ADD CONSTRAINT `Comment_Topic` FOREIGN KEY (`topicID`) REFERENCES `forum_topics` (`topicID`);

--
-- Constraints for table `forum_topics`
--
ALTER TABLE `forum_topics`
  ADD CONSTRAINT `Topic_Category` FOREIGN KEY (`categoryID`) REFERENCES `forum_categories` (`categoryID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
