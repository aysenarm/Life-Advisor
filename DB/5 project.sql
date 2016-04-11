-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2016 at 04:58 AM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `life_advisor`
--
CREATE DATABASE IF NOT EXISTS `life_advisor` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `life_advisor`;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `forum_categories`
--

INSERT INTO `forum_categories` (`categoryID`, `categoryName`, `userID`, `datePublished`) VALUES
(2, '22222', 0, '0000-00-00'),
(8, '8888888', 0, '0000-00-00'),
(11, 'hyjed', 0, '0000-00-00'),
(12, '3213135', 0, '0000-00-00'),
(13, 'djdy', 0, '0000-00-00'),
(14, 'dcfvgbfh', 0, '0000-00-00'),
(15, 'fghjh', 0, '0000-00-00'),
(16, 'lkjml', 0, '0000-00-00'),
(18, '33333', 1, '2016-04-05'),
(20, 'jkjkbkj', 1, '2016-04-05');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `forum_comments`
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
(13, 'fvdg', 1, '2016-04-05', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `forum_topics`
--

INSERT INTO `forum_topics` (`topicID`, `topicName`, `categoryID`, `userID`, `datePublished`) VALUES
(1, '111111', 8, 0, '0000-00-00'),
(3, 'gftxffxffgmm', 2, 1, '2016-04-05'),
(45, 'fer', 2, 2, '0000-00-00'),
(47, 'dsfsd', 8, 4, '2016-04-27'),
(48, 'mcfds', 2, 1, '2016-04-05'),
(49, 'kdskdsk', 2, 1, '2016-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_galleries`
--

CREATE TABLE IF NOT EXISTS `gallery_galleries` (
  `galleryID` int(11) NOT NULL AUTO_INCREMENT,
  `galleryName` varchar(50) NOT NULL,
  `datePublished` date NOT NULL,
  `userID` int(11) NOT NULL,
  PRIMARY KEY (`galleryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE IF NOT EXISTS `gallery_images` (
  `imageID` int(11) NOT NULL AUTO_INCREMENT,
  `galleryID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `datePublished` date NOT NULL,
  `imageName` varchar(50) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `fileName` varchar(100) NOT NULL,
  PRIMARY KEY (`imageID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `ID menu` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL,
  PRIMARY KEY (`ID menu`),
  UNIQUE KEY `ID menu` (`ID menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ID menu`, `Name`, `Description`) VALUES
(4, 'Recipes', 'You add content related to Recipes here'),
(5, 'House', 'You add content related to House here'),
(6, 'Health', 'You add content related to Health here'),
(7, 'Finances', 'You add content related to Finances here'),
(8, 'People', 'You add content related to People here'),
(9, 'Time management', 'You add content related to Time management here'),
(10, 'Our partners', 'You add content related to Our partners here');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `ID_page` int(11) NOT NULL AUTO_INCREMENT,
  `ID menu` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ID_user` int(11) NOT NULL,
  `Status` set('posted','not posted') COLLATE utf8_unicode_ci NOT NULL,
  `Content` varchar(15000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_page`),
  KEY `ID menu` (`ID menu`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`ID_page`, `ID menu`, `Name`, `Title`, `ID_user`, `Status`, `Content`) VALUES
(1, 4, 'Recipe 1', 'Recipe 1', 1, 'posted', '<h1> posted </h1>'),
(2, 5, 'house 1', 'house 1', 1, 'posted', '<h1> HOUSE </h1>'),
(3, 6, 'Health 1', 'Health 1', 1, 'posted', '<h1> HEALTH </h1>'),
(4, 7, 'Finances 1', 'Finances 1', 1, 'posted', '<h1> Finances </h1>'),
(5, 8, 'People 1', 'People 1', 1, 'posted', '<h1> People </h1>'),
(6, 9, 'Time management 1', 'Time management 1', 1, 'posted', '<h1> Time management </h1>'),
(7, 10, 'Our partners 1', 'Our partners 1', 1, 'posted', '<h1> Our partners 1 </h1>');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE IF NOT EXISTS `promotions` (
  `promotionID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `datePublished` date NOT NULL,
  `promotionName` varchar(100) NOT NULL,
  `dateValid` date NOT NULL,
  `promotionImage` varchar(100) NOT NULL,
  `promotionCode` varchar(50) NOT NULL,
  `website` varchar(100) NOT NULL,
  PRIMARY KEY (`promotionID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID user` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Surname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Rights` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Nickname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `E-mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Newsletter` set('signed','not signed') COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ID image` int(11) NOT NULL,
  PRIMARY KEY (`ID user`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID user`, `Name`, `Surname`, `Rights`, `Password`, `Nickname`, `E-mail`, `Newsletter`, `Phone`, `ID image`) VALUES
(1, 'User 1', 'Surname 1', '1', '11111', 'Nick', 'nick@gmail.com', 'signed', '6479367479', 1);

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
