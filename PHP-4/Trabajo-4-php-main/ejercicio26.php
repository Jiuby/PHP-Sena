<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de salario neto</title>
</head>
<body>
	<h1>Calculadora de salario neto</h1>
	<form action="ejercicio26.php" method="post">
		<label for="codigo">Código del empleado:</label>
		<input type="text" id="codigo" name="codigo" required><br>

		<label for="dias">Número de días trabajados al mes:</label>
		<input type="number" id="dias" name="dias" required><br>

		<label for="salario">Salario básico por día:</label>
		<input type="number" id="salario" name="salario" required><br>

		<input type="submit" value="Calcular salario neto">
	</form>
</body>
</html>

<?php
$codigo = $_POST["codigo"];
$dias = $_POST["dias"];
$salario = $_POST["salario"];
$salario_basico_mensual = $dias * $salario;

if ($salario_basico_mensual >= 1400000) {
	$impuestos = $salario_basico_mensual * 0.07;
	$seguro_social = $salario_basico_mensual * 0.03;
	$pensiones = $salario_basico_mensual * 0.02;
	$descuentos = $impuestos + $seguro_social + $pensiones;
	$salario_neto = $salario_basico_mensual - $descuentos;
} else {
	$seguro_social = $salario_basico_mensual * 0.02;
	$pensiones = $salario_basico_mensual * 0.015;
	$subsidio = $salario_basico_mensual * 0.02;
	$descuentos = $seguro_social + $pensiones;
	$salario_neto = $salario_basico_mensual - $descuentos + $subsidio;
}

echo "<h2>Resumen del salario para el empleado con código " . $codigo . "</h2>";
echo "<p>Salario básico mensual: $" . number_format($salario_basico_mensual) . "</p>";
echo "<p>Descuentos: $" . number_format($descuentos) . "</p>";
echo "<p>Salario neto mensual: $" . number_format($salario_neto) . "</p>";
?>