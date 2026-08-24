CREATE DATABASE IF NOT EXISTS patinhas_seguranca;

USE patinhas_seguranca;

CREATE TABLE clientes(
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    nome_usuario VARCHAR(100),
    telefone VARCHAR(100)
);

CREATE TABLE animais(
    id_animal INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT,
    nome_animal VARCHAR(100),
    especie VARCHAR(100),
    raca VARCHAR(100),
    idade INT,
    FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente)
);