<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de ventas</title>
</head>
<body>
	<h1>Calculadora de ventas</h1>
	<form method="post">
		<label for="unidades">Cantidad de unidades vendidas:</label>
		<input type="number" id="unidades" name="unidades"><br>

		<label for="precio">Valor unitario:</label>
		<input type="number" id="precio" name="precio"><br>

		<label for="iva">Porcentaje de IVA:</label>
		<input type="number" id="iva" name="iva" min="0" max="100"><br>

		<input type="submit" value="Calcular">
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$unidades = $_POST["unidades"];
		$precio = $_POST["precio"];
		$iva = $_POST["iva"] / 100;

		$valor_bruto = $unidades * $precio;
		$valor_iva = $valor_bruto * $iva;
		$valor_neto = $valor_bruto + $valor_iva;

		echo "<h2>Resultados</h2>";
		echo "Valor bruto: $" . number_format($valor_bruto, 2, ",", ".") . "<br>";
		echo "Valor IVA: $" . number_format($valor_iva, 2, ",", ".") . "<br>";
		echo "Valor neto: $" . number_format($valor_neto, 2, ",", ".");
	}
	?>
</body>
</html>
