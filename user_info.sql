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
-- Database: `user_info`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `gmail_credentials`
-- (See below for the actual view)
--
CREATE TABLE `gmail_credentials` (
`User_Id` int(11)
,`Login_Id` varchar(40)
,`User_password` varchar(40)
,`Time_created` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `hotmail_credentials`
-- (See below for the actual view)
--
CREATE TABLE `hotmail_credentials` (
`User_Id` int(11)
,`Login_Id` varchar(40)
,`User_password` varchar(40)
,`Time_created` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `yahoo_credentials`
-- (See below for the actual view)
--
CREATE TABLE `yahoo_credentials` (
`User_Id` int(11)
,`Login_Id` varchar(40)
,`User_password` varchar(40)
,`Time_created` timestamp
);

-- --------------------------------------------------------

--
-- Structure for view `gmail_credentials`
--
DROP TABLE IF EXISTS `gmail_credentials`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `gmail_credentials`  AS  select `user_view`.`User_Id` AS `User_Id`,`user_view`.`Login_Id` AS `Login_Id`,`user_view`.`User_password` AS `User_password`,`user_view`.`Time_created` AS `Time_created` from `user`.`user_view` where (`user_view`.`Login_Id` like '%gmail%') ;

-- --------------------------------------------------------

--
-- Structure for view `hotmail_credentials`
--
DROP TABLE IF EXISTS `hotmail_credentials`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hotmail_credentials`  AS  select `user_view`.`User_Id` AS `User_Id`,`user_view`.`Login_Id` AS `Login_Id`,`user_view`.`User_password` AS `User_password`,`user_view`.`Time_created` AS `Time_created` from `user`.`user_view` where (`user_view`.`Login_Id` like '%hotmail%') ;

-- --------------------------------------------------------

--
-- Structure for view `yahoo_credentials`
--
DROP TABLE IF EXISTS `yahoo_credentials`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `yahoo_credentials`  AS  select `user_view`.`User_Id` AS `User_Id`,`user_view`.`Login_Id` AS `Login_Id`,`user_view`.`User_password` AS `User_password`,`user_view`.`Time_created` AS `Time_created` from `user`.`user_view` where (`user_view`.`Login_Id` like '%yahoo%') ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
