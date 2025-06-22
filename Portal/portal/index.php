<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>

  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Portal Intranet v.2</title>


  <style>
body { border: 0px none ;
margin: 0pt 0px 0px;
text-decoration: none;
}
a.navwhite:link { text-decoration: none;
font-family: verdana;
color: rgb(0, 0, 0);
font-weight: normal;
font-size: 8pt;
}
a.navwhite:visited { text-decoration: none;
font-family: verdana;
font-weight: normal;
color: rgb(0, 0, 0);
font-size: 8pt;
}
a.navwhite:hover { font-weight: bold;
font-family: verdana;
text-decoration: none;
color: rgb(51, 102, 255);
font-size: 8pt;
}
a.navblack:link { text-decoration: none;
color: rgb(0, 0, 0);
font-family: Verdana,Arial,sans-serif;
font-size: 10px;
font-weight: bold;
}
a.navblack:visited { text-decoration: none;
color: rgb(0, 0, 0);
font-family: Verdana,Arial,sans-serif;
font-size: 10px;
font-weight: bold;
}
a.navblack:hover { text-decoration: underline;
color: rgb(0, 0, 0);
font-family: Verdana,Arial,sans-serif;
font-size: 10px;
font-weight: bold;
}
table, table tr td, table tr th { border-color: black;
border-width: 0px;
margin: 0px;
border-collapse: collapse;
color: black;
font-family: verdana;
text-decoration: none;
font-size: 8pt;
background-color: #FFFFFF;
}
legend { text-decoration: none;
color: blue;
font-weight: bold;
font-size: 10pt;
font-family: helvetica;
}
  </style>
  <script language="JavaScript">
<!--
function SetNameArray (item)
{
this.lenght = item
return this
}
Month = new SetNameArray(12)
Month[1] = "Janeiro"
Month[2] = "Fevereiro"
Month[3] = "Mar&ccedil;o"
Month[4] = "Abril"
Month[5] = "Maio"
Month[6] = "Junho"
Month[7] = "Julho"
Month[8] = "Agosto"
Month[9] = "Setembro"
Month[10] = "Outubro"
Month[11] = "Novembro"
Month[12] = "Dezembro"
WeekDay = new SetNameArray(7)
WeekDay[1] = "Domingo"
WeekDay[2] = "Segunda-feira"
WeekDay[3] = "Ter&ccedil;a-feira"
WeekDay[4] = "Quarta-feira"
WeekDay[5] = "Quinta-feira"
WeekDay[6] = "Sexta-feira"
WeekDay[7] = "S&aacute;bado"
theDate = new Date()
var theWeekDay = WeekDay[theDate.getDay() + 1]
var theMonth = Month[theDate.getMonth() + 1]
var theYear = theDate.getYear() + 1900
if (theYear>3000)
theYear=theYear-1900;
document.write("<br>");
-->
  </script>
</head>


<body>

<table style="text-align: left; width: 100%;" border="0" cellpadding="0" cellspacing="0">

  <tbody>

    <tr>

      <td></td>
      <td style="text-align: center;" colspan="3">
      <fieldset><img src="imagens/logo_portal.png" border="0"></fieldset>

      <br>

      </td>
      <td></td>

    </tr>

    <tr>

      <td></td>
      <td style="text-align: center;" colspan="3">
      <fieldset>
      <script language="JavaScript">
document.write(" "+theWeekDay + ", " + theDate.getDate() + " de " + theMonth + " " + " de " +theYear);
      </script></fieldset>

      </td>
      <td></td>

    </tr>

    <tr>

      <td></td>
      <td style="width: 20%; text-align: center; background-color: rgb(255, 255, 255);">
      <form method="post" action="verifica.php" name="form1" target="frame1">
        <fieldset><legend style="caption-side: left;"><img style="width: 54px; height: 57px;" alt="" src="imagens/icones/xp005.gif" align="middle">&nbsp;Relat&oacute;rios&nbsp;</legend>
        <table style="text-align: left; width: 160px; height: 90px;" border="0" cellpadding="2" cellspacing="2">

          <tbody>

            <tr>

              <td style="font-family: Verdana;">Usu&aacute;rio:</td>

              <td style="font-family: Verdana;" align="center"><input size="10" name="login" type="text"></td>

            </tr>

            <tr>

              <td style="font-family: Verdana;">Senha:</td>

              <td style="font-family: Verdana;" align="center"><input size="10" name="senha" type="password"></td>

            </tr>

            <tr>

              <td style="font-family: Verdana; text-align: center; background-color: rgb(255, 255, 255);" colspan="2"><input value="ENVIAR" name="ENVIAR" type="submit">&nbsp;<input value="LIMPAR" name="LIMPAR" type="reset"> </td>

            </tr>

            <tr>

              <td style="text-align: center;" colspan="2"><img style="border: 0px solid ; width: 20px; height: 20px;" alt="" src="imagens/icones/xp187.gif" align="middle"><a href="#" class="navwhite" target="_top" onclick='window.open("form_trocasenha.php","","titlebar=no,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,fullscreen=no,resizable=no,menubar=no ,width=500,height=220")'>Troque
sua Senha</a></td>

            </tr>

          </tbody>
        </table>

        </fieldset>

      </form>

      </td>

      <td style="width: 55%;" rowspan="4"> <iframe name="frame1" src="chamadas.php" frameborder="0" height="550" width="100%"></iframe> </td>

      <td align="center" width="20%">
      <form method="post" action="ramais/ramais.php" name="form2" target="frame1">
        <fieldset><legend><img style="width: 60px; height: 60px;" alt="" src="imagens/icones/xp116.gif" align="middle">Busca&nbsp;Ramais&nbsp;</legend>
        <table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">

          <tbody>

            <tr align="center">

              <td>Digite Filial, Setor ou<br>

