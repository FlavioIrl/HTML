<HTML>
<HEAD>
 <TITLE></TITLE>
</HEAD>
<BODY>
<?
include('conect.php');
mysql_select_db($basename);

$delete = "
DELETE FROM atacadao.ramais
";

$insert = "
LOAD DATA LOCAL INFILE 'abreviados.csv' INTO TABLE atacadao.ramais FIELDS TERMINATED BY ';'
";

if(mysql_query($delete)) {
echo "<p>Query \"delete\" executada com exito!</p>";
}
else {
echo "<p>Falha na execucao da query \"delete\"!</p>";
}

if(mysql_query($insert)) {
echo "<p>Query \"insert\" executada com exito!</p>";
}
else {
echo "<p>Falha na execucao da query \"insert\"!</p>";
}

?>
</BODY>
</HTML>
