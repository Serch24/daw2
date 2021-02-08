DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `login` varchar(10) NOT NULL PRIMARY KEY,
  `clave_hash` varchar(200) NOT NULL
) ;

insert into usuarios 
values ('laura','$2y$15$ZBPIhsmswdjXYNjG6NrJweV0D7sfT48EIHEaNZAWuLFWwP2DBfGu2' ), 
       ('pepe', '$2y$15$7Yo2suxocyPm9jCC.ffvW.R7sYF5Qsl3pdq85IW8TMpjVwU7k2Z62'),
	   ('ana', '$2y$15$W8sUCNqYz9O7xQYzombgj.y5/JeXujFoHplsqRV8vtq9qpBOD3Afi');
select * from usuarios;
# laura 1234
# pepe 1234
# ana Nohay2sin3