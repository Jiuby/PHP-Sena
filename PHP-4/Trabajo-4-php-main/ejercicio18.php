<!DOCTYPE html>
<html>
<head>
	<title>Salario semanal de un empleado</title>
</head>
<body>
	<form method="post">
		<label for="codigo">Código del empleado:</label>
		<input type="text" id="codigo" name="codigo"><br><br>
		<label for="valor_hora">Valor de la hora:</label>
		<input type="number" id="valor_hora" name="valor_hora"><br><br>
		<label for="horas_trabajadas">Horas trabajadas:</label>
		<input type="number" id="horas_trabajadas" name="horas_trabajadas"><br><br>
		<input type="submit" value="Calcular salario">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$codigo = $_POST["codigo"];
			$valor_hora = $_POST["valor_hora"];
			$horas_trabajadas = $_POST["horas_trabajadas"];

			if ($horas_trabajadas > 48) {
				$horas_extra = $horas_trabajadas - 48;
				$salario = (48 * $valor_hora) + ($horas_extra * $valor_hora * 1.35);
			} else {
				$salario = $horas_trabajadas * $valor_hora;
			}

			echo "<br><br>El salario semanal del empleado con código " . $codigo . " es de $" . $salario . ".";
		}
	?>
</body>
</html>
