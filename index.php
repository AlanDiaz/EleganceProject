<?php
		echo '<h1>IF ELSE</h1><br/>';
		$test = 33;
		if ($test > 40) {
			echo "Sí, $test es mayor que 40.";
		} else if ($test > 35) {
			echo "Sí, $test es mayor que 35.";
		} else if ($test > 30) {
			echo "Sí, $test es mayor que 30.";
		} else {
			echo "No, $test es menor que 40, 35 y 30.";
		}
	
		echo '<h1>OPERADOR TERNARIO</h1><br/>';
		$haceFrio = 15;
		$respuesta ="";
		$temperatura = ($haceFrio<20) ? $respuesta = "Hace frio" : $respuesta = "No hace frio";
		echo $respuesta;
		?>
