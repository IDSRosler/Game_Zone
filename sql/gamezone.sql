-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 11-Dez-2019 às 17:57
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
(2, 'Admin 2', 'admin@exemplo.com', 'Admin2', '$2y$10$/jJ0.6UdSAFacgueZGTlPOVvIbk6ZeKue0S/s1KzgOsYmWcoQIYwm'),
(3, 'Igor de Souza Rosler', 'idsrosler@inf.ufpel.edu.br', 'IDSRosler', '$2y$10$38lgZK3ZQLg536Qp6c/JX.js3sQ6/EO4xnYzkU/jVgHJX4jLgN4AG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id_carrinho` int(11) NOT NULL,
  `id_cliente` varchar(15) NOT NULL,
  `id_jogo` int(11) NOT NULL,
  `data_compra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`id_carrinho`, `id_cliente`, `id_jogo`, `data_compra`) VALUES
(5, '036.743.570-54', 7, '2019-12-11');

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
('036.743.570-54', 'Igor Rosler', 'idsrosler@inf.edu.ufpel.com', '(53) 99999-9999', 'Dos Bobos', 'Nenhuma', '', 'RS', 'IDSRosler', '$2y$10$VCpX7zaY5Gi5LEtkRBM5du/gE0SFTVJA6ZBvIj5AoI9kO53dKK3J2'),
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
(7, 'Aventura', 'Computador', 'Assassins Creed Origins', '150,00', 'Os segredos mais misteriosos do Egito Antigo serão lançados na extensão The Curse Of the Pharaohs, incluída no Season Pass de Assassins Creed Origins. \r\nViaje com Bayek para a cidade de Tebas depois que ele recebe relatos de eventos misteriosos. Após sua chegada, Bayek descobre que uma maldição desceu sobre a região, transformando Tebas em um pesadelo. \r\nPara suspender essa maldição, Bayek deve investigar sua causa enquanto luta contra bestas que antes se acreditava serem apenas lendas. \r\nEsta segunda expansão traz novo conteúdo para Assassins Creed Origins com novas missões, personagens e inimigos da mitologia egípcia. \r\nLute com escorpiões gigantes, guerreiros Anúbis e os animais mais poderosos do Egito em uma região totalmente nova.\r\n', 'Digital', '1', 1, 'Jogos_PC/Assassins.jpg'),
(8, 'Ação', 'Computador', 'Call of Duty 4', '200,00', 'Call of Duty 4: Modern Warfare, o thriller de ação da equipe premiada da Infinity Ward, os criadores da série Call of Duty, \r\noferece a experiência de ação mais intensa e cinematográfica de todos os tempos.\r\nArmado com um arsenal de poder de fogo avançado e poderoso nos dias de hoje, os jogadores são transportados para locais perigosos \r\nao redor do mundo para enfrentar um grupo inimigo desonesto que ameaça o mundo. \r\nComo um soldado da Marinha dos EUA e da Marinha britânica lutando por uma história que se desenrola cheia de reviravoltas, \r\nos jogadores usam tecnologia sofisticada, poder de fogo superior e ataques aéreos e terrestres \r\ncoordenados em um campo de batalha onde velocidade, precisão e comunicação são essenciais para a vitória.', 'CD', '1', 1, 'Jogos_PC/Call_of_Duty_4.jpg'),
(9, 'Esporte', 'Computador', 'DiRT Rally 2.0', '100,00', 'O DiRT Rally 2.0 desafia você a percorrer uma seleção de locais icônicos de ralis de todo o mundo, \r\nnos veículos off-road mais emblemáticos já feitos, sabendo que o menor erro pode terminar seu estágio. \r\nVocê precisará confiar em seus instintos com a experiência off-road mais imersiva e verdadeiramente focada \r\nde todos os tempos, incluindo um novo modelo de manuseio autêntico, escolha de pneus e degradação da superfície.\r\n\r\nPonha seu carro de rally em ambientes off-road da vida real na Nova Zelândia, Argentina, Espanha, Polônia, Austrália e \r\nEUA, com apenas seu co-piloto e instinto para guiá-lo.', 'Digital', '1', 1, 'Jogos_PC/DiRT_Rally_2.0.jpg'),
(11, 'Ação', 'Computador', 'Combo Far Cry', '300,00', 'Far Cry 5 Gold Edition\r\nA Gold Edition inclui o jogo, o Digital Deluxe Pack e o Season Pass.\r\nBem-vindo ao Hope County, Montana, terra dos livres e corajosos, \r\nmas também lar de um culto fanático do dia do juízo final conhecido como Projeto no Portão do Éden. \r\nLevante-se com o líder do culto Joseph Seed, e seus irmãos, os Arautos, para acender o fogo da resistência \r\ne libertar a comunidade sitiada.\r\n\r\nFar Cry New Dawn Deluxe Edition\r\nAtualize para a Deluxe Edition e receba o Digital Deluxe Pack.\r\nMergulhe em um vibrante e pós-apocalíptico Hope County, Montana, transformado, \r\n17 anos após uma catástrofe nuclear global.\r\nJunte-se a outros sobreviventes e lidere a luta contra a perigosa nova ameaça, \r\nos Highwaymen e seus implacáveis ​​líderes, The Twins, enquanto eles tentam assumir \r\nos últimos recursos restantes.', 'CD', '1', 1, 'Jogos_PC/Far_Cry_Novo_amanhecer_e_Far_Cry_5.jpg'),
(13, 'Aventura', 'Computador', 'Minecraft Full Game', '150,00', 'Minecraft é um jogo sobre colocar blocos e aventuras. Explore mundos gerados aleatoriamente e construa coisas incríveis, desde a mais simples das casas até o maior dos castelos. Jogue no Modo Criativo com recursos ilimitados ou no Modo Sobrevivência, defenda-se de monstros e mergulhe fundo no mundo para descobrir os minérios mais raros. Faça tudo isso sozinho ou trabalhe em conjunto com seus amigos pela internet. Construa, crie e explore', 'Digital', '1', 1, 'Jogos_PC/Minecraft.jpg'),
(14, 'Esporte', 'Computador', 'MXGP 3', '200,00', 'A nova edição MXGP, baseada na temporada de 2016, oferece ao jogador uma experiência de jogo dinâmica e cada vez mais agradável, \r\ngraças a uma série de gráficos e técnicas inovadoras introduzidas pelo novo mecanismo gráfico \r\nUnreal Engine 4, que levará a experiência do jogo a uma surpreendente novo nível.', 'CD', '1', 1, 'Jogos_PC/MXGP3.jpg'),
(15, 'Esporte', 'Computador', 'NFL 20', '90,00', 'Seja o cara de uma franquia da NFL, onde as decisões que você toma importam em sua jornada para se tornar um Superstar da NFL. \r\nCrie seu próprio College Quarterback para disputar os playoffs do College Football National Championship e o NFL \r\nCombine para ter uma chance no NFL Draft e ser o rosto de uma franquia em um novo e personalizado modo de campanha de carreira centrado em você. \r\nDepois de selecionado para uma equipe, participe do novo Scenario Engine de Madden, que gera cenários jogáveis ​​personalizados, eventos e desafios \r\ndinâmicos que constroem a história de sua carreira exclusiva na NFL.', 'Digital', '1', 1, 'Jogos_PC/NFL.jpg'),
(16, 'Ação', 'Computador', 'The Witcher 3', '250,00', 'A edição de The Witcher 3: Caça Selvagem do Ano reúne o jogo base e todo o conteúdo adicional lançado até o momento.\r\nInclui as expansões Hearts of Stone e Blood & Wine, que oferecem 50 horas de histórias adicionais, além de novos recursos \r\ne novas áreas que expandem o mundo explorável em mais de um terço!\r\nOferece acesso a todo o conteúdo adicional lançado até o momento, incluindo armas, armaduras, missões secundárias, modos de jogo e novas cartas GWENT!\r\nApresenta todas as atualizações técnicas e visuais, bem como uma nova interface do usuário completamente redesenhada \r\ncom base no feedback dos membros da Comunidade Witcher.', 'CD', '1', 1, 'Jogos_PC/Witcher_3.jpg'),
(17, 'Ação', 'PlayStation', 'Days Gone', '200,00', 'Days gone é um jogo de ação e aventura em mundo aberto que se passa em um ambiente adverso dois anos após uma pandemia mundial devastadora. Jogue com Deacon St. John, um andarilho e caçador de recompensas que segue um caminho tortuoso, lutando para sobreviver ao mesmo tempo em que busca uma razão para viver. Um mundo aberto inóspito: usando o poder do playstation 4 e do unreal engine 4, days gone proporciona uma experiência em mundo aberto incrivelmente realista e detalhada. Entre de cabeça em ambientes vastos e hostis e explore seus segredos.', 'CD', '1', 1, 'Jogos_Play/Days_Gone.jpg'),
(18, 'Ação', 'PlayStation', 'God of War', '150,00', 'É um novo começo para Kratos vivendo como um homem longe da sombra dos deuses, ele se aventura pelas selvagens florestas nórdicas com seu filho Atreus, lutando para cumprir uma missão profundamente pessoal. O Santa Monica Studio e o diretor de criação Cory Barlog lançam um novo começo para um dos personagens mais conhecidos dos jogos vivendo como um homem, fora da sombra dos deuses, Kratos deve se adaptar a terras desconhecidas, ameaças inesperadas e a uma segunda oportunidade de ser pai junto ao seu filho, Atreus, os dois vão se aventurar pelas selvagens florestas nórdicas e lutar para cumprir uma missão profundamente pessoal um novo começo ousado: sua vingança contra os deuses do Olimpo agora é passado e Kratos vive como um homem comum no reino dos monstros e deuses nórdicos e é nesse mundo inóspito e implacável que ele precisa lutar para sobreviver.', 'Digital', '1', 1, 'Jogos_Play/God_Of_War.jpg'),
(19, 'Ação', 'PlayStation', 'Mortal Kombat', '100,00', 'Mortal Kombat está de volta e melhor do que nunca na nova evolução dessa franquia icônica. As novas Variações Customizadas de Personagem oferecem controle sem precedentes para personalizar os lutadores e torná-los seus. O novo motor gráfico demonstra em detalhes cada momento, dos ossos triturados aos olhos saltando, te trazendo tão perto da luta que você consegue senti-la. Trazendo um elenco de personagens novos e Klássicos, o aclamado modo história de Mortal Kombat está de volta, continuando a saga épica que vem sendo construída ao longo de 25 anos.', 'CD', '1', 1, 'Jogos_Play/Mortal_Kombat.jpg'),
(20, 'Aventura', 'PlayStation', 'Spider Man', '90,00', 'Marvels Spider-Man Marvels Spider-Man traz seu lançador de teias favorito em uma história diferente de qualquer outra antes vista. Agora como um super herói experiente, Peter Parker tem estado ocupado combatendo o crime nas ruas como o Homem-Aranha. E justamente quando ele está disposto a priorizar sua vida como Peter, um novo vilão chega para ameaçar New York. Enfrentando adversidades avassaladoras e enormes riscos, o Homem-Aranha terá de mostrar sua força e ser superior. A Sony Interactive Entertainment, a Marvel e a Insomniac Games apresentam Marvel’s Spider-Man exclusivamente para o PlayStation 4.', 'Digital', '1', 1, 'Jogos_Play/Spider_Man.jpg'),
(21, 'Ação', 'Xbox', 'Anthem', '199,00', 'Em um mundo inacabado pelos deuses, uma facção sombria ameaça toda a humanidade. A única coisa que impede esses vilões de conquistar uma cobiçada tecnologia ancestral são os freelancers. Junte-se com até tres jogadores e monte armaduras potentes, sob medida, com tecnologia de ponta. Explore vastas ruínas, lute contra inimigos brutais e recupere artefatos sobrenaturais. A cada missão, você e sua lança ganham mais poder. Enfrente os perigos de um mundo em constante transformação. Junte suas forças para derrotar o mal. Vença em equipe.\r\nAnthem é um convite para vivenciar um RPG cooperativo de ação ambientado em um mundo novo e misterioso criado pela BioWare e pela EA.', 'CD', '1', 1, 'Jogos_Xbox/anthem.jpg'),
(22, 'Ação', 'Xbox', 'Contra', '90,00', 'Contra: Rogue Corps é um videogame de corrida e arma da série Contra, desenvolvido e publicado pela Konami Digital Entertainment.', 'Digital', '1', 1, 'Jogos_Xbox/contra.jpg'),
(23, 'Aventura', 'Xbox', 'Crash', '100,00', 'Seu marsupial favorito, Crash Bandicoot, está de volta! Ele está aprimorado, inspirado e preparado para dançar na coleção de jogos da trilogia insana. Agora você pode jogar Crash Bandicoot como nunca antes. Gire, pule, golpeie e repita conforme você enfrentar as aventuras e os desafios épicos atrações dos tres jogos que deram início a tudo, Crash Bandicoot, Crash Bandicoot 2: Cortex Strikes Back e Crash Bandicoot: Warped. Reviva todos os seus momentos favoritos de Crash em seu apogeu gráfico em HD totalmente remasterizado e se prepare para colocar um CRASH nos seus golpes!', 'CD', '1', 1, 'Jogos_Xbox/crashBandicoot.jpg'),
(24, 'Esporte', 'Xbox', 'Fifa 20', '150,00', 'Com a tecnologia Frostbite*, EA SPORTS FIFA 20 para PlayStation 4, Xbox One e PC traz os dois lados do Maior Jogo do Mundo o prestígio do nível profissional e uma nova experiência de autêntico futebol de rua com EA Sports Volta. FIFA 20 inova no jogo inteiro, o sistema de Inteligência de Futebol libera uma plataforma sem precedentes para o realismo da jogabilidade, FIFA Ultimate Team oferece mais maneiras de montar o seu time dos sonhos, e EA Sports Volta leva o jogo de volta para as ruas, com uma forma autêntica de futebol com poucos jogadores.', 'CD', '1', 1, 'Jogos_Xbox/fifa20.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `plataforma`
--

CREATE TABLE `plataforma` (
  `plataforma` varchar(100) NOT NULL,
  `ativo_plataforma` varchar(1) NOT NULL,
  `descricao_plataforma` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `plataforma`
--

INSERT INTO `plataforma` (`plataforma`, `ativo_plataforma`, `descricao_plataforma`) VALUES
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
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id_carrinho`),
  ADD KEY `Id_cliente` (`id_cliente`),
  ADD KEY `Id_jogo` (`id_jogo`);

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
  ADD PRIMARY KEY (`id_jogo`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_plataforma` (`id_plataforma`);

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id_carrinho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `jogo`
--
ALTER TABLE `jogo`
  MODIFY `id_jogo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`cpf`),
  ADD CONSTRAINT `carrinho_ibfk_2` FOREIGN KEY (`id_jogo`) REFERENCES `jogo` (`id_jogo`);

--
-- Limitadores para a tabela `jogo`
--
ALTER TABLE `jogo`
  ADD CONSTRAINT `jogo_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`categoria`),
  ADD CONSTRAINT `jogo_ibfk_2` FOREIGN KEY (`id_plataforma`) REFERENCES `plataforma` (`plataforma`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
