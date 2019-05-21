-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 04:41 PM
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
(12, 'a', 'a', 'a', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbladminuser`
--

CREATE TABLE `tbladminuser` (
  `adminID` bigint(20) NOT NULL,
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
(123450, 'Junriel ', 'Mandawe', 'Teacher', '2018-09-21', 'd245e2bbc61804a5a487ef0a6688e375'),
(123456, 'Honeylet', 'Borgonia', 'Teacher', '2018-10-09', 'e02d271f78199e97bfffb31b0f91096d'),
(222332, 'Megaman ', 'Light', 'Robot', '2018-10-09', 'f9b182eda97ebfd5ccec7af84b436c03'),
(236824, 'Kim Therese', 'Borgonia', 'Student', '2018-09-24', 'edb341b67b2c0affd7b2608d38eddec5'),
(333333, 'Marlon', 'Suazo', 'Teacher', '2018-10-02', '78200b1ed79ca206b4cedc95c1bbf617'),
(333456, 'Mario', 'Dalisay', 'Teacher', '2018-09-21', 'de2f15d014d40b93578d255e6221fd60'),
(999888, 'Kirtsy', 'Mayol', 'Teacher', '2018-10-02', '257987985bacec94dfbdbd03251a395a');

-- --------------------------------------------------------

--
-- Table structure for table `tblattendance`
--

CREATE TABLE `tblattendance` (
  `attdIDno` bigint(12) NOT NULL,
  `attdJunP` tinyint(4) NOT NULL,
  `attdJulP` tinyint(4) NOT NULL,
  `attdAugP` tinyint(4) NOT NULL,
  `attdSeptP` tinyint(4) NOT NULL,
  `attdOctP` tinyint(4) NOT NULL,
  `attdNovP` tinyint(4) NOT NULL,
  `attdDecP` tinyint(4) NOT NULL,
  `attdJanP` tinyint(4) NOT NULL,
  `attdFebP` tinyint(4) NOT NULL,
  `attdMarP` tinyint(4) NOT NULL,
  `attdAprP` tinyint(4) NOT NULL,
  `attdTotalP` tinyint(4) NOT NULL,
  `attdJunA` tinyint(4) NOT NULL,
  `attdJulA` tinyint(4) NOT NULL,
  `attdAugA` tinyint(4) NOT NULL,
  `attdSeptA` tinyint(4) NOT NULL,
  `attdOctA` tinyint(4) NOT NULL,
  `attdNovA` tinyint(4) NOT NULL,
  `attdDecA` tinyint(4) NOT NULL,
  `attdJanA` tinyint(4) NOT NULL,
  `attdFebA` tinyint(4) NOT NULL,
  `attdMarA` tinyint(4) NOT NULL,
  `attdAprA` tinyint(4) NOT NULL,
  `attdTotalA` tinyint(4) NOT NULL,
  `attdStdID` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblattendance`
--

INSERT INTO `tblattendance` (`attdIDno`, `attdJunP`, `attdJulP`, `attdAugP`, `attdSeptP`, `attdOctP`, `attdNovP`, `attdDecP`, `attdJanP`, `attdFebP`, `attdMarP`, `attdAprP`, `attdTotalP`, `attdJunA`, `attdJulA`, `attdAugA`, `attdSeptA`, `attdOctA`, `attdNovA`, `attdDecA`, `attdJanA`, `attdFebA`, `attdMarA`, `attdAprA`, `attdTotalA`, `attdStdID`) VALUES
(21, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 11, 121210389520),
(22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 222222222123),
(23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblgradeshs`
--

CREATE TABLE `tblgradeshs` (
  `grdSIDno` bigint(11) NOT NULL,
  `grdID` bigint(12) NOT NULL,
  `grdSSubCode` int(11) NOT NULL,
  `grdSubNameF` text NOT NULL,
  `grdSFirstQtrOne` double NOT NULL,
  `grdSSecondQtrOne` float NOT NULL,
  `grdSFinalGrdOne` float NOT NULL,
  `grdSGenAveOne` float NOT NULL,
  `grdSSubCodeT` int(11) NOT NULL,
  `grdSubNameS` text NOT NULL,
  `grdSFirstQtrTwo` float NOT NULL,
  `grdSSecondQtrTwo` float NOT NULL,
  `grdSFinalGrdTwo` float NOT NULL,
  `grdSGenAveTwo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblgradeshs`
--

INSERT INTO `tblgradeshs` (`grdSIDno`, `grdID`, `grdSSubCode`, `grdSubNameF`, `grdSFirstQtrOne`, `grdSSecondQtrOne`, `grdSFinalGrdOne`, `grdSGenAveOne`, `grdSSubCodeT`, `grdSubNameS`, `grdSFirstQtrTwo`, `grdSSecondQtrTwo`, `grdSFinalGrdTwo`, `grdSGenAveTwo`) VALUES
(121210389520, 55, 1101, 'Science        ', 80, 80, 80, 84, 1110, 'Sibika at Cultura        ', 80, 80, 80, 80),
(121210389520, 56, 1102, 'Math        ', 81, 81, 81, 84, 1111, 'Programming C        ', 80, 80, 80, 80),
(121210389520, 57, 1103, 'English        ', 82, 82, 82, 84, 1112, 'Programming Java        ', 80, 80, 80, 80),
(121210389520, 58, 1104, 'Filipino        ', 83, 83, 83, 84, 1113, 'C#        ', 80, 80, 80, 80),
(121210389520, 59, 1105, 'Computer        ', 84, 84, 84, 84, 1114, 'PLD        ', 80, 80, 80, 80),
(121210389520, 60, 1106, 'Araling Panlipunan        ', 85, 85, 85, 84, 1115, 'Makabatan        ', 80, 80, 80, 80),
(121210389520, 61, 1107, 'Hekasi        ', 86, 86, 86, 84, 1116, 'EPP        ', 80, 80, 80, 80),
(121210389520, 62, 1108, 'TLE        ', 87, 87, 87, 84, 1117, 'Calculus        ', 80, 80, 80, 80),
(121210389520, 63, 1109, 'Research        ', 88, 88, 88, 84, 1118, 'P.E        ', 80, 80, 80, 80),
(222222222123, 64, 1101, 'Science        ', 80, 80, 80, 80, 1110, 'Sibika at Cultura        ', 81, 81, 81, 81),
(222222222123, 65, 1102, 'Math        ', 80, 80, 80, 80, 1111, 'Programming C        ', 81, 81, 81, 81),
(222222222123, 66, 1103, 'English        ', 80, 80, 80, 80, 1112, 'Programming Java        ', 81, 81, 81, 81),
(222222222123, 67, 1104, 'Filipino        ', 80, 80, 80, 80, 1113, 'C#        ', 81, 81, 81, 81),
(222222222123, 68, 1105, 'Computer        ', 80, 80, 80, 80, 1114, 'PLD        ', 81, 81, 81, 81),
(222222222123, 69, 1106, 'Araling Panlipunan        ', 80, 80, 80, 80, 1115, 'Makabatan        ', 81, 81, 81, 81),
(222222222123, 70, 1107, 'Hekasi        ', 80, 80, 80, 80, 1116, 'EPP        ', 81, 81, 81, 81),
(222222222123, 71, 1108, 'TLE        ', 80, 80, 80, 80, 1117, 'Calculus        ', 81, 81, 81, 81),
(222222222123, 72, 1109, 'Research        ', 80, 80, 80, 80, 1118, 'P.E        ', 81, 81, 81, 81);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `stdIDno` bigint(20) NOT NULL,
  `stdLastName` text NOT NULL,
  `stdFirstName` text NOT NULL,
  `stdMiddleName` text NOT NULL,
  `stdDateBirth` date NOT NULL,
  `stdAge` int(11) NOT NULL,
  `stdSex` tinytext,
  `stdGrade` int(11) NOT NULL,
  `stdSection` text NOT NULL,
  `stdSchoolYear` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`stdIDno`, `stdLastName`, `stdFirstName`, `stdMiddleName`, `stdDateBirth`, `stdAge`, `stdSex`, `stdGrade`, `stdSection`, `stdSchoolYear`) VALUES
(1111111111, 'ab', 'a', 'a', '2018-02-02', 20, 'M', 5, 'a', '2018'),
(99999999999, 'ka', 'ka', 'ka', '2011-02-02', 3, 'M', 3, 'White', '2011'),
(121210389520, 'Dumaguit', 'Pinuno', 'Dalisay', '2015-12-03', 50, 'M', 2, 'white', '2003'),
(128524070007, 'lo', 'lo', 'l', '1995-02-02', 2, 'M', 12, 'White', '2012'),
(222222222123, 'Dalisay', 'Cardo ', 'R', '2011-02-01', 13, 'M', 1, 'white', '2012'),
(444555111000, 'Ronald', 'Roanld', 'Pioa', '2013-12-02', 13, 'M', 2, 'White', '2011'),
(555555555555, 'bubbles', 'bubbles', 'C', '2011-05-16', 20, 'M', 12, 'blue', 'blue'),
(808080808080, 'a', 'a', 'Flower', '0000-00-00', 1, 'M', 0, 'White', '2020'),
(808080808081, '', 'a', 'Flower', '0000-00-00', 1, 'M', 0, 'White', 'White');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubject`
--

CREATE TABLE `tblsubject` (
  `subCode` int(11) NOT NULL,
  `subTitle` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubject`
--

INSERT INTO `tblsubject` (`subCode`, `subTitle`) VALUES
(1101, 'Science'),
(1102, 'Math'),
(1103, 'English'),
(1104, 'Filipino'),
(1105, 'Computer'),
(1106, 'Araling Panlipunan'),
(1107, 'Hekasi'),
(1108, 'TLE'),
(1109, 'Research'),
(1110, 'Sibika at Cultura'),
(1111, 'Programming C'),
(1112, 'Programming Java'),
(1113, 'C#'),
(1114, 'PLD'),
(1115, 'Makabatan'),
(1116, 'EPP'),
(1117, 'Calculus'),
(1118, 'P.E');

-- --------------------------------------------------------

--
-- Table structure for table `tblteacher`
--

CREATE TABLE `tblteacher` (
  `tchIDno` bigint(20) NOT NULL,
  `tchFirstName` text NOT NULL,
  `tchLastName` text NOT NULL,
  `tchMiddleName` text NOT NULL,
  `tchstdIDno` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblteacher`
--

INSERT INTO `tblteacher` (`tchIDno`, `tchFirstName`, `tchLastName`, `tchMiddleName`, `tchstdIDno`) VALUES
(111222333442, 'Lito', 'Lapid', 'C', 0),
(111222330255, 'Patriarca', 'Honeylet', 'A', 121210389520);

-- --------------------------------------------------------

--
-- Table structure for table `tblvalues`
--

CREATE TABLE `tblvalues` (
  `valIDno` bigint(12) NOT NULL,
  `valStdID` bigint(11) NOT NULL,
  `valMKDPtIQtI` tinytext NOT NULL,
  `valMKDPtIQtII` tinytext NOT NULL,
  `valMKDPtIQtIII` tinytext NOT NULL,
  `valMKDPtIQtIV` tinytext NOT NULL,
  `valMKDPtIIQtI` tinytext NOT NULL,
  `valMKDPtIIQtII` tinytext NOT NULL,
  `valMKDPtIIQtIII` tinytext NOT NULL,
  `valMKDPtIIQtIV` tinytext NOT NULL,
  `valMKTPtIQtI` tinytext,
  `valMKTPtIQtII` tinytext,
  `valMKTPtIQtIII` tinytext,
  `valMKTPtIQtIV` tinytext,
  `valMKTPtIIQtI` tinytext,
  `valMKTPtIIQtII` tinytext,
  `valMKTPtIIQtIII` tinytext,
  `valMKTPtIIQtIV` tinytext,
  `valMKKKQtI` tinytext,
  `valMKKKQtII` tinytext,
  `valMKKKQtIII` tinytext,
  `valMKKKQtIV` tinytext,
  `valMKBPtIQtI` tinytext,
  `valMKBPtIQtII` tinytext,
  `valMKBPtIQtIII` tinytext,
  `valMKBPtIQtIV` tinytext,
  `valMKBPtIIQtI` tinytext,
  `valMKBPtIIQtII` tinytext,
  `valMKBPtIIQtIII` tinytext,
  `valMKBPtIIQtIV` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvalues`
--

INSERT INTO `tblvalues` (`valIDno`, `valStdID`, `valMKDPtIQtI`, `valMKDPtIQtII`, `valMKDPtIQtIII`, `valMKDPtIQtIV`, `valMKDPtIIQtI`, `valMKDPtIIQtII`, `valMKDPtIIQtIII`, `valMKDPtIIQtIV`, `valMKTPtIQtI`, `valMKTPtIQtII`, `valMKTPtIQtIII`, `valMKTPtIQtIV`, `valMKTPtIIQtI`, `valMKTPtIIQtII`, `valMKTPtIIQtIII`, `valMKTPtIIQtIV`, `valMKKKQtI`, `valMKKKQtII`, `valMKKKQtIII`, `valMKKKQtIV`, `valMKBPtIQtI`, `valMKBPtIQtII`, `valMKBPtIQtIII`, `valMKBPtIQtIV`, `valMKBPtIIQtI`, `valMKBPtIIQtII`, `valMKBPtIIQtIII`, `valMKBPtIIQtIV`) VALUES
(23, 121210389520, 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'B', 'B', 'B', 'B', ' B', 'B', 'B', 'B', '  B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B'),
(24, 222222222123, 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', ' A', 'A', 'A', 'A', '  A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'D'),
(25, 0, '', '', '', '', '', '', '', '', '', '', '', ' ', '', '', '', '  ', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 0, '', '', '', '', '', '', '', '', '', '', '', ' ', '', '', '', '  ', '', '', '', '', '', '', '', '', '', '', '', '');

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
-- Indexes for table `tblattendance`
--
ALTER TABLE `tblattendance`
  ADD PRIMARY KEY (`attdIDno`),
  ADD KEY `attdStdID` (`attdIDno`);

--
-- Indexes for table `tblgradeshs`
--
ALTER TABLE `tblgradeshs`
  ADD PRIMARY KEY (`grdID`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`stdIDno`);

--
-- Indexes for table `tblsubject`
--
ALTER TABLE `tblsubject`
  ADD KEY `subCode` (`subCode`);

--
-- Indexes for table `tblteacher`
--
ALTER TABLE `tblteacher`
  ADD KEY `tchIDno` (`tchIDno`);

--
-- Indexes for table `tblvalues`
--
ALTER TABLE `tblvalues`
  ADD PRIMARY KEY (`valIDno`),
  ADD KEY `valStdID` (`valIDno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladminpost`
--
ALTER TABLE `tbladminpost`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblattendance`
--
ALTER TABLE `tblattendance`
  MODIFY `attdIDno` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tblgradeshs`
--
ALTER TABLE `tblgradeshs`
  MODIFY `grdID` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `tblvalues`
--
ALTER TABLE `tblvalues`
  MODIFY `valIDno` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
