-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2017 at 04:12 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computer`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `did` int(11) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `mid` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`did`, `dname`, `mid`) VALUES
(1, 'health', 'sci002'),
(2, 'heee', 'm002'),
(5, 'Sports', 'sci001');

-- --------------------------------------------------------

--
-- Table structure for table `diploma`
--

CREATE TABLE `diploma` (
  `dipid` varchar(20) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `semid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diploma`
--

INSERT INTO `diploma` (`dipid`, `dname`, `semid`) VALUES
('h001', 'english', '5'),
('h004', 'computer', '1');

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `eid` int(11) NOT NULL,
  `mid` varchar(50) NOT NULL,
  `ename1` varchar(50) NOT NULL,
  `ename2` varchar(50) NOT NULL,
  `gndr` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `slr` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `mid` varchar(20) NOT NULL,
  `sid` int(11) NOT NULL,
  `mtitle` varchar(60) NOT NULL,
  `mcredits` int(11) NOT NULL,
  `mcordinator` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`mid`, `sid`, `mtitle`, `mcredits`, `mcordinator`) VALUES
('cs001', 3, 'computer science', 78, ''),
('fcs003', 2, 'MIT', 100, ''),
('m001', 3, 'computer science', 60, ''),
('m002', 2, 'MIT', 40, 'perera');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `sid` varchar(20) NOT NULL,
  `startdate` date NOT NULL,
  `endate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`sid`, `startdate`, `endate`) VALUES
('0', '2016-10-12', '2016-10-12'),
('222', '0000-00-00', '0000-00-00'),
('3', '0000-00-00', '0000-00-00'),
('5', '2016-10-12', '2016-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `std_performence`
--

CREATE TABLE `std_performence` (
  `sid` int(11) NOT NULL,
  `mid` varchar(20) NOT NULL,
  `grd` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_performence`
--

INSERT INTO `std_performence` (`sid`, `mid`, `grd`) VALUES
(111, 'm003', 'a'),
(111, 'm003', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stdid` int(11) NOT NULL,
  `fstnm` varchar(50) NOT NULL,
  `lstnm` varchar(50) NOT NULL,
  `dipid` varchar(20) NOT NULL,
  `add1` varchar(50) NOT NULL,
  `sdd2` varchar(50) NOT NULL,
  `add3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stdid`, `fstnm`, `lstnm`, `dipid`, `add1`, `sdd2`, `add3`) VALUES
(2, 'dfdf', 'dfdf', '2', 'fghdgfd', 'vcv', 'vcvc'),
(3, 'pasindu', 'senarath', '1', 'dsds', 'sdsd', 'dsds');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `passcode` varchar(40) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `passcode`, `name`) VALUES
(1, 'admin', '123', 'admin'),
(2, 'Chathu', 'chathu123', 'chathurika'),
(4, 'pasi', '4567 ', 'Pasindu'),
(5, 'pasi', '4567 ', 'Pasindu'),
(6, 'pasi', '4567 ', 'Pasindu'),
(7, 'pasi', '4567 ', 'Pasindu'),
(8, 'damen', '1234567 ', 'Ian'),
(9, 'damen', '1234567 ', 'Ian'),
(10, 'damen', '1234567 ', 'Ian'),
(11, 'damen', '1234567 ', 'Ian'),
(12, 'damen', '1234567 ', 'Ian'),
(13, 'damen', '1234567 ', 'Ian'),
(14, 'damen', '1234567 ', 'Ian'),
(15, 'Barry', 'flash ', 'Grant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `diploma`
--
ALTER TABLE `diploma`
  ADD PRIMARY KEY (`dipid`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`eid`),
  ADD KEY `f_key-lecture-module` (`mid`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`mid`),
  ADD KEY `f_key-module-student` (`sid`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stdid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lectures`
--
ALTER TABLE `lectures`
  ADD CONSTRAINT `f_key-lecture-module` FOREIGN KEY (`mid`) REFERENCES `modules` (`mid`);

--
-- Constraints for table `modules`
--
ALTER TABLE `modules`
  ADD CONSTRAINT `f_key-module-student` FOREIGN KEY (`sid`) REFERENCES `students` (`stdid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
