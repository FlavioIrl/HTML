<?php
	$user1 = $_POST['user1'];

	session_start("session");
	if ( !isset($_SESSION['session'])) {
		echo "
		<META HTTP-EQUIV=REFRESH CONTENT='0; URL=\"javascript:window.close();\"'>
		<script type=\"text/javascript\">
		alert(\"Erro: Nao ha nenhum usuario logado! Para acessar esta pagina, voce precisa se logar com usuario e senha!\")
		</script>";
	} else {
		if($_SESSION['session']['set'] == 'CPD') {
			include('../conect.php');
	
			$tb_setor = 'SELECT login, setor FROM usuarios where login="'. $user1 .'" ORDER BY login' or die ("Erro na abertura dos dados da tabela USUARIOS");
			$query_setor = mysql_db_query($db_dados, $tb_setor, $conect) or die ("Erro ao abrir a tabela USUARIOS");
			$resultado_setor = mysql_fetch_row($query_setor);
			$setor = $resultado_setor[1];

			echo '<html>';
			echo '<head>';
			echo '</head>';
			echo '<body link="#800080" vlink="#000080">';
			echo '<center><h2><font face=Arial>Administra&ccedil;&atilde;o de Usu&aacute;rios/Acessos do Portal Intranet</font></h2>';
			echo '<hr>';

			echo '<form method="POST" action="'. $PHP_SELF .'">';
			echo '<p><font size=4 face=Arial><b>SELECIONE O USU&Aacute;RIO: </b></font><select name="user1" onchange="this.form.submit()">';

			$tb_usuarios = "SELECT login FROM usuarios ORDER BY login" or die ("Erro na abertura dos dados da tabela USUARIOS");
			$query_usuarios = mysql_db_query($db_dados, $tb_usuarios, $conect) or die ("Erro ao abrir a tabela USUARIOS");
			while ($result_usuarios = mysql_fetch_row ($query_usuarios)) {
				$login = $result_usuarios[0];
				echo"<option>$login</option>";
			}
			echo"<option selected>$user1</option>";

			echo '</select>';
			echo '</form>';
			echo '</center>';
			echo '<br>';
			echo '<form method="POST" action="update.php">';
			echo '<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">';
			echo '<tr>';
			echo '<td width="50%" valign="top">';
			echo '<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="98%">';
			echo '<tr>';
			echo '<th colspan=3 width="15%" align="center" valign="top" bgcolor=#999999>Acessos atribu&iacute;dos ao usu&aacute;rio: <font color=blue size=4>'. $user1 .'</font></th>';
			echo '</tr>';
			echo '<tr>';
			echo '<th colspan=2 width="15%" align="center" valign="top" bgcolor=#CCCCCC>Acesso</th>';
			echo '<td width="80%" align="center" bgcolor=#CCCCCC><b>Descri&ccedil;&atilde;o do Acesso</b></td>';
			echo '</tr>';


			$tb_acessos = "SELECT * FROM acessos WHERE usuario = '$user1' ORDER BY acesso" or die ("Erro na abertura dos dados da tabela ACESSOS");
			$query_acessos = mysql_db_query($db_dados, $tb_acessos, $conect) or die ("Erro ao abrir a tabela ACESSOS");
			while ($result_acessos = mysql_fetch_row ($query_acessos)) {
				$usuario = $result_acessos[0];
				$acesso = $result_acessos[1];
				$descr = $result_acessos[2];
				//global $result_acessos;

				echo '<tr>';
				echo '<td width="2%" align="left"><input type="checkbox" name="opcao[]" value="'. $acesso .'"></td>';
				echo '<td width="15%" align="left" valign="top"><font color="blue"><b>&nbsp;'. $acesso .'&nbsp;</b></font></td>';
				echo '<td width="80%" align="left"><font color="blue"><b>&nbsp;'. $descr .'&nbsp;</b></font></td>';
				echo '</tr>';
			}

			echo '</table>';
			echo '<br>';

			echo '<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">';
			echo '<tr>';
			echo '<td width="100%">';
			echo '<p align="left"><b>Manuten&ccedil;&atilde;o de Usu&aacute;rios/Acessos:</b></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td width="100%">&nbsp;</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td width="100%">';
			echo '<input type="radio" value="insere" name="action" size="20"><font color=green><b> Inserir novo acesso ao usu&aacute;rio</font></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td width="100%">';
			echo '<input type="radio" value="deleta" name="action" size="20"><font color=green><b> Deletar acesso do usu&aacute;rio</font></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td width="100%" align="right">';
			echo '&nbsp;';
			echo '</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td width="100%">';
			echo '<input type="radio" value="insere_user" name="action" size="20"><font color=red><b> Inserir novo Usu&aacute;rio</font></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td width="100%" align="right">';
			echo '<p align="left"><font color=red><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Usu&aacute;rio:&nbsp;</font>';
			echo '<input type="text" name="usuario" value="'. $user1 .'" size="10" style="color: #0000FF">&nbsp;&nbsp;';
			echo '<font color=red>Setor: </font>';
			echo '<font color=blue>';
			echo '<select size="1" name="setor">';
			echo '<option selected>'. $setor .'</option>';
			echo '<option>Apoio</option>';
			echo '<option>Almoxarifado</option>';
			echo '<option>Cadastro</option>';
			echo '<option>Cafeteria</option>';
			echo '<option>Cartaz</option>';
			echo '<option>Check-in</option>';
			echo '<option>Contabilidade</option>';
			echo '<option>CPD</option>';
			echo '<option>Depos&iacute;to</option>';
			echo '<option>Estoque</option>';
			echo '<option>Financeiro</option>';
			echo '<option>Frente de Caixa</option>';
			echo '<option>Frios</option>';
			echo '<option>Gerencia</option>';
			echo '<option>Horti Fruti</option>';
			echo '<option>Loja</option>';
			echo '<option>Manuten&ccedil;&atilde;o</option>';
			echo '<option>Matriz</option>';
			echo '<option>Refeitorio</option>';
			echo '<option>RH</option>';
			echo '<option>RM</option>';
			echo '<option>Seguran&ccedil;a</option>';
			echo '<option>Trocas</option>';
			echo '</select>';
			echo '</font>';
			echo '&nbsp;&nbsp;';
			echo '</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td width="100%">';
			echo '<input type="radio" value="deleta_user" name="action" size="20"><font color=red><b> Deletar Usu&aacute;rio</font></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td width="100%">';
			echo '<input type="radio" value="gera_password" name="action" size="20"><font color=red><b> Gerar nova senha</font></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td width="100%" align="right">';
			echo '</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td width="100%" align="right">';
			echo '&nbsp;';
			echo '</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td width="100%">';
			echo '<input type="radio" value="insere_acesso" name="action" size="20"><font color=blue><b> Inserir Novo Relat&oacute;rio/Acesso</font></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td width="100%" align="right">';
			echo '<p align="left"><font color=blue><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Relat&oacute;rio:&nbsp;</font>';
			echo '<input type="text" name="relatorio" size="10" style="color: #0000FF">&nbsp;&nbsp;';
			echo '<font color=blue>Descr.: </font>';
			echo '<font color=blue><input type="text" name="descr_rel" size="30" style="color: #0000FF"></font>';
			echo '</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td width="100%">';
			echo '<input type="radio" value="deleta_acesso" name="action" size="20"><font color="blue"><b> Deletar Relat&oacute;rio/Acessos</font>';
			echo '</td>';
			echo '</tr>';

			echo '<tr>';
			echo '<td width="100%" align=left>';
			echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
			echo '<input class="clsButton2" type="submit" value="Enviar" size="20">';
			echo '</td>';
			echo '</tr>';
			echo '</table>';
			echo '</td>';
			echo '<td width="50%" valign="top" align="center">';
			echo '<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="95%">';
			echo '<tr>';
			echo '<th colspan=3 width="15%" align="center" valign="top" bgcolor=#999999>Acessos dispon&iacute;veis no sistema</th>';
			echo '</tr>';
			echo '<tr>';
			echo '<th colspan=2 width="15%" align="center" valign="top" bgcolor=#CCCCCC>Acesso</th>';
			echo '<td width="80%" align="center" bgcolor=#CCCCCC><b>Descri&ccedil;&atilde;o do Acesso</b></td>';
			echo '</tr>';

			$tb_relatorios = "SELECT relatorio, descricao FROM relatorios ORDER BY relatorio" or die ("Erro na abertura dos dados da tabela RELAT?IOS");
			$query_relatorios = mysql_db_query($db_dados, $tb_relatorios, $conect) or die ("Erro ao abrir a tabela RELAT?IOS");
			while ($result_relatorios = mysql_fetch_row ($query_relatorios)) {
				$relatorio = $result_relatorios[0];
				$descricao = $result_relatorios[1];
				echo '<tr>';
				echo '<td width="2%" align="left"><input type="checkbox" name="opcao[]" value="'. $relatorio .'"></td>';
				echo '<td width="15%" align="left" valign="top"><b>&nbsp;'. $relatorio .'&nbsp;</b></td>';
				echo '<td width="80%" align="left"><b>&nbsp;'. $descricao .'</b></td>';
				echo '</tr>';
			}

			echo '</table>';
			echo '</form>';
			echo '</td>';
			echo '</tr>';
			echo '</table>';
			echo '</body>';
			echo '</html>';
		} else {
			echo "<META HTTP-EQUIV=REFRESH CONTENT='0; URL=\"javascript:window.close();\"'>";
			echo "<script type=\"text/javascript\">";
			echo "alert(\"Erro: O usuario logado nao tem permissao para acessar este local\")";
			echo "</script>";
		}
	}
?>
