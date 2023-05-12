/*
SUBCONSULTAS
- Son consultas que se ejecutan dentro de otras.
- Consiste en utilizar los resultados de la subconsulta para operar en la consulta principal
- Jugando con las claves foraneas
*/

#Sacar usuarios con entradas#

select * FROM usuarios WHERE id IN (select usuario_id from entradas);
select * FROM usuarios WHERE id not IN (select usuario_id from entradas);

#Sacar los usuarios que tengan alguna entrada que en su titulo hable de GTA#

INSERT INTO entradas VALUES(NULL,3,1,'Guia de GTA Vice City','GTA',CURDATE());

select nombre, apellidos FROM usuarios 
WHERE id IN(select usuario_id FROM entradas WHERE titulo LIKE '%GTA%');

#Sacar todas las entradas de la categoría acción utilizando su nombre#
Select titulo FROM entradas where categori_id IN (SELECT id from categorias where nombre='Accion');

#Mostrar las categorías con mas de 3 entradas#
select nombre from categorias where id in 
(SELECT categoria_id from entradas GROUP BY categoria_id HAVING COUNT(categoria_id)>=3);


#Mostrar los usuarios que crearon una entrada un martes#
SELECT * FROM usuarios WHERE id in (SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha)=3);

INSERT INTO entradas VALUES(NULL,1,2,'Jugando con SQL','SQL','2023-05-09');

#Mostrar el nombre de el usuario que tenga mas entradas#
SELECT CONCAT(nombre,' ',apellidos) AS 'El usuario con más entradas' FROM usuarios WHERE id =
(SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1 );


#Mostrar las categorías sin entradas#
INSERT into categorias VALUES(NULL,'Plataforma');

SELECT * FROM categorias where id not in
(SELECT categoria_id from entradas);