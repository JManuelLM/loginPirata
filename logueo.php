<?php
function evalua($valor1, $valor2) {
	echo "<br>---Evaluando: " .$valor1. " y ". $valor2."---<br>"
	return $valor1 == $valor2;
}


	var_dump($_POST);
	echo "<br>";
	$nombre = $_POST["nombre"];


	if($nombre == "pepePecas" && $_POST["password"] == "12345"){
		echo "Bienvenido, Pepe Pecas";
	}
	else{
		echo "Tú no eres Pepe Pecas"
	}
?>
