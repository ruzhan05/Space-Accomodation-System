-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 09:16 PM
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
-- Database: `loginpage1`
--

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Contact_No` int(50) NOT NULL,
  `Email_ID` varchar(255) NOT NULL,
  `Course_Name` varchar(255) NOT NULL,
  `Course_Date` date NOT NULL,
  `Start_time` time(6) NOT NULL,
  `End_Time` time(6) NOT NULL,
  `Room_No` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`Id`, `FirstName`, `LastName`, `Contact_No`, `Email_ID`, `Course_Name`, `Course_Date`, `Start_time`, `End_Time`, `Room_No`) VALUES
(1, 'adswwww', 'asdds', 12312, 'adibnihal10@gmail.com', 'utm', '2022-07-05', '15:41:00.000000', '14:40:00.000000', '212'),
(2, 'adswwww', 'asdds', 12312, 'adibnihal10@gmail.com', 'utm', '2022-07-05', '15:41:00.000000', '14:40:00.000000', '212'),
(3, 'ads', 'asdds', 12312, 'adibnihal@yahoo.com', 'utm', '2022-07-19', '14:47:00.000000', '14:48:00.000000', '212'),
(4, 'ruzhan', 'islam', 12312123, 'adibnihal10@gmail.commmm', 'WEB', '2022-07-14', '14:38:00.000000', '05:40:00.000000', '315'),
(5, 'ruzhan2', 'islam', 12312123, 'adibnihal10@gmail.commmmrr', 'webb', '2022-07-20', '03:45:00.000000', '00:44:00.000000', '101');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
