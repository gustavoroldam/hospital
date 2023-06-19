-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jun-2023 às 20:51
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hospital`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicamento`
--

CREATE TABLE `medicamento` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `validade` date NOT NULL,
  `qtde` int(11) NOT NULL,
  `unidade` varchar(5) COLLATE utf8mb4_swedish_ci NOT NULL,
  `preco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Extraindo dados da tabela `medicamento`
--

INSERT INTO `medicamento` (`id`, `nome`, `validade`, `qtde`, `unidade`, `preco`) VALUES
(1, 'Dipirona', '2025-12-25', 15, 'mg', 20),
(2, 'Novalgina', '2024-07-07', 40, 'ml', 35),
(3, 'Tylenol', '2030-05-12', 73, 'mg', 40);

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

CREATE TABLE `medico` (
  `id` int(11) NOT NULL,
  `nome` varchar(35) COLLATE utf8mb4_swedish_ci NOT NULL,
  `crm` int(11) NOT NULL,
  `nacimento` date NOT NULL,
  `telefone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Extraindo dados da tabela `medico`
--

INSERT INTO `medico` (`id`, `nome`, `crm`, `nacimento`, `telefone`) VALUES
(1, 'Dr Teste', 12345, '2000-05-10', 54321),
(2, 'Dr Experimento', 2147483647, '1999-05-10', 10987623),
(4, 'Dr.Exemplo', 147852, '2006-06-06', 852741),
(8, 'Dr Demostração', 2147483647, '2002-05-10', 2147483647);

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `nome` varchar(35) COLLATE utf8mb4_swedish_ci NOT NULL,
  `telefone` int(11) NOT NULL,
  `endereco` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `situacao` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `idMedico` int(11) NOT NULL,
  `idMedicamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`id`, `nome`, `telefone`, `endereco`, `situacao`, `idMedico`, `idMedicamento`) VALUES
(1, 'Gustavo', 123456789, 'TALTAL', 'Doente', 1, 1),
(2, 'Alexandre', 987654321, 'TOLTOL', 'Passando Mal', 2, 3),
(5, 'Roldam', 147258369, 'TULTUL', 'Dor de Cabeça', 8, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) COLLATE utf8mb4_swedish_ci NOT NULL,
  `senha` varchar(32) COLLATE utf8mb4_swedish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `senha`, `email`) VALUES
(1, 'Gustavo', '8532998abfb3ce8bb01c45a07b68ee3b', 'roldam2004@gmail.com'),
(2, 'Alexandre', '8532998abfb3ce8bb01c45a07b68ee3b', 'roldam2004@gmail.com'),
(3, 'Roldam', '8532998abfb3ce8bb01c45a07b68ee3b', 'roldam2004@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `medicamento`
--
ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paciente_medico` (`idMedico`),
  ADD KEY `paciente_medicamento` (`idMedicamento`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `medicamento`
--
ALTER TABLE `medicamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `medico`
--
ALTER TABLE `medico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `paciente_medicamento` FOREIGN KEY (`idMedicamento`) REFERENCES `medicamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `paciente_medico` FOREIGN KEY (`idMedico`) REFERENCES `medico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
