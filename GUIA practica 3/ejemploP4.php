<?php 

function foo() {
echo "En foo()<br />\n";
}
function bar($arg = '')
{
echo "En bar(); el argumento era '$arg'.<br />\n";
}
// esta es una funcion de envoltura alrededor de echo
function hacerecho($cadena)
{
echo $cadena;
}
$func = 'foo';
$func(); // esto llama a foo()
$func = 'bar';
$func('prueba'); //esto llama a bar()
$func = 'hecerecho';
$func('prueba'); //esto llama a hacerecho()
?>