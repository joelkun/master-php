/*
8. VISUALIZAR TODOS LOS COCHES EN CUYA MARCA EXISTA LA LETRA "A" Y CUYO MODELO EMPIECE POR F
*/

SELECT * FROM coches where marca LIKE '%a%' AND modelo LIKE 'F%';