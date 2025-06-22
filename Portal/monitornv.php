<?
// VARIAVEIS INICIAIS
require_once('monitor.cfg');
$servidor = `uname -a | awk -F" " '{print $2}'`;
$data = date("d/m/Y");
$hora = date("H:i:s");
$var_hora = date("H");
$var_minuto = date("i");
$var_segundo = date("s");
$destinatario="cpdpiracicaba@atacadao.com.br"; 
$assunto="Alerta emitido pelo Servidor: $servidor [ $data | $hora ]"; 
$cabecalho.="Content-type: text/html\r\n"; 
$cabecalho.="From: Servidor.$servidor <servidor@atacadao.com.br>\r\n"; 
$cabecalho.="Cc: cpddourados@atacadao.com.br\r\n";
/*--*/
?>
<html>
<head>
  <META HTTP-EQUIV="Refresh" CONTENT="15">
  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
  <title>Monitoramento V.2.7 - Servidor: <?echo $servidor?></title>
<style>
body {
margin-top: 15px;
background-color: #FFFFFF;
}
table {
background-color: #FFFFFF;
}
table td {
font-size: 8pt;
font-family: Arial Black;
}
table th {
border-style: solid;
border-color: #000000;
font-size: 10pt;
font-family: Arial;
color: #FFFFFF;
background-color: #000000;
}
table td.barra {
border-style: solid;
border-color: #000000;
font-family: Arial Black;
font-size: 8pt;
color: #ffffff;
background-color: #000000;
}
table.grafico {
padding-right: 0px; 
padding-left: 0px;
padding-top: 0px;
padding-buttom: 0px;
}

</style>
</head>
<center>
<body>
<table border=0 width="100%">
<tr>
<!-- INICIO DA COLUNA 1 -->
  <td width="50%" valign="top">
<?
// INICIO DO ROTINA UTILIZACAO DOS FILESYSTEM´S
echo "
<table border-0 width=100%>
<tr>
<th colspan=4>Utiliza&ccedil;&atilde;o dos FILESYSTEMS</th>
</tr>
";

