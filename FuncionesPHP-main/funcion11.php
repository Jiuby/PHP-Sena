<?php
function cuadrado($numero, &$resultado){
$resultado=$numero*$numero;
$numero=100;
} 
$n=5;
$val=0;
cuadrado($n,$val);
echo $val;
echo "<br>".$n;
?>
