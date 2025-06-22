<?php
include('../conect.php');
	$dbh=MYSQL_CONNECT('localhost', $usuario_bd, $senha_ok) OR DIE("Não foi possível conexão com a base de dados.");
	@mysql_select_db($db_dados) or die("Não foi possível selecionar a base de dados.");
?>
