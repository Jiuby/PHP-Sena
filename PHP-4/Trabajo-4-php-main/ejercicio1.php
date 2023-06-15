<?php
$area = $_POST["area"];
$altura = $_POST["altura"];

$base = 2 * $area / $altura;

echo "El valor de la base del triángulo es: " . $base;
?>