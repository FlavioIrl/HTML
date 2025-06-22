<?php
	$arquivo_criptografado = $_GET['arquivo_criptografado'];

	$arquivo_descriptografado = base64_decode($arquivo_criptografado);
	include('conect.php');
	$hora = date("H:i:s");
	$data = date("j/m/Y");
	$filial = "59"; /*************** CORRIGIR ISTO ***************/

	// converte a data do formato (BR) DD/MM/AAAA para o formato sql (EUA) AAAA-MM-DD
	$arr_data = explode("/", $data);
	$data_sql = "$arr_data[2]-$arr_data[1]-$arr_data[0]";

	/*
	renomeia arquivos ".pdf" para o nome criptografado usando os valores: nome do arquivo, data atual,
	hora atual e o numero da filial enquanto encontra-los com o nome original  */
	$sql_relatorios="select relatorio from relatorios where relatorio like '%pdf%'";
	$query_relatorios=mysql_db_query($db_dados, $sql_relatorios, $conect);

	while($resultado_relatorios=mysql_fetch_row($query_relatorios)) {
		$arquivo = $resultado_relatorios[0];
		$arquivo_original = 'arquivos/'.$arquivo;
		$encrypta = md5("$arquivo$data$hora$filial");
		$arquivo_criptografia = 'arquivos/'.$encrypta;

		if (file_exists($arquivo_original)) {
			$renomeia = rename($arquivo_original, $arquivo_criptografia.'.pdf');
			$sql_inclui_relatorios="update relatorios set nome_criptografado='$encrypta.pdf', data='$data_sql', filial='$filial', hora='$hora' where relatorio='$arquivo' and relatorio != 'resumo.php'";
			$executa=mysql_db_query($db_dados, $sql_inclui_relatorios, $conect);
		}
	}
	// associa o nome criptografado ao nome original utilizado no link.
	$sql_criptografia="select nome_criptografado from relatorios where relatorio='$arquivo_descriptografado' and relatorio != 'resumo.php'";
	$query_criptografia=mysql_db_query($db_dados, $sql_criptografia, $conect);
	if ($resultado_criptografia = mysql_fetch_row($query_criptografia)) {
		$nome_criptografia=$resultado_criptografia[0];

		// valida usuário através das informações gravadas nos Cookies e dá acesso aos relatórios
		session_start("session");
		if ( !isset($_SESSION['session'])) {
			echo "
			<META HTTP-EQUIV=REFRESH CONTENT='0; URL=\"javascript:window.close();\"'>
			<script type=\"text/javascript\">
			alert(\"Erro: Não ha nenhum usuario logado! Para acessar esta página você precisa se logar com usuario e senha!\")
			</script>";
		} else {
			// criptografa o nome do arquivo a cada vez em que o mesmo for acessado.
			$encrypta_novamente=md5("$nome_criptografia$data$hora$filial");
			$arquivo_criptografado_original='arquivos/'.$nome_criptografia;
			$arquivo_criptografado_renomeado='arquivos/'.$encrypta_novamente;
			if (file_exists($arquivo_criptografado_original)) {
				$renomeia_novamente=rename($arquivo_criptografado_original, $arquivo_criptografado_renomeado.'.pdf');
				$sql_inclui_relatorios1="update relatorios set nome_criptografado='$encrypta_novamente.pdf', data='$data_sql', filial='$filial', hora='$hora' where nome_criptografado='$nome_criptografia' and nome_criptografado != 'resumo.php'";
				$executa1=mysql_db_query($db_dados, $sql_inclui_relatorios1, $conect);
			} else {
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT='0; URL=\"javascript:window.close();\"'>
				<script type=\"text/javascript\">
				alert(\"Erro: Arquivo solicitado não encontrado!\")
				</script>";
			}

			echo '<html>';
			echo '<head>';
			echo '<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">';
			echo '<title>Visualização de Relatórios</title>';
			echo '</head>';
			echo '<body>';
			echo '<iframe src="arquivos/'. $encrypta_novamente .'.pdf" height="100%" width="100%"></iframe>';
			echo '</body>';
			echo '</html>';
		}
	}
?>
