-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 10:49 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project wt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `Admin_ID` int(10) NOT NULL,
  `Admin_Fname` varchar(50) NOT NULL,
  `Admin_Sname` varchar(50) NOT NULL,
  `Admin_Email` varchar(50) NOT NULL,
  `Admin_Number` varchar(50) NOT NULL,
  `Admin_Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`Admin_ID`, `Admin_Fname`, `Admin_Sname`, `Admin_Email`, `Admin_Number`, `Admin_Pass`) VALUES
(1, 'Kapil', 'Kathiriya', 'admin5@gmail.com', '7856421302', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `movies_details`
--

CREATE TABLE `movies_details` (
  `Mv_Id` int(10) NOT NULL,
  `Mv_Name` varchar(50) NOT NULL,
  `Mv_Language` varchar(50) NOT NULL,
  `Mv_Date` varchar(50) NOT NULL,
  `Mv_Video` varchar(255) NOT NULL,
  `Mv_Poster` varchar(255) NOT NULL,
  `Mv_Banner` varchar(255) NOT NULL,
  `Mv_Des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies_details`
--

INSERT INTO `movies_details` (`Mv_Id`, `Mv_Name`, `Mv_Language`, `Mv_Date`, `Mv_Video`, `Mv_Poster`, `Mv_Banner`, `Mv_Des`) VALUES
(8, 'Bahubali', 'Hindi', '13-08-2018', '01 Bahubali.mp4', '01 Bahubali Poster.jpg', '01 Bahubali Banner .jpg', 'The Kingdom of Mahishmati is ruled by queen Sivagami (Ramya) who is married to Bijjaladeva (Nassar). She takes charge of the kingdom when Amarendra Baahubali’s (Prabhas) mother passes away during labour.'),
(10, 'Dabang', 'Hindi', '03-05-2016', '03 Dabang.mp4', '03 dabaang Poster .jpg', '03 Dabang Banner .jpg', 'Dabangg is a series of Indian Hindi-language action comedy films produced in common by Arbaaz Khan, starring Salman Khan as the titular cop Chulbul Pandey, Sonakshi Sinha as his love interest Rajjo Pandey, '),
(11, 'Dhakad', 'Hindi', '12-12-2012', '04 Dhakad.mp4', '04 Dhakad Poster.jpg', '04 Dhakad Banner .png', 'Dhaakad is a movie which is starring Bollywoods most talented actress Kangana Ranaut in a different role. It is a dramatic movie and the director is Razneesh Ghai'),
(12, 'Avengare Endgame', 'English', '24-08-2020', '05 Endgame.mp4', '05 endgame Poster.jpg', '05 Endgame Banner .jpg', 'Avengers: Endgame is a 2019 American superhero film based on the Marvel Comics superhero team the Avengers. Produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures, it is the direct sequel to Avengers: Infinity War (2018) and the'),
(13, 'Gold', 'Hindi', '12-05-2018', '06 Gold.mp4', '06 gold Poster .jpg', '06 Gold Banner.jpg', 'It is based on the journey of Indias first national hockey team to the 1948 Summer Olympics and stars Akshay Kumar as Tapan Das, the man who won India its first gold medal in the 1948 Summer Olympics.'),
(14, 'KabirSingh', 'Hindi', '12-05-2019', '07 Kabir Singh.mp4', '07 Kabirsingh Poster .jpg', '07 KabirSIngh Banner  .jpg', ' Kabir, a genius yet hostile medical student, falls in love with Preeti from his college. When Preetis father spots the couple kissing, he opposes their relationship and decides to marry her off.');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `User_Id` int(10) NOT NULL,
  `User_Fname` varchar(50) NOT NULL,
  `User_Sname` varchar(50) NOT NULL,
  `User_Email` varchar(50) NOT NULL,
  `User_Number` varchar(50) NOT NULL,
  `User_Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`User_Id`, `User_Fname`, `User_Sname`, `User_Email`, `User_Number`, `User_Pass`) VALUES
(1, 'Kapil', 'Kathiriya', 'kapil5@gmail.com', '7203005011', '1234567'),
(2, 'Maulik', 'Dudhat', 'maulik1@gmail.com', '9874563215', '1234567'),
(3, 'Sagar', 'Thummar', 'sagar@gmail.com', '6532145687', '9639639'),
(4, 'Rutvik', 'Vaghani', 'rutvik@gmail.com', '6543214563', '1471471');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `movies_details`
--
ALTER TABLE `movies_details`
  ADD PRIMARY KEY (`Mv_Id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `Admin_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `movies_details`
--
ALTER TABLE `movies_details`
  MODIFY `Mv_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `User_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
