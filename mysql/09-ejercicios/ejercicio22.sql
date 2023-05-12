/*
22. Mostrar listado de clientes (numero de cliente y el nombre)
mostrar tambien el numero de vendedor y su nombre.
*/

SELECT cl.id, cl.nombre, v.id, (v.nombre,' ',v.apellidos) as 'vendedor' FROM clientes cl
INNER JOIN vendedores v ON v.id=cl.vendedor_id;