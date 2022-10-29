CREATE TABLE usuarios(
    idUser INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR (100) NOT NULL,
    sobrenome VARCHAR(100) NOT NULL,
    curso VARCHAR(50) NOT NULL,
    matricula INT NOT NULL,
    catUser VARCHAR(50) NOT NULL,
    cpf INT(11) NOT NULL,
    email VARCHAR (50) NOT NULL,
    senha VARCHAR (32) NOT NULL,
    PRIMARY KEY (idUser));


   