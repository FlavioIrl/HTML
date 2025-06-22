<html
	session_start("session");
	if ( !isset($_SESSION['user'])) {
		echo "
		<META HTTP-EQUIV=REFRESH CONTENT='0; URL=\"javascript:window.close();\"'>
		<script type=\"text/javascript\">
		alert(\"Erro: Nao ha nenhum usuario logado! Para acessar esta pagina voca precisa se logar com usuario e senha!\")
		</script>";
	} else {
?>

<html>
<head>
<title>Troque sua Senha</title>
</head>
<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0" bgcolor="#FFFFFF">
<br>
<center>
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#808080" id="AutoNumber1" height="145" width="0" bordercolorlight="#000000" bordercolordark="#000000" bgcolor="#CCCCCC">
  <form method="POST" action="trocasenha.php">
  <tr>
    <td align="right" style="border-style: none; border-width: medium" height="171" rowspan="5">
    <img border="0" src="imagens/cadeado.gif" width="154" height="187"></td>
    <td align="right" style="border-bottom:medium none #111111; border-left-style:none; border-left-width:medium; border-right-style:none; border-right-width:medium; border-top-style:none; border-top-width:medium" height="171" rowspan="5">
    &nbsp;</td>
    <td align="right" style="border-style: none; border-width: medium" height="33">
    <font face="Arial" size="2">Nome:</font></td>
    <td width="170" align="center" style="border-style: none; border-width: medium" height="33">
    <p style="margin-top: 8; margin-bottom: 0">
    <input type="text" name="login" size="18" 
  </tr>
  <tr>
    <td align="right" style="border-style: none; border-width: medium" height="34">
    <font face="Arial" size="2">Senha Atual:</font></td>
    <td width="170" align="center" style="border-style: none; border-width: medium" height="33">
    <input type="password" name="senha" size="19" 
  </tr>
  <tr>
    <td align="right" style="border-style: none; border-width: medium" height="34">
    <font face="Arial" size="2">Nova Senha:</font></td>
    <td width="170" align="center" style="border-style: none; border-width: medium" height="34">
    <input type="password" name="nova_senha" size="19"></td>
  </tr>
  <tr>
    <td align="right" style="border-style: none; border-width: medium" height="34">
    <p style="margin-top: 0; margin-bottom: 0">
    <font face="Arial" size="2">Confirmacao da </font></p>
    <p style="margin-top: 0; margin-bottom: 0">
    <font face="Arial" size="2">Nova Senha:</font></td>
    <td width="170" align="center" style="border-style: none; border-width: medium" height="34">
    	<input type="password" name="nova_senha2" size="19"></td>
  </tr>
  <tr>
    <td align="right" style="border-bottom:medium none #111111; border-left-style:none; border-left-width:medium; border-right-style:none; border-right-width:medium; border-top-style:none; border-top-width:medium" height="37" colspan="2">
    <p align="center">
    <input type="submit" value="Gravar" name="B1" style="color: #FFFFFF; font-weight: bold; border: 1px solid #000000; background-color: #808080">&nbsp;&nbsp;
    <input type="reset" value="Limpar" name="B2" style="color: #FFFFFF; font-weight: bold; border: 1px solid #000000; background-color: #808080"></td>
  </tr>
  </form>
</table>
</center>
</body>
</html>
<?
}
?>
