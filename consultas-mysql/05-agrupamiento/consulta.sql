# CONSULTAS AGRUPAMIENTO#
SELECT count(titulo) as 'Número de entradas', categoria_id from entradas GROUP BY categoria_id;

# CONSULTAS AGRUPAMIENTO CON CONDICIONES#
SELECT count(titulo) as 'Número de entradas', categoria_id 
from entradas GROUP BY categoria_id HAVING COUNT(titulo)>=4;

/*
AVG 	sacar la media
COUNT 	Contar el numero de elementos
MAX		Valor maximo del grupo
MIN 	Valor minimo del grupo
SUM 	Sumar todo el contenido del grupo

*/

SELECT AVG(id) as 'Media de entradas' FROM entradas;
SELECT MAX(id), titulo as 'MAXIMO ID' FROM entradas;
SELECT MIN(id), titulo as 'MINIMO ID' FROM entradas;
SELECT SUM(id), titulo as 'SUMA DE ID' FROM entradas;
