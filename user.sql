-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2019 at 04:15 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_Id` int(11) NOT NULL,
  `User_name` varchar(40) NOT NULL,
  `Login_Id` varchar(40) NOT NULL,
  `User_password` varchar(40) NOT NULL,
  `Account_type` varchar(20) NOT NULL,
  `Balance` int(20) NOT NULL DEFAULT '2000',
  `Time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_Id`, `User_name`, `Login_Id`, `User_password`, `Account_type`, `Balance`, `Time_created`) VALUES
(1, 'Jayn Gale', 'galejayn@hotmail.com', 'asdjs', 'SAVING', 30000, '2019-09-04 18:06:59'),
(1000, 'Jaynil', 'jaynil@gmail.com', 'admin123', 'CURRENT', 39082, '2019-09-04 12:17:50'),
(1001, 'Harikishan', 'harikishan99@gmail.com', 'kishan2290', 'SAVING', 409300, '2019-09-03 15:03:22'),
(1002, 'Vineet', 'vinit02@hotmail.com', 'vinit399JY', 'CURRENT', 39082, '2019-09-03 15:03:22'),
(1003, 'Rajan', 'Rajan19@yahoo.com', 'rajan49901', 'SAVING', 87877, '2019-09-03 15:03:22'),
(1010, 'SBSJ', 'hhh@yahoo.com', 'addwdaw', 'CURRENT', 200000, '2019-09-04 18:10:52'),
(1011, 'Rahul', 'rahul512@gmail.com', 'rahul125', 'CURRENT', 45005, '2019-09-04 18:17:10');

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_view`
-- (See below for the actual view)
--
CREATE TABLE `user_view` (
`User_Id` int(11)
,`User_name` varchar(40)
,`Login_Id` varchar(40)
,`User_password` varchar(40)
,`Account_type` varchar(20)
,`Balance` int(20)
,`Time_created` timestamp
);

-- --------------------------------------------------------

--
-- Structure for view `user_view`
--
DROP TABLE IF EXISTS `user_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_view`  AS  select `users`.`User_Id` AS `User_Id`,`users`.`User_name` AS `User_name`,`users`.`Login_Id` AS `Login_Id`,`users`.`User_password` AS `User_password`,`users`.`Account_type` AS `Account_type`,`users`.`Balance` AS `Balance`,`users`.`Time_created` AS `Time_created` from `users` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1012;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
