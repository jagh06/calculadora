<?php
	$operando1 = $_GET['operando1'];
	$operando2 = $_GET['operando2'];
	$operador = $_GET['operador'];
	
	if($operador == "+"){
		$solucion = $operando1 + $operando2;
	}else if($operador == "-"){
		$solucion = $operando1 - $operando2;
	}else if($operador == "*"){
		$solucion = $operando1 * $operando2;
	}else if($operador == "/"){
		$solucion = $operando1 / $operando2;
	}

	function_alert("La solución es: ".$solucion);
	function function_alert($message){
		echo "<script>
				alert('$message')
				window.location= '../index.php'
			</script>";

	}
	
	
	//echo "La solución es: ".$solucion;
?>