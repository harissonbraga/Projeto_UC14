-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Maio-2019 às 01:31
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `msg` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `msg`, `name`, `date`) VALUES
(219, 'nomedfslfmlsd', 'aaa', '2019-04-17 13:16:12'),
(220, 'sadasdsadas', 'aaa', '2019-04-17 13:36:05'),
(221, 'hibihbi', 'aaa', '2019-04-17 13:45:56'),
(222, 'hbvguvuvui', 'aaa', '2019-04-17 13:46:01'),
(223, 'aaaaaaaaaaaa', 'aaa', '2019-04-17 13:46:10'),
(224, '23523535', 'aaa', '2019-04-17 13:46:16'),
(225, 'jkbkbjkbh6757657', 'aaa', '2019-04-17 13:46:26'),
(226, 'dfdf', 'bbb', '2019-04-17 13:50:40'),
(227, 'nnnn', 'bbb', '2019-04-17 13:50:52');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) CHARACTER SET utf8 NOT NULL,
  `cor` varchar(220) CHARACTER SET utf8 NOT NULL,
  `codigo` varchar(220) CHARACTER SET utf8 NOT NULL,
  `data_de_vencimento` varchar(220) CHARACTER SET utf8 NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `cor`, `codigo`, `data_de_vencimento`, `created`, `modified`) VALUES
(2, 'gfdgdf', 'gfdgdf', 'gdfgdf', 'gdfgdf', '2019-05-22 20:26:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `signup`
--

CREATE TABLE `signup` (
  `uid` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `signup`
--

INSERT INTO `signup` (`uid`, `username`, `email`, `password`) VALUES
(3, 'ggg', 'ggg@gmail.com', '1234'),
(4, 'hhh', 'hhh@gmail.com', '1235'),
(5, '', '', ''),
(6, 'aaa', 'aaa@gmail.com', '1234'),
(7, '', '', ''),
(8, 'bbb', 'bbb@gmail.com', '12'),
(9, 'teste', 'teste@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