$filesystem = array(
"/" => "90",
"/boot" => "90",
"/fs0" => "85",
"/fs1" => "90",
"/fs1/pdv" => "90",
"/fs2" => "90",
"/files" => "85",
"/opt/CA" => "85"
);
foreach ($filesystem as $file => $limite) {
$prc1 = `df -h | cut -c20-60 | grep -v LV | awk -F" " '{print $5";"$2";"$4}' | grep -v Mon | grep "$file;" | awk -F";" '{ print $3 }' | awk -F"%" '{print $1}'`;
$prc = str_pad(rtrim(ltrim($prc1)), 2, "0", STR_PAD_LEFT);
$tamanho = `df -h | cut -c20-60 | grep -v LV | awk -F" " '{print $5";"$2";"$4}' | grep -v Mon | grep "$file;" | awk -F";" '{ print $2 }'`;
if($prc >= $limite) {
$mensagem.="<h4><font color=red>Verifique o n&iacute;vel de utiliza&ccedil&atilde;o total do filesystem $file do Servidor:</font> $servidor</h4><br>";
$color="red"; }
elseif($prc >= 50) {
$color="yellow"; }
elseif($prc < 50) {
$color="green"; }
if(!empty($tamanho) || !$prc == "00") {
echo "
<tr>
<td align=left><font color=blue>$file</font></td>
<td align=left><font color=blue>$tamanho</font></td>
<td align=center>
<table class=\"grafico\" border=\"1\" bordercolor=\"#000000\" cellpadding=\"0\" cellspacing=\"0\" height=\"10\" width=\"250\">
    <tr>
      <td>
      <table class=\"grafico\" cellpadding=\"0\" cellspacing=\"0\" width=\"$prc%\">
           <tr>
            <td class=\"grafico\" bgcolor=\"$color\" height=\"10\" >
            <hr align=\"left\" color=\"#000000\" size=\"1\" width=\"1\"></td>
           </tr>
      </table>
      </td>
    </tr>
</table>
</td> 
<td align=center>
<font color=blue>$prc%</font>
</td>
</tr>
";
}
}
echo "</table>";
//FINAL DO ROTINA UTILIZACAO DOS FILESYSTEM´S
//INICIO DO ROTINA UTILIZACAO DOS PROCESSADORES
echo "
<table border-0 width=100%>
<tr>
<th colspan=3>Utiliza&ccedil;&atilde;o dos Processadores</th>
</tr>";
$process = array("cpu00", "cpu01", "total", "Cpu");
foreach ($process as $processador) {
if($processador == "Cpu") {
$cpu = `top -bn2 | grep $processador | tail -1 | awk -F"," '{ print $4 }' | awk -F"%" '{ print $1 }'`;
}
else {
$cpu = `top -bn0 | grep $processador | awk -F" " '{ print $8 }' | awk -F"," '{ print $1"."$2 }'`;
}
$valor_cpu = 100 - $cpu;
if($valor_cpu >= 75) {
//$mensagem.="<h4><font color=red>Verifique o n&iacute;vel de utiliza&ccedil&atilde;o total dos processadores do Servidor:</font> $servidor</h4><br>";
$color="red"; }
elseif($valor_cpu >= 50) {
$color="yellow"; }
elseif($valor_cpu < 50) {
$color="green"; }

if(!empty($cpu)) {
echo "
<tr>
<td align=center><font color=black><span style=\"text-transform: uppercase\">$processador</span></font></td>
<td align=center>
<table class=\"grafico\" border=\"1\" bordercolor=\"#000000\" cellpadding=\"0\" cellspacing=\"0\" height=\"10\" width=\"300\">
    <tr>
      <td>
      <table style=\"padding-right: 0px; margin-left: 0px;\" cellpadding=\"0\" cellspacing=\"0\" width=\"$valor_cpu%\">
           <tr>
            <td class=\"grafico\" bgcolor=\"$color\" height=\"10\" >
            <hr align=\"left\" color=\"#000000\" size=\"1\" width=\"1\"></td>
           </tr>
      </table>
      </td>
    </tr>
</table>
</td>
<td align=center>
<font color=blue>$valor_cpu%</font>
</td>
</tr>
";
}
}
echo "</table>";
//FINAL DO ROTINA UTILIZACAO DOS PROCESSADORES
//INICIO DO ROTINA UTILIZACAO DA MEMORIA
echo "
<table border-0 width=100%>
<tr>
<th colspan=4>Utiliza&ccedil;&atilde;o da MEM&Oacute;RIA</th>
</tr>";
$tip_mem = array("Mem", "Swap");
foreach ($tip_mem as $mem) {
if($mem == "Mem") {
$mem_total = `free -m | grep "Mem:" | awk -F" " '{print $2}'`;
$buffers = `free -m | grep "Mem:" | awk -F" " '{print $6}'`;
$cache = `free -m | grep "Mem:" | awk -F" " '{print $7}'`;
$mem_used = $mem_total - ($cache + $buffers);
}
elseif($mem == "Swap") {
$mem_total = `free -m | grep "Swap" | awk -F" " '{print $2}'`;
$mem_used = `free -m | grep "Swap" | awk -F" " '{print $3}'`;
}

$qtd_mem_used = $mem_used / $mem_total * 100;
$valor_mem = sprintf("%.2f%%", $qtd_mem_used);

if($valor_mem > 75) {
$mensagem.="<h4><font color=red>Verifique o n&iacute;vel de utiliza&ccedil&atilde;o da mem&oacute;ria do Servidor:</font> $servidor</h4><br>";
$color="red"; }
elseif($valor_mem >= 50) {
$color="yellow"; }
elseif($valor_mem < 50) {
$color="green"; }
echo "
<tr>
<td align=left><font color=black><span style=\"text-transform: uppercase\">$mem [$mem_total MB]</span></font></td>
<td align=center>
<table class=\"grafico\" border=\"1\" bordercolor=\"#000000\" cellpadding=\"0\" cellspacing=\"0\" height=\"10\" width=\"170\">
    <tr>
      <td>
      <table style=\"padding-right: 0px; margin-left: 0px;\" cellpadding=\"0\" cellspacing=\"0\" width=\"$valor_mem%\">
           <tr>
            <td class=\"grafico\" bgcolor=\"$color\" height=\"10\" >
            <hr align=\"left\" color=\"#000000\" size=\"1\" width=\"1\"></td>
           </tr>
      </table>
      </td>
    </tr>
</table>
</td>
<td align=center>
<font color=blue>$mem_used MB</font>
</td>
<td align=center>
<font color=blue>$valor_mem</font>
</td>
</tr>
";
}
echo "</table>";
//FINAL DO ROTINA UTILIZACAO DA MEMORIA
//INICIO DO ROTINA TRAFEGO DE REDE
echo "
<table border-0 width=100%>
<tr>
<th colspan=4>Tr&aacute;fego de REDE (Eth0)</th>
</tr>";
$recebidos = `ifconfig eth0 | grep bytes | awk -F" " '{print $2" "$3" "$4}' | awk -F":" '{print $1"  :  "$2}'`;
$enviados = `ifconfig eth0 | grep bytes | awk -F" " '{print $6" "$7" "$8}' | awk -F":" '{print $1"  :  "$2}'`;
echo "
<tr>
<td align=left><font color=blue>Enviados:</font></td>
<td align=left><font color=green>$enviados</font></td>
</tr>
<tr>
<td align=left><font color=blue>Recebidos:</font></td>
<td align=left><font color=green>$recebidos</font></td>
</tr>";
echo "</table>";
//FINAL DO ROTINA TRAFEGO DE REDE
?>
  </td>
