-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: nov. 18, 2025 la 08:04 AM
-- Versiune server: 10.4.32-MariaDB
-- Versiune PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `laborator23`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `make` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `year` year(4) NOT NULL,
  `color` varchar(30) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `cars`
--

INSERT INTO `cars` (`id`, `make`, `model`, `year`, `color`, `price`, `created_at`) VALUES
(1, 'Toyota', 'Corolla', '2020', 'Alb', 18500.00, '2025-11-13 06:54:12'),
(2, 'Honda', 'Civic', '2019', 'Negru', 17200.00, '2025-11-13 06:54:12'),
(3, 'Ford', 'Focus', '2018', 'Gri', 14500.00, '2025-11-13 06:54:12'),
(4, 'BMW', 'X5', '2021', 'Albastru', 52000.00, '2025-11-13 06:54:12'),
(5, 'Audi', 'A4', '2020', 'Argintiu', 34000.00, '2025-11-13 06:54:12'),
(6, 'Mercedes-Benz', 'C-Class', '2022', 'Negru', 41000.00, '2025-11-13 06:54:12'),
(7, 'Volkswagen', 'Golf', '2019', 'Roșu', 16000.00, '2025-11-13 06:54:12'),
(8, 'Hyundai', 'Tucson', '2021', 'Verde', 27500.00, '2025-11-13 06:54:12'),
(9, 'Kia', 'Sportage', '2022', 'Alb', 28900.00, '2025-11-13 06:54:12'),
(10, 'Nissan', 'Qashqai', '2020', 'Gri închis', 26500.00, '2025-11-13 06:54:12');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
