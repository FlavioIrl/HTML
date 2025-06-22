<? header("content-type: text/html; charset=iso-8859-1");?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="exemplo.css">
<title>PORTAL DOURADOS</title>

<style type="text/css">

<script language="JavaScript">

   var width = 200;
   var height = 200;

   var left = 99;
   var top = 99;

URL = "http://dourados.atacadao.com.br";

   window.open(URL,'Dou', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=no, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no');

</script>


/*Example CSS for the two demo scrollers*/

#pscroller1{
width: 400px;
height: 140px;
border: 0px solid #999999;
padding: 5px;
background-color: #ECECD9;
}

#pscroller2{
width: 400px;
height: 25px;
border: 0px solid #999999;
padding: 0px;
background-color: #ECECD9;
}

#pscroller2 a{
text-decoration: none;
}

.someclass{ //class to apply to your scroller(s) if desired
}

</style>
<script type="text/javascript" type="text/javascript">

/*Example message arrays for the two demo scrollers*/

var pausecontent=new Array()
pausecontent[0]='<a href="http://dourados.atacadao.com.br/politica.htm"></a><br />Por ativos virtuais entendam-se todos os ativos não tangíveis, colocados à disposição dos colaboradores, como telefonia fixa, telefone celular, estação de trabalho, navegação por Internet, E-mails, midias ... etc.'
pausecontent[1]='<a href="http://dourados.atacadao.com.br/mural/index.php" target="_blank">Mural de Recados Atacadão</a><br />Você tem algum recado, deixe-o no mural'
pausecontent[2]='<a href="http://dourados.atacadao.com.br"></a><br />Atenção, recarrege seu celular direto nos caixas, use o Good Card!<br><img src="recarga.jpg" width="385" height="300" border="0" >'
pausecontent[3]='<a href="http://dourados.atacadao.com.br/log.php">Relatórios Diários</a><br />Economize cada centavo, visualize seus relatório na tela!!!'
pausecontent[4]='<a href="http://dourados.atacadao.com.br"></a><br /><br><img src="agasalho.jpg" width="385" height="300" border="0" >'


var pausecontent2=new Array()
pausecontent2[0]='<a href="http://dourados.atacadao.com.br/galeria_fotos/index.php">Veja as fotos de algumas comemorações!</a>'
pausecontent2[1]='<a href="http://dourados.atacadao.com.br/log.php">Não imprima os relatórios, visualize na tela!</a>'
pausecontent2[2]='<a href="http://dourados.atacadao.com.br">Equipe cpd Dourados!</a>'

          </script>
<script type="text/javascript">

