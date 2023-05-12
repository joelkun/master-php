/*
27. Visualizar los nombres de los clientes y la cantidad de encargos realizados,
incluyendo los que no hayan realizados encargos.

*/

SELECT cl.nombre, count(e.id) FROM clientes cl
left JOIN encargos e ON e.cliente_id=cl.id
GROUP BY cl.nombre;