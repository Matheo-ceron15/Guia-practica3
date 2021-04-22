<?php 
echo "<h3>Post-incremento</h3>";
$a = 5;
echo "Debe ser 5: " . $a++. "<br/> \n";
echo "Debe ser 6: " . $a. "<br/> \n";
echo "<h3>Pre-incremento</h3>";
$a = 5;
echo "Debe ser 6: ". ++$a. "<br/> \n";
	echo "Debe ser 6:" . $a. "<br/> \n";
	echo "<h3>Post-decremento</h3>";
	$a = 5;

echo "Debe ser 5: ". $a--. "<br/> \n";
	echo "Debe ser 4:" . $a. "<br/> \n";
	echo "<h3>Pre-decremento</h3>";
	$a = 5;

echo "Debe ser 4: ". --$a. "<br/> \n";
	echo "Debe ser 4:" . $a. "<br/> \n";
	echo "<h3>Post-decremento</h3>";
?>