-- MySQL dump 8.23
--
-- Host: localhost    Database: atacadao
---------------------------------------------------------
-- Server version	3.23.58

--
-- Table structure for table `Chamados`
--

CREATE TABLE Chamados (
  ID int(11) NOT NULL auto_increment,
  dataabertura varchar(20) default NULL,
  prazoestipulado varchar(30) default NULL,
  datafechamento varchar(20) default NULL,
  usuariosolicitante varchar(30) default NULL,
  setorsolicitante varchar(30) default NULL,
  setoratratar varchar(30) default NULL,
  coordenador varchar(30) default NULL,
  severidade varchar(30) default NULL,
  relatochamadosetor blob,
  relatochamadocpd blob,
  PRIMARY KEY  (ID)
) TYPE=MyISAM;

--
-- Dumping data for table `Chamados`
--


INSERT INTO Chamados VALUES (1,'13/05/09-08:33:25','','19/05/09-11:51:13','Tavares - cadastroitaquera@ata','Frente de Caixa','cpd','Cassio - Eloisa','Imediata','AO UTILIZAR A TELA SASOU44 DA UMA MENSAGEM DE ERRO:\r\nOPCAO INVALIDA PARA ESTE USUARIO << STATUS  999 >> #1349\r\nJA PASSEI PARA O CASSIO O MESMO ESTA CIENTE........','O PROBLEMA FOI RESOLVIDO EM CONVERSA COM A MATRIZ');
INSERT INTO Chamados VALUES (2,'14/05/09-20:19:19','15/05/09','15/05/09-03:02:53','dine - asasouza - 9428','Frente de Caixa','cpd','Cassio - Eloisa','Imediata','imprimir via de recarga \r\nvalor  50,00\r\npdv 60\r\nop  jose gustavo\r\ndia 14/05/09\r\nmotivo comprovante de recarga','Foi feito o resgate do documento. Solicitado estarei encaminhando via lotus notes (e-mail). \r\ngrato, Alexsandro');
INSERT INTO Chamados VALUES (3,'15/05/09-17:03:50','','26/06/09-17:20:21','dine - asasouza - 9428','Frente de Caixa','cpd','Cassio - Eloisa','Imediata','imprimir o tef operadora ilda\r\npdv  63\r\nvalor  125,00\r\ndata 15/05/09\r\nmotivo tef\r\natenciosamente dine','');
INSERT INTO Chamados VALUES (4,'17/05/09-08:45:25','','17/05/09-15:33:21','ana lucia - cadastroitaquera@a','Frente de Caixa','cpd','Cassio - Eloisa','Media','favor resgatar a leitura x\r\ndata:17/05/09\r\npdv 43\r\npois op iolanda nao trocou a bobina.\r\n','leitura X resgatada e anexada junto as demais no CPD.');
INSERT INTO Chamados VALUES (5,'19/05/09-09:01:46','','20/05/09-07:42:01','Giselle - cadastroitaquera@ata','Cadastro','cpd','Cassio - Eloisa','Imediata','As operadoras do caixa empresa continuam mandando os cheques para o atendimento e disseram que a impressoras continuam ruins.','foi verificado a impressora do caixa empresa e apenas 1 estava com problema!!! Ivan, ja arrumou a outra e testou na frente dos operadores da noite.\r\n\r\natt. Wagner');
INSERT INTO Chamados VALUES (6,'19/05/09-09:36:12','','19/05/09-11:10:44','Giselle - cadastroitaquera@ata','Cadastro','cpd','Cassio - Eloisa','Normal','O PDV 48 n√£o est√° passando nenhum cart√£o com a bandeira redecard, segundo a operadora Lucilene.','foram feitas atualiza√ß√µes pela Matriz, favor testar os PDV\'s 064, 048 e 034');
INSERT INTO Chamados VALUES (7,'21/05/09-11:32:12','','21/05/09-11:52:09','katia - cadastroitaquera@ataca','Cadastro','cpd','Cassio - Eloisa','Imediata','cpd a operadora 58 do pdv 43 nao esta conseguindo passar cartao problema no pinpad verificar por favor','pin pad ja foi substituido e testado. problema resolvido');
INSERT INTO Chamados VALUES (8,'24/05/09-15:46:00','','25/05/09-11:26:33','Adrianaa - fcaixa - 9426','Frente de Caixa','cpd','Cassio - Eloisa','Imediata','reemitir good\r\nop Eguilene n 23 PDV 69 DATA 23/05/09\r\nGOOD CARD RECARGA 10,00\r\n*****************************\r\nREEMITIR GOOD\r\nOP JOILSON N 13 PDV 42\r\nDATA 23/05/09\r\nVALOR\r\n198,39\r\nCOMPROVANTE DE GOOD\r\n************************\r\nREEMITIR TEF\r\nOP ISABEL N 61 PDV 59\r\nDATA 24/05/09\r\nVALOR 121,18 \r\n*******************\r\nREEMITIR TEF\r\nOP GILDETE N 30 PDV 67\r\nDATA 24/05/09\r\nVALOR 230,00\r\n\r\n\r\nTAVARESSSSSSSSSSS','subi a impressora e resgatei o cupom solicitado... entreguei em m√£os da auxiliar Ilka (frente de caixa)\r\natt.\r\nWagner');
INSERT INTO Chamados VALUES (9,'26/05/09-07:31:17','','','TAVARES - F CAIXA - 9426','Frente de Caixa','cpd','Cassio - Eloisa','Imediata','FAVOR ABRIR CHAMADO PARA A IMPRESSORA DAS MOEDAS CASSIO (CPD) CIENTE DO PROBLEMA  ','POSITIVO A IMP. JA FOI CONSERTADA PELO TECNICO , ONDE O MESMO EFETUOU A TROCA DA BATERIA INTERNA, PE√áO QUE VERIFIQUEM ATE AMANHA SE JA ESTA TUDO OK.\r\nSEM MAIS - CASSIO');
INSERT INTO Chamados VALUES (10,'27/05/09-23:14:26','','14/06/09-10:09:39','Ana lucia - cadastroitaquera@a','Frente de Caixa','cpd','Cassio - Eloisa','Media','solicito que reemita um comprovante de tef.\r\n\r\npdv:60\r\nOp:62\r\nValor:R$ 110,00\r\nData:26/05/09\r\n','N√£o tem nenhum tef de 110,00 reais neste PDV, favor passar o valor correto.\r\nEncontrei um tef de 100,00 talvez seja este estarei enviando para o E-mail do cadastro. OK  \r\nAlexsandro - CPD...');
INSERT INTO Chamados VALUES (11,'28/05/09-15:14:38','','08/06/09-22:39:08','cpd - cpd - cpd','Frente_de_Caixa','cpd','Cassio - Eloisa','Imediata','cpd','teste');
INSERT INTO Chamados VALUES (12,'28/05/09-23:24:26','','04/06/09-03:28:08','Dulce - cadastroitaquera@ataca','Frente_de_Caixa','cpd','Cassio - Eloisa','Media','Favor reemitir um TEF\r\nPDV:048\r\nOP.:021\r\nValor R$: 25,00\r\nData:28/05/09','Foi feito o resgate do comprovante de Debito solicitado.\r\nEstou enviando via E-mail para o Setor Cadastro e Financeiro.\r\nAtt, Alexsandro');
INSERT INTO Chamados VALUES (13,'29/05/09-09:59:09',NULL,NULL,'tavares - fcaixa - 9426','Frente_de_Caixa','cpd','Cassio - Eloisa','Imediata','Favor reemitir cupon cancelado\r\ncupon 13035 valor R$10,20 PDV 60 operadora\r\nRosangela\r\ndata 26/05/09',NULL);
INSERT INTO Chamados VALUES (14,'29/05/09-11:17:58','','29/05/09-16:04:38','Rafael Santos - nenhum - 9458','Loja','cpd','Cassio - Eloisa','Imediata','Pe√ßo que seja instalado na sala de treinamento um computador e caixa de som para o PMC do HF.\r\nO treinamento ser√° iniciado as 13:30','foi montado um computador com caixas de som na sala de treinamento para o solicitante.\r\natt.\r\nWagner');
INSERT INTO Chamados VALUES (15,'30/05/09-12:21:34','','07/06/09-11:46:02','SANDRA - F DE CAIXA - 9428 E 9','Frente_de_Caixa','cpd','Cassio - Eloisa','Imediata','  WESLEY, FELIZ ANIVERS√ÅRIO!!!!!!!!!!!!!!','');
INSERT INTO Chamados VALUES (16,'30/05/09-23:19:22','','31/05/09-18:14:51','adriana - cadastroitaquera@ata','Frente_de_Caixa','cpd','Cassio - Eloisa','Imediata','Estou solicitando a impress√£o do seguinte documento:\r\nData:30/05/2009\r\nValor:70,00\r\nDocumento:Tef\r\nPdv:59\r\n\r\nObrigada.\r\nAdriana','documento resgatado e entregue ao financeiro.\r\natt.\r\nWagner');
INSERT INTO Chamados VALUES (17,'30/05/09-23:51:46','','31/05/09-18:15:26','adriana - cadastroitaquera@ata','Frente_de_Caixa','cpd','Cassio - Eloisa','Imediata','Gostaria que fosse impresso o seguinte documento:\r\nTef\r\nValor:85,44\r\nData:30/05/2009\r\nPdv:68\r\nOperadora:Kelly\r\nGrata....\r\nAdriana','documento resgatado e entregue a Ana Lucia (frente de caixa)\r\natt.\r\nWagner');
INSERT INTO Chamados VALUES (18,'01/06/09-08:19:55','','01/06/09-09:32:21','Giselle - cadastroitaquera@ata','Cadastro','cpd','Cassio - Eloisa','Imediata','Bom dia, tem um ADD no nosso setor que eu acho que queimou novamente, gostaria que voc√™s tirassem ele do nosso setor e no lugar dele colocassem o que est√° funcionando.','teminal ADD substituido por um de backup, testei e est√° ok.\r\natt.\r\nWagner');
INSERT INTO Chamados VALUES (19,'03/06/09-23:14:43','','04/06/09-03:26:03','ana lucia - cadastroitaquera@a','Frente_de_Caixa','cpd','Cassio - Eloisa','Imediata','solicito que reemita a saida operador\r\npdv 50 op 92\r\ndata 03/06/09\r\nmotivo:via sai embolada;sem valor da venda liquida\r\n\r\nsem mai \r\n\r\nana lucia\r\n\r\n','Foi feito o resgate, e entregue em m√£os para Ana lucia da Frente de caixa.\r\natt, Alexsandro');
INSERT INTO Chamados VALUES (20,'04/06/09-19:27:53','','04/06/09-22:48:40','adriana - cadastroitaquera@ata','Frente_de_Caixa','cpd','Cassio - Eloisa','Imediata','Boa Noite!!!\r\nGostaria que fosse impresso os seguintes doc¬¥s:\r\n*Cupom cancelado da Edineide,\r\n valor de R$0,17 \r\n DIA 16/05/2009 AS 21:01 \r\n PDV:54\r\n CUPOM 48011\r\n\r\n*CUPOM CANCELADO DA JUCINEIDE \r\nPDV:44 CUPOM:129638\r\n15:08\r\nGRATA ','Foi feito o resgate dos dois cupons citados acima. E entregue em m√£os. Vou enviar por E-mail para manter como arquivo.\r\nRenan / Alex. ');
INSERT INTO Chamados VALUES (21,'05/06/09-08:29:52','','06/06/09-03:01:50','tavares - fcaixa - 9428 E 9426','Frente_de_Caixa','cpd','Cassio - Eloisa','Imediata','REEMITIR GOOD\r\nOP JOILSON N 13 PDV 42\r\nDATA 23/05/09\r\nVALOR\r\n198,39\r\nCOMPROVANTE DE GOOD\r\n************************\r\n','Valor Correto era 199,39, um Good card somente - foi feito o resgate e enviado via E-mail para Frente de caixa e Financeiro.\r\n\r\natt, Alexsandro');
INSERT INTO Chamados VALUES (22,'07/06/09-15:07:42','','14/06/09-10:22:06','tavares - frente de caixa - 94','Frente_de_Caixa','cpd','Cassio - Eloisa','Imediata','FAVOR REEMITIR 5 COMPROVANTES DE GOOD CARD DO DIA 23/05 DO PDV 42 OP 13 JOILSON\r\n\r\nVALORES 4 X R$ 1,00\r\nVALOR   1 X R$ 195,39\r\nOPERADOR PERDEU OS 5 COMPROVANTES DE UMA UNICA VEZ','s√≥ foram encontrados 2 compravantes de good card no valor de 1,00. na venda do dia todo desse pdv n√£o consta os outros valores solicitados. estou enviando o arquivo em notes para tirarem qualquer d√∫vida.\r\nprov√°vel que o operador tenha lan√ßado os dados como cadastro.');
INSERT INTO Chamados VALUES (23,'10/06/09-23:43:46','','','adriana - cadastroitaquera@ata','Cpd','cpd','Cassio - Eloisa','Imediata','Boa Noite!!!!!\r\nAlexsandro por favor reemita a sa√≠da do op adriano;A sa√≠da enroscou na cpu.\r\npdv:59\r\ndata:10/06/2009\r\nsa√≠da de operador\r\n\r\nGrata\r\nAdriana','houve um problema na impressora e n√£o conseguimos gerar o cupom ainda, estamos com um chamado aberto junto a IBM para solucionar o problema.\r\natt.\r\nWagner');
INSERT INTO Chamados VALUES (24,'11/06/09-14:06:38',NULL,NULL,'Giselle - cadastroitaquera@ata','Cadastro','cpd','Cassio - Eloisa','Media','Elo√≠sa autorizou a fazer 2 abreviados no nosso setor para os celulares:\r\nGiselle - 8850-5882\r\nAriane - 9517-9137\r\nGostaria de saber se √© poss√≠vel fazer tamb√©m para o Leandro e para a K√°tia se a Elo√≠sa autorizar.',NULL);
INSERT INTO Chamados VALUES (25,'13/06/09-16:54:45','','13/06/09-20:18:42','adriana - cadastroitaquera@ata','Cpd','cpd','Cassio - Eloisa','Imediata','Por favor reemitir um comprovante de recarga.\r\npdv:56\r\ndata:13/06/2009\r\nOperadora:Leni\r\n\r\nGrata.\r\nAdriana','Falta o VALOR da Recarga\r\nJ√° foi feito o resgate da Recarga de 15,00, estarei enviado atrav√©s do E-mail.\r\natt, Alexsandro');
INSERT INTO Chamados VALUES (26,'13/06/09-17:51:16','','','adriana - cadastroitaquera@ata','Cpd','cpd','Cassio - Eloisa','Imediata','Boa Tarde!!!\r\ngostaria que voc√™s tirassem uma c√≥pia do seguinte pdv.\r\npdv:61\r\nvalor:13,00\r\noperador: Leandro santos','N√£o conseguimos resgatar este documento. Est√° gerando erro no programa.\r\nFoi aberto chamado na IBM para solucionar o mesmo. Favor aguardar.\r\natt,Alexsandro');
INSERT INTO Chamados VALUES (27,'14/06/09-15:48:12','','14/06/09-17:40:44','dine - cadastroitaquera@atacad','Frente_de_Caixa','cpd','Cassio - Eloisa','Imediata','Kelly N¬∫96\r\nFavor resgatar uma recarga \r\nR$ Valor 10,00\r\nPDV:050\r\nOp¬∫96\r\nData:14/06/09','Foi feito o resgate do documento solicitado, estou enviado via E-mail. Com copia para o Financeiro.\r\natt, Alexsandro');
INSERT INTO Chamados VALUES (28,'14/06/09-16:07:23','','14/06/09-18:02:22','dine - cadastroitaquera@atacad','Frente_de_Caixa','cpd','Cassio - Eloisa','Media','por favor imprimir a recarga \r\nvalor 17,00\r\npdv 57\r\ndia 12/06/09\r\nop meire dine','Foi feito o resgate do documento solicitado, estou enviado uma copia atrav√™s do E-mail. para o cadastro e financeiro.\r\natt, Alexsandro');
INSERT INTO Chamados VALUES (29,'16/06/09-21:01:18','','17/06/09-03:39:53','Patricia de Matos - financeiro','RH','cpd','Cassio - Eloisa','Imediata','Resgate do GOOD CARD do dia 22/05/09\r\nPDV 58       Hora: 15:11\r\nValor R$ 1,60','Foi feito o resgate do documento solicitado, estarei enviando atrav√™s do E-mail.\r\natt, Alexsandro');
INSERT INTO Chamados VALUES (30,'17/06/09-21:15:00','','18/06/09-02:27:35','ana lucia - www.cadastroitaque','Frente_de_Caixa','cpd','Cassio - Eloisa','Imediata','solicito a reemisao da via cancelada\r\nvalo:31,96\r\ndata:12/06/09\r\npdv 68 op95 keila \r\n\r\nsem mais \r\n\r\nanalu\r\n','Foi feito o resgate do Cupom solicitado, estarei enviado atrav√™s do E-mail com copia para o Financeiro e Eloisa.\r\nFavor armazenar o mesmo em alguma pasta.\r\natt, Alexsandro');
INSERT INTO Chamados VALUES (31,'17/06/09-21:22:38','','26/06/09-17:21:01','analsilva - www.cadastroitaque','Frente_de_Caixa','cpd','Cassio - Eloisa','Imediata','solicito reemisao via tef\r\nvalor:38,46\r\npdv:52 op 72\r\ndata:17/06/09\r\nsem mais  \r\n\r\nanalu\r\n\r\n','N√£o foi possivel gerar o arquivo ERRO no programa que faz o resgate, sendo assim foi aberto um chamado para IBM.\r\nAssim que acharmos a solu√ß√£o para este problema ser√° feito o servi√ßo.\r\ngrato, Alexsandro');
INSERT INTO Chamados VALUES (32,'18/06/09-22:20:27','','18/06/09-23:57:18','henrique - cadastroitaquera@at','Frente_de_Caixa','cpd','Cassio - Eloisa','Imediata','solicito reemis√£o de tef\r\nvalor: 100,00\r\ndata: 18/06/09\r\noperadora: Samanta \r\npdv: 62','documento foi resgatado e deixado na gaveta da frente de caixa.\r\natt.\r\nWagner');
INSERT INTO Chamados VALUES (33,'19/06/09-09:14:35','','19/06/09-10:12:28','dine - cadastroitaquera@atacad','Frente_de_Caixa','cpd','Cassio - Eloisa','Imediata','por favor imprimir o good card\r\nvalor 13,29\r\npdv 48\r\nop francisco\r\ndia 17/06/09\r\ndine','Foi resgatado o Goog card solicitado e enviado via notes para o cadastro\r\ne entregue uma copia a frente de caixa\r\nAtt.Renan');
INSERT INTO Chamados VALUES (34,'22/06/09-13:43:55','','22/06/09-14:23:26','dine - cadastroitaquera@atacad','Frente_de_Caixa','cpd','Cassio - Eloisa','Imediata','por favor imprimir a saida op ivanilda\r\npdv 57\r\ndia 22/06/09\r\nobrigada dine','Saida de Operador resgatada com sucesso.Enviado via notes pra o cadastro com copia para a eloisa.\r\nSaida entregue em m√£os para a FCX.\r\nAtt.\r\nRenan\r\n');
INSERT INTO Chamados VALUES (35,'30/06/09-08:03:58','','30/06/09-10:01:51','Giselle - cadastroitaquera@ata','Cadastro','cpd','Cassio - Eloisa','Normal','O relat√≥rio SASBI35 da data de 29/06/09 n√£o est√° dispon√≠vel no portal e n√≥s precisamos.','Foi gerado o arquivo solicitado, o mesmo j√° se encontra na pasta do dia 29/06/09 no portal. favor conferir.\r\natt, Alexsandro');
INSERT INTO Chamados VALUES (36,'30/06/09-13:33:21','','30/06/09-23:40:48','tavares - fcaixa - 9428 E 9426','Frente_de_Caixa','cpd','Cassio - Eloisa','Imediata','resgatar good card\r\nop edanalva n 22 pdv 66 hora 07:57\r\n valor r$ 3,37 data 20/06/09\r\n','good card resgatado e entregue para Adriana (lider).\r\natt.\r\nWagner');
INSERT INTO Chamados VALUES (37,'30/06/09-23:51:45','','','adriana - cadastroitaquera@ata','Frente_de_Caixa','cpd','Cassio - Eloisa','Imediata','Boa Noite!!!\r\nSolicito a reemiss√£o dos seguintes documentos:\r\npdv 48 700,00   op karina data 29/06\r\npdv 46 427,34   op r√≠sia  data 30/06\r\npdv 63 300,00   op katherine data 30/06\r\nGrata\r\nAdriana\r\n','doc do PDV048 foi resgatado e entregue a Adriana (lider) restam os outros 2.\r\natt.\r\nWagner\r\n01/07- resgatei o tef do PDV063 de 300,00. ja o do PDV046 n√£o resgatei pois o valor est√° incorreto!! estou mandando o arquivo de venda de todo o dia por notes.\r\natt.\r\nwagner');
INSERT INTO Chamados VALUES (38,'04/07/09-01:23:17','','','adriana - cadastroitaquera@ata','Frente_de_Caixa','cpd','Cassio - Eloisa','Imediata','Bom Dia!!!\r\nPor favor reemitir um comprovante de tef.\r\npdv 48\r\nop 60 karina\r\nvalor: 300,00data:03/07/2009\r\n \r\n\r\nGrata\r\nAdriana\r\n','Bom dia Fcx\r\nPe√ßo que coloque corretamente o valor e a data do tef que voce esta solicitando.......................');
INSERT INTO Chamados VALUES (39,'04/07/09-08:50:02','','04/07/09-15:30:37','dine - cadastroitaquera@atacad','Frente_de_Caixa','cpd','Cassio - Eloisa','Imediata','por imprimir uma nota do pdv 43\r\ndia 03/07/09\r\n','n√£o tem nada especificando no chamado, porem o Renan ja resgatou e mandou via notes.\r\natt.\r\nWagner');
INSERT INTO Chamados VALUES (40,'04/07/09-18:00:39',NULL,NULL,'adriana - cadastroitaquera@ata','Frente_de_Caixa','cpd','Cassio - Eloisa','Imediata','Boa Tarde!!!\r\nOs dados do cupom que foi trocado a impressora s√£o:\r\npdv:34\r\ncupom:259781\r\noperador:Leandro Santos\r\ndata:04/07/2009\r\nGrata \r\nAdriana',NULL);

