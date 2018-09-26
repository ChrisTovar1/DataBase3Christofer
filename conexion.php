<?php

	$servidor="localhost";
	$usuarioBD="root";
	$passUDB="";
	$DBName="tics123";

	$conecta=mysqli_connect($servidor, $usuarioBD, $passUDB, $DBName) or die("existe un error");

?>