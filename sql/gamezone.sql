-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 27-Nov-2019 às 21:09
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gamezone`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administracao`
--

CREATE TABLE `administracao` (
  `id_admin` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administracao`
--

INSERT INTO `administracao` (`id_admin`, `nome`, `email`, `login`, `senha`) VALUES
(1, 'Igor Rosler', 'igorsouzarosler@gmail.com', 'IDSRosler', '$2y$10$JGO1Dd5tFOoMXAnrpMVh8O9ffS/qKktP.wVoV8cJnJfybPXv.A.vm'),
(2, 'Admin 2', 'admin@exemplo.com', 'Admin2', '$2y$10$/jJ0.6UdSAFacgueZGTlPOVvIbk6ZeKue0S/s1KzgOsYmWcoQIYwm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `categoria` varchar(150) NOT NULL,
  `ativo_categoria` varchar(1) NOT NULL,
  `descricao_categoria` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`categoria`, `ativo_categoria`, `descricao_categoria`) VALUES
('Ação', '1', 'Jogos de Ação'),
('Arcade', '0', 'Jogos de arcade'),
('Aventura', '1', 'Jogos de aventura'),
('Esporte', '1', 'Jogos de esporte'),
('Terror', '1', 'Jogos de terror');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `cpf` varchar(15) NOT NULL,
  `nome_cliente` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `rua` varchar(200) NOT NULL,
  `cidade` varchar(200) NOT NULL,
  `complemento` varchar(200) NOT NULL,
  `estado` varchar(200) NOT NULL,
  `login` varchar(200) NOT NULL,
  `senha` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cpf`, `nome_cliente`, `email`, `telefone`, `rua`, `cidade`, `complemento`, `estado`, `login`, `senha`) VALUES