/***********************************************
* Pausing up-down scroller- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/

function pausescroller(content, divId, divClass, delay){
this.content=content //message array content
this.tickerid=divId //ID of ticker div to display information
this.delay=delay //Delay between msg change, in miliseconds.
this.mouseoverBol=0 //Boolean to indicate whether mouse is currently over scroller (and pause it if it is)
this.hiddendivpointer=1 //index of message array for hidden div
document.write('<div id="'+divId+'" class="'+divClass+'" style="position: relative; overflow: hidden"><div class="innerDiv" style="position: absolute; width: 100%" id="'+divId+'1">'+content[0]+'</div><div class="innerDiv" style="position: absolute; width: 100%; visibility: hidden" id="'+divId+'2">'+content[1]+'</div></div>')
var scrollerinstance=this
if (window.addEventListener) //run onload in DOM2 browsers
window.addEventListener("load", function(){scrollerinstance.initialize()}, false)
else if (window.attachEvent) //run onload in IE5.5+
window.attachEvent("onload", function(){scrollerinstance.initialize()})
else if (document.getElementById) //if legacy DOM browsers, just start scroller after 0.5 sec
setTimeout(function(){scrollerinstance.initialize()}, 500)
}

// -------------------------------------------------------------------
// initialize()- Initialize scroller method.
// -Get div objects, set initial positions, start up down animation
// -------------------------------------------------------------------

pausescroller.prototype.initialize=function(){
this.tickerdiv=document.getElementById(this.tickerid)
this.visiblediv=document.getElementById(this.tickerid+"1")
this.hiddendiv=this.hiddendiv=document.getElementById(this.tickerid+"2")
this.visibledivtop=parseInt(pausescroller.getCSSpadding(this.tickerdiv))
this.getinline(this.visiblediv, this.hiddendiv)
this.hiddendiv.style.visibility="visible"
var scrollerinstance=this
this.tickerdiv.onmouseover=function(){scrollerinstance.mouseoverBol=1}
this.tickerdiv.onmouseout=function(){scrollerinstance.mouseoverBol=0}
setTimeout(function(){scrollerinstance.animateup()}, this.delay)
}


// -------------------------------------------------------------------
// animateup()- Move the two inner divs of the scroller up and in sync
// -------------------------------------------------------------------

pausescroller.prototype.animateup=function(){
var scrollerinstance=this
if (parseInt(this.hiddendiv.style.top)>(this.visibledivtop+5)){
this.visiblediv.style.top=parseInt(this.visiblediv.style.top)-5+"px"
this.hiddendiv.style.top=parseInt(this.hiddendiv.style.top)-5+"px"
setTimeout(function(){scrollerinstance.animateup()}, 50)
}
else{
this.getinline(this.hiddendiv, this.visiblediv)
this.swapdivs()
setTimeout(function(){scrollerinstance.setmessage()}, this.delay)
}
}

// -------------------------------------------------------------------
// swapdivs()- Swap between which is the visible and which is the hidden div
// -------------------------------------------------------------------

pausescroller.prototype.swapdivs=function(){
var tempcontainer=this.visiblediv
this.visiblediv=this.hiddendiv
this.hiddendiv=tempcontainer
}

pausescroller.prototype.getinline=function(div1, div2){
div1.style.top=this.visibledivtop+"px"
div2.style.top=Math.max(div1.parentNode.offsetHeight, div1.offsetHeight)+"px"
}

// -------------------------------------------------------------------
// setmessage()- Populate the hidden div with the next message before it's visible
// -------------------------------------------------------------------

pausescroller.prototype.setmessage=function(){
var scrollerinstance=this
if (this.mouseoverBol==1) //if mouse is currently over scoller, do nothing (pause it)
setTimeout(function(){scrollerinstance.setmessage()}, 100)
else{
var i=this.hiddendivpointer
var ceiling=this.content.length
this.hiddendivpointer=(i+1>ceiling-1)? 0 : i+1
this.hiddendiv.innerHTML=this.content[this.hiddendivpointer]
this.animateup()
}
}

pausescroller.getCSSpadding=function(tickerobj){ //get CSS padding value, if any
if (tickerobj.currentStyle)
return tickerobj.currentStyle["paddingTop"]
else if (window.getComputedStyle) //if DOM2
return window.getComputedStyle(tickerobj, "").getPropertyValue("padding-top")
else
return 0
}

</script>
</head>

<body bgcolor="#FFFFFF" text="#04A25F">
<p>
  <img src="logo.jpg" alingn="center">
  <hr>

<style>

<!--
A {text-decoration: none;  face:MS Sans Serif; size:1; color: #000000; }

-->
</style>

<style type="text/css">
.mh {
	background-color : #f8f8f8;
	color : #556677;
	display : block;
	font-family : Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-size : 12px;
	font-weight : bold;
	padding : 1px 5px 2px 4px;
	vertical-align : center;
	width : expression("100%");
}

.mn {
	background : #eeeff0;
	padding : 1px;
	position : absolute;
	z-index : 100;
	border: 1px solid #556677;
}

.mn a{
	border : 1px #eeeff0 solid;
	color : #2F4F4F;
	display : block;
	font-family : Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-size : 12px;
	padding : 1px 5px 2px 4px;
	text-decoration : none;
	vertical-align : center;
	width : expression("100%");
	font-weight : normal;
}

.mn a:hover {
	background : #67b4b4;
	border : 1px #223344 inset;
	text-decoration : none;
	color : #E0F0F0;
}

.sp {
	border-bottom : #334455 1px solid;
	border-top : #ffffff 0px solid;
	margin : 2px 2px;
}
</style>
</head>


<table  border="0" cellspacing="0" cellpadding="0" align="left">
<tr><td>

<script language="JavaScript1.2">

q1="<a href='";q2="' title='";q3="';>";q4="</a>";q5="<div class=sp></div>";q6="</div>";q7="<div class='mh'>";q8="' class='mn' style='position: absolute;width:"
d=document;dm=d.getElementById?1:0;ie=d.all?1:0;i4=(d.all && !dm)?1:0;n4=d.layers?1:0
mn=new Array();ln=new Array();sn=new Array();sw=new Array();el= new Array();mel= new Array()


tp=118 // distância do topo do menu em relação a página
lf=19 //distância da esquerda do menu em relação a página
sp=1 //espaço entre os menus
hr=1 //espaço horizontal (1 - horizontal | 0 - vertical)
oh=50 
ov=50

// primeiro menu 
mn[0]='Serviços';ln[0]='#';sw[0]=95;sn[0]="" // primeiro título
+q7+"Central de Serviços"+q6 
+q1+"http://intranet.atacadao.com.br:7783/forms90/f90servlet?config=DBADM"+q2+"Sistema Administrativo"+q3+"Sistema Administrativo"+q4 
+q1+"http://intranet.atacadao.com.br:7783/forms90/f90servlet?config=DBCOM"+q2+"Sistema Comercial"+q3+"Sistema Comercial"+q4
+q1+"http://intranet.atacadao.com.br:7783/forms90/f90servlet?config=MENTHOR"+q2+"Sistema Menthor"+q3+"Sistema Menthor"+q4
+q1+"http://matrizweb.atacadao.com.br/portal/atacadao?evento=menu"+q2+"Central de Chamados"+q3+"Central de Chamados"+q4
+q1+"https://130.0.150.2/squid/index.php"+q2+"Alterar Senha de Usuário"+q3+"Alterar Senha de Usuário"+q4
+q5
+q7+"Telefonia"+q6
+q1+"http://servertarifador/sumus/relatorios.exe"+q2+"Servidor de Relatórios Summus"+q3+"Servidor de Relatórios Summus"+q4
+q1+"http://130.0.100.80:8080/ramais/lista.php"+q2+"Lista de Ramais Matriz"+q3+"Lista de Ramais Matriz"+q4
+q1+"http://dourados.atacadao.com.br/fonefiliais.htm"+q2+"Lista de Ramais Filiais"+q3+"Lista de Ramais Filiais"+q4
+q1+"http://dourados.atacadao.com.br/ramaisdourados.htm"+q2+"Lista de Ramais Dourados"+q3+"Lista de Ramais Dourados"+q4
+q1+"http://dourados.atacadao.com.br/abreviadosfuncionarios.htm"+q2+"Abreviados de Funcionários"+q3+"Abreviados de Funcionários"+q4


//Segundo menu
mn[1]='Importantes';ln[1]='#';sw[1]=95;sn[1]=""
+q7+"Documentos Importantes"+q6 
+q7+"Escalas Reposição"+q6
+q1+"http://dourados.atacadao.com.br/escalas/mensagem.html"+q2+"Escala Reposição Frios"+q3+"Escala Reposição Frios"+q4
+q1+"http://dourados.atacadao.com.br/escalas/mensagem.html"+q2+"Escala Reposição HortiFruti"+q3+"Escala Reposição HortiFruti"+q4
+q1+"http://dourados.atacadao.com.br/escalas/mensagem.html"+q2+"Escala Reposição Loja Manhã"+q3+"Escala Reposição Loja Manhã"+q4
+q1+"http://dourados.atacadao.com.br/escalas/mensagem.html"+q2+"Escala Reposição Loja Tarde"+q3+"Escala Reposição Loja Tarde"+q4
+q1+"http://dourados.atacadao.com.br/escalas/mensagem.html"+q2+"Escala Empilhadeira"+q3+"Escala Empilhadeira"+q4
+q1+"http://dourados.atacadao.com.br/escalas/mensagem.html"+q2+"Escala Líderes"+q3+"Escala Líderes"+q4
+q1+"http://dourados.atacadao.com.br/escalas/mensagem.html"+q2+"Escala Frente de caixa"+q3+"Escala Frente de caixa"+q4
+q1+"http://dourados.atacadao.com.br/escalas/comunicado_alteracao.htm"+q2+"Comunicado de Alteração"+q3+"Comunicado de Alteração"+q4


//Terceiro menu
mn[2]='Relatórios';ln[2]='#';sw[2]=95;sn[2]=""
+q7+"Relatórios Gerenciais"+q6 
+q1+"log.php"+q2+"Acesso aos Relatórios Diários"+q3+"Acesso aos Relatórios Diários"+q4
+q1+"http://dourados.atacadao.com.br/venda/login.php"+q2+"Resultados 2010"+q3+"Resultados 2010"+q4
+q5
+q7+"Estoque"+q6
+q1+"http://dourados.atacadao.com.br/inventario/inventario2009.html"+q2+"Cronograma de Inventário 2009"+q3+"Cronograma de Inventário 2009"+q4
+q1+"http://dourados.atacadao.com.br/inventario/setoresinventario.htm"+q2+"Setores para Inventário"+q3+"Setores para Inventário"+q4
+q1+"http://dourados.atacadao.com.br/inventario/setoresloja.htm"+q2+"Setores Loja"+q3+"Setores Loja"+q4
+q1+"http://dourados.atacadao.com.br/inventario/setoresresponsaveis.htm"+q2+"Responsáveis Setores Loja"+q3+"Responsáveis Setores Loja"+q4
+q1+"http://dourados.atacadao.com.br/inventario/invpresenca2009.htm"+q2+"Totais inventário de presença 2009"+q3+"Totais inventário de presença 2009"+q4
+q1+"http://dourados.atacadao.com.br/inventario/invpresenca2010.htm"+q2+"Totais inventário de presença 2010"+q3+"Totais inventário de presença 2010"+q4
+q1+"http://dourados.atacadao.com.br/inventario/grafico.gif"+q2+"Gráfico inventário de presença 2009"+q3+"Gráfico inventário de presença 2009"+q4
+q7+"Frente de Caixa"+q6
+q1+"http://dourados.atacadao.com.br/sacola/'controle_de_sacola.pdf'"+q2+"Controle de Sacola"+q3+"Controle de Sacola"+q4

//Quarto menu
mn[3]='Ativos';ln[3]='#';sw[3]=95;sn[3]=""
+q7+"Política de Segurança da Informação"+q6 
+q1+"politica.htm"+q2+"Politica de Segurança"+q3+"Politica de Segurança"+q4
+q1+"categorizacao.htm"+q2+"Padrão Ramais"+q3+"Padrão Ramais"+q4


//Quinto menu
mn[4]='Galeria';ln[4]='#';sw[4]=95;sn[4]=""
+q7+"Galeria de Fotos Atacadão"+q6 
+q1+"http://dourados.atacadao.com.br/galeria_fotos/index.php"+q2+"Fotos"+q3+"Fotos"+q4


//Sexto menu
mn[5]='Prevenção';ln[5]='#';sw[5]=95;sn[5]=""
+q7+"Segurança no Trabalho"+q6 
+q1+"http://dourados.atacadao.com.br/cad_col/menu_col_login.php"+q2+"Cadastro Colaboradores"+q3+"Cadastro Colaboradores"+q4
+q1+"#"+q2+"Brigada de Incêndio"+q3+"Brigada de Incêndio"+q4


//Setimo menu
mn[6]='Programas';ln[6]='#';sw[6]=95;sn[6]=""
+q7+"Acompanhamentos"+q6 
+q1+"#"+q2+"Economize Cada Centavo"+q3+"Economize Cada Centavo"+q4
+q1+"http://dourados.atacadao.com.br/tolerancia/tolerancia.htm"+q2+"Tolerância Zero"+q3+"Tolerância Zero"+q4
+q1+"http://srvweb2.atacadao.com.br/alfredo/teste/movimento_pdv_mensal.php"+q2+"Metrica de Venda PDV"+q3+"Metrica de Venda PDV"+q4


//Oitavo menu
mn[7]='Links';ln[7]='#';sw[7]=95;sn[7]=""
+q7+"Links"+q6
+q1+"http://intranet.atacadao.com.br"+q2+"Intranet"+q3+"Intranet"+q4
+q1+"http://130.0.100.96/aplicacao/iatacon.nsf"+q2+"Gerenciamento de Contratos"+q3+"Gerenciamento Contratos"+q4
+q1+"http://130.0.100.96/aplicacao/iataimob.nsf"+q2+"Gerenciamento Imobilizados"+q3+"Gerenciamento Imobilizados"+q4
+q1+"http://130.0.100.96/aplicacao/ProTrans.nsf"+q2+"Sintema de Transfência Patrimônio"+q3+"Sintema Transfência de Patrimônio"+q4
+q1+"http://130.0.100.96/aplicacao/ProBaixa.nsf"+q2+"Sintema de Baixa de Patrimônio"+q3+"Sintema Baixa de Patrimônio"+q4
+q1+"http://130.0.100.96/aplicacao/gersinistro.nsf"+q2+"Gerenciamento de Sinistros "+q3+"Sintema Gerenciamento Sinistro"+q4


//Nono menu
mn[8]='Contatos';ln[8]='#';sw[8]=95;sn[8]=""
+q7+"Duvidas e Sugestões"+q6 
+q1+"http://dourados.atacadao.com.br/fale_conosco/fale_conosco.htm"+q2+"Fale Conosco"+q3+"Fale Conosco"+q4
+q1+"http://dourados.atacadao.com.br/mural/index.php"+q2+"Mural de Recados Dourados"+q3+"Mural de Recados"+q4

//Decimo menu
mn[9]='CPD';ln[9]='#';sw[9]=95;sn[9]=""
+q7+"CPD"+q6 
+q1+"http://dourados.atacadao.com.br/cpd/login.php"+q2+"Área Restrita CPD"+q3+"Área Restrita CPD"+q4
+q1+"http://dourados.atacadao.com.br/tira.php"+q2+"Monitor Tira-Teima"+q3+"Monitor"+q4
// para acrescentar mais menu basta seguir a ordem
// mn[0]='título um';ln[0]='#';sw[0]=100;sn[0]="" // menu 1
// mn[1]='título dois';ln[1]='#';sw[1]=100;sn[1]="" // menu 2
// mn[2]='título três';ln[2]='#';sw[2]=100;sn[2]="" // menu 3


// NÃO É NECESSÁRIO ALTERAR O CÓDIGO ABAIXO //
ma=mn.length;mw=0;for(i=0;i<ma;i++){if(sw[i]>mw)mw=sw[i]};d.write("<div id='ctrl' style='position:absolute;width:100%;height:100%;z-indez:90' onmouseover='hA()'></div>");ctr=gE('ctrl')
if(hr==1){sp+=(dm&&!ie)?4:0;for(i=0;i<ma;i++){d.write("<div id='main"+i+q8+sw[i]+";top:"+tp+";left:"+lf+q3+q1+ln[i]+"' onmouseover='hA();sE(el["+i+"]);sE(ctr)"+q3+mn[i]+q4+q6);mel[i]=gE("main"+i);d.write("<div id='sub"+i+q8+sw[i]+";top:"+(tp+gH(mel[i])-1)+";left:"+lf+q3+sn[i]+q6);el[i]=gE("sub"+i);lf+=(gW(mel[i])+sp)}}
else{for(i=0;i<ma;i++){d.write("<div id='main"+i+q8+mw+";top:"+tp+";left:"+lf+q3+q1+ln[i]+"' onmouseover='hA();sE(el["+i+"]);sE(ctr)"+q3+mn[i]+q4+q6);mel[i]=gE("main"+i);d.write("<div id='sub"+i+q8+sw[i]+";top:"+(tp+ov)+";left:"+(lf+mw-oh)+q3+sn[i]+q6);tp+=(gH(mel[i])+sp);el[i]=gE("sub"+i)}}
function hA(){for(i=0;i<ma;i++)hE(el[i]);hE(ctr)};function zA(){for(i=0;i<ma;i++){sZ(el[i],111);sZ(mel[i],100)}};function gE(e){if(dm){r=d.getElementById(e);return d.getElementById(e).style}if(i4)return d.all[e].style;if(n4)return d.layers[e]}
function hE(e){e.visibility="hidden"};function sE(e){e.visibility="visible"};function sZ(e,z){e.zIndex=z};function gH(e){h=parseInt(e.height||e.pixelHeight||r.offsetHeight);return h};function gW(e){w=parseInt(e.width||e.pixelWidth||r.offsetWidth);return w}
hA();zA();d.onclick=hA
</script>
<tr>
<tr>
<tr>
</td></tr>
</table>

<table>
<script language="JavaScript"><!--
<!--
var gt = unescape('%3e');
var popup = null;
var over = "Abre Janela";
  // popup = window.open('', 'janela', 'width=630,height=680,resizable=no,scrollbars=YES');
  if (popup != null) {
    if (popup.opener == null) {
      popup.opener = self;
    }
    // popup.location.href = './recarga/index_recarga.html'; 
}
// -->
</script>




<tr><td></td>
</tr>
<tr><td></td>
</tr>
<tr><td></td>
</tr>
<tr><td></td>
</tr>
<tr><td></td>
</tr>
<tr><td></td>
</tr>
<tr><td>
<table border="0" width="910">
    <tr><td><p align="left"><img src="46.jpg" width="400" height="330" border="0">
  


</td>
<td><? include ("./compromissos.htm"); ?> </td></tr>
</table>

</body>

</html>
<?
 $log_file = "logs/logportal.txt";

     $time_user = date("d/m/Y, H:i:sA");
     if ($REMOTE_ADDR == "") $remoteaddr_user = "Remote address Unknown";
     else $remoteaddr_user = $REMOTE_ADDR;
     $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
     if ($REMOTE_HOST == "") $remotehost_user = "Remote Host Unknown";
     else $remotehost_user = $REMOTE_HOST;
     if ($HTTP_USER_AGENT == "") $useragent = "User Agent Unknown";
     else $useragent = $HTTP_USER_AGENT;
     if ($HTTP_REFERER == "") $userreferer = "Direct access";
     else $userreferer = "<a href=\"$HTTP_REFERER\">Link Referência</a>";
     $fp = fopen("$log_file",  "a");
     fputs($fp, "<hr noshade color='#000000'><b>Data/Hora:</b> $time_user<br><b>Endereço Remoto:</b> $remoteaddr_user<br><b>Hostname:</b> $hostname<br><b>Host Remoto:</b> $remotehost_user<br><b>Agente:</b> $useragent<br><b>Tipo de Acesso:</b> $userreferer\n");
     fclose($fp);
?>

