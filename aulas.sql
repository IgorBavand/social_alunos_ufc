-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Nov-2019 às 19:58
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aulas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `horarios`
--

CREATE TABLE `horarios` (
  `id` int(11) NOT NULL,
  `tutor` varchar(100) NOT NULL,
  `disciplina` varchar(100) NOT NULL,
  `local` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `horario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela dos horarios';

--
-- Extraindo dados da tabela `horarios`
--

INSERT INTO `horarios` (`id`, `tutor`, `disciplina`, `local`, `data`, `horario`) VALUES
(17, 'igor souza', 'gerencia', 'sala 24', '2019-11-29', '12:00'),
(21, 'fdocnmn', 'nbxcm dmcb j', 'd cm dmc m', '2019-12-05', '14:00'),
(22, 'dcv fcv cv', 'dfvcv cv dc', 'd cm dmc m', '2019-11-28', '13:00'),
(23, 'fdocnmn', 'dfvcv cv dc', 'Sala 2', '2019-12-07', '00:00'),
(24, 'igor sousa', 'eeeeeeeeeee', 'sala 24', '2019-12-05', '00:00'),
(26, 'igor bavand', 'dfvcv cv dc', 'd cm dmc m', '2019-12-04', '12:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

DELIMITER $$
--
-- Eventos
--
/*
CREATE DEFINER=`root`@`localhost` EVENT `data_invalida` ON SCHEDULE EVERY 60 SECOND STARTS '2019-11-22 14:24:27' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM horarios  WHERE data < CURDATE()$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
*/
