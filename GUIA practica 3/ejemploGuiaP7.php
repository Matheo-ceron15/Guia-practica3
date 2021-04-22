<!DOCTYPE html>
<html lang="es">
<head>
    <meta chartset="UTF-8">
    <meta name="viewport" content ="width=device-width, initial-scale=1.0">
    <title>Ejemplo funciones variables</title>
</head>
<body>
    <h1>Ejemplo 3 </h1>
    <hr>
    <h3>Se requiere un programa en PHP que aplique funciones variables
     para realizar las 4 operaciones aritméticas básicas 
     (suma, resta, multiplicación, división) e imprima el resultado de cada operación.
    </h3>
    <hr>
    <?php
    //crear funciones
    //suma 
    function sumar ($cantidad1, $cantidad2){
        $resultado = $cantidad1 + $cantidad2;
        return $resultado;
    }
    //resta
    function resta ($cantidad1, $cantidad2){
        $resultado = $cantidad1 - $cantidad2;
        return $resultado;
    }
    //multiplicacion
    function multiplicar ($cantidad1, $cantidad2){
        $resultado = $cantidad1 * $cantidad2;
        return $resultado;
    }
    //division
    function dividir ($cantidad1, $cantidad2){
        $resultado = $cantidad1 / $cantidad2;
        return $resultado;
    }
    //usar las funciones para imprimir los resultados
    $funcion = "sumar";
    echo "Usando la funcion sumar (): ".$funcion(25,2)."<hr>";
    $funcion = "resta";
    echo "Usando la funcion restar (): ".$funcion(25,2)."<hr>";
    $funcion = "multiplicar";
    echo "Usando la funcion multiplicar (): ".$funcion(25,2)."<hr>";
    $funcion = "dividir";
    echo "Usando la funcion dividir (): ".$funcion(25,2)."<hr>";
    echo "Completado...";
    ?>
</body>
</html> 