<!DOCTYPE html>
<html>
<head>
	<title>Resultado del programa para escribir dos números si al menos uno es positivo</title>
</head>
<body>
	<h1>Resultado del programa para escribir dos números si al menos uno es positivo</h1>
	<?php
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];

		if ($num1 > 0 || $num2 > 0) {
			echo "<p>Los números ingresados son: $num1 y $num2</p>";
			if ($num1 > 0 && $num2 <= 0) {
				echo "<p>El número positivo es: $num1</p>";
			} else if ($num1 <= 0 && $num2 > 0) {
				echo "<p>El número positivo es: $num2</p>";
			} else {
				echo "<p>Los dos números son positivos.</p>";
			}
		} else {
			echo "<p>No se ingresó ningún número positivo.</p>";
		}
	?>
</body>
</html>
