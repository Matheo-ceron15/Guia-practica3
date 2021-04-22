<!DOCTYPE html>
<html lang="es">
<head>
    <meta chartset="UTF-8">
    <meta name="viewport" content ="width=device-width, initial-scale=1.0">
    <title>Ejemplo Almacen</title>
</head>
<body>
    <h1>Ejemplo_1</h1>
<hr>
<h3>Se requiere un programa en PHP 
para determinat el cambio que recibira 
una persona que compra un producto en un almacen. </h3>
<hr>
<?php 
//asignar valores a las variables
$precio = 5; 
$pago = 20;
//crear formula
$cambio = $pago - $precio;
//imprimir los resultados
echo "El precio del producto es: $ $precio <hr>";
echo "Usted pagp la cantidad de: $ $pago <hr>";
echo "Su cambio es: $ $cambio <hr>";
echo "Gracias por su compra";
?>
</body>
</html>