<?php
	/* inicializa variaveis */
	$login = $_POST["login"];
	$senha = $_POST["senha"];

	include('conect.php'); // conexao com o bd
	// query da tabela usuarios
	$sql = "SELECT login, senha, setor FROM usuarios WHERE login = '$login' and senha = md5('$senha')" or die ();
	$query = mysql_db_query ($db_dados, $sql, $conect) or die ("Erro no acesso ao banco [SQL]");
	$resultado = mysql_fetch_row($query); // resultado da query

	if($resultado > 0 ){
		$setor=$resultado[2];
		session_start();
		$_SESSION["session"]["user"] = $login;
		$_SESSION["session"]["pass"] = $senha;
		$_SESSION["session"]["set"] = $setor;

		echo "<script language='JavaScript'>top.topo.document.location.reload();</script>";
		echo '<html>';
		echo '<head>';
		echo '<title>';
		echo 'Visualiza&ccedil;&atilde;o de Relat&oacute;rios';
		echo '</title>';
		echo '<script>';
		echo "window.open('popup.php','',\"titlebar=no,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,fullscreen=no,resizable=no,menubar=no,width=400,height=150\");";
		echo '</script>';
		echo '</head>';
		echo '<body bgcolor=#FFFFFF link=#FFFFFF vlink=#FFFFFF alink=#FFFFFF>';
		echo '<center>';
		echo '<p style="margin-top: 0; margin-bottom: 0"><font face=Arial size =2>Bem vindo ao Menu de Relat&oacute;rios, usu&aacute;rio </font><font color=blue face=Arial size=2><span style="text-transform: uppercase">'. $login .'</span></font> !</p>';
		echo '<p style="margin-top: 0; margin-bottom: 0"><font face=Arial size =2>Para visualizar clique no &iacute;cone &agrave; esquerda do relat&oacute;rio.</font></p>';
		echo '<p style="margin-top: 0; margin-bottom: 0"><font face=Arial size =2>Lembre-se de imprimir </font><font color=red face=Arial size=2>somente o necess&aacute;rio</font>.</font></p>';
		echo '<br>';
		echo '</center>';
		echo '<table border="1" cellpadding="0" cellspacing="0" width="100%" height="1">';

		/*  Acessos especiais  */
		if($_SESSION["session"]['set'] == "CPD") {
			echo '<tr>';
			echo "<td width=\"10%\"><p align=\"center\"><input type=image src=imagens/icones/relatorio.png onclick='window.open(\"adm/index.php\",\"alfredo\",\"titlebar=no,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,fullscreen=no,resizable=yes,menubar=no\")'></p></td>";
			echo '<td width="20%"><font face="Arial" size="2"><center><b>&nbsp;ADM&nbsp;</b></center></td>';
			echo '<td width="70%"><font face="Arial" size="2"><b>&nbsp;&nbsp;Administra&ccedil;&atilde;o de Usu&aacute;rios e Acessos do Portal</b></td>';
			echo '</tr>';
		}

		$sql2 = "SELECT usuario, acesso, descr FROM acessos WHERE usuario = '$login' ORDER BY acesso" or die ();
		$query2 = mysql_db_query ($db_dados, $sql2, $conect) or die ("Erro no acesso ao banco [SQL2]");
		while($result = mysql_fetch_row($query2)) {
			$usuario = $result[0];
			$acesso = $result[1];
			$descr = $result[2];
			$arquivo_criptografado = base64_encode($acesso);
			echo '<tr>';
			echo "<td width=\"10%\"><p align=\"center\"><input type=image src=imagens/icones/relatorio.png onclick='window.open(\"exibe_pagina.php?arquivo_criptografado=". $arquivo_criptografado ."\",\"alfredo\",\"titlebar=no,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,fullscreen=no,resizable=yes,menubar=no\")'></p></td>";
			echo '<td width="20%"><font face="Arial" size="2"><center><b>&nbsp;'. $acesso .'&nbsp;</b></center></td>';
			echo '<td width="70%"><font face="Arial" size="2"><b>&nbsp;&nbsp;'. $descr .'</b></td>';
			echo '</tr>';
		}
		echo '</table>';
		echo '</body>';
		echo '</html>';
	} else {
		echo "<META HTTP-EQUIV=REFRESH CONTENT='0; URL=\"branco.php\"'>";
		echo "<script type=\"text/javascript\">";
		echo "alert(\"Usuario ou senha nao conferem...\")";
		echo "</script>";
	}

?>
