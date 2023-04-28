-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Out-2019 às 13:49
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seabrafilmes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `cliente` longtext NOT NULL,
  `endereco` longtext NOT NULL,
  `contatos` longtext NOT NULL,
  `id_produto` longtext NOT NULL,
  `valor` longtext NOT NULL,
  `data_insersao` datetime NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`cliente`, `endereco`, `contatos`, `id_produto`, `valor`, `data_insersao`, `id`) VALUES
('Diogo Neves', '4444', '44', '8', '<br />\r\n<b>Notice</b>:  Undefined variable: preco in <b>C:\\xampp\\htdocs\\Trabalho-Charles\\pedido-cliente.php</b> on line <b>66</b><br />\r\n', '0000-00-00 00:00:00', 1),
('Diogo Neves', '4444', '44', '8', 'Diogo', '2019-10-10 13:28:08', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `seabrafilmes`
--

CREATE TABLE `seabrafilmes` (
  `filme` longtext NOT NULL,
  `ano` longtext NOT NULL,
  `genero` longtext NOT NULL,
  `atores` longtext NOT NULL,
  `descricao` longtext NOT NULL,
  `capa_filme` longtext NOT NULL,
  `capa_arquivo_nome` longtext NOT NULL,
  `valor` longtext NOT NULL,
  `data_insersao` datetime NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `seabrafilmes`
--

INSERT INTO `seabrafilmes` (`filme`, `ano`, `genero`, `atores`, `descricao`, `capa_filme`, `capa_arquivo_nome`, `valor`, `data_insersao`, `id`) VALUES
('d', 'd', 'd', 'd', 'd', '', 'dG.jpg', 'd', '2019-10-02 17:26:16', 7),
('Diogommmmmmmmmmmmmmmmmmmmmmmm mmmmmmmmmmmmmmmmmmm mmmmmmmmmmmm', 'Diogo', 'Diogo', 'Diogo', 'DiogoDiogoDiogoDiogoDiogoDiogoDiogoDiogoDiogoDiogoDiogoDiogo', '', 'DiogoG.png', 'Diogo', '2019-10-08 15:10:14', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seabrafilmes`
--
ALTER TABLE `seabrafilmes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seabrafilmes`
--
ALTER TABLE `seabrafilmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
