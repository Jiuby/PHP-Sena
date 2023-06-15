<?php
$horas = $_POST["horas"];
$valor = $_POST["valor"];

if ($horas <= 10) {
  $total = $horas * $valor;
} else {
  $exceso = $horas - 10;
  $descuento = $exceso * ($valor * 0.2);
  $subtotal = 10 * $valor;
  $total = $subtotal + ($exceso * $valor) - $descuento;
}

echo "El valor total del alquiler es: " . $total;
?>