--
-- Table structure for table `abreviados`
--

CREATE TABLE abreviados (
  abrev varchar(10) default NULL,
  telefone varchar(20) default NULL,
  contato varchar(60) default NULL,
  setor varchar(60) default NULL
) TYPE=MyISAM;

--
-- Dumping data for table `abreviados`
--



--
-- Table structure for table `acessos`
--

CREATE TABLE acessos (
  usuario varchar(30) NOT NULL default '',
  acesso varchar(30) NOT NULL default '',
  descr varchar(60) NOT NULL default ''
) TYPE=MyISAM;


-
-- Table structure for table `colaboradores`
--

CREATE TABLE colaboradores (
  cpf_col varchar(11) NOT NULL default '',
  rg_col varchar(11) NOT NULL default '',
  data_nasc_col varchar(12) default NULL,
  sexo varchar(10) default NULL,
  data_cad_col date default NULL,
  hora_cad_col varchar(6) default NULL,
  nome_comp_col varchar(60) NOT NULL default '',
  end_col varchar(50) default NULL,
  n_compl_col varchar(30) default NULL,
  bro_col varchar(40) default NULL,
  cid_col varchar(30) default NULL,
  cep_col_a varchar(5) default NULL,
  cep_col_b varchar(4) default NULL,
  uf_col char(3) default NULL,
  ddd_res_col char(3) default NULL,
  tel_res_col varchar(10) default NULL,
  ddd_cel_col char(3) default NULL,
  tel_cel_col varchar(10) default NULL,
  nome_emp_col varchar(40) default NULL,
  nome_fant_col varchar(30) default NULL,
  ddd_emp_col char(3) default NULL,
  tel_emp_col varchar(10) default NULL,
  nome_sup_col varchar(30) default NULL,
  cont_emp_col varchar(30) default NULL,
  ddd_sup_col char(3) default NULL,
  tel_sup_col varchar(10) default NULL,
  n_arm_col varchar(5) default NULL,
  per_ser_col_a varchar(12) default NULL,
  per_ser_col_b varchar(12) default NULL,
  col_fixo varchar(5) default NULL,
  trab_sem_col_a varchar(8) default NULL,
  trab_sem_col_b varchar(8) default NULL,
  trab_sem_col_c varchar(8) default NULL,
  trab_sem_col_d varchar(8) default NULL,
  trab_sem_col_e varchar(8) default NULL,
  trab_sem_col_f varchar(8) default NULL,
  trab_sem_col_g varchar(8) default NULL,
  tip_serv_col varchar(30) default NULL,
  serv_col_a varchar(30) default NULL,
  serv_col_b varchar(30) default NULL,
  serv_col_c varchar(30) default NULL,
  serv_col_d varchar(30) default NULL,
  serv_col_e varchar(30) default NULL,
  obs_col blob,
  cad_usu varchar(20) default NULL,
  alt_usu varchar(20) default NULL,
  PRIMARY KEY  (cpf_col),
  UNIQUE KEY cpf_col (cpf_col),
  UNIQUE KEY rg_col (rg_col),
  UNIQUE KEY nome_comp_col (nome_comp_col)
) TYPE=MyISAM;

