DROP TABLE IF EXISTS usuarios;

create user sergio@localhost IDENTIFIED BY '1234';
grant select on dwes.usuarios to sergio@localhost;
flush privileges;

CREATE TABLE `usuarios` (
  `login` varchar(10) NOT NULL PRIMARY KEY,
  `clave_hash` varchar(200) NOT NULL
) ;

insert into usuarios (login,clave_hash) values ("sergio",sha2("1234",512));
