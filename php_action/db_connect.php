<?php
$servername = "localhost";
$username = "crud";
$password = "123";
$db_name = "crud";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
	echo "Erro na conexão: ".mysqli_connect_error();
endif;