CREATE DATABASE IF NOT EXISTS biblioteca;

CREATE TABLE users(
    idUser INT NOT NULL AUTO_INCREMENT,
    name VARCHAR (100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    course VARCHAR(50) NOT NULL,
    registration INT NOT NULL,
    catUser VARCHAR(50) NOT NULL,
    cpf INT(11) NOT NULL,
    email VARCHAR (50) NOT NULL,
    senha VARCHAR (32) NOT NULL,
    PRIMARY KEY (idUser)
);

CREATE TABLE obra(
    idObra INT NOT NULL AUTO_INCREMENT,
    idCollection INT NOT NULL,
    title VARCHAR(100) NOT NULL,
    subtitle VARCHAR(100) NOT NULL,
    author VARCHAR(50) NOT NULL,
    category VARCHAR(50) NOT NULL,
    publicationDate date NOT NULL,
    publishCompany VARCHAR(50) NOT NULL,
    codObra INT(100) NOT NULL,
    translator VARCHAR(50) NOT NULL,
    publishLocation VARCHAR(100) NOT NULL,
    seriesISBN INT(100) NOT NULL,
    cover LONGBLOB NOT NULL,
    physicalDescription VARCHAR(100) NOT NULL,
    disponibility INT(100) NOT NULL,
    synopses VARCHAR(600) NOT NULL,
    PRIMARY KEY (idBook),
    FOREIGN KEY (idCollection) REFERENCES obra(idCollection)
);

CREATE TABLE comment(
    idComment INT NOT NULL AUTO_INCREMENT,
    comment VARCHAR(600) NOT NULL,
    idUser INT NOT NULL,
    idBook INT NOT NULL,
    PRIMARY KEY(idComment),
    FOREIGN KEY (idUser) REFERENCES users(idUser),
    FOREIGN KEY (idBook) REFERENCES books(idBook)
);

CREATE TABLE collection(
    idCollection INT NOT NULL AUTO_INCREMENT,
    typeCollection VARCHAR(50) NOT NULL,
    codCollection INT(250) NOT NULL,
    classCDU VARCHAR(250) NOT NULL,
    PRIMARY KEY (idCollection)
);

CREATE TABLE 