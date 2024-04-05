-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 05, 2024 at 01:36 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `questionnaire`
--

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
CREATE TABLE IF NOT EXISTS `players` (
  `play_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `play_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`play_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`play_id`, `play_name`) VALUES
(1, 'Anthony A'),
(2, 'Baris A'),
(3, 'Emrah A'),
(4, 'Erhan E'),
(5, 'Guillame B'),
(6, 'Lee B'),
(7, 'Marwan B'),
(8, 'Rami B'),
(9, 'Tevin B');

-- --------------------------------------------------------

--
-- Table structure for table `questionarchive`
--

DROP TABLE IF EXISTS `questionarchive`;
CREATE TABLE IF NOT EXISTS `questionarchive` (
  `quest_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `quest_asked` varchar(512) COLLATE utf8mb4_general_ci NOT NULL,
  `quest_answer` varchar(512) COLLATE utf8mb4_general_ci NOT NULL,
  `quest_player` int UNSIGNED NOT NULL,
  `quest_result` tinyint UNSIGNED NOT NULL COMMENT '1: Great\r\n2: Good\r\n3: Bad\r\n4: Absent',
  PRIMARY KEY (`quest_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questionchart`
--

DROP TABLE IF EXISTS `questionchart`;
CREATE TABLE IF NOT EXISTS `questionchart` (
  `total_question` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `total_great` int UNSIGNED DEFAULT NULL,
  `total_good` int UNSIGNED DEFAULT NULL,
  `total_bad` int UNSIGNED DEFAULT NULL,
  `total_absent` int UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`total_question`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scorechart`
--

DROP TABLE IF EXISTS `scorechart`;
CREATE TABLE IF NOT EXISTS `scorechart` (
  `score_play_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `great_answer` int UNSIGNED DEFAULT NULL,
  `good_answer` int UNSIGNED DEFAULT NULL,
  `bad_answer` int UNSIGNED DEFAULT NULL,
  `absence` int UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`score_play_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scorechart`
--

INSERT INTO `scorechart` (`score_play_id`, `great_answer`, `good_answer`, `bad_answer`, `absence`) VALUES
(1, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
