<?php
function operaciones($n1, $n2, $operacion){
$resultado = 0;
if ($operacion =="Sumar") {
	$resultado = $n1 + $n2;
}elseif ($operacion == "Restar") {
	$resultado = $n1 - $n2;
}elseif ($operacion == "Multiplicar"){
	$resultado	= $n1 * $n2;
}
return $resultado;
}
$r = operaciones(5,7, "Sumar");
echo $r . "<br>";
echo operaciones(15, 8, "Restar");
 ?>
