-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 08:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_manage`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_project`
--

CREATE TABLE `m_project` (
  `P_ID` varchar(11) NOT NULL,
  `P_Name` varchar(30) DEFAULT NULL,
  `P_Description` varchar(150) DEFAULT NULL,
  `P_S_D` datetime DEFAULT NULL,
  `P_E_D` datetime DEFAULT NULL,
  `P_Status` tinyint(2) DEFAULT NULL,
  `M_Id` varchar(11) NOT NULL,
  `Created_date` datetime DEFAULT NULL,
  `P_Document` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` varchar(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(35) DEFAULT NULL,
  `ContactNo` char(10) DEFAULT NULL,
  `Gender` char(1) DEFAULT NULL,
  `Doj` datetime DEFAULT NULL,
  `Address` varchar(230) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `role` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_project_view`
--

CREATE TABLE `t_project_view` (
  `P_Id` varchar(11) NOT NULL,
  `M_Id` varchar(11) NOT NULL,
  `PS_Document` text DEFAULT NULL,
  `P_Comment` char(200) DEFAULT NULL,
  `P_Submit` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_task`
--

CREATE TABLE `t_task` (
  `T_Id` varchar(11) NOT NULL,
  `T_Name` varchar(30) DEFAULT NULL,
  `T_Description` varchar(150) DEFAULT NULL,
  `T_S_D` datetime DEFAULT NULL,
  `T_E_D` datetime DEFAULT NULL,
  `T_Status` tinyint(2) DEFAULT NULL,
  `Team_Id` varchar(11) DEFAULT NULL,
  `E_Id` varchar(11) DEFAULT NULL,
  `Created_date` datetime DEFAULT NULL,
  `T_Document` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_task_view`
--

CREATE TABLE `t_task_view` (
  `Team_Id` varchar(11) NOT NULL,
  `E_Id` varchar(11) NOT NULL,
  `M_Id` varchar(11) NOT NULL,
  `TS_Document` text DEFAULT NULL,
  `T_Comment` char(200) DEFAULT NULL,
  `T_Submit` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_team`
--

CREATE TABLE `t_team` (
  `Team_Id` varchar(11) NOT NULL,
  `Team_Name` varchar(30) DEFAULT NULL,
  `E_Id` varchar(11) NOT NULL,
  `M_Id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_project`
--
ALTER TABLE `m_project`
  ADD PRIMARY KEY (`P_ID`,`M_Id`),
  ADD KEY `M_Id` (`M_Id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `t_project_view`
--
ALTER TABLE `t_project_view`
  ADD PRIMARY KEY (`P_Id`,`M_Id`),
  ADD KEY `M_Id` (`M_Id`);

--
-- Indexes for table `t_task`
--
ALTER TABLE `t_task`
  ADD PRIMARY KEY (`T_Id`),
  ADD KEY `Team_Id` (`Team_Id`),
  ADD KEY `E_Id` (`E_Id`);

--
-- Indexes for table `t_task_view`
--
ALTER TABLE `t_task_view`
  ADD PRIMARY KEY (`Team_Id`,`E_Id`,`M_Id`),
  ADD KEY `E_Id` (`E_Id`),
  ADD KEY `M_Id` (`M_Id`);

--
-- Indexes for table `t_team`
--
ALTER TABLE `t_team`
  ADD PRIMARY KEY (`Team_Id`,`E_Id`,`M_Id`),
  ADD KEY `E_Id` (`E_Id`),
  ADD KEY `M_Id` (`M_Id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `m_project`
--
ALTER TABLE `m_project`
  ADD CONSTRAINT `m_project_ibfk_1` FOREIGN KEY (`M_Id`) REFERENCES `registration` (`ID`);

--
-- Constraints for table `t_project_view`
--
ALTER TABLE `t_project_view`
  ADD CONSTRAINT `t_project_view_ibfk_1` FOREIGN KEY (`P_Id`) REFERENCES `m_project` (`P_ID`),
  ADD CONSTRAINT `t_project_view_ibfk_2` FOREIGN KEY (`M_Id`) REFERENCES `registration` (`ID`);

--
-- Constraints for table `t_task`
--
ALTER TABLE `t_task`
  ADD CONSTRAINT `t_task_ibfk_1` FOREIGN KEY (`Team_Id`) REFERENCES `t_team` (`Team_Id`),
  ADD CONSTRAINT `t_task_ibfk_2` FOREIGN KEY (`E_Id`) REFERENCES `registration` (`ID`);

--
-- Constraints for table `t_task_view`
--
ALTER TABLE `t_task_view`
  ADD CONSTRAINT `t_task_view_ibfk_1` FOREIGN KEY (`E_Id`) REFERENCES `registration` (`ID`),
  ADD CONSTRAINT `t_task_view_ibfk_2` FOREIGN KEY (`M_Id`) REFERENCES `registration` (`ID`),
  ADD CONSTRAINT `t_task_view_ibfk_3` FOREIGN KEY (`Team_Id`) REFERENCES `t_team` (`Team_Id`);

--
-- Constraints for table `t_team`
--
ALTER TABLE `t_team`
  ADD CONSTRAINT `t_team_ibfk_1` FOREIGN KEY (`E_Id`) REFERENCES `registration` (`ID`),
  ADD CONSTRAINT `t_team_ibfk_2` FOREIGN KEY (`M_Id`) REFERENCES `registration` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
