CREATE USER sergio@localhost IDENTIFIED by '1234';
use dwes;

create table brawl (id int not null auto_increment,nombre varchar(10),num_start_power int(2),num_skins int(5), primary key (id));

GRANT SELECT,insert,update,delete on brawl to sergio@localhost;

insert into brawl (nombre,num_start_power,num_skins) values ('tick',2,3),('genio',2,4);
