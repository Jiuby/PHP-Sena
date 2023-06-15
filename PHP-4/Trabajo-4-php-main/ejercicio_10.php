<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nombre1 = $_POST['nombre1'];
  $edad1 = $_POST['edad1'];
  $nombre2 = $_POST['nombre2'];
  $edad2 = $_POST['edad2'];

  if($edad1 > $edad2) {
    $mayor = $nombre1;
    $edad_mayor = $edad1;
  } else {
    $mayor = $nombre2;
    $edad_mayor = $edad2;
  }

  echo "El hermano mayor es: " . $mayor . "<br>";
  echo "Tiene " . $edad_mayor . " años";
}
?>