-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 14 Ιαν 2016 στις 21:02:52
-- Έκδοση διακομιστή: 10.1.9-MariaDB
-- Έκδοση PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `mydb`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `account`
--

CREATE TABLE `account` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(45) NOT NULL,
  `title` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `account`
--

INSERT INTO `account` (`id`, `email`, `title`) VALUES
(1, 'koni@windowslive.com', 'math'),
(2, 'konichi@windowslive.com', 'c++');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `bibliothikes`
--

CREATE TABLE `bibliothikes` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `hours` varchar(45) NOT NULL,
  `days` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `bibliothikes`
--

INSERT INTO `bibliothikes` (`id`, `name`, `address`, `hours`, `days`) VALUES
(1, 'Τμήμα Μαθηματικού', 'Ζωγράφου 12', '12:00-19:00', 'ΔΕΥ-ΠΑΡ'),
(2, 'Τμήμα Πληροφορικής', 'Ζωγράφου 25', '10:00-19:00', 'ΔΕΥ-ΠΑΡ');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `book`
--

CREATE TABLE `book` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(45) NOT NULL,
  `avaliability` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '0',
  `author` varchar(45) NOT NULL,
  `year` varchar(45) NOT NULL,
  `library` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `date` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `book`
--

INSERT INTO `book` (`id`, `title`, `avaliability`, `author`, `year`, `library`, `address`, `phone`, `date`) VALUES
(4, 'c++', '13', 'JJ martin', '1998', 'Tμήμα Πληροφορικής', 'Ζωγράφου 23', '2107223222', -2026),
(5, 'math', '8', 'Albert Den', '1976', 'Tμήμα Μαθηματικο΄θ', 'Ζωγράφου 13', '2107254235', -2012);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `xrhsths`
--

CREATE TABLE `xrhsths` (
  `id` int(11) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `tk` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `xrhsths`
--

INSERT INTO `xrhsths` (`id`, `fullname`, `email`, `phone`, `tk`, `address`, `password`, `state`) VALUES
(1, 'thomas kottas', 'koni@windowslive.com', '210687473', '10233', 'skoufa 13', '21121994', 'athens'),
(2, 'kseno vakalo', 'konichi@windowslive.com', '210235473', '45233', 'amrousi 13', '1994', 'athens');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `bibliothikes`
--
ALTER TABLE `bibliothikes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Ευρετήρια για πίνακα `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Ευρετήρια για πίνακα `xrhsths`
--
ALTER TABLE `xrhsths`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `account`
--
ALTER TABLE `account`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT για πίνακα `bibliothikes`
--
ALTER TABLE `bibliothikes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT για πίνακα `book`
--
ALTER TABLE `book`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT για πίνακα `xrhsths`
--
ALTER TABLE `xrhsths`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
