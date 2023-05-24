CREATE DATABASE notas_master;
use notas_master;

CREATE TABLE usuarios(
	id int(255) auto_increment not null,
	nombre varchar(100) not null,
	apellidos varchar(100) not null,
	email varchar(255) not null,
	password varchar(255) not null,
	fecha date not null,
	constraint pk_usuarios PRIMARY KEY (id),
	constraint uq_email UNIQUE(email) 
)ENGINE=InnoDb;

CREATE TABLE notas(
	id int(255) auto_increment not null,
	usuario_id int(255) not null,
	titulo varchar(255) not null,
	descripcion mediumtext,
	fecha date not null,
	constraint pk_notas PRIMARY KEY (id),
	constraint fk_notas_usuario FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDb;