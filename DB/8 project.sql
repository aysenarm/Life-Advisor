-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2016 at 01:44 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

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
-- Table structure for table `contactus`
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
-- Dumping data for table `contactus`
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
-- Table structure for table `donations`
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
-- Table structure for table `questionnaire_answers`
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

CREATE TABLE `questionnaire_questions` (
  `questionID` int(50) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `Username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `E-mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Newsletter` set('signed','not signed') COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ID image` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID user`, `Name`, `Surname`, `Rights`, `Password`, `Username`, `E-mail`, `Newsletter`, `Phone`, `ID image`) VALUES
(1, 'User 1', 'Surname 1', '1', '11111', 'Nick', 'nick@gmail.com', 'signed', '6479367479', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`questionID`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`donationID`);

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
-- Indexes for table `questionnaire_answers`
--
ALTER TABLE `questionnaire_answers`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `questionnaire_questions`
--
ALTER TABLE `questionnaire_questions`
  ADD PRIMARY KEY (`questionID`);

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
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `questionID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `donationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
-- AUTO_INCREMENT for table `questionnaire_answers`
--
ALTER TABLE `questionnaire_answers`
  MODIFY `userID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `questionnaire_questions`
--
ALTER TABLE `questionnaire_questions`
  MODIFY `questionID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
