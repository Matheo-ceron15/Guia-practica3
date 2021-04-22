<!DOCTYPE html>
<html lang="es">
<head>
    <meta chartset="UTF-8">
    <meta name="viewport" content ="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 en PHP</title>
</head>
<body>
<h1>Ejercicio 3</h1>
    <h2>   
    Se requiere un programa en php para determinar el sueldo semanal de un
    trabajador con base en las horas que trabaja y el pago por hora que recibe.
    </h2>
<hr>
    <?php
    $horasTrabajadas = 9;
    $pagoPorhoras = 1.60;
    
    echo "Horas trabajadas al dia : " .$horasTrabajadas . "<hr>";
    echo "Pago por hora: $" .$pagoPorhoras . "<hr>";
    $totalsemana = ($pagoPorhoras*$horasTrabajadas) *7;
    echo "El pago total que recibe el trabajador en una semana es de: $" .$totalsemana;
    ?>
</body>
</html> 