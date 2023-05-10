# CONSULTA CON UNA CONDICION#
SELECT * FROM usuarios WHERE email='admin@correo.com';

/*
OPERADORES DE COMPARACION
Igual         =
Distinto      !=
Menor         <
Mayor         >
Menor o igual <=
Mayor o igual >=
Entre         between A and B
En in         in
Es nulo       is null 
No nulo       is not null
Como          like
No es como    not like
*/

/*
OPERADORES LOGICOS
O 		OR
Y 		AND
NO 	 	NOT
*/

/*
COMODINES:
Cualquier cantidad de caracteres: %
Un caracter desconocido: _
*/



# 1. Mostrar Nombre y Apellidos de todos los usuarios registrados en 2019
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha)=2019;

# 2. Mostrar Nombre y Apellidos de todos los usuarios que no  se registrados en 2019
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha)!=2019 or isnull(fecha);

# 3. Mostrar el email de usuarios de los apellidos que contenga la letra a y su 
# contraseña sea 1234
SELECT email FROM usuarios WHERE apellidos LIKE '%a%' AND password='1234';
SELECT email FROM usuarios WHERE apellidos LIKE '%ope%' and password='1234';

# 4. Sacar todos los registros de la tabla usuario cuyo año sea par
SELECT * FROM usuarios WHERE (YEAR(fecha)%2=0);
SELECT * FROM usuarios WHERE (YEAR(fecha)%2!=0);#impar

# 5. Sacar todos los registros de la tabla de usuarios cuyo nombre tenga más 
#de 5 letras y que se hayan registrado antes de 2020, y mostrar nombre en mayúsculas
SELECT UPPER(nombre) as 'Nombre', apellidos FROM usuarios where LENGTH(nombre)>5 AND YEAR(fecha)<2020;


SELECT * FROM usuarios ORDER BY fecha ASC;
SELECT * FROM usuarios LIMIT 1;
SELECT * FROM usuarios LIMIT 0,3;


