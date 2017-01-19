-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 19. jan 2017 ob 09.13
-- Različica strežnika: 10.1.19-MariaDB
-- Različica PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Zbirka podatkov: `postavi_si`
--

-- --------------------------------------------------------

--
-- Struktura tabele `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8_slovenian_ci NOT NULL,
  `surname` varchar(20) COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(35) COLLATE utf8_slovenian_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_slovenian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `customers`
--

INSERT INTO `customers` (`id`, `name`, `surname`, `email`, `username`, `password`) VALUES
(1, 'Imeafaf', 'afafafhakf', 'akjfhajkfakl', 'afhjkafhjkah', '$2y$10$29Y9Zad864cuE'),
(2, 'Vid', 'Jelen', 'ahfajf@gakfa.com', 'asojfuiafhj', '$2y$10$bKyN5pWQNEMXE'),
(3, 'admin', 'admin', 'admin', 'admin', '$2y$10$LjZ0ujDAyXp0m'),
(5, 'asdasd', 'asdasd', 'asdasd@asd.asd', 'asdasd', '$2y$10$/Zeg99oMndcw8TXXr8Wkqe0uw.VJZ3x.BOggOQk7ycpVAGnLm1auS'),
(6, 'rok', 'slemenjak', 'rok.slemenjak@gmail.com', 'roki', '$2y$10$6.qlrPS4jhhS6s/fsJab9utjmzs/6970BSbiLHeHA9wnwA7olY.qy');

-- --------------------------------------------------------

--
-- Struktura tabele `customer_plan`
--

CREATE TABLE `customer_plan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_plan` bigint(20) UNSIGNED NOT NULL,
  `id_customer` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

-- --------------------------------------------------------

--
-- Struktura tabele `plans`
--

CREATE TABLE `plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(25) COLLATE utf8_slovenian_ci NOT NULL,
  `size` float(4,2) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `price` float(4,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeksi tabele `customer_plan`
--
ALTER TABLE `customer_plan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_plan` (`id_plan`);

--
-- Indeksi tabele `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT zavrženih tabel
--

--
-- AUTO_INCREMENT tabele `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT tabele `customer_plan`
--
ALTER TABLE `customer_plan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT tabele `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
