CREATE DATABASE aula1;
USE aula1;
CREATE TABLE usuarios1(
id_usuario INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR (45),
email VARCHAR(45),
data_nascimento DATE,
senha VARCHAR(20) 
)