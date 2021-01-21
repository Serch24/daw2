CREATE USER alumno@localhost IDENTIFIED BY '1234';
GRANT SELECT,UPDATE on dwes.usuarios TO alumno@localhost;
/*show grants for alumno@localhost \G*/

CREATE DATABASE dwes;
Use dwes;

CREATE TABLE usuarios(
   login VARCHAR(10),
   clave VARCHAR(10) not null,
   PRIMARY KEY (login)
);

INSERT INTO usuarios
   values('sergio','12345'),
   ('Andres','55555');
