	<?php
		$energia = $_POST["energia"];
		$valorK = $_POST["valorK"];
		$agua = $_POST["agua"];
		$valorM3 = $_POST["valorM3"];
		$impulsos = $_POST["impulsos"];
		$valorImpulso = $_POST["valorImpulso"];

		$totalEnergia = $energia * $valorK;
		$totalAgua = $agua * $valorM3;
		$totalImpulsos = $impulsos * $valorImpulso;

		$totalPagar = $totalEnergia + $totalAgua + $totalImpulsos;

		echo "<p>Total a pagar por energía: $" . $totalEnergia . "</p>";
		echo "<p>Total a pagar por agua: $" . $totalAgua . "</p>";
		echo "<p>Total a pagar por impulsos telefónicos: $" . $totalImpulsos . "</p>";
		echo "<h3>Total a pagar: $" . $totalPagar . "</h3>";
	?>