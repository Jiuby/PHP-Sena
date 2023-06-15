<!DOCTYPE html>
<html>
<head>
	<title>Conversión de números</title>
</head>
<body>
	<h1>Conversión de números</h1>
	<form action="ejercicio25.php" method="post">
		<label for="numero">Ingrese un número:</label>
		<input type="number" id="numero" name="numero" required>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>

<?php
$numero = $_POST["numero"];

if ($numero < 0) {
	$numero = abs($numero);
	echo "El número ingresado es negativo. Su valor absoluto es: " . $numero;
} elseif ($numero > 0) {
	$numero = -$numero;
	echo "El número ingresado es positivo. Su valor negativo es: " . $numero;
} else {
	echo "El número ingresado es cero.";
}
?>