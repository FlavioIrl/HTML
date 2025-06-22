<?php
// Recebe variáveis globais do formulário
$login       = $_POST['login'];
$senha       = $_POST['senha'];
$nova_senha  = $_POST['nova_senha'];
$nova_senha2 = $_POST['nova_senha2'];
//*****global $login;
//*****global $senha;
//*****global $nova_senha;
//*****global $nova_senha2;
// Tirar espaço em branco das variáveis recebidas do formulário
$login = trim($login);
$senha = trim($senha);
$nova_senha = trim($nova_senha);
$nova_senha2 = trim($nova_senha2);
// Rejeita campos vazios
if (empty($login) || empty($senha) || empty($nova_senha) || empty($nova_senha2)) {
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT='0; URL=\"javascript:history.back(-1)\"'>
    <script type=\"text/javascript\">
    alert(\"Erro: Há campos a serem preenchidos. Verifique o preenchimento!\")
    </script>"; }
else {
// Rejeita se nova_senha igual a senha_atual
  if ($senha == $nova_senha) {
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT='0; URL=\"javascript:history.back(-1)\"'>
    <script type=\"text/javascript\">
    alert(\"A NOVA SENHA não pode ser igual à SENHA ATUAL!\")
    </script>";
    }
  else {
// Rejeita se nova_senha diferente de nova_senha2
        if ($nova_senha != $nova_senha2) {
          echo "
          <META HTTP-EQUIV=REFRESH CONTENT='0; URL=\"javascript:history.back(-1)\"'>
          <script type=\"text/javascript\">
          alert(\"A NOVA SENHA e a CONFIRMAÇÃO... não conferem!\")
          </script>";
          }
        else {
//criptografa as senhas com o protocolo MD5.
$senha = md5($senha);
$nova_senha = md5($nova_senha);
$nova_senha2 = md5($nova_senha2);
// Cria uma conexão com o servidor MySQL
include("conect.php");
// Declaração do SQL, seleciona db e campos
$declar = "SELECT login, senha FROM usuarios WHERE login = '$login' and senha = '$senha'";
// Roda a query e verifica se encontrou registro 		
if(mysql_db_query ($db_dados, $declar, $conect)) {
// Se encontrou, troca senha_atual por nova_senha
$declar = "UPDATE usuarios SET login='$login', senha='$nova_senha' WHERE login='$login' and senha='$senha'";
    if(mysql_db_query ($db_dados, $declar, $conect));
          echo "
          <META HTTP-EQUIV=REFRESH CONTENT='0; URL=\"javascript:window.close();\"'>
          <script type=\"text/javascript\">
          alert(\"Senha atualizada com sucesso!!!\")
          </script>";
          }
    else {
          echo "
          <META HTTP-EQUIV=REFRESH CONTENT='0; URL=\"javascript:history.back(-1)\"'>
          <script type=\"text/javascript\">
          alert(\"Usuário ou senha não conferem... Clique\")
          </script>";
          }
}
}
}
?>
