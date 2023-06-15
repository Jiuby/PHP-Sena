<?php
$salario = $_POST["salario"];
$ingresos = $_POST["ingresos"];
$gastos = $_POST["gastos"];

$ahorro_mensual = $salario + $ingresos - $gastos;

$ahorro_anual = $ahorro_mensual * 12;

echo "El ahorro anual que puedes tener es de: $" . $ahorro_anual;
?>