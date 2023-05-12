/*
17. Obtenere listado con los encargos realizados por el cliente 'Fruteria Antonia INC'

*/

Select * FROM encargos e 
INNER JOIN clientes cl ON cl.id=e.cliente_id
where cl.nombre='Fruteria Antonia INC';

Select e.id as 'Nº ENCARGO', e.cantidad, cl.nombre, co.modelo, e.fecha  FROM encargos e 
INNER JOIN clientes cl ON cl.id=e.cliente_id
INNER JOIN coches co ON co.id=e.coche_id
where cl.nombre='Fruteria Antonia INC';

Select e.id as 'Nº ENCARGO', e.cantidad, cl.nombre, co.modelo, e.fecha  FROM encargos e 
INNER JOIN clientes cl ON cl.id=e.cliente_id
INNER JOIN coches co ON co.id=e.coche_id
where e.cliente_id IN 
( select id FROM clientes WHERE nombre='Fruteria Antonia INC');