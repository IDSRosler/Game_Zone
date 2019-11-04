CREATE DATABASE gamezone;
USE gamezone;

CREATE TABLE cliente (
    nome VARCHAR(50) NOT NULL,
    endereco VARCHAR(100) NOT NULL,
    telefone VARCHAR(13) NOT NULL,
    email VARCHAR(100) NOT NULL,
    cpf INT(11) NOT NULL,
    senha_cod VARCHAR(100) NOT NULL,
    PRIMARY KEY(cpf)
);

CREATE TABLE jogo (
    titulo VARCHAR(30) NOT NULL,
    tipo VARCHAR(10) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    categoria VARCHAR(50) NOT NULL,
    descrição VARCHAR(255),
    id INT(11) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE xbox(
    versao VARCHAR(30),
    kinect BIT,
    FOREIGN KEY(id_jogo) REFERENCES jogo(id)
);

CREATE TABLE playstation(
    versao VARCHAR(30),
    FOREIGN KEY(id_jogo) REFERENCES jogo(id)
);

CREATE TABLE computador(
    tamanho INT,
    FOREIGN KEY(id_jogo) REFERENCES jogo(id)
);

CREATE TABLE forma_pagamento(
    boleto BIT NOT NULL,
    debito BIT NOT NULL,
    credito BIT NOT NULL,
    desconto DECIMAL(10,2),
    juros PERCENTAGE,
    nvezes INT(2),
    id_pagamento INT
);

CREATE TABLE venda(
    quantidade INT NOT NULL,
    data_venda DATE,
    FOREIGN KEY(cpf) REFERENCES cliente(cpf),
    FOREIGN KEY(id_jogo) REFERENCES jogo(id),
    FOREIGN KEY(id_pagamento) REFERENCES forma_pagamento(id_pagamento)
);