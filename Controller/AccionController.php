<?php
class AccionController{
	function __construct(){
			echo "<center>"."Acciones ❤" ."</center>". "<br>";
			echo "<hr>"	;
		}
	
	public function saludo(){
		echo "Hola Mundo!";
	}
	public function suma(){
		$num1 = $_GET["num1"];
		$num2 = $_GET["num2"];

		$total = $num1 + $num2;
		echo "total: " . $total;
	}
}