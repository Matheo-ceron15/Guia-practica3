<!DOCTYPE html>
<html lang="es">
<head>
    <meta chartset="UTF-8">
    <meta name="viewport" content ="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 4</title>
</head>
<body>
<h1>EJERCICIO 4</h1>
<hr>
    <h3>Una modista, para realizar sus prendas de vestir, encarga las telas al extranjero.
        Para cada pedido, tiene que proporcionar las medidas de la tela en pulgadas,
        pero ella generalmente las tiene en metros. Realice un programa en php para
        ayudar a resolver el problema, determinando cuántas pulgadas debe pedir con
        base en los metros que requiere (1 pulgada = 0.0254 m).
    </h3>
    <?php
    echo "Si requiere 5m de medida de tela";
        $metro = 5 ;
        $total = (($metro * 1) / 0.0254);
        echo "<hr>Ella debe pedir un total de: " . $total . "pulgadas";
    ?>
</body>
</html> 