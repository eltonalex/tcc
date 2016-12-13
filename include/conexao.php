<?php

$host = "localhost";
$user =  "leque276_elton";
$passw =  "110483";
$db =  "leque276_jogo";

$conect = mysql_pconnect($host,$user,$passw);

	if ($conect){

		$bco = mysql_select_db($db,$conect);

		if ($bco){

			$conectou = 1;

		}else {

				echo "Banco de Dados Encontrado";

		}

	}else {

				echo "Erro na Conexão";

				die("Banco deDados Não Encontrado!!! " . mysql_error());

	}



?>