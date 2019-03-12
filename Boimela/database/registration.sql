-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2019 at 03:19 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `book_name` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `book_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category_name`, `book_id`, `created_at`) VALUES
(1, 'Romantic', 1, '2019-02-04 18:53:11'),
(2, 'Horror', 2, '2019-02-04 19:03:58'),
(3, 'Math', 3, '2019-02-05 06:23:11'),
(4, 'Science', 4, '2019-02-05 06:23:11'),
(5, 'Detective', 5, '2019-02-05 06:23:57'),
(6, 'Social Science', 6, '2019-02-05 06:23:57'),
(7, 'Novel', 7, '2019-02-05 06:24:47'),
(8, 'Comics', 8, '2019-02-05 06:24:47'),
(9, 'Historical', 9, '2019-02-05 06:25:54'),
(10, '', 0, '2019-02-05 06:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(7, 'dfetdf', 'fgeryi@gmail.com', '202cb962ac59075b964b07152d234b'),
(8, 'sifat', 'fads@gmail.com', '202cb962ac59075b964b07152d234b'),
(9, 'si', 'si@gmail.com', '202cb962ac59075b964b07152d234b70'),
(10, 'sabbir', 'saleh@gmail.com', '202cb962ac59075b964b07152d234b70'),
(11, 'rasel ', 'sifat345@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(12, 'rifat', 'rifat@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(13, 'sayed', 'sayed12@gmail.com', '202cb962ac59075b964b07152d234b70'),
(14, 'Sabbir1991', 'sabbir@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(15, 'sifat56', 'sifat82@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
