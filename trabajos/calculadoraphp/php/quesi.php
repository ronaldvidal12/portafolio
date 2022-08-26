<?php
	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];
	$op = $_GET['op'];
	

	if($op == "+"){
		$resultado = $num1 + $num2;
	}

	else if($op == "-"){
		$resultado = $num1 - $num2;
	}

	else if($op == "*"){
		$resultado = $num1 * $num2;
	}

	else if($op == "/"){
		$resultado = $num1 / $num2;
	}

	else if($op == "^"){
		$resultado = pow($num1, $num2);
	}
	echo "El resultado es: ".$resultado;
?>
