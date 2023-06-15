<?php 
function sumarCincoNumeros($num1, $num2, $num3, $num4, $num5) {
 $suma = $num1 + $num2 + $num3 + $num4 + $num5;
 return $suma;
}

$tmp = sumarCincoNumeros(2, 5, 1, 2, 16);

echo "El resultado de la suma es: " . $tmp;
 ?>
