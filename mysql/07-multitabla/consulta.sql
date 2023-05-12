/*
CONSULTA MULTITABLA:
Son consultas que sirven para consultar varias tablas en una sola sentencia

*/

#Mostrar las entradas con el nombre del autor y el nombre de la categoria #
SELECT e.id, e.titulo, u.nombre as 'Autor', c.nombre as 'Categoría' from 
entradas e, usuarios u, categorias c
WHERE e.usuario_id=u.id and e.categoria_id=c.id;

#Mejora con INNER JOIN#
SELECT e.id, e.titulo, u.nombre as 'Autor', c.nombre as 'Categoría' from 
entradas e
INNER JOIN usuarios u ON e.usuario_id=u.id
INNER JOIN categorias c ON e.categoria_id=c.id;

#Mostrar el nombre de las categorias y al lado cuantas entradas tienen#
SELECT c.nombre, count(e.id) FROM categorias c, entradas e 
WHERE e.categoria_id=c.id
GROUP BY e.categoria_id;

#LEFT JOIN#
SELECT c.nombre, count(e.id) FROM categorias c
LEFT JOIN entradas e ON e.categoria_id=c.id
GROUP BY e.categoria_id;

#Mostrar el email de los usuario y al lado cuantas entradas tienns#
SELECT u.email, count(e.id) FROM entradas e, usuarios u
WHERE e.usuario_id=u.id
GROUP BY e.usuario_id;

#RIGHT JOIN#

SELECT u.email, count(e.id) FROM entradas e
RIGHT JOIN usuarios u ON e.usuario_id=u.id
GROUP BY e.usuario_id;