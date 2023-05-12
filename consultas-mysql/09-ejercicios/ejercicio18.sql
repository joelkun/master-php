/*
18. Listar los clientes que han hecho algun encargo del coche "Mercedes Ranchera"
*/

SELECT cl.* from clientes cl
INNER JOIN encargos e ON e.cliente_id=cl.id
INNER JOIN coches co ON co.id=e.coche_id
WHERE co.modelo='Mercedes Ranchera';

