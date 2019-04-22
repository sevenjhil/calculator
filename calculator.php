<?php
	$operando1 = $_GET['operando1'];
	$operando2 = $_GET['operando2'];
	$operador = $_GET['operador'];
	
	if($operador == "+"){
		$solucion = $operando1 + $operando2;

		//funcion multiplicar hecho por Andia

	}elseif ($operador == "*") {
		//hecho por Andia Baldeon
		# code...
		$solucion = $operando1 * $operando2;
	}
	if ($operador == "-") {
		# code...		
		$solucion = $operando1 - $operando2;
	}
	echo "La solución es: ".$solucion;
?>

//kkkk
hjfhfj