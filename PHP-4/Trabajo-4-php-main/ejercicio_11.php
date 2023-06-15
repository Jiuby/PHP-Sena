<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nombre1 = $_POST['nombre1'];
  $bruto1 = $_POST['bruto1'];
  $deducciones1 = $_POST['deducciones1'];
  $bonificaciones1 = $_POST['bonificaciones1'];
  $nombre2 = $_POST['nombre2'];
  $bruto2 = $_POST['bruto2'];
  $deducciones2 = $_POST['deducciones2'];
  $bonificaciones2 = $_POST['bonificaciones2'];

  $neto1 = $bruto1 - $deducciones1 + $bonificaciones1;
  $neto2 = $bruto2 - $deducciones2 + $bonificaciones2;

  if($neto1 > $neto2) {
    $mayor = $nombre1;
    $salario_neto_mayor = $neto1;
  } else {
    $mayor = $nombre2;
    $salario_neto_mayor = $neto2;
  }

  echo "El trabajador con el salario neto más alto es: " . $mayor . "<br>";
  echo "Tiene un salario neto de: " . $salario_neto_mayor;
}
?>