<?php
	$operando1 = $_GET['operando1'];
	$operando2 = $_GET['operando2'];
	$operador = $_GET['operador'];
	
	if($operador == "+"){
		$solucion = $operando1 + $operando2;
//K9KTrzV7Bwtw7tAvxAxG
		//funcion multiplicar hecho por Andia

	}elseif ($operador == "*") {
		$solucion = $operando1 * $operando2;
		//hecho por Andia Baldeon
		# code...


	}
	if ($operador == "-") {
		$solucion = $operando1 - $operando2;
		//hecho por Andia Baldeon
		# code...
		
	}
	echo "La solución es: ".$solucion;
	echo "hola";
?>