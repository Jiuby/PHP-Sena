<!DOCTYPE html>
<html>
<head>
	<title>Resultado del programa para determinar el mayor y el menor de tres números</title>
</head>
<body>
	<h1>Resultado del programa para determinar el mayor y el menor de tres números</h1>
	<?php
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];
		$num3 = $_POST["num3"];

		// Determinar el mayor
		$mayor = $num1;
		if ($num2 > $mayor) {
			$mayor = $num2;
		}
		if ($num3 > $mayor) {
			$mayor = $num3;
		}

		// Determinar el menor
		$menor = $num1;
		if ($num2 < $menor) {
			$menor = $num2;
		}
		if ($num3 < $menor) {
			$menor = $num3;
		}

		// Mostrar los resultados
		echo "<p>El mayor de los tres números es: $mayor</p>";
		echo "<p>El menor de los tres números es: $menor</p>";
	?>
</body>
</html>
