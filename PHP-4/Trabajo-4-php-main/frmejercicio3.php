<!DOCTYPE html>
<html>
<head>
	<title>Lavadero de vehículos</title>
</head>
<body>
	<h1>Lavadero de vehículos</h1>
	<form action="ejercicio3.php" method="POST">
		<label for="cant_taxis">Cantidad de taxis:</label>
		<input type="number" id="cant_taxis" name="cant_taxis"><br>

		<label for="cant_buses">Cantidad de buses:</label>
		<input type="number" id="cant_buses" name="cant_buses"><br>

		<label for="cant_particulares">Cantidad de particulares:</label>
		<input type="number" id="cant_particulares" name="cant_particulares"><br>

		<label for="cant_motos">Cantidad de motos:</label>
		<input type="number" id="cant_motos" name="cant_motos"><br>

		<button type="submit">Calcular</button>
	</form>
</body>
</html>
