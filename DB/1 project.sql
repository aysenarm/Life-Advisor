-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2016 at 03:11 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `ID menu` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `page` (
  `ID_page` int(11) NOT NULL,
  `ID menu` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ID_user` int(11) NOT NULL,
  `Status` set('posted','not posted') COLLATE utf8_unicode_ci NOT NULL,
  `Content` varchar(15000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Table structure for table `rights`
--

CREATE TABLE `rights` (
  `ID rigths` int(11) NOT NULL,
  `Name` set('admin','ordinary') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `user` (
  `ID user` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Surname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Rights` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Nickname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `E-mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Newsletter` set('signed','not signed') COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ID image` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID user`, `Name`, `Surname`, `Rights`, `Password`, `Nickname`, `E-mail`, `Newsletter`, `Phone`, `ID image`) VALUES
(1, 'User 1', 'Surname 1', '1', '11111', 'Nick', 'nick@gmail.com', 'signed', '6479367479', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID menu`),
  ADD UNIQUE KEY `ID menu` (`ID menu`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`ID_page`),
  ADD KEY `ID menu` (`ID menu`);

--
-- Indexes for table `rights`
--
ALTER TABLE `rights`
  ADD PRIMARY KEY (`ID rigths`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ID menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `ID_page` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `rights`
--
ALTER TABLE `rights`
  MODIFY `ID rigths` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
