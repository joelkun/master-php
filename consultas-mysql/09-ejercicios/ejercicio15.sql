/*
15. MOSTRAR LOS CLIENTES QUE MÁS PEDIDOS HAN HECHO Y MOSTRAR CUANTOS PIDIERON

*/

SELECT cl.nombre as 'Cliente', count(e.id) as 'Pedidos' FROM encargos e
INNER JOIN clientes cl ON cl.id=e.cliente_id
GROUP BY cl.nombre
ORDER BY 2 DESC LIMIT 2;