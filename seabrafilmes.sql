-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Out-2019 às 19:45
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
('Equipe', 'IFBA', '075 99890-0990', '6', '40,00', '2019-10-10 19:42:42', 1);

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
(' ORei LeÃ£o', '18 de julho de 2019 ', 'Drama', 'Donald Glover,BeyoncÃ©,Seth Rogen', 'TraÃ­do e exilado de seu reino, o leÃ£ozinho Simba precisa descobrir como crescer e retomar seu destino como herdeiro real nas planÃ­cies da savana africana.', '', 'Rei-LeaoG.jpg', '45,00', '2019-10-10 19:12:43', 3),
('Vingadores: Ultimato', '25 de abril de 2019 ', 'Fantasia', 'Scarlett Johansson,Chris Hemsworth,Chris Evans', 'ApÃ³s Thanos eliminar metade das criaturas vivas, os Vingadores tÃªm de lidar com a perda de amigos e entes queridos. Com Tony Stark vagando perdido no espaÃ§o sem Ã¡gua e comida, Steve Rogers e Natasha Romanov lideram a resistÃªncia contra o titÃ£ louco.', '', 'Vingadores-UltimatoG.jpg', '45,00', '2019-10-10 19:17:53', 4),
('CapitÃ£ Marvel', '7 de marÃ§o de 2019 ', 'Fantasia', 'Brie Larson,Samuel L. Jackson,Gemma Chan', 'CapitÃ£ Marvel, parte do exÃ©rcito de elite dos Kree, uma raÃ§a alienÃ­gena, encontra-se no meio de uma batalha entre seu povo e os Skrulls. Ao tentar impedir uma invasÃ£o de larga escala na Terra, em 1995, ela tem memÃ³rias recorrentes de uma outra vida, como Carol Danvers, agente da ForÃ§a AÃ©rea norte-amâ€¦ MAIS\r\n', '', 'Capita-MarvelG.jpg', '50,00', '2019-10-10 19:23:28', 5),
('Toy Story 4', '20 de junho de 2019 ', 'Comedia', 'Betty,Xerife Woody,Buzz Lightyear', 'Woody, Buzz Lightyear e o resto da turma embarcam em uma viagem com Bonnie e um novo brinquedo chamado Forky. A aventura logo se transforma em uma reuniÃ£o inesperada quando o ligeiro desvio que Woody faz o leva ao seu amigo hÃ¡ muito perdido, Bo Peep.\r\n', '', 'Toy-Story-4G.jpg', '40,00', '2019-10-10 19:29:20', 6);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
