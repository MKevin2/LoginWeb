CREATE DATABASE login_php;
USE login_php;

CREATE TABLE usuario(
	codCliente int primary key auto_increment,
    nome varchar(30) not null,
    senha VARCHAR(50) not null,
    cpf VARCHAR(11) NOT NULL UNIQUE
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

RENAME TABLE endereco TO tb_endereco;
RENAME TABLE usuario TO tb_usuario;

# Criando view para acesso às informações de forma segura, para não acessar diretamente as tabelas
create view vw_perfil_cliente as
select 
	tb_usuario.codCliente, 
    tb_usuario.nome,
    tb_usuario.senha,
    tb_usuario.cpf,
    rua,
    numero,
    complemento,
    cep,
    bairro,
    uf
from tb_endereco
	inner join tb_usuario on tb_usuario.codCliente = tb_endereco.codCliente; 
    
select * from vw_perfil_cliente;
