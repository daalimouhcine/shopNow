
CREATE DATABASE IF NOT EXISTS shopnow;

CREATE TABLE IF NOT EXISTS shopnow . employee (
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL
) Engine = InnoDB ;

CREATE TABLE IF NOT EXISTS shopnow . categorie (
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(255) NOT NULL
) Engine = InnoDB ;

CREATE TABLE IF NOT EXISTS shopnow . product (
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(255) NOT NULL,
    `price` float NOT NULL,
    `qty` varchar(255) NOT NULL
) Engine = InnoDB ;


-- Add the first column on all the tables.
INSERT INTO shopnow . employee(name, email, password) VALUES ('admin', 'admin@shopnow.com', 'admin');

INSERT INTO shopnow . categorie(name) VALUES ('drinks');

INSERT INTO shopnow . product(name, price, qty) VALUES ('CocaCola', 3.5, 952);