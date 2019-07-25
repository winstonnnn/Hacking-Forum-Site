-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2019 at 11:02 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(50) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `post_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comments`, `date`, `username`, `post_id`) VALUES
(1, 'Just search in google and youtube :) ', '2018-03-30', 'scriptkiddie', 1),
(2, 'HAHAHA Youre so annoying', '2018-03-31', 'marj', 1),
(3, 'Email me and I will teach you', '2018-03-30', 'scriptkiddie', 1),
(4, 'hello', '2018-03-31', 'scriptkiddie', 2),
(5, 'hi', '2018-03-31', 'scriptkiddie', 2),
(6, 'haha', '2018-03-31', 'marj', 2),
(7, 'yes of course', '2018-05-26', 'winston', 3),
(8, 'Cheater! haha', '2018-05-29', 'winston', 8);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `post_id` int(50) NOT NULL,
  `title` varchar(500) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`post_id`, `title`, `details`, `date`, `username`) VALUES
(1, 'How to hack facebook account?', 'I just want to hack my boyfriends ac', '2018-03-30', 'scriptkiddie'),
(2, 'Phishing', 'How can I hack account using phishing method?', '2018-03-29', 'marj'),
(3, 'DDOS attack', 'I want to send many request to a website. can I use DDOS?', '2018-04-01', 'marj'),
(4, 'Password Cracking', 'Can anyone teach me on how to crack any wifi password?', '2018-04-28', 'winston'),
(5, 'Software Cracking', 'How can I purchase a free software?', '2018-04-28', 'winston'),
(6, 'Virus', 'How to remove virus on my computer?', '2018-04-28', 'winston'),
(8, 'how to cheat in rules of survival?', 'just to rank up :)', '2018-05-29', 'mark');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `reply_id` int(50) NOT NULL,
  `reply` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `comment_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`reply_id`, `reply`, `date`, `username`, `comment_id`) VALUES
(1, 'oh really? nice answer', '2018-03-30', 'marj', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `firstname`, `lastname`) VALUES
('marj', 'marjorie', 'Marjorie', 'Carmelo'),
('mark', 'mark', 'Mark Anthony', 'Laurente'),
('winston', 'winston', 'Winston', 'Carmelo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `post_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