--
-- Dumping data for table `colaboradores`
--


--
-- Table structure for table `entrada_colaboradores`
--

CREATE TABLE entrada_colaboradores (
  cpf_col varchar(11) default NULL,
  nome_comp_col varchar(40) default NULL,
  nome_emp_col varchar(40) default NULL,
  dta_ent_col date default NULL,
  hora_ent_col varchar(6) default NULL,
  ent_hor_alm_col varchar(6) default NULL,
  sai_hor_alm_col varchar(6) default NULL,
  sai_hor_col varchar(10) default NULL,
  aut_sai_col varchar(20) default NULL,
  dia_semana varchar(50) default NULL
) TYPE=MyISAM;

--
-- Table structure for table `ramais`
--

CREATE TABLE ramais (
  filial varchar(200) NOT NULL default '',
  cod_fil varchar(4) NOT NULL default '',
  ddd varchar(4) NOT NULL default '',
  abrev varchar(10) NOT NULL default '',
  telefone varchar(9) NOT NULL default '',
  contato varchar(200) default NULL,
  setor varchar(200) default NULL
) TYPE=MyISAM;

--
-- Dumping data for table `ramais`
--


INSERT INTO ramais VALUES ('CPOGRDAT','2','67','6030','3312-4427','Dias\r',NULL);
INSERT INTO ramais VALUES ('CPOGRDAT','2','67','6031','3312-4434','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('CPOGRDAT','2','67','6032','3312-4413','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('CPOGRDAT','2','67','6033','3312-4421','CPD\r',NULL);
INSERT INTO ramais VALUES ('CPOGRDAT','2','67','6034','3312-4447','Fax\r',NULL);
INSERT INTO ramais VALUES ('CPOGRDAT','2','67','6035','3312-4401','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('CPOGRDAT','2','67','6036','3312-4459','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('CPOGRDAT','2','67','6037','3312-4422','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('CPOGRDAT','2','67','6038','3312-4417','RH\r',NULL);
INSERT INTO ramais VALUES ('CPOGRDAT','2','67','6039','3312-4453','RM\r',NULL);
INSERT INTO ramais VALUES ('AMERICA','4','17','6040','3214-8460','Ceasa\r',NULL);
INSERT INTO ramais VALUES ('AMERICA','4','17','6041','3214-8444','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('AMERICA','4','17','6042','3214-8434','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('AMERICA','4','17','6043','3214-8416','C.P.D.\r',NULL);
INSERT INTO ramais VALUES ('AMERICA','4','17','6044','3214-8429','Fax\r',NULL);
INSERT INTO ramais VALUES ('AMERICA','4','17','6045','3214-8431','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('AMERICA','4','17','6046','3214-8405','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('AMERICA','4','17','6047','3214-8401','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('AMERICA','4','17','6048','32148435','RH\r',NULL);
INSERT INTO ramais VALUES ('AMERICA','4','17','6049','3214-8407','RM\r',NULL);
INSERT INTO ramais VALUES ('VARZEA','5','65','6050','20054475','Darci\r',NULL);
INSERT INTO ramais VALUES ('VARZEA','5','65','6051','20054400','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('VARZEA','5','65','6052','20054433','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('VARZEA','5','65','6053','20054415','C.P.D.\r',NULL);
INSERT INTO ramais VALUES ('VARZEA','5','65','6054','20054429','Fax\r',NULL);
INSERT INTO ramais VALUES ('VARZEA','5','65','6055','20054431','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('VARZEA','5','65','6056','20054405','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('VARZEA','5','65','6057','20054401','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('VARZEA','5','65','6058','20054414','RH\r',NULL);
INSERT INTO ramais VALUES ('VARZEA','5','65','6059','20054406','RM\r',NULL);
INSERT INTO ramais VALUES ('TAIPAS','6','11','6060','3973-4640','Ceasa\r',NULL);
INSERT INTO ramais VALUES ('TAIPAS','6','11','6061','3973-4650','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('TAIPAS','6','11','6062','3973-4633','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('TAIPAS','6','11','6063','3973-4616','CPD\r',NULL);
INSERT INTO ramais VALUES ('TAIPAS','6','11','6064','3973-4629','Fax\r',NULL);
INSERT INTO ramais VALUES ('TAIPAS','6','11','6065','3973-4632','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('TAIPAS','6','11','6066','3973-4605','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('TAIPAS','6','11','6067','3973-4601','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('TAIPAS','6','11','6068','3973-4614','RH\r',NULL);
INSERT INTO ramais VALUES ('TAIPAS','6','11','6069','3973-4606','RM\r',NULL);
INSERT INTO ramais VALUES ('DOURADOS','7','67','6071','3411-4450','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('DOURADOS','7','67','6072','3411-4433','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('DOURADOS','7','67','6073','3411-4416','CPD\r',NULL);
INSERT INTO ramais VALUES ('DOURADOS','7','67','6074','3411-4429','Fax\r',NULL);
INSERT INTO ramais VALUES ('DOURADOS','7','67','6075','3411-4431','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('DOURADOS','7','67','6076','3411-4405','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('DOURADOS','7','67','6077','3411-4401','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('DOURADOS','7','67','6078','3411-4435','RH\r',NULL);
INSERT INTO ramais VALUES ('DOURADOS','7','67','6079','3411-4406','RM\r',NULL);
INSERT INTO ramais VALUES ('MARINGA AT','9','44','6091','3261-8424','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('MARINGA AT','9','44','6092','3261-8433','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('MARINGA AT','9','44','6093','3261-8415','CPD\r',NULL);
INSERT INTO ramais VALUES ('MARINGA AT','9','44','6094','3261-8429','Fax\r',NULL);
INSERT INTO ramais VALUES ('MARINGA AT','9','44','6095','3261-8432','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('MARINGA AT','9','44','6096','3261-8405','Gerencia\r',NULL);
INSERT INTO ramais VALUES ('MARINGA AT','9','44','6097','3261-8401','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('MARINGA AT','9','44','6098','3261-8414','RH\r',NULL);
INSERT INTO ramais VALUES ('MARINGA AT','9','44','6099','3261-8406','RM\r',NULL);
INSERT INTO ramais VALUES ('TAGUATINGA','14','61','6081','3336-9400','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('TAGUATINGA','14','61','6082','3336-9433','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('TAGUATINGA','14','61','6083','3336-9416','CPD\r',NULL);
INSERT INTO ramais VALUES ('TAGUATINGA','14','61','6084','3336-9429','Fax\r',NULL);
INSERT INTO ramais VALUES ('TAGUATINGA','14','61','6085','3336-9431','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('TAGUATINGA','14','61','60','3336-9405','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('TAGUATINGA','14','61','6147','3336-9401','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('TAGUATINGA','14','61','6148','3336-9414','RH\r',NULL);
INSERT INTO ramais VALUES ('TAGUATINGA','14','61','6149','3336-9406','RM - AT\r',NULL);
INSERT INTO ramais VALUES ('SALVADOR','16','71','6161','3255-8400','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('SALVADOR','16','71','6162','3255-8433','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('SALVADOR','16','71','6163','3255-8416','CPD\r',NULL);
INSERT INTO ramais VALUES ('SALVADOR','16','71','6164','3255-8429','Fax\r',NULL);
INSERT INTO ramais VALUES ('SALVADOR','16','71','6165','3255-8432','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('SALVADOR','16','71','6166','3255-8405','Gerencia\r',NULL);
INSERT INTO ramais VALUES ('SALVADOR','16','71','6167','3255-8401','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('SALVADOR','16','71','6168','3255-8414','RH\r',NULL);
INSERT INTO ramais VALUES ('SALVADOR','16','71','6169','3255-8406','RM\r',NULL);
INSERT INTO ramais VALUES ('PRAIAGRD','17','13','6171','3476-8444','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('PRAIAGRD','17','13','6172','3476-8433','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('PRAIAGRD','17','13','6173','3476-8415','CPD\r',NULL);
INSERT INTO ramais VALUES ('PRAIAGRD','17','13','6174','3476-8429','Fax\r',NULL);
INSERT INTO ramais VALUES ('PRAIAGRD','17','13','6175','3476-8431','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('PRAIAGRD','17','13','6176','3476-8405','Gerencia\r',NULL);
INSERT INTO ramais VALUES ('PRAIAGRD','17','13','6177','3476-8401','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('PRAIAGRD','17','13','6178','3476-8414','RH\r',NULL);
INSERT INTO ramais VALUES ('PRAIAGRD','17','13','6179','3476-8406','RM\r',NULL);
INSERT INTO ramais VALUES ('SANTO AMARO','20','11','6201','5515-9344','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('SANTO AMARO','20','11','6202','5515-9333','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('SANTO AMARO','20','11','6203','5515-9315','Cpd\r',NULL);
INSERT INTO ramais VALUES ('SANTO AMARO','20','11','6204','5515-9319','Fax\r',NULL);
INSERT INTO ramais VALUES ('SANTO AMARO','20','11','6205','5515-9331','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('SANTO AMARO','20','11','6206','5515-9305','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('SANTO AMARO','20','11','6207','5515-9301','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('SANTO AMARO','20','11','6208','5515-9314','RH\r',NULL);
INSERT INTO ramais VALUES ('SANTO AMARO','20','11','6209','5515-9306','RM\r',NULL);
INSERT INTO ramais VALUES ('SANTO ANDRE','21','11','6211','4469-4444','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('SANTO ANDRE','21','11','6212','4469-4461','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('SANTO ANDRE','21','11','6213','4469-4445','CPD\r',NULL);
INSERT INTO ramais VALUES ('SANTO ANDRE','21','11','6214','4469-4456','Fax\r',NULL);
INSERT INTO ramais VALUES ('SANTO ANDRE','21','11','6215','4469-4458','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('SANTO ANDRE','21','11','6216','4469-4435','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('SANTO ANDRE','21','11','6217','4469-4462','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('SANTO ANDRE','21','11','6218','4469-4463','RH\r',NULL);
INSERT INTO ramais VALUES ('SANTO ANDRE','21','11','6219','4469-4436','RM\r',NULL);
INSERT INTO ramais VALUES ('CAMPINAS','23','19','6231','3716-8444','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('CAMPINAS','23','19','6232','3716-8430','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('CAMPINAS','23','19','6233','3716-8475','CPD\r',NULL);
INSERT INTO ramais VALUES ('CAMPINAS','23','19','6234','3716-8486','Fax\r',NULL);
INSERT INTO ramais VALUES ('CAMPINAS','23','19','6235','3716-8488','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('CAMPINAS','23','19','6236','3716-8465','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('CAMPINAS','23','19','6237','3716-8461','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('CAMPINAS','23','19','6238','3716-8474','RH\r',NULL);
INSERT INTO ramais VALUES ('CAMPINAS','23','19','6239','3716-8466','RM\r',NULL);
INSERT INTO ramais VALUES ('CUIABA','28','65','6281','3618-4444','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('CUIABA','28','65','6282','3618-4433','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('CUIABA','28','65','6283','3618-4416','CPD\r',NULL);
INSERT INTO ramais VALUES ('CUIABA','28','65','6284','3618-4429','Fax\r',NULL);
INSERT INTO ramais VALUES ('CUIABA','28','65','6285','3618-4431','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('CUIABA','28','65','6286','3618-4405','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('CUIABA','28','65','6287','3618-4401','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('CUIABA','28','65','6288','3618-4414','RH\r',NULL);
INSERT INTO ramais VALUES ('CUIABA','28','65','6289','3618-4406','RM\r',NULL);
INSERT INTO ramais VALUES ('CPOGRDAS','31','67','6311','3345-4400','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('CPOGRDAS','31','67','6312','3345-4473','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('CPOGRDAS','31','67','6313','3345-4415','CPD\r',NULL);
INSERT INTO ramais VALUES ('CPOGRDAS','31','67','6314','3345-4422','Fax\r',NULL);
INSERT INTO ramais VALUES ('CPOGRDAS','31','67','6315','','\r',NULL);
INSERT INTO ramais VALUES ('CPOGRDAS','31','67','6316','3345-4401','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('CPOGRDAS','31','67','6317','3345-4405','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('CPOGRDAS','31','67','6318','3345-4471','RH\r',NULL);
INSERT INTO ramais VALUES ('CPOGRDAS','31','67','6319','3345-4424','RM\r',NULL);
INSERT INTO ramais VALUES ('LIMEIRA','32','19','6321','3446-8444','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('LIMEIRA','32','19','6322','3446-8433','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('LIMEIRA','32','19','6323','3446-8415','CPD\r',NULL);
INSERT INTO ramais VALUES ('LIMEIRA','32','19','6324','3446-8429','Fax\r',NULL);
INSERT INTO ramais VALUES ('LIMEIRA','32','19','6325','3446-8431','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('LIMEIRA','32','19','6326','3446-8405','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('LIMEIRA','32','19','6327','3446-8401','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('LIMEIRA','32','19','6328','3446-8414','RH\r',NULL);
INSERT INTO ramais VALUES ('LIMEIRA','32','19','6329','3446-8406','RM\r',NULL);
INSERT INTO ramais VALUES ('S√O MIGUEL','35','11','6351','6582-8044','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('S√O MIGUEL','35','11','6352','6582-8033','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('S√O MIGUEL','35','11','6353','6582-8015','CPD\r',NULL);
INSERT INTO ramais VALUES ('S√O MIGUEL','35','11','6354','6582-8029','Fax\r',NULL);
INSERT INTO ramais VALUES ('S√O MIGUEL','35','11','6355','6582-8031','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('S√O MIGUEL','35','11','6356','6582-8005','Gerencia\r',NULL);
INSERT INTO ramais VALUES ('S√O MIGUEL','35','11','6357','6582-8001','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('S√O MIGUEL','35','11','6358','6582-8014','RH\r',NULL);
INSERT INTO ramais VALUES ('S√O MIGUEL','35','11','6359','6582-8006','RM\r',NULL);
INSERT INTO ramais VALUES ('LONDRINA','39','43','6391','3374-8444','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('LONDRINA','39','43','6392','3374-8433','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('LONDRINA','39','43','6393','3374-8416','CPD\r',NULL);
INSERT INTO ramais VALUES ('LONDRINA','39','43','6394','3374-8429','Fax\r',NULL);
INSERT INTO ramais VALUES ('LONDRINA','39','43','6395','3374-8431','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('LONDRINA','39','43','6396','3374-8405','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('LONDRINA','39','43','6397','3374-8401','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('LONDRINA','39','43','6398','3374-8435','RH\r',NULL);
INSERT INTO ramais VALUES ('LONDRINA','39','43','6399','3374-8406','RM\r',NULL);
INSERT INTO ramais VALUES ('MARINGA','42','44','6420','3218-8447','Compras\r',NULL);
INSERT INTO ramais VALUES ('MARINGA','42','44','6421','3218-8444','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('MARINGA','42','44','6422','3218-8433','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('MARINGA','42','44','6423','3218-8416','CPD\r',NULL);
INSERT INTO ramais VALUES ('MARINGA','42','44','6424','3218-8429','Fax\r',NULL);
INSERT INTO ramais VALUES ('MARINGA','42','44','6425','3218-8431','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('MARINGA','42','44','6426','3218-8405','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('MARINGA','42','44','6427','3218-8401','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('MARINGA','42','44','6428','3218-8435','RH\r',NULL);
INSERT INTO ramais VALUES ('MARINGA','42','44','6429','3218-8406','RM\r',NULL);
INSERT INTO ramais VALUES ('CARAPICUIBA','43','11','6431','4185-8150','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('CARAPICUIBA','43','11','6432','4185-8133','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('CARAPICUIBA','43','11','6433','4185-8115','C.P.D.\r',NULL);
INSERT INTO ramais VALUES ('CARAPICUIBA','43','11','6434','4185-8129','Fax\r',NULL);
INSERT INTO ramais VALUES ('CARAPICUIBA','43','11','6435','4185-8131','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('CARAPICUIBA','43','11','6436','4185-8105','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('CARAPICUIBA','43','11','6437','4185-8101','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('CARAPICUIBA','43','11','6438','4185-8114','RH\r',NULL);
INSERT INTO ramais VALUES ('CARAPICUIBA','43','11','6439','4185-8106','RM\r',NULL);
INSERT INTO ramais VALUES ('RONDONOPOLIS','44','66','6441','3411-2470','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('RONDONOPOLIS','44','66','6442','3411-2433','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('RONDONOPOLIS','44','66','6443','3411-2415','CPD\r',NULL);
INSERT INTO ramais VALUES ('RONDONOPOLIS','44','66','6444','3411-2429','Fax\r',NULL);
INSERT INTO ramais VALUES ('RONDONOPOLIS','44','66','6445','3411-2431','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('RONDONOPOLIS','44','66','6446','3411-2405','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('RONDONOPOLIS','44','66','6447','3411-2401','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('RONDONOPOLIS','44','66','6448','3411-2414','RH\r',NULL);
INSERT INTO ramais VALUES ('RONDONOPOLIS','44','66','6449','3411-2406','RM\r',NULL);
INSERT INTO ramais VALUES ('TIJUCAL','45','65','6450','3611-4450','Compras\r',NULL);
INSERT INTO ramais VALUES ('TIJUCAL','45','65','6451','3611-4444','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('TIJUCAL','45','65','6452','3611-4433','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('TIJUCAL','45','65','6453','3611-4415','CPD\r',NULL);
INSERT INTO ramais VALUES ('TIJUCAL','45','65','6454','3611-4429','Fax\r',NULL);
INSERT INTO ramais VALUES ('TIJUCAL','45','65','6455','3611-4431','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('TIJUCAL','45','65','6456','3611-4405','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('TIJUCAL','45','65','6457','3611-4401','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('TIJUCAL','45','65','6458','3611-4414','RH\r',NULL);
INSERT INTO ramais VALUES ('TIJUCAL','45','65','6459','3611-4406','RM\r',NULL);
INSERT INTO ramais VALUES ('SANTOS','46','13','6461','3298-4444','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('SANTOS','46','13','6462','3298-4433','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('SANTOS','46','13','6463','3298-4415','CPD\r',NULL);
INSERT INTO ramais VALUES ('SANTOS','46','13','6464','3298-4429','Fax\r',NULL);
INSERT INTO ramais VALUES ('SANTOS','46','13','6465','3298-4431','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('SANTOS','46','13','6466','3298-4405','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('SANTOS','46','13','6467','3298-4401','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('SANTOS','46','13','6468','3298-4414','RH\r',NULL);
INSERT INTO ramais VALUES ('SANTOS','46','13','6469','3298-4406','RM\r',NULL);
INSERT INTO ramais VALUES ('RECIFE','47','81','6471','3271-5450','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('RECIFE','47','81','6472','3271-5483','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('RECIFE','47','81','6473','3271-5465','C.P.D.\r',NULL);
INSERT INTO ramais VALUES ('RECIFE','47','81','6474','3271-5479','Fax\r',NULL);
INSERT INTO ramais VALUES ('RECIFE','47','81','6475','3271-5481','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('RECIFE','47','81','6476','3271-5455','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('RECIFE','47','81','6477','3271-5451','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('RECIFE','47','81','6478','3271-5464','RH\r',NULL);
INSERT INTO ramais VALUES ('RECIFE','47','81','6479','3271-5456','RM\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','6480','2535-9456','Ceasa\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','6481','2535-9444','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','6482','2535-9433','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','6483','2535-9415','CPD\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','6484','2535-9429','Fax\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','6485','2535-9457','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','6486','2535-9405','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','6487','2535-9401','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','6488','2535-9435','RH\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','6489','2535-9406','RM\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9401','2535-9401','Adm\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9402','2535-9402','Operacional\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9403','2535-9403','Apoio Gerencia \r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9404','2535-9404','Estoquista\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9405','2535-9405','Gerencia\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9406','2525-9406','Rm\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9406','2535-9407','Rm\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9408','2535-9408','Sala de Reuni„o\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9409','2535-9408','Cartazista\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9410','2535-9410','ManutenÁ„o\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9411','2535-9411','RecepÁ„o\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9414','2535-9414','Rh\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9415','2535-9415','Cpd\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9417','2535-9417','Auditorio\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9418','2535-9418','Cafeteria\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9425','2535-9425','Atend. ao Cliente\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9426','2535-9426','Fcx\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9431','2535-9431','Financeiro \r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9434','2535-9434','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9435','2535-9435','Rh\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9436','2535-9436','Refeitorio\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9439','2535-9439','Sala de Fechamento\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9441','2535-9441','Almoxarifado\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9445','2535-9445','Trocas\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9448','2535-9448','Daniel\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9449','2535-9449','Sala de Reuni„o\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9450','2535-9450','Atend. ao Cliente\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9452','2535-9452','Gilvan\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9456','2535-9456','Sala de Reuni„o\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9458','2535-9458','Horti-Fruti\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9461','2535-9461','Entrada da Loja\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9467','2535-9467','Lider Loja\r',NULL);
INSERT INTO ramais VALUES ('ITAQUERA','48','11','9468','2535-9468','Rm - Fax\r',NULL);
INSERT INTO ramais VALUES ('GUARULHOS','49','11','6491','6404-7444','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('GUARULHOS','49','11','6492','6404-7433','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('GUARULHOS','49','11','6493','6404-7415','CPD\r',NULL);
INSERT INTO ramais VALUES ('GUARULHOS','49','11','6494','6404-7429','Fax\r',NULL);
INSERT INTO ramais VALUES ('GUARULHOS','49','11','6495','6404-7431','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('GUARULHOS','49','11','6496','6404-7405','Gerencia\r',NULL);
INSERT INTO ramais VALUES ('GUARULHOS','49','11','6497','6404-7401','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('GUARULHOS','49','11','6498','6404-7414','RH\r',NULL);
INSERT INTO ramais VALUES ('GUARULHOS','49','11','6499','6404-7406','RM\r',NULL);
INSERT INTO ramais VALUES ('OLINDA','50','81','6500','2122-7450','Compras\r',NULL);
INSERT INTO ramais VALUES ('OLINDA','50','81','6501','2122-7444','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('OLINDA','50','81','6502','2122-7433','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('OLINDA','50','81','6503','2122-7415','CPD\r',NULL);
INSERT INTO ramais VALUES ('OLINDA','50','81','6504','2122-7429','Fax\r',NULL);
INSERT INTO ramais VALUES ('OLINDA','50','81','6505','2122-7431','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('OLINDA','50','81','6506','2122-7405','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('OLINDA','50','81','6507','2122-7401','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('OLINDA','50','81','6508','2122-7414','RH\r',NULL);
INSERT INTO ramais VALUES ('OLINDA','50','81','6509','2122-7406','RM\r',NULL);
INSERT INTO ramais VALUES ('NATAL','51','84','6510','4008-8450','Compras\r',NULL);
INSERT INTO ramais VALUES ('NATAL','51','84','6511','4008-8444','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('NATAL','51','84','6512','4008-8433','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('NATAL','51','84','6513','4008-8415','CPD\r',NULL);
INSERT INTO ramais VALUES ('NATAL','51','84','6514','4008-8429','Fax\r',NULL);
INSERT INTO ramais VALUES ('NATAL','51','84','6515','4008-8431','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('NATAL','51','84','6516','4008-8405','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('NATAL','51','84','6517','4008-8401','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('NATAL','51','84','6518','4008-8414','RH\r',NULL);
INSERT INTO ramais VALUES ('NATAL','51','84','6519','4008-8406','RM\r',NULL);
INSERT INTO ramais VALUES ('LAURO DE FREITAS','52','71','6520','2103-7450','Compras\r',NULL);
INSERT INTO ramais VALUES ('LAURO DE FREITAS','52','71','6521','2103-7444','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('LAURO DE FREITAS','52','71','6522','2103-7433','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('LAURO DE FREITAS','52','71','6523','2103-7415','CPD\r',NULL);
INSERT INTO ramais VALUES ('LAURO DE FREITAS','52','71','6524','2103-7429','Fax\r',NULL);
INSERT INTO ramais VALUES ('LAURO DE FREITAS','52','71','6525','2103-7431','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('LAURO DE FREITAS','52','71','6526','2103-7405','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('LAURO DE FREITAS','52','71','6527','2103-7401','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('LAURO DE FREITAS','52','71','6528','2103-7414','RH\r',NULL);
INSERT INTO ramais VALUES ('LAURO DE FREITAS','52','71','6529','2103-7406','RM\r',NULL);
INSERT INTO ramais VALUES ('GUARUJA','53','13','6531','3389-8444','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('GUARUJA','53','13','6532','3389-8433','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('GUARUJA','53','13','6533','3389-8415','CPD\r',NULL);
INSERT INTO ramais VALUES ('GUARUJA','53','13','6534','3389-8429','Fax\r',NULL);
INSERT INTO ramais VALUES ('GUARUJA','53','13','6535','3389-8431','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('GUARUJA','53','13','6536','3389-8405','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('GUARUJA','53','13','6537','3389-8401','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('GUARUJA','53','13','6538','3389-8414','RH\r',NULL);
INSERT INTO ramais VALUES ('GUARUJA','53','13','6539','3389-8406','RM\r',NULL);
INSERT INTO ramais VALUES ('SUZANO','54','11','6541','4744-8644','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('SUZANO','54','11','6542','4744-8633','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('SUZANO','54','11','6543','4744-8615','CPD\r',NULL);
INSERT INTO ramais VALUES ('SUZANO','54','11','6544','4744-8629','Fax\r',NULL);
INSERT INTO ramais VALUES ('SUZANO','54','11','6545','4744-8631','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('SUZANO','54','11','6546','4744-8605','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('SUZANO','54','11','6547','4744-8601','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('SUZANO','54','11','6548','4744-8614','RH\r',NULL);
INSERT INTO ramais VALUES ('SUZANO','54','11','6549','4744-8606','RM\r',NULL);
INSERT INTO ramais VALUES ('JABOAT√O','55','81','6550','3375-8250','Compras\r',NULL);
INSERT INTO ramais VALUES ('JABOAT√O','55','81','6551','3375-8244','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('JABOAT√O','55','81','6552','3375-8233','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('JABOAT√O','55','81','6553','3375-8215','CPD\r',NULL);
INSERT INTO ramais VALUES ('JABOAT√O','55','81','6554','3375-8229','Fax\r',NULL);
INSERT INTO ramais VALUES ('JABOAT√O','55','81','6555','3375-8231','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('JABOAT√O','55','81','6556','3375-8205','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('JABOAT√O','55','81','6557','3375-8201','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('JABOAT√O','55','81','6558','3375-8214','RH\r',NULL);
INSERT INTO ramais VALUES ('JABOAT√O','55','81','6559','3375-8206','RM\r',NULL);
INSERT INTO ramais VALUES ('CARUARU','56','81','6560','3722-8786','Compras\r',NULL);
INSERT INTO ramais VALUES ('CARUARU','56','81','6561','3722-8750','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('CARUARU','56','81','6562','3722-8776','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('CARUARU','56','81','6563','3722-8765','CPD\r',NULL);
INSERT INTO ramais VALUES ('CARUARU','56','81','6564','3722-8773','Fax\r',NULL);
INSERT INTO ramais VALUES ('CARUARU','56','81','6565','3722-8774','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('CARUARU','56','81','6566','3722-8755','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('CARUARU','56','81','6567','3722-8751','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('CARUARU','56','81','6568','3722-8759','RH\r',NULL);
INSERT INTO ramais VALUES ('CARUARU','56','81','6569','3722-8756','RM\r',NULL);
INSERT INTO ramais VALUES ('PARELHEIROS','57','11','6571','5929-8444','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('PARELHEIROS','57','11','6572','5929-8433','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('PARELHEIROS','57','11','6573','5929-8415','CPD\r',NULL);
INSERT INTO ramais VALUES ('PARELHEIROS','57','11','6574','5929-8429','Fax\r',NULL);
INSERT INTO ramais VALUES ('PARELHEIROS','57','11','6575','5929-8431','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('PARELHEIROS','57','11','6576','5929-8405','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('PARELHEIROS','57','11','6577','5929-8401','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('PARELHEIROS','57','11','6578','5929-8414','RH\r',NULL);
INSERT INTO ramais VALUES ('PARELHEIROS','57','11','6579','5929-8406','RM\r',NULL);
INSERT INTO ramais VALUES ('CAJAZEIRAS','58','71','6581','3238-8000','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('CAJAZEIRAS','58','71','6582','3238-8033','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('CAJAZEIRAS','58','71','6583','3238-8015','CPD\r',NULL);
INSERT INTO ramais VALUES ('CAJAZEIRAS','58','71','6584','3238-8029','Fax\r',NULL);
INSERT INTO ramais VALUES ('CAJAZEIRAS','58','71','6585','3238-8031','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('CAJAZEIRAS','58','71','6586','3238-8005','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('CAJAZEIRAS','58','71','6587','3238-8001','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('CAJAZEIRAS','58','71','6588','3238-8014','RH\r',NULL);
INSERT INTO ramais VALUES ('CAJAZEIRAS','58','71','6589','3238-8006','RM\r',NULL);
INSERT INTO ramais VALUES ('COTIA','59','11','6591','4615-8044','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('COTIA','59','11','6592','4615-8033','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('COTIA','59','11','6593','4615-8015','CPD\r',NULL);
INSERT INTO ramais VALUES ('COTIA','59','11','6594','4615-8029','Fax\r',NULL);
INSERT INTO ramais VALUES ('COTIA','59','11','6595','4615-8031','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('COTIA','59','11','6596','4615-8005','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('COTIA','59','11','6597','4615-8001','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('COTIA','59','11','6598','4615-8014','RH\r',NULL);
INSERT INTO ramais VALUES ('COTIA','59','11','6599','4615-8006','RM\r',NULL);
INSERT INTO ramais VALUES ('VILA MARIA','60','11','6601','2795-4444','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('VILA MARIA','60','11','6602','2795-4433','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('VILA MARIA','60','11','6603','2795-4415','CPD\r',NULL);
INSERT INTO ramais VALUES ('VILA MARIA','60','11','6604','2795-4429','Fax\r',NULL);
INSERT INTO ramais VALUES ('VILA MARIA','60','11','6605','2795-4431','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('VILA MARIA','60','11','6606','2795-4405','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('VILA MARIA','60','11','6607','2795-4401','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('VILA MARIA','60','11','6608','2795-4414','RH\r',NULL);
INSERT INTO ramais VALUES ('VILA MARIA','60','11','6609','2795-4406','RM\r',NULL);
INSERT INTO ramais VALUES ('BRASILIA','61','61','6611','3448-8444','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('BRASILIA','61','61','6612','3448-8433','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('BRASILIA','61','61','6613','3448-8415','CPD\r',NULL);
INSERT INTO ramais VALUES ('BRASILIA','61','61','6614','3448-8429','Fax\r',NULL);
INSERT INTO ramais VALUES ('BRASILIA','61','61','6615','3448-8431','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('BRASILIA','61','61','6616','3448-8405','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('BRASILIA','61','61','6617','3448-8401','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('BRASILIA','61','61','6618','3448-8414','RH\r',NULL);
INSERT INTO ramais VALUES ('BRASILIA','61','61','6619','3448-8406','RM\r',NULL);
INSERT INTO ramais VALUES ('NATALNORTE','62','84','6621','3344-6144','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('NATALNORTE','62','84','6622','3344-6133','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('NATALNORTE','62','84','6623','3344-6115','CPD\r',NULL);
INSERT INTO ramais VALUES ('NATALNORTE','62','84','6624','3344-6129','Fax\r',NULL);
INSERT INTO ramais VALUES ('NATALNORTE','62','84','6625','3344-6131','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('NATALNORTE','62','84','6626','3344-6105','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('NATALNORTE','62','84','6627','3344-6101','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('NATALNORTE','62','84','6628','3344-6114','RH\r',NULL);
INSERT INTO ramais VALUES ('NATALNORTE','62','84','6629','3344-6106','RM\r',NULL);
INSERT INTO ramais VALUES ('AUTO CLUBE','63','21','6631','2173-4944','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('AUTO CLUBE','63','21','6632','2173-4933','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('AUTO CLUBE','63','21','6633','2173-4915','CPD\r',NULL);
INSERT INTO ramais VALUES ('AUTO CLUBE','63','21','6634','2173-4929','Fax\r',NULL);
INSERT INTO ramais VALUES ('AUTO CLUBE','63','21','6635','2173-4931','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('AUTO CLUBE','63','21','6636','2173-4905','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('AUTO CLUBE','63','21','6637','2173-4901','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('AUTO CLUBE','63','21','6638','2173-4914','RH\r',NULL);
INSERT INTO ramais VALUES ('AUTO CLUBE','63','21','6639','2173-4906','RM\r',NULL);
INSERT INTO ramais VALUES ('GOIANIA','64','62','6641','3236-9244','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('GOIANIA','64','62','6642','3236-9233','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('GOIANIA','64','62','6643','3236-9215','CPD\r',NULL);
INSERT INTO ramais VALUES ('GOIANIA','64','62','6644','3236-9229','Fax\r',NULL);
INSERT INTO ramais VALUES ('GOIANIA','64','62','6645','3236-9231','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('GOIANIA','64','62','6646','3236-9205','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('GOIANIA','64','62','6647','3236-9201','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('GOIANIA','64','62','6648','3236-9214','RH\r',NULL);
INSERT INTO ramais VALUES ('GOIANIA','64','62','6649','3236-9206','RM\r',NULL);
INSERT INTO ramais VALUES ('FEIRA DE SANTANA','66','75','6661','3322-9600','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('FEIRA DE SANTANA','66','75','6662','3322-9633','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('FEIRA DE SANTANA','66','75','6663','3322-9615','CPD\r',NULL);
INSERT INTO ramais VALUES ('FEIRA DE SANTANA','66','75','6664','3322-9629','Fax\r',NULL);
INSERT INTO ramais VALUES ('FEIRA DE SANTANA','66','75','6665','3322-9631','Financeiro\r',NULL);
INSERT INTO ramais VALUES ('FEIRA DE SANTANA','66','75','6666','3322-9605','GerÍncia\r',NULL);
INSERT INTO ramais VALUES ('FEIRA DE SANTANA','66','75','6667','3322-9601','Supervis„o Adm\r',NULL);
INSERT INTO ramais VALUES ('FEIRA DE SANTANA','66','75','6668','3322-9614','RH\r',NULL);
INSERT INTO ramais VALUES ('FEIRA DE SANTANA','66','75','6669','3322-9606','RM\r',NULL);
INSERT INTO ramais VALUES ('NOVA IGUA«U','67','21','6671','3622-1344','Cadastro\r',NULL);
INSERT INTO ramais VALUES ('NOVA IGUA«U','67','21','6672','3622-1333','Contabilidade\r',NULL);
INSERT INTO ramais VALUES ('NOVA IGUA«U','67','21','6673','3622-1315','CPD','\r');
INSERT INTO ramais VALUES ('NOVA IGUA«U','67','21','6674','3622-1329','Fax','\r');
INSERT INTO ramais VALUES ('NOVA IGUA«U','67','21','6675','3622-1331','Financeiro','\r');
INSERT INTO ramais VALUES ('NOVA IGUA«U','67','21','6676','3622-1305','GerÍncia','\r');
INSERT INTO ramais VALUES ('NOVA IGUA«U','67','21','6677','3622-1301','Supervis„o Adm','\r');
INSERT INTO ramais VALUES ('NOVA IGUA«U','67','21','6678','3622-1314','RH','\r');
INSERT INTO ramais VALUES ('NOVA IGUA«U','67','21','6679','3622-1306','RM','\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018227','8227','Cleiton','Almoxarifado\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018321','8321','Fax','Almoxarifado\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018437','8437','Jhuan','Almoxarifado\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018234','8234','Roberto','Almoxarifado\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018236','8236','Rodrigo','Almoxarifado\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018367','8367','Marcos','Apoio Frota\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018390','8390','Ailton','ArmazÈm\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018490','8490','Bianor/JosÈ RÈgio','ArmazÈm\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018461','8461','Bosso','ArmazÈm\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018287','8287','Box 13 e 14','ArmazÈm\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018377','8377','Box 6 a 8','ArmazÈm\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018332','8332','Daniel/Tiara','ArmazÈm\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018436','8436','Descarga Nova - Ninja/Nelson','ArmazÈm\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018374','8374','Descarga velha','ArmazÈm\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018432','8432','Descargas Congelado','ArmazÈm\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018271','8271','Donizeti','ArmazÈm\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018366','8366','Importados/Jabaquara','ArmazÈm\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018409','8409','Manuel/Izaurino','ArmazÈm\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018435','8435/8216','Oficina Bragatel','ArmazÈm\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018483','8483','Trocas','ArmazÈm\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018404','8404','Anilton','Balc„o de Vendas (8400)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018303','8303','Apoio a vendas','Balc„o de Vendas (8400)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018375','8375','CÌcero','Balc„o de Vendas (8400)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018423','8423','Cristiano','Balc„o de Vendas (8400)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018322','8322','Dimas','Balc„o de Vendas (8400)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018384','8384','Donizete','Balc„o de Vendas (8400)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018382','8382','Fabio','Balc„o de Vendas (8400)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018344','8344/8464','Fax','Balc„o de Vendas (8400)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018495','8495','Fernando','Balc„o de Vendas (8400)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018381','8381','Franco','Balc„o de Vendas (8400)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018479','8479','Joubert','Balc„o de Vendas (8400)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018398','8398','Marcia','Balc„o de Vendas (8400)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018396','8396','Marcos','Balc„o de Vendas (8400)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018376','8376','Marcos Fozato','Balc„o de Vendas (8400)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018361','8361','Nilce','Balc„o de Vendas (8400)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018399','8399','Oliveira','Balc„o de Vendas (8400)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018348','8348','Patricia','Balc„o de Vendas (8400)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018420','8420','Renata','Balc„o de Vendas (8400)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018277','8277','Ribeiro','Balc„o de Vendas (8400)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018402','8402','SÈrgio Mota','Balc„o de Vendas (8400)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018431','8431','Toninho Lazareti','Balc„o de Vendas (8400)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018405','8405','Toninho Lopes','Balc„o de Vendas (8400)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018386','8386','vago','Balc„o de Vendas (8400)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018373','8373','Vago','Balc„o de Vendas (8400)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018479','8478','Valeria','Balc„o de Vendas (8400)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018318','8318','Welington','Balc„o de Vendas (8400)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018257','8257','Rafael','Bradesco\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018219','8219','Fax','Compras Adm.\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018313','8313','HÈlio Parvo','Compras Adm.\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018237','8237','Luiz Ferracini','Compras Adm.\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018354','8354','Alessandro (assistente)','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018421','8421','Anselmo','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018406','8406','Azevedo (assistente)','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018212','8212','Belmiro','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018352','8352','Bragatto','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018316','8316','Bruno','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018452','8452','Claudio Assistente)','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018493','8493','Cleber (assistente)','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018252','8252','Cleverton (assistente)','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018294','8294','Cristiano','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018273','8273','Danilo (assistente)','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018259','8259','Danilo (assistente)','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018425','8425','Denis (assistente)','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018391','8391','Denis (assistente)','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018472','8472','Diogenes (assistente)','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018246','8246','Douglas','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018314','8314','Eduardo','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018489','8489','Emerson','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018349','8349','F·bio (assistente)','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018326','8326','Fabricio','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018334','8334','Fax','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018485','8485','Felipe (assistente)','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018401','8401','Fidel','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018357','8357','GessÈ','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018418','8418','Herculano','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018308','8308','Jeferson (assistente)','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018315','8315','Maciel','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018363','8363','Marly','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018263','8263','Neuto','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018484','8484','Nivaldo','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018276','8276','Olinda','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018458','8458','Otavio','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018364','8364','Pereira','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018209','8209','Peter','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018261','8261','RecepÁ„o Ana','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018414','8414','Sala de Fornecedores','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018451','8451','Sidnei','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018476','8476','Wellington (assistente)','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018397','8397','Wladimir (assistente)','Compras Comerciais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018222','8222','Anderson','Contabilidade\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018223','8223','Antonieta/Wellington','Contabilidade\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018347','8347','Antonio/Cleide/Murilo','Contabilidade\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018296','8296','Arquivo morto','Contabilidade\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018456','8456','Cibele/VinÌcius','Contabilidade\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018224','8224','CÌcera','Contabilidade\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018496','8496','Fabiana/Bettin','Contabilidade\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018379','8379','George','Contabilidade\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018279','8279','Jaqueline','Contabilidade\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018232','8232','Katia Alves/Diego/Willian','Contabilidade\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018327','8327','K·tia Leite/Vanessa','Contabilidade\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018473','8473','K·tia Santos/Wellington P.','Contabilidade\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018241','8241','Luciana/Luciene','Contabilidade\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018481','8481','M·rcio Ferrari','Contabilidade\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018499','8499','Marcos/KÈsia','Contabilidade\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018346','8346','Margarete','Contabilidade\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018244','8244','Rose','Contabilidade\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018266','8266','Adriana Sena','Contas a Pagar (8320)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018215','8215','Adriana Souza','Contas a Pagar (8320)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018239','8239','Anderson','Contas a Pagar (8320)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018268','8268','AntÙnio','Contas a Pagar (8320)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018243','8243','Eloisa','Contas a Pagar (8320)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018264','8264','Gislene/Angelo','Contas a Pagar (8320)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018267','8267','Wagner','Contas a Pagar (8320)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018211','8211','Cristina Borges/Cristiano','Controladoria\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018311','8311','DÈbora','Controladoria\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018378','8378','Marco Oliveira','Controladoria\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018202','8202','Elaine','CrÈdito/CobranÁa (8330)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018416','8416','Elis‚ngela','CrÈdito/CobranÁa (8330)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018471','8471','Fax','CrÈdito/CobranÁa (8330)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018275','8275','Jackson','CrÈdito/CobranÁa (8330)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018454','8454','Luciana','CrÈdito/CobranÁa (8330)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018288','8288','Ricardo','CrÈdito/CobranÁa (8330)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018427','8427','AuditÛrio','Diretoria\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018329','8329','Fax','Diretoria\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018371','8371','HÈlio Medeiros','Diretoria\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018362','8362','John','Diretoria\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','10028298','8298','Magalh„es','Diretoria\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018407','8407','Roberto','Diretoria\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018345','8345','Romilza','Diretoria\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018245','8245','Sala de Reuniıes','Diretoria\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018208','8208','Simone','Diretoria\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018204','8204','Simone','Diretoria\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018248','8248','Deise','Expans„o e Obras\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018240','8240','Eduardo','Expans„o e Obras\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018207','8207','Fax','Expans„o e Obras\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018440','8440','Felipe','Expans„o e Obras\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018474','8474','Michel','Expans„o e Obras\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018206','8206','Patricia','Expans„o e Obras\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018453','8453','Priscila/Reginaldo','Expans„o e Obras\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018369','8369','Rodrigo','Expans„o e Obras\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018455','8455','Durval','ExpediÁ„o\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018331','8331','Fax','ExpediÁ„o\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018445','8445','Nivaldo/Elias','ExpediÁ„o\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018328','8328','Robson','ExpediÁ„o\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018265','8265','Anderson','Financeiro (8310)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018229','8229','Andreia','Financeiro (8310)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018299','8299','Edi','Financeiro (8310)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018351','8351','F·tima','Financeiro (8310)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018319','8319','Fax','Financeiro (8310)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018258','8258','Madalena/Vivian','Financeiro (8310)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018262','8262','Marcelo Hashimoto','Financeiro (8310)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018486','8486','Marcio/Daniela','Financeiro (8310)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018291','8291','Patricia/Adriana/Ricardo','Financeiro (8310)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018272','8272','Valdemar','Financeiro (8310)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018447','8447','Clayton/David','Gerencia Tributaria\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018235','8235','Cleodemir','Gerencia Tributaria\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018429','8429','Geral','Gerencia Tributaria\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018442','8442','Roberto Gil','Gerencia Tributaria\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018350','8350','Marcio/Jamil/Adriano','Inform·tica-DBA\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018387','8387','Claudia/Daniela','Inform·tica-Desenvolvimento\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018395','8395','Denis/Fabio','Inform·tica-Desenvolvimento\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018285','8285','Fernando/Marcelo','Inform·tica-Desenvolvimento\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018302','8302','Jorge','Inform·tica-Desenvolvimento\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018324','8324','Marco Antonio','Inform·tica-Desenvolvimento\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018317','8317','Maria Helena/Elen','Inform·tica-Desenvolvimento\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018307','8307','Maria/Rafael','Inform·tica-Desenvolvimento\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018201','8201','N·dia/Alexandre','Inform·tica-Desenvolvimento\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018301','8301','Regina','Inform·tica-Desenvolvimento\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018494','8494','Ricardo /Mario','Inform·tica-Desenvolvimento\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018323','8323','Sandra / Elcio','Inform·tica-Desenvolvimento\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018475','8475','Yvan / Elias','Inform·tica-Desenvolvimento\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018439','8439','OperaÁ„o','Inform·tica-ProduÁ„o\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018226','8226','OperaÁ„o / Sala Servidores','Inform·tica-ProduÁ„o\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018297','8297','Pierre','Inform·tica-ProduÁ„o\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018305','8305','Adalberto','Inform·tica-Suporte\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018293','8293','Alex','Inform·tica-Suporte\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018295','8295','Barba','Inform·tica-Suporte\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018460','8460','Breda','Inform·tica-Suporte\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018383','8383','Cicolani','Inform·tica-Suporte\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018430','8430','Daniel/Ren„','Inform·tica-Suporte\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018233','8233','Kleber/Edson Jr.','Inform·tica-Suporte\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018480','8480','Luiz/Rodrigo','Inform·tica-Suporte\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018304','8304','Ricardo','Inform·tica-Suporte\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018274','8274','Alcina','JurÌdico\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018488','8488','Dr.Paulo','JurÌdico\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018217','8217','Dr.SÈrgio','JurÌdico\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018368','8368','Drs. JosÈ Carlos/Carlos Manoel','JurÌdico\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018247','8247','Drs. Rodrigo/Iraneide','JurÌdico\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018242','8242','Fax','JurÌdico\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018393','8393','Vanessa','JurÌdico\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018312','8312','Anderson','ManutenÁ„o\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018419','8419','Baterias/Empilhadeiras','ManutenÁ„o\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018238','8238','Juarez','ManutenÁ„o\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018441','8441','Vasconcelos','ManutenÁ„o\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018469','8469','Fax','Marketing (8470)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018468','8468','Jonatas/Cavalcanti','Marketing (8470)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018465','8465','Juliani','Marketing (8470)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018466','8466','Kelly','Marketing (8470)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018467','8467','Paulo','Marketing (8470)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018463','8463','Roniele','Marketing (8470)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018457','8457','Alex','PrevenÁ„o e Perdas\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018219','8219','Fax','PrevenÁ„o e Perdas\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018462','8462','Lidiane','PrevenÁ„o e Perdas\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018388','8388','Marcelo','PrevenÁ„o e Perdas\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018359','8359','Paulo Davi','PrevenÁ„o e Perdas\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018269','8269','Rogerio/Ana Cecilia','PrevenÁ„o e Perdas\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018403','8403','Sandra','PrevenÁ„o e Perdas\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018342','8342','Tiago/Marcos','PrevenÁ„o e Perdas\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018251','8251','Adriana / Christiane','RH\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018292','8292','Aloisia / Tatiana','RH\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018255','8255','AmbulatÛrio','RH\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20011036','1036','AuditÛrio','RH\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018427','8427','AuditÛrio','RH\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018343','8343','Cleber/Lidiane','RH\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018394','8394','Cooperativa - Ana Paula','RH\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018253','8253','Cooperativa - Suzana','RH\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018355','8355','Cooperativa/Fax - Ivo','RH\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018254','8254','Cristina / Daniela','RH\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018412','8412','CTA - FEM.','RH\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018281','8281','CTA - MASC.','RH\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018256','8256','Diogo/Jane/Rafael','RH\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018306','8306','Eduardo/Wanderley','RH\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018221','8221','Fax/Cesar','RH\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018497','8497','IntermÈdica','RH\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018282','8282','Lanchonete','RH\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018214','8214','Marcelo/Lucio','RH\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018249','8249','Marcos Tasso','RH\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018477','8477','MÈdicos','RH\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018365','8365','Natanael/Douglas','RH\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018283','8283','ServiÁo de AlimentaÁ„o','RH\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018392','8392/8408','SESMT','RH\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018498','8498','Tania/Sonia','RH\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018446','8446','Cido (estoque)','RM\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018339','8339','Fax','RM\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018353','8353','M·rcio','RM\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018424','8424/8443','Risada','RM\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018218','8218','DAmore','SeguranÁa (8290)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018286','8286','Entrada ArmazÈm','SeguranÁa (8290)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018289','8289','Port„o Principal G-1','SeguranÁa (8290)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018213','8213','Portaria de Caminhıes','SeguranÁa (8290)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018284','8284','RecepÁ„o Adm.','SeguranÁa (8290)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018444','8444','Tele Atendimento','SeguranÁa (8290)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018228','8228','Diego','ServiÁos Gerais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018487','8487','Fax','ServiÁos Gerais\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018331','8331','Fax','TransferÍncia (8370)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018225','8225','Paulo','TransferÍncia (8370)\r');
INSERT INTO ramais VALUES ('MATRIZ','1','11','20018358','8358','Sergio/Fernando','TransferÍncia (8370)\r');

--
-- Table structure for table `relatorios`
--

CREATE TABLE relatorios (
  filial varchar(5) NOT NULL default '',
  relatorio varchar(30) NOT NULL default '',
  descricao varchar(255) NOT NULL default '',
  nome_criptografado varchar(50) NOT NULL default '',
  data date NOT NULL default '0000-00-00',
  hora time NOT NULL default '00:00:00',
  PRIMARY KEY  (relatorio)
) TYPE=MyISAM;

--
-- Dumping data for table `relatorios`
--


INSERT INTO relatorios VALUES ('48','srt51.pdf','RELATORIO DE AVALIACAO NIVEL DE ATENDIMENTO','6bda6aa886cc4c80099a5c019c067721.pdf','2009-05-15','19:09:43');
INSERT INTO relatorios VALUES ('48','srt01.pdf','MOVIMENTO DE SAIDAS - RESUMO OPERACIONAL','7668584e638999f96a4f9371cf38bbd1.pdf','2009-05-11','21:43:11');
INSERT INTO relatorios VALUES ('48','sae06.pdf','MERCADORIA BLOQUEADA PARA VENDA','6dd409aa0af531f6e45405383eb46767.pdf','2009-05-11','21:17:55');
INSERT INTO relatorios VALUES ('48','sae08.pdf','ESTATISTICA','f86bb01f46a70920645bc01b103a8ae5.pdf','2009-05-11','21:18:42');
INSERT INTO relatorios VALUES ('48','sae10.pdf','RELATORIO DE PROD. ESGOTADOS/NEGATIVOS NO DIA','6492e65f69a4051027024d7c48f91e65.pdf','2009-05-11','21:19:10');
INSERT INTO relatorios VALUES ('48','sae17.pdf','REL. DE RESIDUO DE MERCADORIA ( EMB.9)','892882591bdafa504ea0648662da74c3.pdf','2009-05-11','21:20:11');
INSERT INTO relatorios VALUES ('48','sae19.pdf','MERCADORIA BLOQUEADA PARA VENDA - ADM','4c8e98d2edc3831f5ffecfd7a1060ad7.pdf','2009-05-11','21:20:45');
INSERT INTO relatorios VALUES ('48','sae02.pdf','R.O - DIARIO','8c061a86b317586d6d84e1db6cfd0f93.pdf','2009-05-13','11:24:31');
INSERT INTO relatorios VALUES ('48','sas08.pdf','RELATORIO DO FECHAMENTO FISCAL DOS PDV‚ÄôS','b4497aa4ccd70c9627f0c30392dc0c86.pdf','2009-05-11','21:22:11');
INSERT INTO relatorios VALUES ('48','sas15.pdf','RESUMO DE VENDAS POR VENCIMENTO','55f654439200ec031c7e5f097e88acb2.pdf','2009-05-11','21:22:34');
INSERT INTO relatorios VALUES ('48','sas22.pdf','RELACAO DE PRECOS ALTERADOS A.S.','f83a40529db7b973ec6fa98b4971d86a.pdf','2009-05-11','21:22:53');
INSERT INTO relatorios VALUES ('48','sas25.pdf','REL. CLIENTES - LIMITE DO CARTAO INCOMPA','881038315db8ac7dd7fb07166697c3e7.pdf','2009-05-11','21:24:05');
INSERT INTO relatorios VALUES ('48','sas32.pdf','DEMONSTRATIVO DE CUPONS EMITIDOS POR OPERADORES - RESUMIDO','aa7825d04f97c716820fadceb8aa3387.pdf','2009-05-11','21:24:42');
INSERT INTO relatorios VALUES ('48','sas32_comp.pdf','DEMONSTRATIVO DE CUPONS EMITIDOS POR OPERADORES - COMPLETO','1467c3d7e92f75ad02eb0dcf582e5000.pdf','2009-05-11','21:25:15');
INSERT INTO relatorios VALUES ('48','sas35.pdf','RELATORIO DE QTDE. DE COD. DIGITADOS POR PDV','ece70d4eeacf509c7727e448f12fd98b.pdf','2009-05-11','21:25:48');
INSERT INTO relatorios VALUES ('48','sas36.pdf','RELATORIO DE MERCADORIAS DIGITADAS NOS PDVs','07ae6a42e21f83dbb2afc3614c594adb.pdf','2009-05-11','21:26:19');
INSERT INTO relatorios VALUES ('48','sas44.pdf','REL. DE PRECOS MAJORADOS DURANTE O DIA','67351e479414285242f1cac6ecbd2761.pdf','2009-05-11','21:27:02');
INSERT INTO relatorios VALUES ('48','sas61.pdf','RELATORIO DE CHEQUES PENDENTES ACIMA LIMITE','ea281d7e680141f388f63609207a1d29.pdf','2009-05-11','21:27:45');
INSERT INTO relatorios VALUES ('48','sas66.pdf','MOTIVOS DE ESTORNO','248a32b9a88d67940f7aa4efd5879988.pdf','2009-05-11','21:28:21');
INSERT INTO relatorios VALUES ('48','sas90.pdf','RELATORIO DE NF EMITIDAS ATRAVES DE CUPOM','31f7f145682d9a942bade47f62609f39.pdf','2009-05-11','21:28:46');
INSERT INTO relatorios VALUES ('48','scd23.pdf','VALORIZACAO/DESVALORIZACAO DE ESTOQUE - MENSAL','7ed230e3fd0ac72534789488123d0f1a.pdf','2009-05-11','21:29:23');
INSERT INTO relatorios VALUES ('48','scd52.pdf','RELATORIO DE CLIENTES PERIODO: 60 DIA(S)','cd961607d44a8b81c17441563c637dfb.pdf','2009-05-11','21:30:23');
INSERT INTO relatorios VALUES ('48','scd61_fl.pdf','RELATORIO DE MERCADORIAS FORA DE LINHA','66f7e0d3795e561a1932c52f001068b6.pdf','2009-05-11','21:31:05');
INSERT INTO relatorios VALUES ('48','scd61_nc.pdf','RELATORIO DE MERCADORIAS FORA DE LINHA','66f7e0d3795e561a1932c52f001068b6.pdf','2009-05-11','21:31:28');
INSERT INTO relatorios VALUES ('48','scd66.pdf','RELATORIO DE IDADE DE MERCADORIAS','c38119c624b710c1a2ce1eb6fe4bd5a9.pdf','2009-05-11','21:32:52');
INSERT INTO relatorios VALUES ('48','scd99.pdf','CLIENTES CADASTRADOS NO PERIODO INFORMADO','f879b5bd7d380e4fbd23f5e36f38662b.pdf','2009-05-11','21:35:31');
INSERT INTO relatorios VALUES ('48','sit23.pdf','ITENS COM RENTABILIDADE FORA DOS PARAMETROS','6be84bbb229c48c05150fe7b901f1636.pdf','2009-05-11','21:36:10');
INSERT INTO relatorios VALUES ('48','smg11.pdf','FORA DE LINHA - LISTAGEM DE VALORES','bab1c2e55d00bab28f24f6c79eec85de.pdf','2009-05-11','21:37:01');
INSERT INTO relatorios VALUES ('48','smg12.pdf','BIBLIA - L I S T A G E M D E V A L O R E S','e8504baa736cacf0c8a64e543a219ef0.pdf','2009-05-11','21:37:45');
INSERT INTO relatorios VALUES ('48','smg23.pdf','REL.MERC.C/PRECOS OBRIGATORIOS','ba0afc60d981f536d0638e832d6dd722.pdf','2009-05-11','21:38:05');
INSERT INTO relatorios VALUES ('48','spa09.pdf','ANALISE DA FREQUENCIA DE CLIENTES','29a004492370a225a56885028ec5dbc3.pdf','2009-05-11','21:38:38');
INSERT INTO relatorios VALUES ('48','srm01.pdf','DEMONSTRATIVO DIARIO DE ENTRADAS DDE','809a98891575ce85ba8d6f193cb51e99.pdf','2009-05-11','21:39:12');
INSERT INTO relatorios VALUES ('48','srm02.pdf','ESPELHO DE PEDIDOS PENDENTES','6c5c78d7676a7be7eb69cb54261ce1a8.pdf','2009-05-11','21:39:29');
INSERT INTO relatorios VALUES ('48','srm03.pdf','REL. DOS RECEBIMENTOS DIARIOS','7f989dc61f1bedf9d75e5bd483ed6da3.pdf','2009-05-11','21:41:09');
INSERT INTO relatorios VALUES ('48','srm09.pdf','RELACAO DE NOTAS FISCAIS MANUAIS','9e4084ce10875abb5f465ceabb804ae3.pdf','2009-05-11','21:41:30');
INSERT INTO relatorios VALUES ('48','srm12.pdf','RECEBIMENTOS POR COMPRADOR','ff6d4947d3e8a7d76027470b93a9af76.pdf','2009-05-11','21:41:42');
INSERT INTO relatorios VALUES ('48','srm32.pdf','RELATORIO DE DESCARGAS RECEBIDAS','cf89fb9bcaf9d569d152c532b02ea936.pdf','2009-05-11','21:42:08');
INSERT INTO relatorios VALUES ('48','srt26.pdf','S A I D A S P O R C O M P R A D O R','25af61249477f0c91982f0e0bbbe4bae.pdf','2009-05-11','21:43:45');
INSERT INTO relatorios VALUES ('48','srt50.pdf','SAIDAS POR COMPRADOR RESUMIDO POR SETOR','91389b06e832b0d4a3f1178ffc3a24e1.pdf','2009-05-11','21:49:09');
INSERT INTO relatorios VALUES ('48','svd02.pdf','DEMONSTRATIVO DIARIO DE SAIDAS AUTO SERVICO','69fa4574ec328b2ecc25e2a6422a4d79.pdf','2009-05-11','21:49:39');
INSERT INTO relatorios VALUES ('48','svd04.pdf','RELATORIO DAS MERCADORIAS C/ESTOQUE E S/PRECO','84e43dab573720039d40d1da75ee37bf.pdf','2009-05-11','21:49:57');
INSERT INTO relatorios VALUES ('48','svd07.pdf','RELATORIO DE NOTAS FISCAIS CANCELADAS','ea40a0af574f5f645e8b1d1d3c898ed2.pdf','2009-05-11','21:50:31');
INSERT INTO relatorios VALUES ('48','svd08.pdf','REL. DE NOTAS DE ESTORNO','18bcbd0002a2ad6630dbc1165d4a49ae.pdf','2009-05-11','21:50:54');
INSERT INTO relatorios VALUES ('48','svd18.pdf','RELATORIO DE MERCADORIAS NAO VENDIDAS - AUTO SERVICO','e3d5ccdf005d455d94cb48d9836a5c74.pdf','2009-05-11','21:51:09');
INSERT INTO relatorios VALUES ('48','svd41.pdf','REL DE NOTAS RE-IMPRESSAS','cb4405185e31c2186f35e361426bd71a.pdf','2009-05-11','21:51:50');
INSERT INTO relatorios VALUES ('48','sae03.pdf','R.O - ACUMULADO','b47f40aeba88f7849280876da8ebf915.pdf','2009-05-13','11:22:32');
INSERT INTO relatorios VALUES ('48','sae51_avaria.pdf','RELATORIO DE AVARIA POR SETOR','099a35b8c5010b1b19c98acc0b0c1e21.pdf','2009-06-01','14:08:26');
INSERT INTO relatorios VALUES ('48','avaria_mensal.pdf','REL. DE AVARIA MENSAL','a9f9e0f772628e6454bfd8cafdc007dc.pdf','2009-06-10','10:38:27');
INSERT INTO relatorios VALUES ('48','sae51_ajuste.pdf','RELATORIO DE AJUSTE POR SETOR','1c3d70ae3d34764f7696f891d94e9c16.pdf','2009-06-01','14:11:14');
INSERT INTO relatorios VALUES ('48','ajuste_mensal.pdf','REL. DE AJUSTE MENSAL','e3e0336372b830a3da1a0d895d65e224.pdf','2009-06-10','10:39:05');
INSERT INTO relatorios VALUES ('48','sae25.pdf','RELATORIO DE AJUSTE DE ESTOQUE NEGATIVO','4df5b451a6b4ef0e694779c84112849c.pdf','2009-06-15','14:39:44');
INSERT INTO relatorios VALUES ('48','receb_s_est.pdf',' RELATORIO DE ENTRADAS DE MERCADORIAS','a9f8d5c619c1bbfbf7eaaaa0c919580a.pdf','2009-07-02','19:40:33');
INSERT INTO relatorios VALUES ('48','receb_s_vnd.pdf','RELATORIO DE ENTRADAS DE MERCADORIAS','73614eb336eefd5b1db5d6318d601e25.pdf','2009-07-02','19:41:04');
INSERT INTO relatorios VALUES ('48','receb_compl.pdf',' RELATORIO DE ENTRADAS DE MERCADORIAS','a9f8d5c619c1bbfbf7eaaaa0c919580a.pdf','2009-07-02','19:41:28');

--
-- Table structure for table `usuarios`
--

CREATE TABLE usuarios (
  login varchar(200) NOT NULL default '',
  senha varchar(200) NOT NULL default '',
  setor varchar(30) NOT NULL default '',
  PRIMARY KEY  (login)
) TYPE=MyISAM;

--
-- Dumping data for table `usuarios`
--


INSERT INTO usuarios VALUES ('fox','1ee1877c6655ecc71dfead311c771bd0','Seguran√ßa');
