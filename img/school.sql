-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 04:28 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladminpost`
--

CREATE TABLE `tbladminpost` (
  `postID` int(11) NOT NULL,
  `postTitle` text NOT NULL,
  `postWritten` text NOT NULL,
  `postBody` mediumtext NOT NULL,
  `postDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladminpost`
--

INSERT INTO `tbladminpost` (`postID`, `postTitle`, `postWritten`, `postBody`, `postDate`) VALUES
(2, 'Wag Ka Nang Umiyak', 'Gary Valenciano', 'Wag ka nang umiyak\r\nsa mundong pabago-bago\r\nPag-ibig ko ay totoo\r\nAko ang iyong bangka\r\nkung magalit man ang alon\r\nNg panahon, sabay tayong aahon\r\n\r\nKung wala ka nang maintindihan\r\nKung wala ka nang makapitan\r\nKapit ka sa akin, kapit ka sa akin\r\nDi kita bibitawan\r\nWag kang umiyak, mahaba man ang araw\r\n\r\nuuwi ka sa yakap ko\r\nWag mo nang damdamin\r\nkung wala ako sayong tabi\r\niiwan kong puso ko sa yo\r\nAt kung pakiramdam mo\'y\r\nwala ka nang kakampi\r\nisipin mo ako\r\ndahil puso\'t isip ko\'y nasa yong tabi\r\n\r\nKung wala ka nang maintindihan\r\nKung wala ka nang makapitan\r\nKapit ka sa akin, kapit ka sa akin\r\nDi kita bibitawan\r\n(Woah woah woah, woah oh oh)\r\nKung wala ka nang maintindihan\r\nKung wala ka nang makapitan\r\nKapit ka sa akin, kumapit ka sa akin\r\n\r\n\r\n\r\n\r\n', '2018-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `tbladminuser`
--

CREATE TABLE `tbladminuser` (
  `adminID` int(11) NOT NULL,
  `adminFirst` text CHARACTER SET utf16 NOT NULL,
  `adminLast` text CHARACTER SET utf16 NOT NULL,
  `adminRole` text CHARACTER SET utf16 NOT NULL,
  `adminDateReg` date NOT NULL,
  `adminPass` text CHARACTER SET utf16 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladminuser`
--

INSERT INTO `tbladminuser` (`adminID`, `adminFirst`, `adminLast`, `adminRole`, `adminDateReg`, `adminPass`) VALUES
(123450, 'Junriel ', 'Mandawe', 'Teacher', '2018-09-21', '73bb9821c3da389884bd85efb3df6e30'),
(123456, 'Honeylet', 'Borgonia', 'Teacher', '2018-10-09', '3355d92c04a3332339b767f9278405ff'),
(222332, 'Megaman ', 'Light', 'Robot', '2018-10-09', 'f9b182eda97ebfd5ccec7af84b436c03'),
(236824, 'Kim Therese', 'Borgonia', 'Student', '2018-09-24', 'edb341b67b2c0affd7b2608d38eddec5'),
(333333, 'Marlon', 'Suazo', 'Teacher', '2018-10-02', '78200b1ed79ca206b4cedc95c1bbf617'),
(333456, 'Mario', 'Roel', 'Teacher', '2018-09-21', 'd245e2bbc61804a5a487ef0a6688e375'),
(999888, 'Kirtsy', 'Mayol', 'Teacher', '2018-10-02', '257987985bacec94dfbdbd03251a395a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladminpost`
--
ALTER TABLE `tbladminpost`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `tbladminuser`
--
ALTER TABLE `tbladminuser`
  ADD PRIMARY KEY (`adminID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladminpost`
--
ALTER TABLE `tbladminpost`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
