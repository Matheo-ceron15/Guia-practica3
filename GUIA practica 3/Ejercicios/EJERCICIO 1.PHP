<!DOCTYPE html>
<html lang="es">
<head>
    <meta chartset="UTF-8">
    <meta name="viewport" content ="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
<h1>Ejercio 1 en PHP</h1>
<hr>
<h3> Un estudiante realiza cuatro exámenes durante el semestre, los cuales tienen la
misma ponderación. Realice el programa en PHP para obtener el promedio de
las calificaciones obtenidas.</h3>
<hr>
<?php 
//valor de variables
$nota1 = 8;
$nota2 = 9;
$nota3 = 7;
$nota4 = 9;
//formula
$promedio = (($nota1*0.25)+($nota2*0.25)+($nota3*0.25)+($nota4*0.25));
echo "Nota 1: $nota1<hr>\n";
echo "Nota 2: $nota2<hr>\n";
echo "Nota 3: $nota3<hr>\n";
echo "Nota 4: $nota4<hr>\n";
echo "<h2>Resultado de promedio con ponderacion del 25%<h2>";
echo "El promedio del estudiante es de: $promedio";
?>
</body>
</html>