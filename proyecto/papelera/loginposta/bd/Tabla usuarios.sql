
create database changasDB;

use changasDB;

create table usuarios(
				id int auto_increment,
				nombre varchar(50),
				apellido varchar(50),
				email varchar(90),
				usuario varchar(50),
				password text(50),
				primary key(id)
					);