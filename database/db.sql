CREATE DATABASE atividade_10;
USE atividade_10;

CREATE TABLE cliente(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(254) NOT NULL UNIQUE,
    telefone INT NOT NULL,
    endereco VARCHAR(100) NOT NULL

);

CREATE TABLE restaurante(
id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
categoria VARCHAR(100) NOT NULL,
telefone INT NOT NULL,
endereco VARCHAR(100) NOT NULL

);

CREATE TABLE pedido(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    cliente_id INT NOT NULL,
    restaurante_id INT NOT NULL,
    data_pedido DATE NOT NULL,
    CONSTRAINT fk_cliente_pedido FOREIGN KEY(cliente_id) REFERENCES cliente(id),
    CONSTRAINT fk_restaurante_pedido FOREIGN KEY(restaurante_id) REFERENCES restaurante(id),
    status VARCHAR(100) NOT NULL
)