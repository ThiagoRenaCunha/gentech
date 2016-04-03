<?php


$con = mysqli_connect("localhost", "root", "", "gentech");
	mysqli_set_charset($con, 'UTF8');
	date_default_timezone_set('America/Sao_Paulo');

	if($con==FALSE) {
		die ('Nao foi possivel conectar ao MySQL! ' . mysql_error());
	}
?>