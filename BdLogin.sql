CREATE DATABASE login_php;
USE login_php;

CREATE TABLE usuario(
	codCliente int primary key auto_increment,
    nome varchar(30) not null,
    senha VARCHAR(50) not null,
    cpf varchar(11) not null unique
);

CREATE TABLE endereco(
	codEndereco int primary key auto_increment,
    rua varchar(100) not null,
    numero smallint not null,
    complemento varchar(20),
    cep decimal(8) not null,
    bairro varchar(50) not null,
    uf char(2) not null,
    
    codCliente INT,
    FOREIGN KEY (codCliente) REFERENCES usuario(codCliente)
);