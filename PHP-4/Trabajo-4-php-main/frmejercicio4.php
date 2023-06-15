<!DOCTYPE html>
<html>
<head>
	<title>Programa para calcular promedio de edades</title>
</head>
<body>
	<h1>Ingrese los nombres y las edades de 3 hermanos:</h1>
	<form action="ejercicio4.php" method="POST">
		<label for="nombre1">Nombre del primer hermano:</label>
		<input type="text" id="nombre1" name="nombre1" required><br><br>
		<label for="edad1">Edad del primer hermano:</label>
		<input type="number" id="edad1" name="edad1" required><br><br>
		<label for="nombre2">Nombre del segundo hermano:</label>
		<input type="text" id="nombre2" name="nombre2" required><br><br>
		<label for="edad2">Edad del segundo hermano:</label>
		<input type="number" id="edad2" name="edad2" required><br><br>
		<label for="nombre3">Nombre del tercer hermano:</label>
		<input type="text" id="nombre3" name="nombre3" required><br><br>
		<label for="edad3">Edad del tercer hermano:</label>
		<input type="number" id="edad3" name="edad3" required><br><br>
		<input type="submit" value="Calcular promedio">
	</form>
</body>
</html>
