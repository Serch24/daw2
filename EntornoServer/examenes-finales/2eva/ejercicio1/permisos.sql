DROP USER IF EXISTS alumno@mysql;

CREATE USER alumno@mysql IDENTIFIED BY '1234';

GRANT SELECT,INSERT,UPDATE ON examen.acceso TO alumno@mysql;
GRANT SELECT,INSERT,UPDATE ON examen.evento TO alumno@mysql;

FLUSH PRIVILEGES;
