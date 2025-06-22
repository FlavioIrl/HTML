
<?
header("content-type: text/html; charset=iso-8859-1");
//USUARIOS LOGADOS
echo "
<table border-0 width=100%>
<tr>
<th colspan=3>Número de Processos sendo execultados</th>
</tr>
";
$cpu = `top -bn2 | grep process | tail -1 | cut -c1-4 | awk '{ print $1 }'`;
echo "
<tr>
<td colspan=3 align=center><font color=green>H&aacute; neste momento <font color=blue>$cpu</font>processos sendo execultados neste servidor.</font></td>
</tr>";
echo "</table>";



echo "
<table border-0 width=100%>
<tr>
<th colspan=3>Serviço de Impressão parado!</th>
</tr>
";
$impr = `lpstat -t | grep "-" | awk '{ print $1 }'`;
//$impr = `ps -ef | grep lp | grep "?" | cut -c49-200 | awk '{ print $1 }'`;
echo "
<tr>
<td colspan=3 align=center><font color=green>Atenção, processo de impressão <font color=blue>$impr</font>Parado.</font></td>
</tr>";
echo "</table>";
