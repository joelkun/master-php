/*
20. SELECCIONAR EL GRUPO EN EL QUE TRABAJA EL VENDEDOR CON MAYOR SALARIO Y MOSTRAR EL NOMBRE DEL GRUPO

*/

SELECT g.id, g.nombre FROM vendedores v
INNER JOIN grupos g ON g.id=v.grupo_id
ORDER BY sueldo DESC LIMIT 1;