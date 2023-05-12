/*
11. VISUALIZAR TODOS LOS CARGOS Y EL NUMERO DE VENDEDORES QUE HAY EN CADA CARGO
*/

Select cargo, count(cargo) FROM vendedores GROUP BY cargo;


Select cargo, count(cargo) FROM vendedores GROUP BY cargo ORDER BY COUNT(cargo) DESC;