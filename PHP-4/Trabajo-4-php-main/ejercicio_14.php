<?php
$nombre1 = $_POST["nombre1"];
$salario1 = $_POST["salario1"];
$deducciones1 = $_POST["deducciones1"];
$bonificaciones1 = $_POST["bonificaciones1"];

$nombre2 = $_POST["nombre2"];
$salario2 = $_POST["salario2"];
$deducciones2 = $_POST["deducciones2"];
$bonificaciones2 = $_POST["bonificaciones2"];

$neto1 = $salario1 - $deducciones1 + $bonificaciones1;
$neto2 = $salario2 - $deducciones2 + $bonificaciones2;

if ($neto1 > $neto2) {
  echo "El trabajador con más salario neto es: " . $nombre1;
} elseif ($neto1 < $neto2) {
  echo "El trabajador con más salario neto es: " . $nombre2;
} else {
  echo "Ambos trabajadores tienen el mismo salario neto.";
}
?>