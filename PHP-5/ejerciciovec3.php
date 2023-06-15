<?php

$meses[0]="Enero";
$meses[1]="Febrero";
$meses[2]="Marzo";
$meses[3]="Abril";
$meses[4]="Mayo";
$meses[5]="Junio";
$meses[6]="Julio";
$meses[7]="Agosto";
$meses[8]="Septiembre";
$meses[9]="Octubre";
$meses[10]="Noviembre";
$meses[11]="Diciembre";

echo "El largo del arreglo meses es: ".count($meses), "<br>";

for ($i=0; $i<count($meses);$i++){
	if ($meses[$i]==$meses[0]){
		echo "$meses[0] es el primer mes del año<br>";
	}
}

?>