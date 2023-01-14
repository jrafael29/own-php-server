CREATE DATABASE own;

DROP TABLE IF EXISTS public.produtos;
CREATE TABLE public.produtos (id SERIAL NOT NULL PRIMARY KEY, name VARCHAR(50) NOT NULL, description VARCHAR(50) NOT NULL, price DECIMAL(10,2) NOT NULL);

INSERT INTO produtos ( name, description, price) 
VALUES 
('fogao', 'fogao para cozinha', 1000.43)
('carregador', 'carregador para celular', 100.92),
('fone', 'fone para celular', 56.20);