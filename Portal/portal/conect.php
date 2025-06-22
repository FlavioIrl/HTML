<?php
$usuario_bd = "filial007";
$passw = "c2VuaGFmaWxpYWw=";
$senha_ok = base64_decode($passw);
$conect=mysql_connect("localhost", $usuario_bd, $senha_ok)  or die ("Erro de acesso ao banco de dados");
$db_dados="atacadao";
$filial="07";
?>
