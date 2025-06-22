<?php
	global $PHP_SELF;
	global $orderby;
	global $find;
	$sel_bcolor = '0,0,0';
	$sel_fcolor = '255,255,255';


print "<tr>\n";

print "<td valign=middle><center>" . pdb_highlighter($row->filial,$find,$sel_bcolor,$sel_fcolor,'_blank',true,true,true) . "</td>\n";
//print "<td valign=middle><center>" . pdb_highlighter($row->cod_fil,$find,$sel_bcolor,$sel_fcolor,'_blank',true,true,true) . "</td>\n";
print "<td valign=middle><center>" . pdb_highlighter($row->ddd,$find,$sel_bcolor,$sel_fcolor,'_blank',true,true,true) . "</td>\n";
print "<td valign=middle><center><font color = red>" . pdb_highlighter($row->abrev,$find,$sel_bcolor,$sel_fcolor,'_blank',true,true,true) . "</font></td>\n";
print "<td valign=middle><center>" . pdb_highlighter($row->telefone,$find,$sel_bcolor,$sel_fcolor,'_blank',true,true,true) . "</td>\n";
print "<td valign=middle>" . pdb_highlighter($row->contato,$find,$sel_bcolor,$sel_fcolor,'_blank',true,true,true) . "</td>\n";
print "<td valign=middle>" . pdb_highlighter($row->setor,$find,$sel_bcolor,$sel_fcolor,'_blank',true,true,true) . "</td>\n";
//print "<td><center><a href=\"$PHP_SELF?action=edit&stpage=$stpage&orderby=$orderby&find=$find&id=$row->filial\"><img src=\"editar.gif\" alt=\"Editar Dado\" border=0></a></td>\n";
//print "<td><center><a href=\"$PHP_SELF?action=confirm&stpage=$stpage&orderby=$orderby&find=$find&id=$row->filial\"><img src=\"apagar.gif\" alt=\"Apagar Dado\" border=0></a></td>\n";

print "</tr>\n";


?>
