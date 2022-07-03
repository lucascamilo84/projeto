
use ;


SELECT * FROM calcados;

create table calcados (
    id int auto_increment primary key,
    nome varchar(45),
    marca varchar(45),
	tamanho int ,
    tipo varchar(45),
    quantidade int ,
   preco decimal(20) 
	
);
create table cad_funcionario(
    id int auto_increment primary key,
    nome varchar(45),
    sobrenome varchar(45),
	cpf int ,
    email varchar(45),
    telefone decimal(10),
    senha varchar(45)

);
create table usuario (
    id int auto_increment primary key,
    nome varchar(45),
    email varchar(45),
 