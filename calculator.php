<?php
	$valor1 = $_POST['N1'];
	$valor2 = $_POST['N2'];
	$operador = $_POST["operador"];

	if ($valor1 != "" and $valor2 != "") {
		if ($operador == "+") {
			$resultado = $valor1 + $valor2;
		}elseif ($operador == "-") {
			$resultado = $valor1 - $valor2;
		}elseif ($operador == "*") {
			$resultado = $valor1 * $valor2;
		}elseif ($operador == "/") {
			$resultado = $valor1 / $valor2;
		}

		echo "La solución es: ".$resultado;
	}
?>

