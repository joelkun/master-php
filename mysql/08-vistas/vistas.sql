/*
Vistas:
Las podemos definir como una consulta almacenada en la base de datos que se utiliza como una tabla virtual.
No almacena datos sino que utiliza asociaciones y los datos originales de las tablas, de forma que siempre se 
mantiene actualizada.


*/

CREATE VIEW entradas_con_nombres AS
SELECT e.id, e.titulo, u.nombre as 'Autor', c.nombre as 'Categoría' from 
entradas e, usuarios u, categorias c
WHERE e.usuario_id=u.id and e.categoria_id=c.id;


SHOW CREATE VIEW entradas_con_nombres;

SELECT * from entradas_con_nombres WHERE Autor='Paco';

DROP VIEW entradas_con_nombres;