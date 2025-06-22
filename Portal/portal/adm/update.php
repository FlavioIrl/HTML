<?php
	global $usuario;

	$action    = $_POST['action'];
	$usuario   = $_POST['usuario'];
	$relatorio = $_POST['relatorio'];
	$descr_rel = $_POST['descr_rel'];
	$opcao     = $_POST['opcao'];

	include('../conect.php');
	$data = date("Y-m-d");
	$hora = date("H:i:s");

	if (empty($action)) {
		echo "
		<meta http-equiv='refresh' content=\"0;URL=index.php?user1=$usuario\">
		<script type=\"text/javascript\">
		alert(\"[". $action ."] Erro: E necessario selecionar uma opcao no item: 'Manutencao de Acessos e Usuarios'!\")
		</script>";
	} else {

		if ($action == 'insere') {
			if(empty($usuario) || empty($opcao)) {
				echo "
				<meta http-equiv='refresh' content=\"0;URL=index.php?user1=$usuario\">
				<script type=\"text/javascript\">
				alert(\"Erro: Verifique o campo 'usuario' ou selecione um 'acesso'!\")
				</script>";
			} else {
				$opcao_selecionada = count($opcao);
				for ($i = 0; $i < $opcao_selecionada; $i++) {
					$sql = "select * from relatorios where relatorio = '$opcao[$i]'";
					$query1 = mysql_db_query($db_dados, $sql, $conect);
					$resultado = mysql_fetch_row($query1);
					$acesso1=$resultado[1];
					$descr1=$resultado[2];
	
					$query = "INSERT INTO acessos VALUES ('$usuario','$acesso1','$descr1')";
					$result = mysql_db_query ($db_dados, $query, $conect);
					if (mysql_errno() == 0){
						print "<meta http-equiv='refresh' content=\"0;URL=index.php?user1=$usuario\">";
					} else {
						print mysql_error();
					}
				}
			}
		}
		if ($action == 'deleta') {
			if(empty($usuario) || empty($opcao)) {
				echo "
				<meta http-equiv='refresh' content=\"0;URL=index.php?user1=$usuario\">
				<script type=\"text/javascript\">
				alert(\"Erro: Verifique o campo 'usuario' ou selecione um 'acesso'!\")
				</script>";
			} else {
				$opcao_selecionada = count($opcao);
				for ($i = 0; $i < $opcao_selecionada; $i++) {
					$sql = "select * from acessos where acesso = '$opcao[$i]' and usuario = '$usuario'";
					$query1 = mysql_db_query($db_dados, $sql, $conect);
					$resultado = mysql_fetch_row($query1);
					$acesso1=$resultado[1];
					$descr1=$resultado[2];
	
					$query = "DELETE FROM acessos WHERE usuario = '$usuario' AND acesso = '$acesso1' AND descr = '$descr1'";
					$result = mysql_db_query ($db_dados, $query, $conect);
					if (mysql_errno() == 0){
						print "<meta http-equiv='refresh' content=\"0;URL=index.php?user1=$usuario\">";
					} else {
						print mysql_error();
					}
				}
			}
		}
		if ($action == 'altera') {
			if(empty($usuario) || empty($opcao)) {
				echo "
				<meta http-equiv='refresh' content=\"0;URL=index.php?user1=$usuario\">
				<script type=\"text/javascript\">
				alert(\"Erro: Verifique o campo 'usuario' ou selecione um 'acesso'!\")
				</script>";
			} else {
				$query = "UPDATE acessos SET descr='$descr1' WHERE usuario='$usuario' AND acesso = '$acesso1'";
				$result = mysql_db_query ($db_dados, $query, $conect);
				if (mysql_errno() == 0){
					print "<meta http-equiv='refresh' content=\"0;URL=index.php?user1=$usuario\">";
				} else {
					print mysql_error();
				}
			}
		}
		if ($action == 'insere_user') {
			if(empty($usuario)) {
				echo "
				<meta http-equiv='refresh' content=\"0;URL=index.php?user1=$usuario\">
				<script type=\"text/javascript\">
				alert(\"Erro: E necessario selecionar um usuario!\")
				</script>";
			} else {
				$query = "INSERT INTO usuarios (login, senha, setor) VALUES ('$usuario', md5('$usuario'), '$setor')";
				$result = mysql_db_query ($db_dados, $query, $conect);
				if (mysql_errno() == 0){
					print "<meta http-equiv='refresh' content=\"0;URL=index.php?user1=$usuario\">
					<script type=\"text/javascript\">
					alert(\"O usuario foi criado com sucesso! A senha foi definida como o mesmo nome do usuario peca para o mesmo troca-la!\")
					</script>";
				} elseif (mysql_errno() >= 1062) {
					echo "
					<meta http-equiv='refresh' content=\"0;URL=index.php?user1=$usuario\">
					<script type=\"text/javascript\">
					alert(\"Erro: Este usuario ja esta cadastrado! Digite o novo usuario a ser incluido.\")
					</script>";
				} else {
					print mysql_errno();
				}
			}
		}
	
		if ($action == 'deleta_user') {
			if(empty($usuario)) {
				echo "
				<meta http-equiv='refresh' content=\"0;URL=index.php?user1=$usuario\">
				<script type=\"text/javascript\">
				alert(\"Erro: E necessario selecionar um usuario!\")
				</script>";
			} else {
				$query_acessos = "DELETE FROM acessos WHERE usuario = '$usuario'";
				$query_usuarios = "DELETE FROM usuarios WHERE login = '$usuario'";
				$result_acessos = mysql_db_query ($db_dados, $query_acessos, $conect);
				$result_usuarios = mysql_db_query ($db_dados, $query_usuarios, $conect);
				if (mysql_errno() == 0){
					print "<META HTTP-EQUIV=REFRESH CONTENT='0; URL=\"index.php\"'>
					<script type=\"text/javascript\">
					alert(\"O usuario foi deletado com sucesso!\")
					</script>";
				} else {
					print mysql_error();
				}
			}
		}
		if ($action == 'gera_password') {
			if(empty($usuario)) {
				echo "
				<meta http-equiv='refresh' content=\"0;URL=index.php?user1=$usuario\">
				<script type=\"text/javascript\">
				alert(\"Erro: E necessario selecionar um usuario!!\")
				</script>";
			} else {
				$query = "UPDATE usuarios SET senha = md5('$usuario') WHERE login = '$usuario' AND setor = '$setor'";
				$result = mysql_db_query ($db_dados, $query, $conect);
				if (mysql_errno() == 0){
					print "<meta http-equiv='refresh' content=\"0;URL=index.php?user1=$usuario\">
					<script type=\"text/javascript\">
					alert(\"A senha foi definida como o mesmo nome do usuario 'peca para o mesmo troca-la!'\")
					</script>";
				} else {
					print mysql_error();
				}
			}
		}
		if ($action == 'insere_acesso') {
			if(empty($relatorio) || empty($descr_rel)) {
				echo "
				<meta http-equiv='refresh' content=\"0;URL=index.php?user1=$usuario\">
				<script type=\"text/javascript\">
				alert(\"Erro: E necessario preencher os campos 'Relatorio' e 'Descricao'!\")
				</script>";
			} else {
				$descr_cript=md5($descr_rel);
				$query = "INSERT INTO relatorios (filial, relatorio, descricao, nome_criptografado, data, hora) VALUES ('$filial', '$relatorio', '$descr_rel', '$descr_cript.pdf', '$data', '$hora')";
				$result = mysql_db_query ($db_dados, $query, $conect);
				if (mysql_errno() == 0){
					print "<meta http-equiv='refresh' content=\"0;URL=index.php?user1=$usuario\">
					<script type=\"text/javascript\">
					alert(\"O novo Relatorio foi incluido no Banco de Dados!\")
					</script>";
				} else {
					print mysql_error();
				}
			}
		}
		if ($action == 'deleta_acesso') {
			if(empty($opcao)) {
				echo "
				<meta http-equiv='refresh' content=\"0;URL=index.php?user1=$usuario\">
				<script type=\"text/javascript\">
				alert(\"Erro: E necessario selecionar os Relatorios a serem deletados!\")
				</script>";
			} else {
				$opcao_selecionada = count($opcao);
				for ($i = 0; $i < $opcao_selecionada; $i++) {
					$sql = "select * from relatorios where relatorio = '$opcao[$i]'";
					$query1 = mysql_db_query($db_dados, $sql, $conect);
					$resultado = mysql_fetch_row($query1);
					$acesso1=$resultado[1];
					$descr1=$resultado[2];
	
					$query = "DELETE FROM relatorios WHERE relatorio = '$acesso1' AND descricao = '$descr1'";
					$result = mysql_db_query ($db_dados, $query, $conect);
					if (mysql_errno() == 0){
						print "<META HTTP-EQUIV=REFRESH CONTENT='0; URL=\"index.php\"'>
						<script type=\"text/javascript\">
						alert(\"O Relatorio foi deletado com sucesso!\")
						</script>";
					} else {
						print mysql_error();
					}
				}
			}
		}
	}
?>

