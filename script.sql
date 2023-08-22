CREATE DATABASE IF NOT EXISTS inmobiliaria;
USE inmobiliaria;

DROP TABLE IF EXISTS usuarios;
DROP TABLE IF EXISTS viviendas;

CREATE TABLE usuarios (
    nombre varchar(30) primary key,
    passwd varchar(30) NOT NULL,
    esAdmin boolean NOT NULL
);

CREATE TABLE viviendas (
    id int primary key auto_increment,
    tipo varchar(20) NOT NULL,
    nombre varchar(100) NOT NULL,
    ubicacion varchar(30) NOT NULL,
    precio int NOT NULL,
    metros int NOT NULL,
    habitaciones int NOT NULL,
    pisos int NOT NULL,
    baños int NOT NULL,
    garage boolean not null,
    imagen varchar(50)
);


INSERT INTO usuarios VALUES ("admin","admin",1);
INSERT INTO usuarios VALUES ("usuario1","usuario1",0);

INSERT INTO viviendas VALUES (NULL, "Casa", "Casa moderna doble piso", "Granada", 550000, 200, 4, 3, 4, 1, "fotos/casa1.jpg");
INSERT INTO viviendas VALUES (NULL, "Casa", "Casa con solo un piso","Baza",  120000, 80, 2, 1, 1, 0, "fotos/casa2.jpg");
INSERT INTO viviendas VALUES (NULL, "Casa", "Chalet de madera blanca", "Caniles", 460000, 130, 3, 2, 2, 0, "fotos/casa3.jpg");
INSERT INTO viviendas VALUES (NULL, "Casa", "Casa pequeña con jardín", "Baza", 180000, 60, 1, 2, 2, 0, "fotos/casa4.jpg");
INSERT INTO viviendas VALUES (NULL, "Piso", "Apartamento minimalista una habitación","Granada",200000, 60, 1, 1, 1, 0, "fotos/piso1.jpg");
INSERT INTO viviendas VALUES (NULL, "Piso", "Apartamento planta 3 de lujo","Granada", 900000, 130, 3, 2, 2, 1, "fotos/piso2.jpg");
INSERT INTO viviendas VALUES (NULL, "Piso", "Apartamento moderno dos habitaciones","Granada",340000, 75, 2, 1, 1, 0, "fotos/piso3.jpg");
INSERT INTO viviendas VALUES (NULL, "Piso", "Apartamento a remodelar dos habitaciones","Baza",190000, 90, 2, 1, 1, 1, "fotos/piso4.jpg");
INSERT INTO viviendas VALUES (NULL, "Rural", "Casa de madera moderna en el bosque","Caniles", 350000, 100, 2, 2, 2, 0, "fotos/rural1.jpg");
INSERT INTO viviendas VALUES (NULL, "Rural", "Casa de ladrillo antigua","Baza",200000, 90, 2, 2, 2, 0, "fotos/rural2.jpg");
INSERT INTO viviendas VALUES (NULL, "Rural", "Chalet de lujo de doble piso","Granada", 685000, 110, 2, 2, 3, 1, "fotos/rural3.jpg");
INSERT INTO viviendas VALUES (NULL, "Rural", "Casa azul pequeña en la montaña","Granada", 150000, 80, 1, 2, 2, 0, "fotos/rural4.jpg");
