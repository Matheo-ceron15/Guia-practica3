<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <h2>Ejercicio 8</h2>
    <hr>
    <h3>
        Se requiere determinar el costo que tendrá realizar una llamada telefónica con
        base en el tiempo que dura la llamada y en el costo por minuto.
    </h3>
        <?php 
        $tiempollamada = 30;
        $costominuto=0.05;
        $costototal = $tiempollamada * $costominuto;
        echo "El costo de la llamada en 30 minutos es de: $" .$costototal;
        ?>
</body>
</html>