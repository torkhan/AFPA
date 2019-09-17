-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 17, 2019 at 05:29 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `password`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_signit` int(11) NOT NULL,
  `email` varchar(240) NOT NULL,
  `password` varchar(240) NOT NULL,
  `Id_typeUser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_signit`, `email`, `password`, `Id_typeUser`) VALUES
(1, 'marc@eremus.fr', '0b9c2625dc21ef05f6ad4ddf47c5f203837aa32c', 1),
(2, 'papa@tata.fr', '0b9c2625dc21ef05f6ad4ddf47c5f203837aa32c', 2),
(3, 'robert@pierre.fr', '0b9c2625dc21ef05f6ad4ddf47c5f203837aa32c', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_signit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_signit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
