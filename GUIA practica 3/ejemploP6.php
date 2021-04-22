<!DOCTYPE html>
<html lang="es">
<head>
    <meta chartset="UTF-8">
    <meta name="viewport" content ="width=device-width, initial-scale=1.0">
    <title>Ejemplo_2</title>
</head>
<body>
<h1>Ejemplo 2</h1>
<hr>
<h3>Se requiere un programa en PHP que aplique todos los operadores aritméticos en 2 cantidades e imprima el resultado de cada operación.
</h3>
<hr>
<?php 
//valores de variables
$cantidad1 = 4;
$cantidad2 = 2;
//formulas
$identidad = +$cantidad1;
$negacion = -$cantidad2;
$suma = $cantidad1 + $cantidad2;
$resta = $cantidad1 - $cantidad2;
$multiplicacion = $cantidad1 * $cantidad2;
$division = $cantidad1/$cantidad2;
$modulo = $cantidad1 % $cantidad2;
$exponenciacion = $cantidad1 ** $cantidad2;
//imprecion de resultados
echo "Cantidad 1: $cantidad1 <hr>";
echo "Cantidad 2: $cantidad1 <hr>";
echo "<h2>Resultados</h2>";
echo "Indentidad: $identidad <hr>";
echo "Negacion: $negacion<hr>";
echo "Adicion: $suma<hr>";
echo "Sustracion: $resta<hr>";
echo "Multlicacion: $multiplicacion<hr>";
echo "Division: $division <hr>";
echo "Modulo: $modulo<hr>";
echo "Exponenciacion: $exponenciacion<hr>";
echo "Completado...";
?>
</body>
</html>