&nbsp;Respons&aacute;vel pelo ramal, para pesquisar.</td>

            </tr>

            <tr align="center">

              <td><input size="20" name="find"></td>

            </tr>

            <tr align="center">

              <td><input value="ENVIAR" name="ENVIAR" type="submit">&nbsp;<input value="LIMPAR" name="LIMPAR" type="reset"></td>

            </tr>

          </tbody>
        </table>

        </fieldset>

      </form>

      </td>
      <td style="text-align: right;"></td>

    </tr>

    <tr>

      <td></td>
      <td align="center" width="20%">
      <fieldset><legend><img style="width: 53px; height: 56px;" alt="" src="imagens/icones/xp011.gif" align="middle">&nbsp;Corporativo&nbsp;</legend>
      <table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">

        <tbody>

          <tr>

            <td><a class="navwhite" onfocus="<b>" target="_blank" href="http://intranet.atacadao.com.br:7783/forms90/f90servlet?config=DBCOM">Sistema&nbsp;de
Almoxarifado</a></td>

          </tr>

          <tr>

            <td><a class="navwhite" href="http://intranet.atacadao.com.br:7783/forms90/f90servlet?config=DBADM" target="_blank">Sistema
Administrativo</a></td>

          </tr>

          <tr>

            <td><a class="navwhite" href="http://intranet.atacadao.com.br:7783/forms90/f90servlet?config=MENTHOR" target="_blank">Sistema
Menthor</a></td>

          </tr>

          <tr>

            <td><a class="navwhite" href="http://130.0.100.96/aplicacao/iatacon.nsf" target="_blank">Sistema
de Contratos</a></td>

          </tr>

          <tr>

            <td><a class="navwhite" href="http://130.0.100.96/aplicacao/iataimob.nsf" target="_blank">Sistema
de Imobilizados</a></td>

          </tr>

          <tr>

            <td><a class="navwhite" href="http://130.0.100.202/cgi-bin/chpasswd.cgi" target="_blank">Alterar
senha de internet</a></td>

          </tr>

        </tbody>
      </table>

      </fieldset>

      </td>

      <td align="center" width="20%">
      <fieldset><legend><img style="width: 60px; height: 60px;" alt="" src="imagens/icones/xp074.gif" align="middle">&nbsp;Programa
5S&nbsp; </legend>
      <table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">

        <tbody>

          <tr>

            <td><a class="navwhite" href="5s/programa5s.htm" target="frame1">Conceito
5 S</a></td>

          </tr>

          <tr>

            <td><a class="navwhite" href="5s/1s.htm" target="frame1">1&ordm; S -
Utiliza&ccedil;&atilde;o</a></td>

          </tr>

          <tr>

            <td><a class="navwhite" href="5s/2s.htm" target="frame1">2&ordm; S -
Organiza&ccedil;&atilde;o</a></td>

          </tr>

          <tr>

            <td><a class="navwhite" href="5s/3s.htm" target="frame1">3&ordm; S - Limpeza</a></td>

          </tr>

          <tr>

            <td><a class="navwhite" href="5s/4s.htm" target="frame1">4&ordm; S -
Padroniza&ccedil;&atilde;o</a></td>

          </tr>

          <tr>

            <td><a class="navwhite" href="5s/5s.htm" target="frame1">5&ordm; S - Autodisciplina</a></td>

          </tr>

        </tbody>
      </table>

      </fieldset>

      </td>
      <td></td>

    </tr>

    <tr>

      <td></td>
      <td align="center" width="20%">
      <fieldset><legend><img style="width: 48px; height: 48px;" alt="" src="imagens/icones/xp152.gif" align="middle">&nbsp;Informativos&nbsp;</legend>
      <table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">

        <tbody>

          <tr>

            <td><a class="navwhite" href="http://intranet.atacadao.com.br:7783/portal_rh/pact001_portlet.Aniversario?p_filial_in=59" target="_blank">Aniversariantes
do m&ecirc;s</a></td>

          </tr>

          <tr>

            <td><a class="navwhite" href="#" target="_top">Card&aacute;pio
do dia</a></td>

          </tr>

          <tr>

            <td><a class="navwhite" href="#" target="_top">Invent&aacute;rio
Rotativo</a></td>

          </tr>

        </tbody>
      </table>

      </fieldset>

      </td>

      <td align="center" width="20%">
      <fieldset><legend><img src="imagens/icones/xp072.gif" alt="" style="width: 65px; height: 56px;" align="middle">Seguran&ccedil;a
TI&nbsp; </legend>
      <table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">

        <tbody>

          <tr>

            <td><a class="navwhite" href="seguranca/lotusnotes.htm" target="frame1">Lotus
Notes</a></td>

          </tr>

          <tr>

            <td><a class="navwhite" href="seguranca/dicas_email.pdf" target="frame1">Dicas
sobre Email</a></td>

          </tr>

          <tr>

            <td><a class="navwhite" href="seguranca/politica_seguranca_usuariofinal.pdf" target="frame1">Politica de Seguran&ccedil;a</a></td>

          </tr>

        </tbody>
      </table>

      </fieldset>

      </td>
      <td></td>

    </tr>

    <tr>

      <td></td>
      <td align="center" width="20%"></td>

      <td align="center" width="20%"><br>

      </td>
      <td></td>

    </tr>

    <tr align="center">

      <td style="text-align: left;">.</td>
      <td colspan="3">
      <fieldset><center>CPD</center></fieldset>

      <br>
      </td>
      <td style="text-align: right;">.</td>

    </tr>

  </tbody>
</table>

</body>
</html>
