-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 01, 2016 at 05:45 PM
-- Server version: 5.5.38
-- PHP Version: 5.5.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ab2016_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
`id` int(10) unsigned NOT NULL,
  `question_id` int(10) unsigned NOT NULL,
  `option_text` varchar(255) NOT NULL,
  `is_true` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `question_id`, `option_text`, `is_true`) VALUES
(3, 1, '1920', 0),
(4, 1, '1922', 0),
(5, 1, '1923', 1),
(6, 1, '1924', 0),
(7, 2, 'Bursa', 0),
(8, 2, 'İstanbul', 0),
(9, 2, 'Ankara', 1),
(10, 2, 'Adana', 0),
(11, 3, '1960', 0),
(12, 3, '1992', 1),
(13, 3, '1984', 0),
(14, 3, '1962', 0),
(15, 3, '1973', 0),
(16, 4, 'Leyla ve Mecnun', 0),
(17, 4, 'Bakü''nün Sırrı', 0),
(18, 4, 'Ali ve Nino', 1),
(19, 4, 'Aslı ve Kerem', 0);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
`id` int(10) unsigned NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer_id` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer_id`) VALUES
(1, 'Cumhuriyet ne zaman ilan edildi?', 5),
(2, 'Türkiye''nin başkenti neresidir?', 9),
(3, 'Adnan Menderes Üniversitesi ne zaman açılmıştır?', 12),
(4, 'Hangisi Azerbeycan''da geçen ve dünyada ciddi ses getiren bir aşk romanıdır?', 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `options`
--
ALTER TABLE `options`
 ADD PRIMARY KEY (`id`), ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `options`
--
ALTER TABLE `options`
ADD CONSTRAINT `options_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;
