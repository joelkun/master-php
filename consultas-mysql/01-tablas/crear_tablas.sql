/*
int(nº cifras) entero
integer(nº cifras) enter (maximo 4294967285)
varchar(nº caracteres) string / alfanumerico(masximo 255)
char(nº caracteres) string / alfanumerico
float(nº cifras, nº decimales) decimal / coma flotante
date, time, timestamp
// STRING MAS GRANDES
TEXT 65535 caracteres
MEDIUMTEXT 16 millones
longtext 4 billones caracteres

//ENTEROS MAS GRANDE
MEDIUMINT
BIGINT
*/


/*
CREAR TABLA
*/
CREATE TABLE usuarios(
id int(11) auto_increment not null,
nombre varchar(100) not null,
apellidos varchar(255) default 'hola que tal',
email varchar(100) not null,
password varchar(255),
constraint pk_usuarios PRIMARY KEY(id)
);
