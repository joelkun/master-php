/*
16. OBTENER LISTADO DE CLIENTES ATENDIDOS POR EL VENDEDOR 'David Lopez'

*/

SELECT cl.* FROM clientes cl
INNER JOIN vendedores v ON v.id=cl.vendedor_id
WHERE v.nombre='David' and v.apellidos='Lopez';