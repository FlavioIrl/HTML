<?php
$banco = "atacadao";
$usuario = "filial007";
$senha = "senhafilial";
$hostname = "localhost";

if (!$conn) {echo "Não foi possível conectar ao banco MySQL.
"; exit;}
else {echo "Parabéns!! A conexão ao banco de dados ocorreu normalmente!.
";}
mysql_close(); 
?>