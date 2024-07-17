-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 09:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycode`
--

-- --------------------------------------------------------

--
-- Table structure for table `demologin`
--

CREATE TABLE `demologin` (
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demologin`
--

INSERT INTO `demologin` (`first_name`, `last_name`, `phone`, `email`, `password`, `gender`) VALUES
('Avadhut', 'Chavan', '9325153020', 'avadhutchavan9999@gmail.com', 'avadhut2002', 'Male'),
('Harshwardhan', 'Bhosale', '7788608565', 'harshbhosale1818@gmail.com', 'harsh@123', 'Male'),
('Parth ', 'Jadhav', '8899663322', 'parth3223@gmail.com', 'djsai', 'Male'),
('Rafik ', 'Sutar', '6985234568', 'rafik785@gmail.com', 'rafik3442', 'Male'),
('Rushikesh', 'Nikam', '7844659825', 'rushinikam9034@gmail.com', 'rushi9034', 'Male'),
('Saee', 'sirnaik', '521411145641512', 'saee88@gmail.com', '445566', 'Female'),
('Sakshi', 'Patil', '3682157887', 'sakshi3020@gamil.com', 'patilsakshi', 'Female'),
('Sangram', 'Mahadik', '88554488', 'sangram60@gmail.com', '12345', 'Male'),
('Sumit', 'Koli', '7558585840', 'sumitkoli786@gmail.com', 'KOLISUMIT', 'Male'),
('Swapnil ', 'Patil ', '8965325485', 'swapnilpatil2004@gmail.com', 'swapnil@2002', 'Male'),
('Vishal ', 'Sirnaik', '4569826515', 'vishalsirnaik7548@gmail.com', 'vishal1992', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demologin`
--
ALTER TABLE `demologin`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
