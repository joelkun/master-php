/*
30. Mostrar los datos del vendedor con más antiguedad en el concesionario.

*/

Select * from vendedores ORDER BY fecha DESC LIMIT 1;

#30 PLUS: OBTENER LOS DATOS DE LOS COCHES CON MÁS UNIDADES VENDIDAS.#

SELECT * FROM coches co 
INNER JOIN encargos e ON e.coche_id=co.id
ORDER BY e.cantidad DESC LIMIT 1;