<?php

$un_boll = TRUE; //un valor booleano
$un_str = "foo"; //una cadena de caracteres
$un_str2 = 'foo'; //una cadena de caracteres
$un_int = 12; //un numero entero
echo gettype($un_bool); //imprime: boolean
echo gettype($un_str); //imprime: string
//si estee valor es un entero, incrementarlo en cuatro
if (is_int($un_int)) {
    $un_int += 4;
}
//si $un_boll es una cadena; imprimirla
//(no imprime nada)
if (is_string($un_bool)) {
echo "Cadena: $un_bool";
}
?>