<!-- FINAL DA COLUNA 1 -->
<!-- INICIO DA COLUNA 2 -->
  <td valign="top" width="50%">
<?
//INICIO DO ROTINA SERVICOS TIRA-TEIMA
echo "
<table border-0 width=100%>
<tr>
<th colspan=3>Servi&ccedil;o Tira Teima</th>
</tr>
";
if($tirateima == "terminal") {
$ver_tirateimas = `ps -ef | grep -v grep | grep $tirateima | awk -F" " '{ print $9 }'`;
$var_tirateima = explode("\n", $ver_tirateimas);
$quant_tirateima=sizeof($var_tirateima) -1;
}
elseif ($tirateima == "TCgertec") {
$ver_tirateimas = `ps -ef | grep -v grep | grep $tirateima | awk -F" " '{ print $8 }'`;
}
elseif ($tirateima == "BuscaPreco") {
$ver_tirateimas = `ps -ef | grep -v grep | grep $tirateima | awk -F" " '{ print $8 }'`;
}
if(ereg("terminal", $ver_tirateimas)) {
$mensag1_tirateima = "0$quant_tirateima - terminais";
$mensag2_tirateima = "Servi&ccedil;os no AR";
$color_tt = "green";
}
elseif(ereg("TC", $ver_tirateimas)) {
$mensag1_tirateima = "$ver_tirateimas";
$mensag2_tirateima = "Servi&ccedil;os no AR";
$color_tt = "green";
}
elseif(ereg("Busca", $ver_tirateimas)) {
$mensag1_tirateima = "$ver_tirateimas";
$mensag2_tirateima = "Servi&ccedil;os no AR";
$color_tt = "green";
}
elseif(empty($ver_tirateimas)) {
$mensag1_tirateima = "";
$mensag2_tirateima = "Servi&ccedil;o Fora do AR!";
$color_tt = "red";
$mensagem.="<h4><font color=red>Verifique o servi&ccedil;o TIRATEIMA do Servidor:</font> $servidor</h4><br>";
}
echo "
<tr>
<td align=left>$mensag1_tirateima</td>
<td align=left><font color=$color_tt>$mensag2_tirateima</font></td>
</tr>
";
echo "</table>";
//FINAL DO ROTINA SERVICOS TIRA-TEIMA
//INICIO DO ROTINA PROGRAMAS DE NOTAS
echo"
<table border-0 width=100%>
<tr>
<th colspan=3>Programas de NOTA</th>
</tr>
";
foreach ($prog_nota as $prog) {
$ver_nota = `ps -ef | grep -v grep | grep $prog`;
$usuario=`ps -ef | grep $prog | grep -v grep | awk -F" " '{ print $1 }'`;
if($usuario == 2158) {
$usuario = "jtfernandes";
}
if($usuario == 2156) {
$usuario = "gioliveira";
}
if(ereg($prog, $ver_nota)) {
$status = "NO AR pelo usu&aacute;rio <span style=\"text-transform: uppercase\">\"$usuario\"</span>";
$color_status = "green";
}
else {
$mensagem.="<h4><font color=red>Verifique o programa $prog no Servidor:</font> $servidor</h4><br>";
$status = "FORA DO AR!";
$color_status = "red";
}
echo "
<tr>
<td><font color=#000000><span style=\"text-transform: uppercase\">$prog</span></font></td>
<td align=left colspan=2><font color=$color_status>$status</font></td>
</tr>
";
}
echo "</table>";
//FINAL DO ROTINA PROGRAMAS DE NOTAS
//INICIO DO ROTINA GATEWAY DTEF
echo "
<table border-0 width=100%>
<tr>
<th colspan=3>Gateway do DTEF</th>
</tr>
";
$array_dtef = array("gateway" => "DTEF5", "DPOS" => "DTEF8");
foreach ($array_dtef as $gat_tef => $vers_tef) {
$busca_tef = nl2br(`ps -ef | grep -v grep | grep $gat_tef | awk -F" " '{ print $8 }'`);
//if($gat_tef == "gatewayd") {
$var_gat = explode("\n", $busca_tef);
$quant=sizeof($var_gat) -1;
//}
//elseif($gat_tef == "DPOS") {
//$var_gat = explode("\n", $busca_tef);
//$quant=sizeof($var_gat);
//}

if(empty($busca_tef)) {
$mensagem.="<h4><font color=red>Verifique o servi&ccedil;o $vers_tef no Servidor:</font> $servidor</h4><br>";
echo "
<tr>
<td align=left><font color=#000000>$vers_tef:</font></td>
<td colspan=2 align=left><font color=red>O Servi&ccedil;o n&atilde;o esta sendo executado!</font></td>
</tr>
";
}
elseif($quant < 3) {
$mensagem.="<h4><font color=red>Verifique o servi&ccedil;o $vers_tef no Servidor:</font> $servidor</h4><br>";
echo "
<tr>
<td align=left><font color=#000000>$vers_tef:</font></td>
<td colspan=2 align=left><font color=red>Servi&ccedil;o \"gatewayd\" com problemas! Reinicie o serviço!</font></td>
</tr>
";
}
else {
echo "
<tr>
<td align=left><font color=#000000>$vers_tef:</font></td>
<td colspan=2 align=left><font color=green>$quant processos rodando!</font></td>
</tr>
";
}
}
echo "</table>";
//INICIO DO ROTINA GATEWAY DTEF
//LINK DE DADOS
echo "
<table border-0 width=100%>
<tr>
<th colspan=4>Link de DADOS</th>
</tr>";
$a = array("00-matrizas" => "130.0.100.100", "48-itaquera" => "10.48.1.1");
$num="0";
foreach ($a as $z => $v) {
$comando = `ping -c 1 $v`;
if (ereg("0% packet loss",$comando)) {
$num++;
echo "
<tr>
<td align=left><font color=blue>Teste $num</font></td>
<td align=left><font color=green>O Link de Dados esta OK!</font></td>
</tr>
";
}
else {
echo "
<tr>
<td align=left><font color=blue>Teste $num</font></td>
<td align=left><font color=red>O Link de Dados esta Fora do AR!</font></td>
</tr>
";
}
}
echo "</table>";
//FINAL DO ROTINA GATEWAY DTEF
//INICIO DO ROTINA USUARIOS LOGADOS
echo "
<table border-0 width=100%>
<tr>
<th colspan=3>Usu&aacute;rios Logados</th>
</tr>
";
$users = `uptime | awk -F"," '{print $3}' | awk -F" " '{print $1}'`;
if(ereg("load", $users)) {
$users = `uptime | awk -F"," '{print $2}' | awk -F" " '{print $1}'`;
}
else {
$users = `uptime | awk -F"," '{print $3}' | awk -F" " '{print $1}'`;
}
echo "
<tr>
<td colspan=3 align=center><font color=green>H&aacute; neste momento <font color=blue>$users</font>usu&aacute;rios logados neste servidor.</font></td>
</tr>
";
echo "</table>";
//FINAL DO ROTINA USUARIOS LOGADOS
//INICIO DO ROTINA PROCESSOS PERDIDOS
echo "
<table border-0 width=100%>
<tr>
<th colspan=3>Processos Perdidos</th>
</tr>
";
$busca_proces = nl2br(`ps aux | grep -v grep | grep sadou2 | grep " R " | awk -F" " '{print $1" - "$2" - "$8" - "$11" "$12}'`);
if (ereg(" R ", $busca_proces)) {
/*
$arq_log = fopen("log_monitor.log", "a");
$log = "[$data - $hora]\n$busca_proces";
$trata_log = ereg_replace ("<br />", "", $log);
fputs($arq_log, "$trata_log");
fclose($arq_log);
*/
$mensagem.="<h4><font color=red>H&aacute processos perdidos no Servidor:</font> $servidor</h4><br>";
echo "
<tr>
<td colspan=3>$busca_proces</td>
</tr>
";
}
else {
echo "
<tr>
<td colspan=3 align=center><font color=green>N&atilde;o existem processos perdidos!</font></td>
</tr>
";
}
echo "</table>";
//FINAL DO ROTINA PROCESSOS PERDIDOS
?>
</td>
<!-- FINAL DA COLUNA 2 -->
    </tr>
	<tr>
	<td colspan="2">
		<table width="100%">	
			<tr>
				<th colspan="2">Processos com maior nivel de consumo de CPU</th>
			</tr>
