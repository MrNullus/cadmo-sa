-- criar banco projeto_cadmo_sa
CREATE DATABASE `projeto_cadmo_sa`;

-- criar tabelas
CREATE TABLE `paciente` (
	cod INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(15)
);


CREATE TABLE `dentista` (
	crm INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    espec VARCHAR(100) NOT NULL,
    valor FLOAT(9) NOT NULL
);


CREATE TABLE `consulta` (
	cod INT PRIMARY KEY AUTO_INCREMENT,
    crm INT,
    hora DATETIME NOT NULL,
    valor FLOAT(9) NOT NULL,
    FOREIGN KEY (crm) REFERENCES dentista(crm)
);	

