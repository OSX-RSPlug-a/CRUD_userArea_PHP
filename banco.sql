create database locadora;


create table usuario (
id_usu int auto_increment primary key,
nome varchar(30) not null,
email varchar(100) not null,
senha varchar(8) not null
);


---------------------------------------

INSERT INTO usuario (nome, email, senha) VALUES ('John', 'jn@email.com', 'key98765');


----------------------------------------

SELECT * FROM `usuario`;
