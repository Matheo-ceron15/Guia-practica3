<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <h2>Ejercicio 10 en PHP</h2>
    <hr>
    <h3>
        Determinar cuánto pagará finalmente una persona por un artículo, considerando
        que tiene un descuento de 20%, y debe pagar 15% de IVA (debe mostrar el
        precio con descuento y el precio final).
    </h3>
    <?php
        $precioarticulo = 250;
        echo "El precio del articulo es de: $ 250";
        $descuento = $precioarticulo * 0.20;
        $preciodescuento = $precioarticulo - $descuento;
        echo "<br>El precio con descuento del 20% es de: $" .$preciodescuento;
        //calculando iva
        $iva = 0.15 * $preciodescuento ;
        $preciofinal = $preciodescuento + $iva;
        echo "<br>El precio final del articulo es de: $" .$preciofinal;
    ?>

</body>
</html>