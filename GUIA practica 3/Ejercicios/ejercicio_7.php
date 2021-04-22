<!DOCTYPE html>
<html lang="es">
<head>
    <meta chartset="UTF-8">
    <meta name="viewport" content ="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 7</title>
</head>
<body>
<h2>Ejercicio 7</h2>
<hr>
    <h3>
        Determinar el promedio que obtendrá un alumno considerando que realiza tres
        exámenes, de los cuales el primero y el segundo tienen una ponderación de
        25%, mientras que el tercero de 50%.
    </h3>
    <?php
    $n1 = 8;
    $n2 = 9;
    $n3 = 7;
    echo "Las notas del alumno en los 3 examenes son: " .$n1 ."," .$n2. ",".$n3;
    $promedio = ($n1*0.25)+($n2*0.25)+($n3*0.50);
    echo "<br>El promedio del alumno es de: " .$promedio;
    ?>
</body>
</html> 