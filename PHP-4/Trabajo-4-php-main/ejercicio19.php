<?php
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$num3 = $_POST['num3'];

		$mayor = $num1;

		if ($num2 > $mayor) {
			$mayor = $num2;
		}

		if ($num3 > $mayor) {
			$mayor = $num3;
		}

		echo "<p>El mayor número es: $mayor</p>";
	?>

