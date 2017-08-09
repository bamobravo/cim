-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 09, 2017 at 01:11 AM
-- Server version: 10.0.29-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 5.6.31-1~ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cim`
--
CREATE DATABASE IF NOT EXISTS `cim` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cim`;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `ID` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `summary` varchar(500) NOT NULL,
  `content` text NOT NULL,
  `date_posted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`ID`, `title`, `summary`, `content`, `date_posted`, `author`, `status`) VALUES
(1, 'title of the blog', 'the summary information of the blog', 'the content and detail of the blog post', '2017-08-08 12:35:58', 'the name of the author', 1);

-- --------------------------------------------------------

--
-- Table structure for table `church`
--

CREATE TABLE `church` (
  `ID` int(11) NOT NULL,
  `church_name` varchar(500) NOT NULL,
  `slogan` varchar(500) DEFAULT NULL,
  `brief_description` text NOT NULL,
  `full_description` text NOT NULL,
  `location` varchar(500) NOT NULL,
  `pastor` varchar(500) NOT NULL,
  `church_verse` varchar(500) DEFAULT NULL,
  `verse_location` varchar(50) DEFAULT NULL,
  `about_pastor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `church`
--

INSERT INTO `church` (`ID`, `church_name`, `slogan`, `brief_description`, `full_description`, `location`, `pastor`, `church_verse`, `verse_location`, `about_pastor`) VALUES
(2, 'the name of the church', 'we lives are blessed', 'the church for the description ', 'This chruch was grow up from a goo standingpoin og fatin', 'Oyo State', 'Pastor Akinwunmi', 'ask and it shall be given unto you seek and you shall find, know at it shasl be open', 'mathew 7:7', '');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `ID` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime DEFAULT NULL,
  `description` text,
  `host` varchar(500) DEFAULT NULL,
  `comment` text,
  `unit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `ID` int(11) NOT NULL,
  `image_path` varchar(200) NOT NULL,
  `uploaded_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `video` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `ID` int(11) NOT NULL,
  `eventID` int(11) NOT NULL,
  `guest_name` varchar(500) NOT NULL,
  `guest_location` text NOT NULL,
  `guest_title` varchar(20) NOT NULL,
  `about_guest` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `ID` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `headline` varchar(500) NOT NULL,
  `news_content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `ID` int(11) NOT NULL,
  `payer` varchar(200) NOT NULL,
  `purpose` int(11) NOT NULL,
  `amount` double NOT NULL,
  `comment` text,
  `date_paid` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_gateway` text NOT NULL,
  `currency` varchar(20) NOT NULL DEFAULT 'naira'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment_purpose`
--

CREATE TABLE `payment_purpose` (
  `ID` int(11) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sermon`
--

CREATE TABLE `sermon` (
  `ID` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `main_text` text NOT NULL,
  `brief_description` varchar(200) NOT NULL,
  `image_location` varchar(200) DEFAULT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `bible_passages` text,
  `author` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sermon`
--

INSERT INTO `sermon` (`ID`, `title`, `main_text`, `brief_description`, `image_location`, `date_posted`, `status`, `bible_passages`, `author`) VALUES
(1, 'test', 'test', 'test', 'test', '0000-00-00 00:00:00', 1, NULL, ''),
(2, 'testing', 'the content of the message will be here', 'a brief description that will serve as a summary of the message will be shown here', 'upload/images/sermon.png', '0000-00-00 00:00:00', 1, 'Mathew 3:4; james 5:6', ''),
(3, 'testing', 'the content of the message will be here', 'a brief description that will serve as a summary of the message will be shown here', 'upload/images/sermon17-08-06_03-08-33.png', '0000-00-00 00:00:00', 1, 'Mathew 3:4; james 5:6', ''),
(4, 'testing', 'the content of the message will be here', 'a brief description that will serve as a summary of the message will be shown here', 'upload/images/sermon/17-08-06_03-08-00.png', '0000-00-00 00:00:00', 1, 'Mathew 3:4; james 5:6', '');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `ID` int(11) NOT NULL,
  `unit_name` varchar(150) NOT NULL,
  `brief_description` varchar(300) NOT NULL,
  `full_description` text NOT NULL,
  `joining_instruction` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`ID`, `unit_name`, `brief_description`, `full_description`, `joining_instruction`) VALUES
(1, 'uiui', 'uiuiu', 'iuiuiuiu', 'iuiuiu'),
(2, 'Drama', 'the unit for drama minstration', 'hdkkjk', 'jdkjdk');

-- --------------------------------------------------------

--
-- Table structure for table `unit_activity`
--

CREATE TABLE `unit_activity` (
  `ID` int(11) NOT NULL,
  `activity` varchar(200) NOT NULL,
  `week_day` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_login` datetime DEFAULT CURRENT_TIMESTAMP,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `username`, `password`, `last_login`, `date_created`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2017-07-27 08:30:38', '2017-07-27 07:30:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `church`
--
ALTER TABLE `church`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payment_purpose`
--
ALTER TABLE `payment_purpose`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `purpose` (`purpose`);

--
-- Indexes for table `sermon`
--
ALTER TABLE `sermon`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `unit_name` (`unit_name`);

--
-- Indexes for table `unit_activity`
--
ALTER TABLE `unit_activity`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `church`
--
ALTER TABLE `church`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment_purpose`
--
ALTER TABLE `payment_purpose`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sermon`
--
ALTER TABLE `sermon`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `unit_activity`
--
ALTER TABLE `unit_activity`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
