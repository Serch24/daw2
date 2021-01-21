CREATE USER alumno@localhost IDENTIFIED BY '1234';
GRANT SELECT on dwes.personas TO alumno@localhost;
/*show grants for alumno@localhost \G*/
