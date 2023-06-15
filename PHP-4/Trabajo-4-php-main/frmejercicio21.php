<!DOCTYPE html>
<html>
<head>
	<title>Programa para determinar aptitud para equipo de baloncesto</title>
</head>
<body>
	<h1>Programa para determinar aptitud para equipo de baloncesto</h1>
	<form action="ejercicio21.php" method="post">
		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre" required><br>

		<label for="sexo">Sexo:</label>
		<select id="sexo" name="sexo" required>
			<option value="M">Masculino</option>
			<option value="F">Femenino</option>
		</select><br>

		<label for="edad">Edad:</label>
		<input type="number" id="edad" name="edad" required><br>

		<label for="estatura">Estatura (en metros):</label>
		<input type="number" id="estatura" name="estatura" step="0.01" required><br>

		<label for="peso">Peso (en kilogramos):</label>
		<input type="number" id="peso" name="peso" step="0.01" required><br>

		<input type="submit" value="Enviar">
	</form>
</body>
</html>
