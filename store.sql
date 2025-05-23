-- phpMyAdmin SQL Dump
-- version 2.11.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2025 at 11:43 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendanceid` int(11) NOT NULL,
  `studentid` int(25) NOT NULL,
  `courseid` int(25) NOT NULL,
  `attendancedate` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `attendancestatus` varchar(250) NOT NULL,
  PRIMARY KEY  (`attendanceid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendanceid`, `studentid`, `courseid`, `attendancedate`, `attendancestatus`) VALUES
(0, 45, 0, '2025-05-10 08:00:21', '34'),
(34, 45, 0, '2025-05-10 07:45:59', '34'),
(90, 200, 50, '2025-05-10 06:57:01', '34');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseid` int(23) NOT NULL,
  `coursename` varchar(250) NOT NULL,
  `coursedescription` varchar(250) NOT NULL,
  `duration` varchar(250) NOT NULL,
  PRIMARY KEY  (`courseid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseid`, `coursename`, `coursedescription`, `duration`) VALUES
(0, '', '', '3'),
(45, 'python', 'african wars', '3'),
(50, 'databaser', 'american story', '67'),
(54, 'python', '', '3'),
(66, 'python', 'african ', '3');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `gradeid` int(23) NOT NULL,
  `studentid` int(250) default NULL,
  `courseid` int(250) default NULL,
  `examdate` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `grade` varchar(250) NOT NULL,
  PRIMARY KEY  (`gradeid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`gradeid`, `studentid`, `courseid`, `examdate`, `grade`) VALUES
(56, 200, 50, '2025-05-10 22:02:07', 'w'),
(434, 200, 50, '2025-05-12 13:31:56', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `studentid` varchar(45) NOT NULL,
  `fristname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `dateofbirth` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `contactnumber` int(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `adress` varchar(250) NOT NULL,
  `enrollementdate` varchar(250) NOT NULL,
  PRIMARY KEY  (`studentid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentid`, `fristname`, `lastname`, `gender`, `dateofbirth`, `contactnumber`, `email`, `adress`, `enrollementdate`) VALUES
('200', 'dieudonne', 'iiradukunda', 'male', '2025-05-10 06:36:19', 798982923, 'naome@gmail.com', 'nyagatare', '2025-05-29'),
('434', 'dieudonne', 'iiradukunda', 'male', '2025-05-09 23:12:35', 798982923, 'naome@gmail.com', 'nyagatare', ''),
('45', 'dieudonne', 'iiradukunda', 'male', '2025-05-09 23:10:32', 780601137, 'dieudonneiradukunda20@gmail.com', 'nyagatare', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(25) NOT NULL auto_increment,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY  (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`) VALUES
(1, 'leon', '12345');
