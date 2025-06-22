<?php
	$find = $_POST['find'];
	$find2 = $_GET['find'];
	$stpage = $_GET['stpage'];
	$orderby = $_GET['orderby'];

	if ($find2 != ''){
		$find = $find2;
	}

	echo '<html>';
	echo '<head>';
	echo '<title>Tabela: ramais</title>';
	echo '<link rel="stylesheet" type="text/css" href="style.css">';
	echo '</head>';
	echo '<body>';
	echo '<center>';

	echo 'Procurando por: <b>'. $find .'</b> STPAGE: '. $stpage;

	include_once('connect.php');
	include_once('config.php');

	/*
	error_reporting(E_ERROR);
	import_request_variables("GPC", '');
	*/

	$PHP_SELF = $HTTP_SERVER_VARS['PHP_SELF'];

	if (! isset($action)) {$action = 'list';}
	if (! isset($stpage)) {$stpage = 1;}
	if (! isset($orderby)) {$orderby = '';}
	if (! isset($find)) {$find = '';}

	// Records List
	if ($action == 'list'){
		$query = "SELECT * FROM ramais";
		if ($find != ''){
			$query = $query . " WHERE (filial LIKE '%$find%' OR cod_fil LIKE '%$find%' OR ddd LIKE '%$find%' OR abrev LIKE '%$find%' OR telefone LIKE '%$find%' OR contato LIKE '%$find%' OR setor LIKE '%$find%')";
		}
		if ($orderby != ''){
			$query = $query . " ORDER BY $orderby";
		}
		if ($find != ''){
			print "<table border=\"0\" cellpadding=\"0\" width=\"100%\">\n";
			print "<tr>\n";
			print "<td valign=middle><center><a href=\"$PHP_SELF?stpage=$stpage&find2=$find&orderby=filial\"><br><b>Filial</b></a></center></td>\n";
			//  print "<td valign=middle><center><a href=\"$PHP_SELF?stpage=$stpage&find2=$find&orderby=cod_fil\"><br><b>&nbsp;&nbsp;Código&nbsp;&nbsp;</b></a></center></td>\n";
			print "<td valign=middle><center><a href=\"$PHP_SELF?stpage=$stpage&find2=$find&orderby=ddd\"><br><b>DDD</b></a></center></td>\n";
			print "<td valign=middle><center><a href=\"$PHP_SELF?stpage=$stpage&find2=$find&orderby=abrev\"><br><b>Abrev.</b></a></center></td>\n";
			print "<td valign=middle><center><a href=\"$PHP_SELF?stpage=$stpage&find2=$find&orderby=telefone\"><br><b>&nbsp;Telefone&nbsp;</b></a></center></td>\n";
			print "<td valign=middle><center><a href=\"$PHP_SELF?stpage=$stpage&find2=$find&orderby=contato\"><br><b>&nbsp;Contato/Setor&nbsp;</b></a></center></td>\n";
			print "<td valign=middle><center><a href=\"$PHP_SELF?stpage=$stpage&find2=$find&orderby=setor\"><br><b>&nbsp;Grupo&nbsp;</b></a></center></td>\n";
			print "</tr>\n";
			pdb_paginal_query($dbh, $query, 'ramais.inc.php', 20, '', '');
			print "</table>\n";
			print "Número de registros encontrados: $records_count";
			print "<p>Pagina: ". pdb_paginal_links_compact(20) ."</p>";
			print "<a href=\"javascript:history.back(-1)\">Voltar</a>";
		}
	} else {
		echo 'uuuu';
	}

	echo '</center>';
	echo '</body>';
	echo '</html>';

?>
