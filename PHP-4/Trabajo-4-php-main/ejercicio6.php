<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de velocidad</title>
</head>
<body>
	<form method="post">
		<label>Distancia recorrida (en kilómetros):</label>
		<input type="number" name="distancia"><br>
		<label>Tiempo transcurrido (en horas):</label>
		<input type="number" name="tiempo"><br>
		<input type="submit" value="Calcular">
	</form>

	<?php
	if(isset($_POST['distancia']) && isset($_POST['tiempo'])) {
		$distancia = $_POST['distancia'];
		$tiempo = $_POST['tiempo'];

		$velocidad = $distancia / $tiempo;

		echo "<p>La velocidad es de $velocidad km/h.</p>";
	}
	?>
</body>
</html>
