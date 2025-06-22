<?php header("content-type: text/html; charset=iso-8859-1");
$relatorio = addslashes ($_POST["relatorio"]);
$data = addslashes ($_POST["datarel"]);
$buscar="$relatorio$data"
?>
<html>
<head>
<title>
Visualização de Relatórios
</title>
</head>
<body>
<table>
<tr>
<td><p align="center"><input type=image src="imagens/pdf.gif" onclick='window.open("arquivos/backup/<?phpecho $buscar ?>.pdf","","titlebar=no,toolbar=no,location=no,directories=no,status=no,menubar=yes,scrollbars=yes,fullscreen=no,resizable=yes,menubar=yes,width=600,height=400")'><font face="Verdana" size="1"><? echo $relatorio?><? echo " do dia "?><? echo $data ?> </font></p></td>
</tr>
</table>
<?phpecho"<font face=verdana size=1><a href=\"javascript:history.go(-1)\">Voltar</font>"; ?>

</body>
</html>
