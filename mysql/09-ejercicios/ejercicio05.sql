/*
5. MOSTRAR TODOS LOS VENDEDORES CON SU NOMBRE Y EL NUMERO DE DIAS QUE LLEVAN EN EL CONCESIONARIO
*/

SELECT concat(nombre,' ',apellidos) as 'vendedor', DATEDIFF(CURDATE(),fecha) as '# DIAS EN CONCESIONARIO' FROM vendedores; 