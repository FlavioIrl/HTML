<?php

if(isset($_POST['submit'])) {

	$filial      = $_POST['filial'];
	$user_bd     = $_POST['user_bd'];
	$password_bd = $_POST['password_bd'];
	$basename    = $_POST['basename'];

	if(empty($filial) || empty($user_bd) || empty($password_bd)) {
		echo "Favor preencher todos os parametros para a correta configuracao do sistema!";
	} else {
		$encode_senha = base64_encode($password_bd);

		$config = "conect.php";
		if (file_exists($config)) {
			$remove = `rm $config`;
		} else {
			$cria_conf = `touch $config`;
		}

		$content  = '<?php' ."\n";
		$content .= '$usuario_bd = "'. $user_bd .'";' ."\n";
		$content .= '$passw = "'. $encode_senha .'";' ."\n";
		$content .= '$senha_ok = base64_decode($passw);' ."\n";
		$content .= '$conect=mysql_connect("localhost", $usuario_bd, $senha_ok) ';
		$content .= ' or die ("Erro de acesso ao banco de dados");' ."\n";
		$content .= '$db_dados="'. $basename .'";' ."\n";
		$content .= '$filial="'. $filial .'";' ."\n";
		$content .= '?>' ."\n";
		echo $content;

		if (!$fp = fopen($config, 'a')) {
			print "Erro abrindo arquivo ($config)";
			exit;
		}
		if (!fwrite($fp, $content)) {
			print "Erro escrevendo no arquivo ($config)";
			exit;
		}

		fclose($fp);

		$conect = mysql_connect('localhost', $user_bd, $password_bd);
		mysql_select_db($basename);

		$sql_acessos = "CREATE TABLE IF NOT EXISTS acessos ( usuario varchar(30) NOT NULL, acesso varchar(30) NOT NULL, descr varchar(60) NOT NULL) ";
		$sql_ramais = "CREATE TABLE IF NOT EXISTS ramais ( filial varchar(200) NOT NULL, cod_fil varchar(4) NOT NULL, ddd varchar(4) NOT NULL, abrev varchar(10) NOT NULL, telefone varchar(9) NOT NULL, contato varchar(200), setor varchar(200)) ";
		$sql_relatorios = "CREATE TABLE IF NOT EXISTS relatorios ( filial varchar(5) NOT NULL, relatorio varchar(30) NOT NULL, descricao varchar(255) NOT NULL, nome_criptografado varchar(50) NOT NULL, data date DEFAULT '0000-00-00' NOT NULL, hora time DEFAULT '00:00:00' NOT NULL, PRIMARY KEY (relatorio)) ";
		$drop_usuarios = "DROP TABLE usuarios";
		$sql_usuarios = "CREATE TABLE IF NOT EXISTS usuarios ( login varchar(200) NOT NULL, senha varchar(200) NOT NULL, setor varchar(30) NOT NULL, PRIMARY KEY (login)) ";
		$sql_criauser = "INSERT INTO atacadao.usuarios (login, senha, setor) values ('admin', md5('administrador'), 'CPD') ";
		$insert_relatorios = "LOAD DATA LOCAL INFILE 'relatorios.sql' INTO TABLE atacadao.relatorios FIELDS TERMINATED BY ';' ENCLOSED BY '\"' ";
		$update_filial = "UPDATE atacadao.relatorios SET filial = '$filial' ";

		echo '<h2>PORTAL v2.0</h2>';
		echo '<hr>';

		if(mysql_query($sql_acessos)) {
			echo '<font color="green">Query "acessos" executada com exito!</font><br>';
		} else {
			echo '<font color="red">Falha na execucao da query "acessos"!</font><br>';
		}

		if(mysql_query($sql_ramais)) {
			echo '<font color="green">Query "ramais" executada com exito!</font><br>';
		} else {
			echo '<font color="red">Falha na execucao da query "ramais"!</font><br>';
		}

		if(mysql_query($sql_relatorios)) {
			echo '<font color="green">Query "relatorios" executada com exito!</font><br>';
		} else {
			echo '<font color="red">Falha na execucao da query "relatorios"!</font><br>';
		}

		if(mysql_query($drop_usuarios)) {
			echo '<font color="green">Query "drop_usuarios" executada com exito!</font><br>';
		} else {
			echo '<font color="red">Falha na execucao da query "drop_usuarios"!</font><br>';
		}

		if(mysql_query($sql_usuarios)) {
			echo '<font color="green">Query "usuarios" executada com exito!</font><br>';
		} else {
			echo '<font color="red">Falha na execucao da query "usuarios"!</font><br>';
		}

		if(mysql_query($sql_criauser)) {
			echo '<font color="green">Query "criauser" executada com exito!</font><br>';
		} else {
			echo '<font color="red">Falha na execucao da query "criauser"!</font><br>';
		}
	
		if(mysql_query($insert_relatorios)) {
			echo '<font color="green">Query "insert_relatorios" executada com exito!</font><br>';
		} else {
			echo '<font color="red">Falha na execucao da query "insert_relatorios"!</font><br>';
		}

		if(mysql_query($update_filial)) {
			echo '<font color="green">Query "update_filial" executada com exito!</font><br>';
		} else {
			echo '<font color="red">Falha na execucao da query "update_filial"!</font><br>';
		}
		echo '<hr>';
		echo '<a href="index.php">ACESSAR PORTAL</a>';
	}
} else {
	echo '<html>';
	echo '<head>';
	echo '</head>';
	echo '<body>';
	echo '<h2>PORTAL v2.0</h2>';
	echo '<hr>';
	echo '<form method="POST" action="'. $PHP_SELF .'" name="form1">';
	echo '<table>';
	echo '<tr>';
	echo '<td>Numero da Filial</td>';
	echo '<td><input type="text" size="20" name="filial"></td>';
	echo '<tr>';
	echo '<tr>';
	echo '<td>Usuario do Banco de Dados</td>';
	echo '<td><input type="text" size="20" name="user_bd"></td>';
	echo '<tr>';
	echo '<tr>';
	echo '<td>Senha do Banco de Dados</td>';
	echo '<td><input type="password" size="20" name="password_bd"></td>';
	echo '<tr>';
	echo '<tr>';
	echo '<td>Base de Dados</td>';
	echo '<td><input type="text" size="20" name="basename" value="atacadao"></td>';
	echo '<tr>';
	echo '<tr>';
	echo '<td colspan="2" align="center"><input type="Submit" value="Enviar" name="submit"></td>';
	echo '<tr>';
	echo '</table>';
	echo '</form>';
	echo '<hr>';
	echo '</body>';
	echo '</html>';
}
?>
