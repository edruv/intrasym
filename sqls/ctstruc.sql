create table departamento(
	id int auto_increment primary key,
	nombre varchar(80)
)

create table area(
	id int auto_increment primary key,
	nombre varchar(80),
	idDepto int not null,
	foreign key(idDepto) references departamento(id)
)

create table subarea(
	id int auto_increment primary key,
	nombre varchar(80),
	idArea int not null,
	foreign key(idArea) references area(id)
)
