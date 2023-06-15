<?php
$nombre = $_POST["nombre"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
$nota4 = $_POST["nota4"];

$promedio = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

if ($promedio >= 3) {
  echo $nombre . " tiene una nota definitiva de " . $promedio . " y GANÓ la materia.";
} elseif ($promedio >= 2) {
  echo $nombre . " tiene una nota definitiva de " . $promedio . " y HABILITA la materia.";
} else {
  echo $nombre . " tiene una nota definitiva de " . $promedio . " y PERDIÓ la materia.";
}
?>