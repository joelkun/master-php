/*
26. SACAR LOS VENDEDORES QUE TIENEN JEFES Y SACAR EL NOMBRE DE LOS JEFES

*/

SELECT CONCAT(v1.nombre,' ', v1.apellidos) as 'VENDEDOR', 
CONCAT(v2.nombre,' ', v2.apellidos) as 'JEFE' 
FROM vendedores v1
inner join vendedores v2 ON v2.id=v1.jefe; 