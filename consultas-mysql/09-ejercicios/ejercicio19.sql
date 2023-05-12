/*
19. Obtener los vendedores con 2 o más clientes.

*/

SELECT v.*,COUNT(cl.vendedor_id) FROM vendedores v 
LEFT JOIN clientes cl ON cl.vendedor_id=v.id
GROUP by v.id
HAVING COUNT(cl.vendedor_id)>=2;