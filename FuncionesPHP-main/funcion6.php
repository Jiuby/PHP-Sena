<?php  

function calcularVolumenCilindro($radio, $altura){
	$numeroPi = 3.1416;
	$volumen = $numeroPi * $altura * $radio * $radio;
	return $volumen;
}

$tmp = calcularVolumenCilindro(2.5, 6);

echo "El volumen del cilindro es: ". $tmp;
?>