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


CREATE TABLE categorias(
	id int(255) auto_increment not null,
	nombre varchar(255) not null,
	constraint pk_categorias PRIMARY KEY (id)
)ENGINE=InnoDb;

CREATE TABLE entradas(
	id int(255) auto_increment not null,
	usuario_id int(255) not null,
	categoria_id int(255) not null,
	titulo varchar(255) not null,
	descripcion mediumtext,
	fecha date not null,
	constraint pk_entradas PRIMARY KEY (id),
	constraint fk_entrada_usuario FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
	constraint fk_entrada_categoria FOREIGN KEY (categoria_id) REFERENCES categorias(id) ON UPDATE CASCADE

)ENGINE=InnoDb;


ON UPDATE CASCADE
ON DELETE SET DEFAULT
ON DELETE NO ACTION
ON DELETE CASCADE