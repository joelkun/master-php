/*
28. Mostrar todos los vendedores y el numero de clientes. 
Se deben mostrar tengan o no clientes

*/

SELECT CONCAT(v.nombre,' ',v.apellidos) AS 'VENDEDOR' , COUNT(cl.id) FROM vendedores v
LEFT JOIN clientes cl ON cl.vendedor_id=v.id
GROUP BY v.id;