create database contato;

use contato;

create table usuarios (
    id int auto_increment primary key,
    nome varchar(255) not null,
    snome varchar(255) not null,
    nascimento varchar(255) not null,
    email varchar (255) not null,
    senha varchar(32) not null
);

create table prestadores (
    id int auto_increment primary key,
    pj varchar(255) not null,
    cnpj varchar(255) not null,
    tel varchar(255) not null,
    ende varchar(255) not null,
    categoria varchar(255) not null,
    email varchar (255) not null,
    senha varchar(32) not null
)