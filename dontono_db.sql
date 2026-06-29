-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2026 at 04:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dontono_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `imagen2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `categoria`, `stock`, `imagen`, `imagen2`) VALUES
(1, 'Martillo', 'Martillo de acero resistente', 10.50, 'Herramientas', 20, 'hammer.png', NULL),
(2, 'Tornillo', 'Tornillo para madera', 0.25, 'Construcción', 200, 'screw.png', NULL),
(3, 'Llave Spanner', 'Llave ajustable', 15.00, 'Herramientas', 15, 'spanner.png', NULL),
(4, 'Woodburning Pen', 'Herramienta para grabado en madera', 25.00, 'Herramientas', 10, 'woodburning pen.png', NULL),
(5, 'Llave Wrench', 'Llave inglesa resistente', 18.00, 'Herramientas', 12, 'wrench.png', NULL),
(9, 'Llave Allen', 'Lorem Ipsum', 8.55, 'Herramienta', 5, 'allen.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `usuarioID` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `rol` enum('admin','usuario') DEFAULT 'usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`usuarioID`, `nombre`, `correo`, `password`, `rol`) VALUES
(1, 'Kev', 'kev@mail.com', '$2y$10$xbuh/pmerX2iOyrj.U8rQu0kTeRkeAVu/IHGnqmlpL9amhErKGdS.', 'usuario'),
(2, 'Admin Don Toño', 'admin@mail.com', '$2y$10$xbuh/pmerX2iOyrj.U8rQu0kTeRkeAVu/IHGnqmlpL9amhErKGdS.', 'admin'),
(3, 'Yenner', 'yenner@mail.com', '$2y$10$5fJbdflkZIGAv3OGjlqoje8tr5Xoz0kME8ct10rhbxZv.p7E6xtbq', 'usuario');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuarioID`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuarioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
