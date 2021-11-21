-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 21, 2021 at 06:38 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mp`
--

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

DROP TABLE IF EXISTS `hospital`;
CREATE TABLE IF NOT EXISTS `hospital` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `hos_name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `address` text NOT NULL,
  `vac_type` varchar(50) NOT NULL,
  `opening_time` time NOT NULL,
  `closing_time` time NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `hos_name`, `email`, `phone_no`, `address`, `vac_type`, `opening_time`, `closing_time`, `user_name`, `password`) VALUES
(8, 'rfrg', 'gfdgdh', 65768, 'gfggf', 'fgfret5', '00:00:00', '00:00:00', 'Ritika', 'ritika'),
(9, 'kimaya', 'kimaya@gmail.com', 1234566, 'xyz', 'dmkfmk', '09:00:00', '09:00:00', 'Ritika', 'ritika');

-- --------------------------------------------------------

--
-- Table structure for table `hostimeslot`
--

DROP TABLE IF EXISTS `hostimeslot`;
CREATE TABLE IF NOT EXISTS `hostimeslot` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pat_id` bigint(20) NOT NULL,
  `hos_name` varchar(20) NOT NULL,
  `opening_time` time NOT NULL,
  `closing_time` time NOT NULL,
  `first_slot` time NOT NULL,
  `sec_slot` time NOT NULL,
  `third_slot` time NOT NULL,
  `fourth_slot` time NOT NULL,
  `fifth_slot` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostimeslot`
--

INSERT INTO `hostimeslot` (`id`, `pat_id`, `hos_name`, `opening_time`, `closing_time`, `first_slot`, `sec_slot`, `third_slot`, `fourth_slot`, `fifth_slot`) VALUES
(1, 30574, '', '09:00:00', '21:00:00', '11:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(2, 417271, '', '09:00:00', '21:00:00', '09:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(3, 819741, '', '09:00:00', '21:00:00', '11:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(4, 2402200457723461837, 'Ritzi', '11:00:00', '21:00:00', '13:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(5, 9157917997712885, 'Ritzi', '09:00:00', '19:00:00', '10:00:00', '12:00:00', '13:00:00', '15:00:00', '17:00:00'),
(6, 28801495165432883, 'kimaya', '08:00:00', '20:00:00', '10:00:00', '12:00:00', '14:00:00', '16:00:00', '18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `City` varchar(20) NOT NULL,
  `pincode` int(20) NOT NULL,
  `hos_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `City`, `pincode`, `hos_name`) VALUES
(1, 'nagpur', 440001, 'Lata Mangeshkar hospital,nagpur'),
(2, 'Ramtek', 441106, 'Kimaya Hospital');

-- --------------------------------------------------------

--
-- Table structure for table `pattimeslot`
--

DROP TABLE IF EXISTS `pattimeslot`;
CREATE TABLE IF NOT EXISTS `pattimeslot` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pat_id` bigint(20) NOT NULL,
  `hos_name` varchar(10) NOT NULL,
  `your_slot` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pattimeslot`
--

INSERT INTO `pattimeslot` (`id`, `pat_id`, `hos_name`, `your_slot`) VALUES
(1, 2842, '', '13:00:00'),
(2, 744894, 'kimaya', '01:00:00'),
(3, 6370004113058166, 'kimaya', '14:00:00'),
(4, 950318739260849966, 'kimaya', '21:00:00'),
(5, 309, 'kimaya', '17:00:00'),
(6, 272493966429, 'kimaya', '14:00:00'),
(7, 31951188254636465, 'kimaya', '14:00:00'),
(8, 221398229968301637, 'kimaya', '10:00:00'),
(9, 97799100, 'kimaya', '14:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

DROP TABLE IF EXISTS `registered_users`;
CREATE TABLE IF NOT EXISTS `registered_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `email`) VALUES
(1, 'ritikahedau2000@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `review` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `user_id`, `review`) VALUES
(1, 209197169650551, 'ureiufjeskjcokoskmo;'),
(2, 2141630, 'jkopoihbvcsdass'),
(3, 58855981, 'huyf7hdkjsapoiowueirdhchusdgfusfbksjopksoefihcn'),
(4, 7777761473, 'ritika hedau jshdsah');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

DROP TABLE IF EXISTS `userregistration`;
CREATE TABLE IF NOT EXISTS `userregistration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `activationcode` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `postingdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `name`, `email`, `password`, `activationcode`, `status`, `postingdate`) VALUES
(1, 'Ritika Hedau', 'ritikahedau0409@gmail.com', '71dbb9703764dd357892ba014b7cdfad', '9ec36f4ec387f56fea2d0d6198162786', 0, '2021-05-06 09:35:38'),
(2, 'Ritika Hedau', 'ritikahedau2000@gmail.com', '6de4719862fdeabe522d2cb2d1e4bbe4', '9b598001f5017be6b147e86efb2b5d88', 0, '2021-05-06 09:45:30'),
(3, 'Latika Hedau', 'latikahedau2000@gmail.com', 'dcce754575b8e728597b7b03d7b0b3e3', 'e8b6cea71ccae3978863541f2dd5860c', 0, '2021-05-06 09:48:42'),
(4, 'Latika Hedau', 'latikahedau2000@gmail.com', '70a6143d7d626ce6d8ebd483707966dd', '9a874e46e95006332669b8410c2b12e3', 0, '2021-05-06 09:50:00'),
(5, 'Latika Hedau', 'latikahedau2000@gmail.com', 'c8ee2ff34819d820c714879fc6b44475', 'aefd175e268f81c05cef4f4505b3dc93', 0, '2021-05-06 09:51:33'),
(6, 'Ritika Hedau', 'xyz@gmail.com', '71dbb9703764dd357892ba014b7cdfad', 'bb1becea3b008b0d3cdd6249fea845b3', 0, '2021-05-06 09:54:21'),
(7, 'Ritika Hedau', 'xyz@gmail.com', 'a32cc8b1ad4e7c8283285b56d94563e9', '24921ed66f70cf4ecf9f500d9fc63be8', 0, '2021-05-06 09:56:10'),
(8, 'Ritika Hedau', 'lgghj@gmail.com', '71dbb9703764dd357892ba014b7cdfad', '52ceb6deb0c868afadf5057f3238dea4', 0, '2021-05-06 10:01:34'),
(9, 'Ritika Hedau', 'byg@gmail.com', '71dbb9703764dd357892ba014b7cdfad', '19b644a19af86b1d57d51cfa69f4ea14', 0, '2021-05-06 10:03:33'),
(12, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'ee0640a964b428e6cf217ac37e17663b', 0, '2021-05-06 15:02:28'),
(13, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '2adda5cf3f34e3333b5aed949e1e4cb6', 0, '2021-05-06 15:10:31'),
(15, 'Ritika Hedau', 'chutkuu@gmail.com', '71dbb9703764dd357892ba014b7cdfad', 'ca1e873c1e8ab94396f7c0c655d80316', 0, '2021-05-07 12:51:17'),
(18, 'Ritika Hedau', 'ritikahedau2000@gmail.com', '71dbb9703764dd357892ba014b7cdfad', '67d4770724532bd42725f996b5b22224', 0, '2021-05-08 11:37:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `p_id` char(25) NOT NULL,
  `p_in` varchar(50) NOT NULL,
  `name` char(50) NOT NULL,
  `phone_no` int(12) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `yob` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `p_id`, `p_in`, `name`, `phone_no`, `gender`, `yob`, `user_name`, `password`) VALUES
(1, 123456678, 'Adhar', '56788', 'Chutku', 0, '', 2000, 'Chutku@12', 'chutku');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