('999.999.999.92', 'Nome teste 2', 'teste2@gmail.com', '(99)99999-9999', 'Alguma', 'Outra', '', 'AC', 'UserTeste', '$2y$10$TFv1N91h8FUkiEaKA3LOkO1XWZULpsDYitxFpAPPiVc1w8qziYX5q'),
('999.999.999.99', 'Nome teste', 'teste@gmail.com', '(99)99999-9999', 'Alguma', 'Outra', '', 'AC', 'UserTeste', '$2y$10$P0c10rOxSyY0tAMJ924xFOSXs/jCP.KSYhrPGk2EI.EX/NVfaeAB2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo`
--

CREATE TABLE `jogo` (
  `id_jogo` int(11) NOT NULL,
  `id_categoria` varchar(100) NOT NULL,
  `id_plataforma` varchar(100) NOT NULL,
  `titulo_jogo` varchar(200) NOT NULL,
  `preco` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `conteudo` text NOT NULL,
  `ativo_jogo` varchar(1) NOT NULL,
  `unidades` int(11) NOT NULL,
  `imagem_produto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jogo`
--

INSERT INTO `jogo` (`id_jogo`, `id_categoria`, `id_plataforma`, `titulo_jogo`, `preco`, `descricao`, `conteudo`, `ativo_jogo`, `unidades`, `imagem_produto`) VALUES
(4, 'Ação', 'PlayStation', 'Uncharted', '200,00', 'Jogo', 'CD', '1', 1, 'imagens/uncharted.jpg'),
(7, 'Aventura', 'Computador', 'Assassins Creed Origins', '150,00', 'Os segredos mais misteriosos do Egito Antigo serão lançados na extensão The Curse Of the Pharaohs, incluída no Season Pass de Assassins Creed Origins. \r\nViaje com Bayek para a cidade de Tebas depois que ele recebe relatos de eventos misteriosos. Após sua chegada, Bayek descobre que uma maldição desceu sobre a região, transformando Tebas em um pesadelo. \r\nPara suspender essa maldição, Bayek deve investigar sua causa enquanto luta contra bestas que antes se acreditava serem apenas lendas. \r\nEsta segunda expansão traz novo conteúdo para Assassins Creed Origins com novas missões, personagens e inimigos da mitologia egípcia. \r\nLute com escorpiões gigantes, guerreiros Anúbis e os animais mais poderosos do Egito em uma região totalmente nova.\r\n', 'Digital', '1', 1, 'Jogos_PC/Assassins.jpg'),
(8, 'Ação', 'Computador', 'Call of Duty 4', '200,00', 'Call of Duty 4: Modern Warfare, o thriller de ação da equipe premiada da Infinity Ward, os criadores da série Call of Duty, \r\noferece a experiência de ação mais intensa e cinematográfica de todos os tempos.\r\nArmado com um arsenal de poder de fogo avançado e poderoso nos dias de hoje, os jogadores são transportados para locais perigosos \r\nao redor do mundo para enfrentar um grupo inimigo desonesto que ameaça o mundo. \r\nComo um soldado da Marinha dos EUA e da Marinha britânica lutando por uma história que se desenrola cheia de reviravoltas, \r\nos jogadores usam tecnologia sofisticada, poder de fogo superior e ataques aéreos e terrestres \r\ncoordenados em um campo de batalha onde velocidade, precisão e comunicação são essenciais para a vitória.', 'CD', '1', 1, 'Jogos_PC/Call_of_Duty_4.jpg'),
(9, 'Esporte', 'Computador', 'DiRT Rally 2.0', '100,00', 'O DiRT Rally 2.0 desafia você a percorrer uma seleção de locais icônicos de ralis de todo o mundo, \r\nnos veículos off-road mais emblemáticos já feitos, sabendo que o menor erro pode terminar seu estágio. \r\nVocê precisará confiar em seus instintos com a experiência off-road mais imersiva e verdadeiramente focada \r\nde todos os tempos, incluindo um novo modelo de manuseio autêntico, escolha de pneus e degradação da superfície.\r\n\r\nPonha seu carro de rally em ambientes off-road da vida real na Nova Zelândia, Argentina, Espanha, Polônia, Austrália e \r\nEUA, com apenas seu co-piloto e instinto para guiá-lo.', 'Digital', '1', 1, 'Jogos_PC/DiRT_Rally_2.0.jpg'),
(10, 'Aventura', 'Computador', 'Dragon Age Inquisition', '80,00', 'Você é o inquisidor, encarregado de salvar o povo de Thedas da beira do caos e de uma série de inimigos temíveis. \r\nA Edição do Jogo do Ano vem com todos os itens a seguir.\r\n\r\nCaracterísticas principais:\r\n\r\nDragon Age: Inquisition game. Torne-se o inquisidor. Faça escolhas importantes, forme relacionamentos e explore \r\nmundos incríveis com um personagem de sua própria criação.\r\n\r\nMandíbulas de Hakkon: Descubra o destino do Inquisidor anterior. O que aconteceu com o dragão que ele perseguiu? \r\nExplore um deserto extenso e seus residentes ferozmente independentes, os caçadores conhecidos como Avvar.\r\n\r\nO descendente: Enfrente o seu caminho nas Estradas Profundas e ouse lutar contra o terrível e sombrio Darkspawn\r\nem um mundo vasto sob Thedas. Descubra a razão por trás dos terremotos que ameaçam destruir Thedas em pedaços.\r\n\r\nInvasor: A aventura ainda não acabou. Derrote o tremendo mal determinado a destruir Thedas. Esta é sua missão final, \r\nInquisidor. Sucesso a todo custo.', 'CD', '1', 1, 'Jogos_PC/Dragon_Age_Inquisition.jpg'),
(11, 'Ação', 'Computador', 'Combo Far Cry', '300,00', 'Far Cry 5 Gold Edition\r\nA Gold Edition inclui o jogo, o Digital Deluxe Pack e o Season Pass.\r\nBem-vindo ao Hope County, Montana, terra dos livres e corajosos, \r\nmas também lar de um culto fanático do dia do juízo final conhecido como Projeto no Portão do Éden. \r\nLevante-se com o líder do culto Joseph Seed, e seus irmãos, os Arautos, para acender o fogo da resistência \r\ne libertar a comunidade sitiada.\r\n\r\nFar Cry New Dawn Deluxe Edition\r\nAtualize para a Deluxe Edition e receba o Digital Deluxe Pack.\r\nMergulhe em um vibrante e pós-apocalíptico Hope County, Montana, transformado, \r\n17 anos após uma catástrofe nuclear global.\r\nJunte-se a outros sobreviventes e lidere a luta contra a perigosa nova ameaça, \r\nos Highwaymen e seus implacáveis ​​líderes, The Twins, enquanto eles tentam assumir \r\nos últimos recursos restantes.', 'CD', '1', 1, 'Jogos_PC/Far_Cry_Novo_amanhecer_e_Far_Cry_5.jpg'),
(12, 'Esporte', 'Computador', 'Football Manager 2020', '200,00', 'Use bem suas opiniões e faça as coisas do seu jeito no seu clube nesta temporada. \r\nCada decisão conta no Football Manager 2020 com novos recursos e uma mecânica de jogo aprimorada, adicionando dimensões \r\nnovas e autênticas, capacitando os gerentes a assumir uma maior responsabilidade pelo destino deles e do time. \r\nComo você chega ao topo depende de você.\r\nVocê será o proprietário de suas decisões e das consequências que elas trazem.', 'Digital', '1', 1, 'Jogos_PC/Football.jpg'),
(13, 'Aventura', 'Computador', 'Game Minecraft', '150,00', 'Minecraft é um jogo sobre colocar blocos e aventuras. Explore mundos gerados aleatoriamente e construa coisas incríveis, desde a mais simples das casas até o maior dos castelos. Jogue no Modo Criativo com recursos ilimitados ou no Modo Sobrevivência, defenda-se de monstros e mergulhe fundo no mundo para descobrir os minérios mais raros. Faça tudo isso sozinho ou trabalhe em conjunto com seus amigos pela internet. Construa, crie e explore', 'Digital', '1', 1, 'Jogos_PC/Minecraft.jpg'),
(14, 'Esporte', 'Computador', 'MXGP 3', '200,00', 'A nova edição MXGP, baseada na temporada de 2016, oferece ao jogador uma experiência de jogo dinâmica e cada vez mais agradável, \r\ngraças a uma série de gráficos e técnicas inovadoras introduzidas pelo novo mecanismo gráfico \r\nUnreal Engine 4, que levará a experiência do jogo a uma surpreendente novo nível.', 'CD', '1', 1, 'Jogos_PC/MXGP3.jpg'),
(15, 'Esporte', 'Computador', 'NFL 20', '90,00', 'Seja o cara de uma franquia da NFL, onde as decisões que você toma importam em sua jornada para se tornar um Superstar da NFL. \r\nCrie seu próprio College Quarterback para disputar os playoffs do College Football National Championship e o NFL \r\nCombine para ter uma chance no NFL Draft e ser o rosto de uma franquia em um novo e personalizado modo de campanha de carreira centrado em você. \r\nDepois de selecionado para uma equipe, participe do novo Scenario Engine de Madden, que gera cenários jogáveis ​​personalizados, eventos e desafios \r\ndinâmicos que constroem a história de sua carreira exclusiva na NFL.', 'Digital', '1', 1, 'Jogos_PC/NFL.jpg'),
(16, 'Ação', 'Computador', 'The Witcher 3', '250,00', 'A edição de The Witcher 3: Caça Selvagem do Ano reúne o jogo base e todo o conteúdo adicional lançado até o momento.\r\nInclui as expansões Hearts of Stone e Blood & Wine, que oferecem 50 horas de histórias adicionais, além de novos recursos \r\ne novas áreas que expandem o mundo explorável em mais de um terço!\r\nOferece acesso a todo o conteúdo adicional lançado até o momento, incluindo armas, armaduras, missões secundárias, modos de jogo e novas cartas GWENT!\r\nApresenta todas as atualizações técnicas e visuais, bem como uma nova interface do usuário completamente redesenhada \r\ncom base no feedback dos membros da Comunidade Witcher.', 'CD', '1', 1, 'Jogos_PC/Witcher_3.jpg');


-- --------------------------------------------------------

--
-- Estrutura da tabela `plataforma`
--

CREATE TABLE `plataforma` (
  `plataforma` varchar(100) NOT NULL,
  `ativo_plataforma` varchar(1) NOT NULL,
  `Descricao_plataforma` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `plataforma`
--

INSERT INTO `plataforma` (`plataforma`, `ativo_plataforma`, `Descricao_plataforma`) VALUES
('Computador', '1', 'Plataforma de jogos'),
('Nintendo', '0', 'Plataforma de jogos'),
('PlayStation', '1', 'Plataforma de jogos'),
('Xbox', '1', 'Plataforma de jogos');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administracao`
--
ALTER TABLE `administracao`
  ADD PRIMARY KEY (`id_admin`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoria`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices para tabela `jogo`
--
ALTER TABLE `jogo`
  ADD PRIMARY KEY (`id_jogo`);

--
-- Índices para tabela `plataforma`
--
ALTER TABLE `plataforma`
  ADD PRIMARY KEY (`plataforma`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administracao`
--
ALTER TABLE `administracao`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `jogo`
--
ALTER TABLE `jogo`
  MODIFY `id_jogo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
