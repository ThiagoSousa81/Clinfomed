
--
-- Estrutura para tabela `CONSULTAS`
--

CREATE TABLE `CONSULTAS` (
  `ID_CONSULTA` int(11) NOT NULL,
  `DATA_CONSULTA` date DEFAULT NULL,
  `HORA_CONSULTA` time DEFAULT NULL,
  `REALIZADA_CONSULTA` varchar(3) NOT NULL,
  `ID_MEDICO` int(11) DEFAULT NULL,
  `ID_PACIENTE` int(11) DEFAULT NULL,
  `ID_FUNCIONARIO` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `FUNCIONARIOS`
--

CREATE TABLE `FUNCIONARIOS` (
  `ID_FUNCIONARIO` int(11) NOT NULL,
  `NOME_FUNCIONARIO` varchar(100) NOT NULL,
  `USER_FUNCIONARIO` varchar(100) NOT NULL,
  `HASH_FUNCIONARIO` varchar(40) NOT NULL,
  `NIVEL_FUNCIONARIO` varchar(50) NOT NULL,
  `ATIVO_FUNCIONARIO` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `MEDICOS`
--

CREATE TABLE `MEDICOS` (
  `ID_MEDICO` int(11) NOT NULL,
  `NOME_MEDICO` int(11) DEFAULT NULL,
  `ESPECIALIZACAO_MEDICO` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `PACIENTES`
--

CREATE TABLE `PACIENTES` (
  `ID_PACIENTE` int(11) NOT NULL,
  `NOME_PACIENTE` varchar(100) DEFAULT NULL,
  `CPF_PACIENTE` text DEFAULT NULL,
  `DN_PACIENTE` datetime DEFAULT NULL,
  `RG_PACIENTE` text DEFAULT NULL,
  `IDADE_PACIENTE` int(11) DEFAULT NULL,
  `ENDERECO_PACIENTE` text DEFAULT NULL,
  `PRONTUARIO_PACIENTE` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `CONSULTAS`
--
ALTER TABLE `CONSULTAS`
  ADD PRIMARY KEY (`ID_CONSULTA`),
  ADD KEY `ID_MEDICO` (`ID_MEDICO`),
  ADD KEY `ID_PACIENTE` (`ID_PACIENTE`),
  ADD KEY `ID_FUNCIONARIO` (`ID_FUNCIONARIO`);

--
-- Índices de tabela `FUNCIONARIOS`
--
ALTER TABLE `FUNCIONARIOS`
  ADD PRIMARY KEY (`ID_FUNCIONARIO`);

--
-- Índices de tabela `MEDICOS`
--
ALTER TABLE `MEDICOS`
  ADD PRIMARY KEY (`ID_MEDICO`);

--
-- Índices de tabela `PACIENTES`
--
ALTER TABLE `PACIENTES`
  ADD PRIMARY KEY (`ID_PACIENTE`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `FUNCIONARIOS`
--
ALTER TABLE `FUNCIONARIOS`
  MODIFY `ID_FUNCIONARIO` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;