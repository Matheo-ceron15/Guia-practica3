<!DOCTYPE html>
<html lang="es">
<head>
    <meta chartset="UTF-8">
    <meta name="viewport" content ="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <h2>Ejercicio 6</h2>
    <hr>
    <h3>Se desea un programa para encontrar el área de un cuadrado.</h3>
    <hr>
        <h3>Ingrese los datos requeridos</h3>
        <form action="EJERCICIO_6.php" method="post">
            <label for="base">Base del rectángulo: </label>
            <input type="text" name="base" id="base">
        <hr>
            <label for="altura">Altura del rectángulo: </label>
            <input type="text" name="altura" id="altura">
        <hr>
            <input type="submit" value="Calcular">
        </form>
        
    <?php
    $base = $_POST["base"];
    $altura = $_POST["altura"];
    $area = $base * $altura;
    echo "El área del cuadrado es:". $area;
    ?>
</body>
</html> 