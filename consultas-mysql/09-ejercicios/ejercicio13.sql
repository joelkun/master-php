/*
13. SACAR LA MEDIA DE SUELDO ENTRE TODOS LOS VENDEDORES POR GRUPOS
*/

SELECT ROUND(AVG(v.sueldo),2) as 'Media Salarial', g.nombre, g.ciudad FROM vendedores v
INNER JOIN grupos g ON g.id=v.grupo_id
GROUP BY grupo_id;

SELECT CEIL(AVG(v.sueldo)) as 'Media Salarial', g.nombre, g.ciudad FROM vendedores v
INNER JOIN grupos g ON g.id=v.grupo_id
GROUP BY grupo_id;