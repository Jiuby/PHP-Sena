<!DOCTYPE html>
<html>
<head>
	<title>Resultado del promedio de edades</title>
</head>
<body>
	<?php
		$nombre1 = $_POST["nombre1"];
		$edad1 = $_POST["edad1"];
		$nombre2 = $_POST["nombre2"];
		$edad2 = $_POST["edad2"];
		$nombre3 = $_POST["nombre3"];
		$edad3 = $_POST["edad3"];

		$promedio = ($edad1 + $edad2 + $edad3) / 3;

		echo "<h2>Los nombres ingresados son:</h2>";
		echo "<ul>";
		echo "<li>$nombre1</li>";
		echo "<li>$nombre2</li>";
		echo "<li>$nombre3</li>";
		echo "</ul>";
		echo "<h2>El promedio de edades es: $promedio</h2>";
	?>
</body>
</html>
