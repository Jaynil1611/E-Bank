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
-- Database: `user_account`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `current_account`
-- (See below for the actual view)
--
CREATE TABLE `current_account` (
`User_Id` int(11)
,`User_name` varchar(40)
,`Account_type` varchar(20)
,`Balance` int(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `saving_account`
-- (See below for the actual view)
--
CREATE TABLE `saving_account` (
`User_Id` int(11)
,`User_name` varchar(40)
,`Account_type` varchar(20)
,`Balance` int(20)
);

-- --------------------------------------------------------

--
-- Structure for view `current_account`
--
DROP TABLE IF EXISTS `current_account`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `current_account`  AS  select `user_view`.`User_Id` AS `User_Id`,`user_view`.`User_name` AS `User_name`,`user_view`.`Account_type` AS `Account_type`,`user_view`.`Balance` AS `Balance` from `user`.`user_view` where (`user_view`.`Account_type` = 'CURRENT') ;

-- --------------------------------------------------------

--
-- Structure for view `saving_account`
--
DROP TABLE IF EXISTS `saving_account`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `saving_account`  AS  select `user_view`.`User_Id` AS `User_Id`,`user_view`.`User_name` AS `User_name`,`user_view`.`Account_type` AS `Account_type`,`user_view`.`Balance` AS `Balance` from `user`.`user_view` where (`user_view`.`Account_type` = 'SAVING') ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
