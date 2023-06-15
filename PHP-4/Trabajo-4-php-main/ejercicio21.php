<!DOCTYPE html>
<html>
<head>
	<title>Resultado del programa para determinar aptitud para equipo de baloncesto</title>
</head>
<body>
	<h1>Resultado del programa para determinar aptitud para equipo de baloncesto</h1>
	<?php
		$nombre = $_POST["nombre"];
		$sexo = $_POST["sexo"];
		$edad = $_POST["edad"];
		$estatura = $_POST["estatura"];
		$peso = $_POST["peso"];

		if ($sexo == "M" && $edad >= 18 && $estatura > 1.7 && $peso < 75) {
			echo "<p>$nombre es apto para el equipo de baloncesto.</p>";
		} elseif ($sexo == "F" && $edad >= 16 && $estatura >= 1.7 && $peso <= 60) {
			echo "<p>$nombre es apta para el equipo de baloncesto.</p>";
		} else {
			echo "<p>$nombre no es apto/a para el equipo de baloncesto.</p>";
		}
	?>
</body>
</html>

