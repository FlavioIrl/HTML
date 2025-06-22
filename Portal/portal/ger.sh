########################### DEFINICAO DE VARIAVEIS #############################
converte() {
dir_origem="/fs1/save/bk"
dir_destino="/files/portal/portal/arquivos"
arq="srm02 sas90 svd07 srm01 sae17 sae03 sae05 sae02 sas22 spa09 svd41 smg11 svd07 svd08
	 sas32 sas35 sas36 scd99 sas08 sas55 spa09 sin22 scd61 svd62 sae05 srm32 sae02 sae03 
	 sas61 scd94 sas25 sae06 scd66 smg12 srm03 svd04 sae04 sae08 srm28 srm25 svd18 sit23 
	 srm02 srt01 srt50 srt03 srt36"
########################## EXECUTACAO DA CONVERSAO ############################
rm -f $dir_destino/*.pdf $dir_destino/*.txt
for a in $arq
do
	FILE=$(ls -1tr ${dir_origem}/${a}* | grep -v csv | grep -v bdy | head -1)
	cp ${FILE} $dir_destino/${a}.txt 1>/dev/null 2>/dev/null
	if [ -f $dir_destino/${a}.txt ]; then
		if [ -s $dir_destino/${a}.txt ]; then
			if [ ! -f $dir_origem/$a* ]; then
       				echo "[ERRO]: Arquivo ${a} nao encontrado."
			fi
			enscript $dir_destino/$a*.txt -f Courier@8/7 --lines-per-page=67 --header="Economize cada centavo! Seja consciente, imprima somente o necessario.  -- Centro de Processamento de Dados (C.P.D) --" --media=Letterdj --margins=0:0:0:0 -r -o - | ps2pdf - $dir_destino/$a.pdf 1>/dev/null 2>/dev/null
			if [ ! -f $dir_destino/$a.pdf ]; then
       				echo "[ERRO]: Ocorreu um erro convertendo o arquivo $a."
        		else	
				echo "[OK  ]: Arquivo ${a} convertido com sucesso!"
				rm $dir_destino/${a}.txt
			fi
		else
			echo "[ERRO]: Arquivo ${a} nao possui conteudo (Vazio) !!!"
			rm $dir_destino/${a}.txt
		fi
	else
		echo "[ERRO]: Arquivo ${a} nao existe - Nao foi gerado o PDF!!!"
	fi
done
}
converte 2>/dev/null 
################################################################################
