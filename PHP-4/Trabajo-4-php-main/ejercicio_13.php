<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $tipo = $_POST['tipo'];
  $nombre = $_POST['nombre'];
  $horas = $_POST['horas'];
  $salario = $_POST['salario'];
  $deducciones = isset($_POST['deducciones']) ? $_POST['deducciones'] : 0;
  $bonificaciones = isset($_POST['bonificaciones']) ? $_POST['bonificaciones'] : 0;

  if($tipo == 'FIJO') {
    $salario_bruto = $horas * $salario + $bonificaciones - $deducciones;
  } else {
    $salario_bruto = $horas * $salario;
  }

  $salario_neto = $salario_bruto * 0.85; // Se asume que la retención de impuestos es del 15%

  echo "Nombre: " . $nombre . "<br>";
  echo "Salario neto: $" . $salario_neto;
}
?>