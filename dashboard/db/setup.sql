
CREATE DATABASE IF NOT EXISTS shopnow;

CREATE TABLE IF NOT EXISTS shopnow . employee (
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL
) Engine = InnoDB ;

CREATE TABLE IF NOT EXISTS shopnow . products (
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `ProductName` varchar(255) NOT NULL,
    `Price` float NOT NULL,
    `Quantity` varchar(255) NOT NULL,
    `Category` varchar(255) NOT NULL
) Engine = InnoDB ;


-- Add the first column on all the tables.
INSERT INTO shopnow . employee(name, email, password) VALUES('admin', 'admin@shopnow.com', 'admin');

INSERT INTO shopnow . products(ProductName, Price, Quantity, Category) VALUES('CocaCola', 3.5, 952, 'drink');