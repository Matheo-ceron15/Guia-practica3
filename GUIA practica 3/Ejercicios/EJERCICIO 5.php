<!DOCTYPE html>
<html lang="es">
<head>
    <meta chartset="UTF-8">
    <meta name="viewport" content ="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
<h2>Ejercicio 5</h2>
    <h3>
        Realice un programa en php para determinar cuánto dinero ahorra una persona
        en un año si considera que cada semana ahorra 15% de su sueldo (considere
        cuatro semanas por mes y que no cambia el sueldo). 
    </h3>
    <?php
    echo "Salario de la persona en un mes: $300 <hr>";
    $salarioMes = 300;
    $semanas = 4;
    $salarioSemana = $salarioMes /  $semanas;
    $ahorro = $salarioSemana * 0.15;
    echo "El ahoro de una semana es de : $" . $ahorro. "<hr>";
    $ahorroMes = $ahorro * 4;
    echo "El ahorro de un mes es de: $" .$ahorroMes. "<hr>";
    $ahorroAño = $ahorroMes * 12;
    echo "El ahorro de un año es de: $" .$ahorroAño;
    ?>
</body>
</html> 