<!DOCTYPE html>
<html lang="es">
<head>
    <meta chartset="UTF-8">
    <meta name="viewport" content ="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Ejercicio 2 en PHP</h1>
    <hr>
    <h2>Un productor de leche lleva el registro de lo que produce en litros, pero cuando
        entrega le pagan en galones. Realice un programa en php que ayude al
        productor a saber cuánto recibirá por la entrega de su producción de un día (1
        galón = 3.785 litros).
</h2>
<hr>
<?php
$cantidadGalones =5;
echo "La cantidad de galones vendidos en el dia es de: " .$cantidadGalones . " Galones";
$valorLitros = ($cantidadGalones*3.785) / 1 ; 
echo "<hr> La cantidad total en litros es de: " . $valorLitros ." litros <hr>";
echo "El precio por galon es de: $5.50 <hr>";
$totalPagar = $cantidadGalones * 5.50;
echo "El total a pagar es de: $ " . $totalPagar;

?>
</body>
</html> 