<?
//padding-right: 0px;
//padding-left: 0px;
$consumo_cpu=`top -bn1 | sed -n '7,12p' | awk -F" " '{print "<table border=0 width=95% class=grafico cellpadding=\"0\" cellspacing=\"0\"><tr><td width=9%>"$1"</td><td width=9%>"$2"</td><td width=9%>"$5"</td><td width=9%>"$6"</td><td width=9%>"$7"</td><td width=9%>"$8"</td><td width=9%>"$9"</td><td width=9%>"$10"</td><td width=9%>"$11"</td><td width=9%>"$12"</td><td width=9%>"$13"</td></tr></table>"}'`;
//$consumo_cpu=`top -bn1 | sed -n '13,16p' | awk -F" " '{print $1"\t"$2"\t"$5"\t"$6"\t"$7"\t"$8"\t"$9"\t"$10"\t"$11"\t"$12"\t"$13}'`;
$consumo_cpu2=ltrim($consumo_cpu);
?>
			<tr>
				<td class="grafico"><?=$consumo_cpu?></td>
			</tr>
		</table>
	</td>
	</tr>
    <tr>
<!-- BARRA DE INFORMACAO -->
  <td colspan=2>
    <table border="0" width="100%">
    <tr>
    <td align="left" class="barra" width="30%">
        <?
        echo "Vers&atilde;o: 2.7";
        ?>
    </td>
    <td align="center" class="barra" width="30%">
        <?
        //$servidor = `uname -a | awk -F" " '{print $2}'`;
        echo "SERVIDOR: <font color=blue><span style=\"text-transform: uppercase\">$servidor</span></font>";
        ?>
    </td>
    <td align=right class="barra" width="40%">
        <?
        echo "DATA: $data  |";
        echo "  HORA: $hora";
        ?>
    </td>
    </tr>
    </table>
  </td>
<!-- FINAL BARRA DE INFORMACAO -->
</tr>
</table>
</body>
</center>
</html>
<?
//if(!empty($mensagem)) {
if(!empty($mensagem) AND $var_minuto == "00" AND $var_segundo < "25") {
#mail($para,$assunto,$mensagem,$cabecalho);
}
?>
