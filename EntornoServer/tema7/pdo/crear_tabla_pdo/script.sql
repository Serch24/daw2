DROP USER IF EXISTS task_user;
/*DROP DATABASE IF EXISTS dwes;*/

/*CREATE DATABASE dwes;*/

CREATE USER task_user IDENTIFIED BY '1234';
GRANT SELECT,INSERT ON tasks to task_user;

insert into tasks (task_id,subject,start_date,end_date,description) values (1,"no se que colocar","2000-10-20","2000-10-22","una descripción"),(2,"no seeee","2010-04-10","2010-05-02","una descripción mas que mas");
