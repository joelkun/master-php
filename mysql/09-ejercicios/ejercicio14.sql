/*
14. VISUALIZAR LAS UNIDADES TOTALES VENDIDAS DE CADA COCHE A CADA CLIENTE.
MOSTRANDO EL NOMBRE DEL COCHE, NUMERO DE CLIENTE Y LA SUMA DE UNIDADES.

*/

SELECT co.modelo as 'Coche', e.cliente_id, cl.nombre as 'Cliente', sum(e.cantidad) as 'Unidades' FROM encargos e 
inner join clientes cl ON cl.id=e.cliente_id
inner join coches co ON co.id=e.coche_id
GROUP BY e.cliente_id, co.modelo, cl.nombre;