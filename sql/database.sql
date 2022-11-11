CREATE DATABASE IF NOT EXISTS biblioteca;
 use biblioteca;
CREATE TABLE users(
    idUser INT NOT NULL AUTO_INCREMENT,
    nameUser VARCHAR (100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    course VARCHAR(50) NOT NULL,
    registration BIGINT NOT NULL,
    catUser VARCHAR(50) NOT NULL,
    cpf BIGINT UNSIGNED (11) NOT NULL,
    email VARCHAR (100) NOT NULL,
    senha VARCHAR (32) NOT NULL,
    PRIMARY KEY (idUser)
);

CREATE TABLE collection(
    idCollection INT NOT NULL AUTO_INCREMENT,
    typeCollection VARCHAR(50) NOT NULL,
    codCollection INT(250) NOT NULL,
    classCDU VARCHAR(250) NOT NULL,
    PRIMARY KEY (idCollection)
);

CREATE TABLE obra(
    idObra INT NOT NULL AUTO_INCREMENT,
    idCollection INT,
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
    cover VARCHAR(100) NOT NULL,
    physicalDescription VARCHAR(100) NOT NULL,
    disponibility INT(100) NOT NULL,
    synopses VARCHAR(600) NOT NULL,
    userLevel ENUM ('administrator','moderator', 'normal') DEFAULT ('normal');
    PRIMARY KEY (idObra),
    FOREIGN KEY (idCollection) REFERENCES collection(idCollection)
);

CREATE TABLE comment(
    idComment INT NOT NULL AUTO_INCREMENT,
    comment VARCHAR(600) NOT NULL,
    idUser INT NOT NULL,
    idObra INT NOT NULL,
    PRIMARY KEY(idComment),
    FOREIGN KEY (idUser) REFERENCES users(idUser),
    FOREIGN KEY (idObra) REFERENCES obra(idObra)
);



CREATE TABLE authors(
    idAuthor INT NOT NULL AUTO_INCREMENT,
    nameAuthor VARCHAR(300) NOT NULL,
    PRIMARY KEY (idAuthor)
);

CREATE TABLE translators (
    translatorID INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(300),
    PRIMARY KEY(translatorID)
);


