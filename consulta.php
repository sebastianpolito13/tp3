
<?php

	$Nombre = $_POST ['Nombre'];
	$email = $_POST ['email'];
	$password = $_POST ['password'];
	$Ciudad = $_POST ['Ciudad'];
	$Pais = $_POST ['pais'];
	mail ($Nombre, $email, $password, $Ciudad, $Pais);

	print ("<h3> Muchas gracias por su mensaje uwu</h3>");
	
?>

