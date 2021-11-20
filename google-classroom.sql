-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2021 at 01:33 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `google-classroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(11) NOT NULL,
  `Admin_Name` varchar(20) NOT NULL,
  `Admin_Email_Address` varchar(50) NOT NULL,
  `Admin_Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Admin_Name`, `Admin_Email_Address`, `Admin_Password`) VALUES
(70317, '', 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `Class_Code` int(11) NOT NULL,
  `Teacher_Email_Address` varchar(50) DEFAULT NULL,
  `Class_Name` varchar(20) NOT NULL,
  `Class_Section` varchar(20) DEFAULT NULL,
  `Class_Subject` varchar(225) DEFAULT NULL,
  `Class_Room` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`Class_Code`, `Teacher_Email_Address`, `Class_Name`, `Class_Section`, `Class_Subject`, `Class_Room`) VALUES
(1, 'a@gmail.com', 'a', 'b', 'This is the google classroom for the subject - a', 'd'),
(2, 'test@gmail.com', 'Second Test', 'TT98V', 'This is the google classroom for the subject - Second Test', 'LVA999'),
(4, 'test@gmail.com', 'First Test', 'TT99V', 'This is the google classroom for the subject - First Test', 'LVA998'),
(5, 'a@gmail.com', 'Third Try', 'TT4V', 'This is the google classroom for the subject - Third Try', 'LVA998');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_ID` int(11) NOT NULL,
  `Student_Name` varchar(20) DEFAULT NULL,
  `Student_Email_Address` varchar(50) NOT NULL,
  `Student_Password` varchar(20) NOT NULL,
  `Student_ClassroomCode` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_ID`, `Student_Name`, `Student_Email_Address`, `Student_Password`, `Student_ClassroomCode`) VALUES
(1, NULL, 'b@gmail.com', '123', NULL),
(2, NULL, 'c@gmail.com', '123', NULL),
(23, NULL, 'b@gmail.com', '123', 2),
(30, NULL, 'b@gmail.com', '123', 1),
(31, NULL, 'b@gmail.com', '123', 5),
(32, NULL, 'c@gmail.com', '123', 4),
(33, NULL, 'c@gmail.com', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Teacher_ID` int(11) NOT NULL,
  `Teacher_Name` varchar(20) DEFAULT NULL,
  `Teacher_Email_Address` varchar(50) NOT NULL,
  `Teacher_Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Teacher_ID`, `Teacher_Name`, `Teacher_Email_Address`, `Teacher_Password`) VALUES
(21, NULL, 'a@gmail.com', '123'),
(23, NULL, 'test@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`Class_Code`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Teacher_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70318;

--
-- AUTO_INCREMENT for table `classroom`
--
ALTER TABLE `classroom`
  MODIFY `Class_Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Student_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `Teacher_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
