-- Criar banco (opcional)
CREATE DATABASE IF NOT EXISTS flash_party;
USE flash_party;

-- Tabela de categorias
CREATE TABLE categoria (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);

-- Tabela de subcategorias
CREATE TABLE subcategoria (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    id_categoria INT NOT NULL,
    FOREIGN KEY (id_categoria) REFERENCES categoria(id)
);

-- Tabela de produtos
CREATE TABLE produto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    imagem VARCHAR(255),
    id_subcategoria INT NOT NULL,
    FOREIGN KEY (id_subcategoria) REFERENCES subcategoria(id)
);

-------------------------------------------------------------------------------

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