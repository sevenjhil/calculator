<?php
	$operando1 = $_GET['operando1'];
	$operando2 = $_GET['operando2'];
	$operador = $_GET['operador'];
	
	if($operador == "+"){
		$solucion = $operando1 + $operando2;

		//funcion multiplicar hecho por Andia

	}elseif ($operador == "*") {
		$solucion = $operando1 * $operando2;
		//hecho por Andia Bladeon
		# code...
	}
	echo "La solución es: ".$solucion;
?>