<!DOCTYPE html>
<html>
<head>
	<title>Resultado del programa para determinar si al menos dos números son iguales</title>
</head>
<body>
	<h1>Resultado del programa para determinar si al menos dos números son iguales</h1>
	<?php
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];
		$num3 = $_POST["num3"];

		// Verificar si al menos dos números son iguales
		if ($num1 == $num2 || $num1 == $num3 || $num2 == $num3) {
			echo "<p>Hacen pareja con el número ";
			if ($num1 == $num2) {
				echo "$num1 y $num2</p>";
			} else if ($num1 == $num3) {
				echo "$num1 y $num3</p>";
			} else {
				echo "$num2 y $num3</p>";
			}
		} else {
			echo "<p>No hace pareja ningún número</p>";
		}
	?>
</body>
</html>
