<html header("content-type: text/html; charset=iso-8859-1");?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
<head>
<link rel="stylesheet" type="text/css" href="exemplo.css">
<title>Portal Dourados</title>

<style type="text/css">

<script language="JavaScript">

   var width = 200;
   var height = 200;

   var left = 99;
   var top = 99;

URL = "http://dourados.br-atacadao.corp/contador.htm";

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
pausecontent[0]='<a href="http://dourados.br-atacadao.corp/politica.htm"></a><br />Por ativos virtuais entendam-se todos os ativos não tangíveis, colocados à disposição dos colaboradores, como telefonia fixa, telefone celular, estação de trabalho, navegação por Internet, E-mails, midias ... etc.'
pausecontent[1]='<a href="http://dourados.br-atacadao.corp/mural/index.php" target="_blank">Mural de Recados Atacadão</a><br />Você tem algum recado, deixe-o no mural'
pausecontent[2]='<a href="http://dourados.br-atacadao.corp"></a><br />Atenção, recarrege seu celular direto nos caixas, use o Good Card!<br><img src="recarga.jpg" width="385" height="300" border="0" >'
pausecontent[3]='<a href="http://dourados.br-atacadao.corp/log.php">Relatórios Diários</a><br />Economize cada centavo, visualize seus relatório na tela!!!'
pausecontent[4]='<a href="http://dourados.br-atacadao.corp"></a><br /><br><img src="agasalho.jpg" width="385" height="300" border="0" >'



var pausecontent2=new Array()
pausecontent2[0]='<a href="http://dourados.br-atacadao.corp/galeria_fotos/index.php">Veja as fotos de algumas comemorações!</a>'
pausecontent2[1]='<a href="http://dourados.br-atacadao.corp/log.php">Não imprima os relatórios, visualize na tela!</a>'
pausecontent2[2]='<a href="http://dourados.br-atacadao.corp">Equipe cpd Dourados!</a>'

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
<body bgcolor="#FFFACD" text="#04A25F" >

  <p align="center"><img src="logo.jpg" align="center" width="1179,1" height="149,5" border="0">

<style>

