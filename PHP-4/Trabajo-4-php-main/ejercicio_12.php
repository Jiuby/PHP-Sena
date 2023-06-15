<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $placa1 = $_POST['placa1'];
  $pasajeros1 = $_POST['pasajeros1'];
  $valor1 = $_POST['valor1'];
  $placa2 = $_POST['placa2'];
  $pasajeros2 = $_POST['pasajeros2'];
  $valor2 = $_POST['valor2'];

  $dinero1 = $pasajeros1 * $valor1;
  $dinero2 = $pasajeros2 * $valor2;

  if($dinero1 > $dinero2) {
    $placa_mayor = $placa1;
    $dinero_mayor = $dinero1;
  } else {
    $placa_mayor = $placa2;
    $dinero_mayor = $dinero2;
  }

  echo "La placa del bus que más dinero recogió es: " . $placa_mayor . "<br>";
  echo "Recaudó un total de: $" . $dinero_mayor;
}
?>