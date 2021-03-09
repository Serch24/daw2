CREATE DATABASE examen2eva;
use examen2eva;
DROP TABLE IF EXISTS usuarios;
DROP TABLE IF EXISTS registro_vacuna;
DROP TABLE IF EXISTS censo;
DROP TABLE IF EXISTS vacuna;


CREATE TABLE `examen2eva`.`vacuna` 
( 
`idvacuna` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
`nombre` VARCHAR(100) NOT NULL , 
`efectividad` INT NOT NULL , 
`fecha_caducidad` DATE NOT NULL , 
`cantidad` INT UNSIGNED NOT NULL 
) ;

INSERT INTO examen2eva.vacuna (nombre, efectividad, fecha_caducidad, cantidad)
VALUES
('Pfizer', 95, 20210505, 100 ),
('Moderna', 94, 20210611, 15 ),
('Sputnik V', 91, 20210725, 50 ),
('AstraZeneca', 70, 20210501, 120 )

;


CREATE TABLE `examen2eva`.`censo` 
(
 `idpersona` INT NOT NULL AUTO_INCREMENT , 
  `nombre` VARCHAR(100) NOT NULL , 
  `apellidos` VARCHAR(100) NOT NULL , 
  `fecha_nac` DATE NOT NULL , 
  `vacunada` BOOLEAN NOT NULL , 
  PRIMARY KEY (`idpersona`)
 ) ;
 
INSERT INTO censo 
VALUES
(1, 'Pepe', 'Pérez', 19980505, false ),
(2, 'Lidia', 'Eras', 20000104, false ),
(3, 'Pilar', 'Fol', 19881107, false ),
(4, 'Pamela', 'Sanz', 19800315, false ),
(5, 'Ricardo', 'Manrique', 19820610, false ),
(6, 'Leonor', 'Escamez', 19750611, true ),
(7, 'Lisa', 'Riquelme', 19750720, true ),
(8, 'Lisa', 'Rodríguez', 19700620, true ),
(9, 'Ana', 'Pérez', 19901230, false ),
(10, 'Gaspar', 'Morales', 19901230, false ),
(11, 'Renata', 'Barroso', 19901230, false ),
(12, 'Carina', 'Vargas', 19901230, false ),
(13, 'Reyes', 'Bravo', 19941230, false ),
(14, 'Felipe', 'Cruz', 19951215, false ),
(15, 'Patricia', 'Vera', 19881211, false ),
(16, 'Rita', 'Salvador', 19971222, false ),
(17, 'Rosa', 'Ceballos', 19931230, false ),
(18, 'Filomena', 'Cirio', 19951215, false ),
(19, 'María', 'Vera', 19881211, false ),
(20, 'Remedios', 'García', 19971222, false ),
(21, 'Ricardo', 'Caballero', 19931230, false )
;

 CREATE TABLE `examen2eva`.`usuarios` 
 (
 `idUsuario` INT NOT NULL , 
 `login` VARCHAR(50) NOT NULL ,
 `clave` VARCHAR(200) NOT NULL ,
 nombre_completo VARCHAR(100) NOT NULL,
 perfil int NOT NULL, 
 PRIMARY KEY (`idUsuario`),
 UNIQUE (login)
 );
 
 INSERT INTO usuarios 
 VALUES 
 (1, 'laura', '$2y$10$zc66sBPQjBSvDBTvKfJ78ev6P/yuzI.AMobcEmkj2Or/uRCgNAGoi', 'Laura Pérez', 1),
 (2, 'pepe', '$2y$10$zc66sBPQjBSvDBTvKfJ78ev6P/yuzI.AMobcEmkj2Or/uRCgNAGoi', 'Pépe Lis', 2),
 (3, 'ana', '$2y$10$9VD4VZsFzc4HO/SbG3Brz.Z7KhqpeplQ4HO10TGoYTUJGEo2Mclv6', 'Alicia Calvo', 2)
 ;
# laura 1234
# pepe 1234
# ana Nohay2sin3
 
select * from  usuarios;
/* select * from  registro_vacuna;*/
select * from  censo;
select * from  vacuna;


