<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="ejercicio_20.php" method="post">
  <label for="nombre">Nombre del estudiante:</label>
  <input type="text" id="nombre" name="nombre"><br><br>
  <label for="nota1">Nota 1:</label>
  <input type="number" id="nota1" name="nota1" min="0" max="5"><br><br>
  <label for="nota2">Nota 2:</label>
  <input type="number" id="nota2" name="nota2" min="0" max="5"><br><br>
  <label for="nota3">Nota 3:</label>
  <input type="number" id="nota3" name="nota3" min="0" max="5"><br><br>
  <label for="nota4">Nota 4:</label>
  <input type="number" id="nota4" name="nota4" min="0" max="5"><br><br>
  <input type="submit" value="Calcular">
</form>

</body>
</html>