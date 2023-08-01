-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jan 12, 2022 at 09:47 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cryptogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `nft`
--

DROP TABLE IF EXISTS `nft`;
CREATE TABLE IF NOT EXISTS `nft` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `NAME` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `DESCRIPTION` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `TYPE` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `PRICE` varchar(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nft`
--

INSERT INTO `nft` (`id`, `image`, `NAME`, `DESCRIPTION`, `TYPE`, `PRICE`, `username`) VALUES
(1, 'unnamed.png', 'COOL GUY', 'A digital art of a tiger ', 'Fixed Price', '26', 'salini'),
(2, 'unnamed (1).jpg', 'Supreme Owl', 'white grey owl digital art', 'Fixed Price', '50', 'salini'),
(3, 'amitabhh.jpg', 'BIG B', 'pixle art of amitabh  bachhan', 'Fixed Price', '53', 'salini'),
(4, 'images (12).jfif', 'Monalisa ', 'the iconic painting of mona lisa in covid era', 'Fixed Price', '60', 'salini'),
(5, 'img1 (2).jpg', 'demo', 'painting', 'Fixed Price', '11', 'salini'),
(6, 'mantra.gif', 'mantra', 'a unique mandala trans', 'Fixed Price', '6', 'salini'),
(7, 'unnamed.jpg', 'owl', 'owl', 'Fixed Price', '20', 'salini'),
(8, '_117533360_hi065973500.jpg', 'astronaut from mars', 'creative astro suit', 'Fixed Price', '54', 'salini');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `profilepic` varchar(400) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `balance` float NOT NULL,
  `datetime` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `profilepic`, `email`, `username`, `password`, `balance`, `datetime`) VALUES
(1, '', 'salini@gmail.com', 'salini', 'manisha', 87.9777, '2022-01-12 12:18:31'),
(2, '', 'demo@gmail.com', 'demo', 'Demo@1', 0, '0000-00-00 00:00:00'),
(3, '', 'demo@gmail.com', 'neer', 'Neeraj@1', 0, '0000-00-00 00:00:00'),
(4, '', 'demo@gmail.com', 'deo', 'Demo#333', 700, '2022-01-04 05:00:00'),
(5, '', 'demo@gmail.com', 'one', 'Onetwo#33', 240, '2022-01-04 15:23:34'),
(6, 'crypto.png', 'DemoW@gmail.com', 'demo', 'Mahajan@1212', 752, '2022-01-10 10:50:52');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
