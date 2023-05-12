/*
21. OBTENER LOS NOMBRES Y CIUDADES DE LOS CLIENTES CON ENCARGOS DE 3 UNIDADES EN ADELANTE

*/

SELECT cl.nombre, cl.ciudad, e.cantidad from encargos e
INNER JOIN clientes cl ON cl.id=e.cliente_id
group by e.cliente_id
having sum(e.cantidad)>3;