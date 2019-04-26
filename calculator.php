<html>
	<head>
		<title>Sumar</title>
	</head>
	<body>
		<?php
			$valor1 = $_POST['N1'];
			$valor2 = $_POST['N2'];
			$valor3 = $_POST['N3'];

			$suma = $valor1 + $valor2 + $valor3;

			echo "$valor1 + $valor2 + $valor3 = $suma";
		?>
	</body>
</html>