<!--
A {text-decoration: none;  face:MS Sans Serif; size:1; color: #000000; }

-->
</style>

<style type="text/css">
.mh {
	background-color : #228B22; 
	color : #FFA500;
	display : block;
	font-family : Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-size : 11px;
	font-weight : bold;
	padding : 1px 5px 2px 4px;
	vertical-align : center;
	width : expression("180%");
	border: 1px solid #FFA500;
}

.mn {
	background : #228B22;
	padding : 1px;
	position : absolute;
	z-index : 100;
	border: 1px solid #FFA500;
}

.mn a{
	border : 1px #FFA500 solid;
	color : #FFA500;
	display : block;
	font-family : Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-size : 12px;
	padding : 1px 5px 2px 4px;
	text-decoration : none;
	vertical-align : center;
	width : expression("180%");
	font-weight : normal;
}

.mn a:hover {
	background : #67b4b4;
	border : 1px #FFA500 inset;
	text-decoration : none;
	color : #E0F0F0;
}

.sp {
	border-bottom : #FFA500 3px solid;
	border-top : #FFA500 0px solid;
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


tp=170 // distância do topo do menu em relação a página
lf=270 //distância da esquerda do menu em relação a página
sp=1 //espaço entre os menus
hr=1 //espaço horizontal (1 - horizontal | 0 - vertical)
oh=60 
ov=60

// primeiro menu 
mn[0]='Serviços';ln[0]='#';sw[0]=95;sn[0]="" // primeiro título
+q7+""+q6 
+q1+"http://intranet12c.br-atacadao.corp/forms/frmservlet?config=dbadm"+q2+"Sistema Administrativo"+q3+"Sistema Administrativo"+q4 
+q1+"http://intranet12c.br-atacadao.corp/forms/frmservlet?config=dbcom"+q2+"Sistema Comercial"+q3+"Sistema Comercial"+q4
+q1+"http://intranet12c.br-atacadao.corp/forms/frmservlet?config=menthor"+q2+"Sistema Menthor"+q3+"Sistema Menthor"+q4
+q1+"http://matrizweb.atacadao.com.br/portal/atacadao?evento=menu"+q2+"Central de Chamados"+q3+"Central de Chamados"+q4
+q1+"http://srvuca007/"+q2+"Acesso ao RUB 007"+q3+"Acesso ao RUB 007"+q4
+q1+"http://idm.atacadao.com.br:9443/itim/ui/Login.jsp"+q2+"IDM Atacadão"+q3+"IDM Atacadão"+q4
+q1+"http://csc.br-atacadao.corp/cliente.html"+q2+"CSC-Central Serviços"+q3+"CSC-Central Serviços"+q4
+q5
+q7+"Telefonia"+q6
+q1+"http://10.113.81.154/sumus/"+q2+"Servidor de Relatórios Summus"+q3+"Servidor de Relatórios Summus"+q4
+q1+"http://portal.atacadao.com.br/telefonia/ramais/index.html"+q2+"Lista de Ramais Filiais"+q3+"Lista de Ramais Filiais"+q4
+q1+"http://dourados.br-atacadao.corp/ramaisdourados.htm"+q2+"Lista de Ramais Dourados"+q3+"Lista de Ramais Dourados"+q4
+q1+"http://dourados.br-atacadao.corp/abreviadosfuncionarios.htm"+q2+"Abreviados de Funcionários"+q3+"Abreviados de Funcionários"+q4


//Segundo menu
mn[1]='Escalas';ln[1]='#';sw[1]=95;sn[1]=""
+q7+""+q6 
+q1+"http://dourados.br-atacadao.corp/escalas/frios.pdf"+q2+"Escala Reposição Frios"+q3+"Escala Reposição Frios"+q4
+q1+"http://dourados.br-atacadao.corp/escalas/hf.pdf"+q2+"Escala Reposição HortiFruti"+q3+"Escala Reposição HortiFruti"+q4
+q1+"http://dourados.br-atacadao.corp/escalas/reposicaomanha.pdf"+q2+"Escala Reposição Loja Manhã"+q3+"Escala Reposição Loja Manhã"+q4
+q1+"http://dourados.br-atacadao.corp/escalas/reposicaotarde.pdf"+q2+"Escala Reposição Loja Tarde"+q3+"Escala Reposição Loja Tarde"+q4
+q1+"http://dourados.br-atacadao.corp/escalas/frentecaixa1.pdf"+q2+"Escala Frente de Caixa 1"+q3+"Escala Frente de Caixa 1"+q4
+q1+"http://dourados.br-atacadao.corp/escalas/frentecaixa2.pdf"+q2+"Escala Frente de Caixa 2"+q3+"Escala Frente de Caixa 2"+q4
+q1+"http://dourados.br-atacadao.corp/escalas/empilhadeira.pdf"+q2+"Escala Empilhadeira"+q3+"Escala Empilhadeira"+q4
+q1+"http://dourados.br-atacadao.corp/escalas/cafeteria.pdf"+q2+"Escala Cafeteria"+q3+"Escala Cafeteria"+q4
+q1+"http://dourados.br-atacadao.corp/escalas/informatica.pdf"+q2+"Escala Informática"+q3+"Escala Informática"+q4
+q1+"http://dourados.br-atacadao.corp/escalas/comunicado_alteracao.htm"+q2+"Comunicado de Alteração"+q3+"Comunicado de Alteração"+q4


//Terceiro menu
mn[2]='Relatórios';ln[2]='#';sw[2]=95;sn[2]=""
+q7+""+q6 
+q1+"log.php"+q2+"Acesso aos Relatórios Diários"+q3+"Acesso aos Relatórios Diários"+q4
+q1+"http://dourados.br-atacadao.corp/venda/login.php"+q2+"Resultados 2019"+q3+"Resultados 2019"+q4
+q5
+q7+"Estoque"+q6
+q1+"http://dourados.br-atacadao.corp/inventario/inventario2019.html"+q2+"Cronograma de Inventário 2019"+q3+"Cronograma de Inventário 2019"+q4
+q1+"http://dourados.br-atacadao.corp/inventario/setoresinventario.htm"+q2+"Setores para Inventário"+q3+"Setores para Inventário"+q4
+q1+"http://dourados.br-atacadao.corp/inventario/setoresloja.htm"+q2+"Setores Loja"+q3+"Setores Loja"+q4
+q1+"http://dourados.br-atacadao.corp/inventario/setoresresponsaveis.htm"+q2+"Responsáveis Setores Loja"+q3+"Responsáveis Setores Loja"+q4
+q1+"http://dourados.br-atacadao.corp/inventario/invpresenca2009.htm"+q2+"Totais inventário de presença 2019"+q3+"Totais inventário de presença 2019"+q4
+q1+"http://dourados.br-atacadao.corp/inventario/invpresenca2010.htm"+q2+"Totais inventário de presença 2019"+q3+"Totais inventário de presença 2019"+q4
+q1+"http://dourados.br-atacadao.corp/inventario/comparativo.htm"+q2+"Comparativo Resultados Presença 2019"+q3+"Comparativo Resultados Presença 2019"+q4


//Quarto menu
mn[3]='Ativos';ln[3]='#';sw[3]=95;sn[3]=""
+q7+""+q6 
+q1+"politica.htm"+q2+"Politica de Segurança"+q3+"Politica de Segurança"+q4
+q1+"categorizacao.htm"+q2+"Padrão Ramais"+q3+"Padrão Ramais"+q4


//Quinto menu
mn[4]='Normas';ln[4]='#';sw[4]=95;sn[4]=""
+q7+""+q6 
+q1+"http://srvweb2.atacadao.com.br/procedimentos/index.php"+q2+"Normas Procedimentos"+q3+"Normas Procedimentos"+q4


//Sexto menu
mn[5]='Quadro Ger.';ln[5]='#';sw[5]=95;sn[5]=""
+q7+""+q6 
+q1+"http://srvweb2.atacadao.com.br/rh/#"+q2+"Quadro Gerencial"+q3+"Quadro Gerencial"+q4



//Setimo menu
mn[6]='Programas';ln[6]='#';sw[6]=95;sn[6]=""
+q7+""+q6 
+q1+"https://srvsave007.br-atacadao.corp/projetofrios/index.php"+q2+"Projeto Frios"+q3+"Projeto Frios"
+q1+"https://dourados.br-atacadao.corp/sacola/"+q2+"Controle Sacolas"+q3+"Controle Sacolas"+q4
+q1+"http://intranet2.atacadao.com.br:7783/atc_jsp/relatorios/metrics.jsp#"+q2+"Metrics Frente de Caixa"+q3+"Metricas Filiais "+q4
+q1+" http://conferencia.atacadao.com.br/"+q2+"Erro de Registro PDV"+q3+"Erro de Registro"+q4


//Oitavo menu
mn[7]='Links';ln[7]='#';sw[7]=95;sn[7]=""
+q7+""+q6
+q1+"http://portal.atacadao.com.br"+q2+"Intranet"+q3+"Intranet"+q4
+q1+"http://servernotes.atacadao.com.br/portal/PWN.nsf/Principal?openform"+q2+"Gerenciamento de Contratos"+q3+"Gerenciamento Contratos"+q4
+q1+"http://servernotes.atacadao.com.br/portal/PWN.nsf/Principal?openform"+q2+"Gerenciamento Imobilizados"+q3+"Gerenciamento Imobilizados"+q4
+q1+"http://servernotes.atacadao.com.br/portal/PWN.nsf/Principal?openform"+q2+"Sintema de Transfência Patrimônio"+q3+"Sintema Transfência de Patrimônio"+q4
+q1+"http://servernotes.atacadao.com.br/portal/PWN.nsf/Principal?openform"+q2+"Sintema de Baixa de Patrimônio"+q3+"Sintema Baixa de Patrimônio"+q4
+q1+"http://servernotes.atacadao.com.br/portal/PWN.nsf/Principal?openform"+q2+"Gerenciamento de Sinistros "+q3+"Sintema Gerenciamento Sinistro"+q4
+q1+"https://mail.google.com/mail/#inbox"+q2+"E-mail Atacadão"+q3+"Acesso ao E-mail Gmail"+q4
+q1+"http://portal.atacadao.com.br/aniversariantes.php"+q2+"Lista de Aniversariantes do mês"+q3+"Aniversariantes"+q4
+q1+"http://srvweb2.atacadao.com.br/siscom/"+q2+"Controle de promotores"+q3+"Controle de Promotores"+q4


//Nono menu
//mn[8]='Contatos';ln[8]='#';sw[8]=95;sn[8]=""
//+q7+"Duvidas e Sugestões"+q6 
//+q1+"http://dourados.atacadao.com.br/fale_conosco/fale_conosco.htm"+q2+"Fale Conosco"+q3+"Fale Conosco"+q4


//Decimo menu
mn[8]='CPD';ln[8]='#';sw[8]=95;sn[8]=""
+q7+""+q6 
+q1+"http://csc.br-atacadao.corp/cliente.html"+q2+"CSC-Cliente"+q3+"CSC-Cliente"+q4
+q1+"http://csc.br-atacadao.corp/agente.html"+q2+"CSC-Agente"+q3+"CSC-Agente"+q4
+q1+"https://nfe.portal.br-atacadao.corp/NFe_GDeWeb/Login.aspx"+q2+"Triangulus NF-e"+q3+"Triangulus NF-e"+q4
+q1+"https://nfce.portal.br-atacadao.corp/NFCe_GDeWeb/Login.aspx"+q2+"Triangulus NFC-e"+q3+"Triangulus NFC-e"+q4
+q1+"http://srvweb2.atacadao.com.br/siscom/func_programas/#"+q2+"Parâmetros SAVE"+q3+"Parâmetros SAVE"+q4
+q1+"http://srvadmldap.atacadao.com.br/pg-win/index.php"+q2+"Atualização Windows"+q3+"Atualização Windows"+q4
+q1+"http://srvweb2.atacadao.com.br/siscom/operacoes/"+q2+"Perfis SAVE"+q3+"Perfis SAVE"+q4
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
<tr><td></td>
</tr>
<tr><td></td>
</tr>
<tr><td></td>
</tr>
<table border="0" width="907">
	<p align="center"><img src="46.jpg" width="1179,1" height="559" border="0">	  

</td>
<td><?phpinclude ("./compromissos.htm"); ?> </td></tr>
</table>

</body>

</html>


