-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 22-Jan-2020 às 17:25
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `franfaloja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `new_table`
--

CREATE TABLE `new_table` (
  `cod` int(11) NOT NULL,
  `descricao` varchar(255) COLLATE utf8_latvian_ci DEFAULT NULL,
  `categoria` varchar(45) COLLATE utf8_latvian_ci DEFAULT NULL,
  `preco_a_vista` float(6,2) DEFAULT NULL,
  `preco_parcelado` float(6,2) DEFAULT NULL,
  `imagem` varchar(255) COLLATE utf8_latvian_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_latvian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Extraindo dados da tabela `new_table`
--

INSERT INTO `new_table` (`cod`, `descricao`, `categoria`, `preco_a_vista`, `preco_parcelado`, `imagem`, `status`) VALUES
(30, 'Cama de Casal Ortbom', 'Estofado', 350.00, 450.00, 'imagems/1579468497.jpeg', 'novidad'),
(31, 'Mesa de vidro para sala de jantar', 'cozinha', 450.00, 560.00, 'imagems/1579468908.jpeg', ''),
(32, 'Novo Produto', 'Categoria', 555.00, 34.00, 'imagems/1579470710.jpeg', ''),
(33, 'Novo estofado', 'estofado', 8888.00, 9999.99, 'imagems/1579660396.jpeg', ''),
(34, 'Outro estofado', 'Estofado', 333.00, 3333.00, 'imagems/1579660425.jpeg', ''),
(35, 'estofado numero 3', 'Estofado', 0.00, 0.00, 'imagems/1579660511.jpeg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_table`
--
ALTER TABLE `new_table`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_table`
--
ALTER TABLE `new_table`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
