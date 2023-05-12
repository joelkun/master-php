/*
25. Obtener una lista de los nombres de los clientes 
con el importe de sus encargos acumulados
*/

SELECT cl.nombre, sum(e.cantidad * co.precio) as 'IMPORTE' from clientes cl
INNER JOIN encargos e ON e.cliente_id=cl.id
INNER JOIN coches co ON co.id=e.coche_id
GROUP BY cl.id
ORDER BY 2;