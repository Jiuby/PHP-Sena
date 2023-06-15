<?php
$placa1 = $_POST["placa1"];
$pasajeros1 = $_POST["pasajeros1"];
$valor1 = $_POST["valor1"];

$placa2 = $_POST["placa2"];
$pasajeros2 = $_POST["pasajeros2"];
$valor2 = $_POST["valor2"];

$recaudo1 = $pasajeros1 * $valor1;
$recaudo2 = $pasajeros2 * $valor2;

if ($recaudo1 > $recaudo2) {
  echo "La placa del bus que más dinero recogió es: " . $placa1;
} elseif ($recaudo1 < $recaudo2) {
  echo "La placa del bus que más dinero recogió es: " . $placa2;
} else {
  echo "Ambos buses recogieron la misma cantidad de dinero.";
}
?>