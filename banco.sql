create database banco_style;
use banco_style;

create table calcados (
    id int auto_increment primary key,
    nome varchar(45),
    marca varchar(45),
	tamanho int ,
    tipo varchar(45),
    quantidade int ,
   preco decimal(20,2) 
	
);
create table funcionario(
    id int auto_increment primary key,
    nome varchar(45),
    email varchar(45),
    senha varchar(45),
    cargo varchar(45)

);
create table usuario (
    id int auto_increment primary key,
    nome varchar(45),
    email varchar(45),
    senha varchar(45)
);


