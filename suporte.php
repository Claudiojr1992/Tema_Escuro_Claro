<?php
/*******************************************************************
 Documentacao de alterações - Projeto GPM
   Data   -  USER     - Chamado -    Obs
 20-02-17 - Ramiro    -   4332  - Modificação da página de suporte (Criação da página.)
 19-04-17 - Jeymsson  -   4332  - Adição do manual de Checklist.
 22-05-17 - Jeymsson  -   4958  - Adição do manual de transferência Sesmt.
 18-06-19 - Jeymsson  -  19985  - Adição da aba Manuais onde conterá a tela Perguntas mais frequentes e os manuais PDF (ambas telas populadas pela cad_solucoes_suporte e cad_manual_suporte.
 25-11-19 - Lucas E   -   37578 - ajuste na exibição dos manuais
 04-08-19 - André     - 111818  - ajuste ordenação dos manuais
 24-05-22 - Fernando  - 261057  - Novos itens sincronismo
 10-10-22 - Fernando  - 294245  - Documentação Obras
*******************************************************************/

session_start();
echo '<!doctype html>';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/include_backend.php';
print "<html><head>";
	print '<meta http-equiv="Content-Type" content="text/html; charset=' . $_SESSION['s_encoding'] . '" />';?>
	<link rel="stylesheet" type="text/css" href="suporte.css">
	<meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" name="viewport">
	<meta content="email=no" name="format-detection">
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
	<title>GPM | SUPORTE</title>
	<script data-id="common">
		function B(a,b,c){
			var d=a.className?a.className.split(" "):[],e=-1!=d.indexOf(b),f="undefined"==typeof c;!c&&!f||e?(!1===c||f)&&e&&(d=d.filter(function(a){
				return a!=b})):d.push(b);a.className=d.join(" ")
		}

		function C(a,b){
			return-1!=a.className.split(" ").indexOf(b)
		}

		function oa(a){
			return(a=(new RegExp("[#&]"+na(encodeURIComponent(a))+"=([^&]*)")).exec(window.location.hash))?decodeURIComponent(a[1]):""
		}

		function na(a){
			return a.replace(/[-\/\\^$*+?.()|[\]{}]/g,"\\$&")
		}
	</script>
</head>
<body class="mobile">
<div class="content-background"></div>
	<div class="hcfe">
		<header>
			<div class="gaiabar material-bar" st-ve="57">
				<div class="gb_lc gb_hd" ng-non-bindable="" id="gb" role="banner">
					<div class="gb_wd"></div>
					<div class="gb_md gb_rd">
						<div class="gb_mc">
							<div class="gb_5b gb_7a" aria-label="Menu principal" role="button" tabindex="0">
								<svg viewbox="0 0 24 24"><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg>
							</div>
						</div>
						<div class="gb_nc gb_jb gb_mc" ng-non-bindable="">
							<div class="gb_oc">
								<div class="gb_fa gb_Oc gb_R gb_Be" id="gbwa">
									<div class="gb_zc">
										<div class="gb_lb"></div>
										<div class="gb_kb"></div>
									</div>
								</div>
								<div class="gb_wc gb_Oc gb_R gb_xc gb_Be"><div class="gb_zc">
									<div class="gb_lb"></div>
									<div class="gb_kb"></div>
								</div>
							</div>
							<div class="gb_gb gb_Oc gb_Mf gb_R gb_Ab gb_Be">
								<div class="gb_zc gb_ib gb_Mf gb_R">
									<div class="gb_lb"></div>
									<div class="gb_kb"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="gb_nd gb_rd"></div>
				</div>
				<div class="gb_Md gb_8b" ng-non-bindable="">
					<div class="gb_vd">
						<div class="gb_Xb">
							<div class="gb_Zb">
								<a class="gb_xd gb_1b" href="/" data-ved="0EMQuCBk"><span class="gb_0a gb_pc"></span></a>
							</div>
						</div>
					</div>
					<div class="gb_bc" role="menu"></div>
				</div>
			</div>
			<div st-ve="32">
				<div class="appbar-container">
					<div class="appbar">
						<span itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="appbar-title" href="" itemprop="url"><span itemprop="title">Ajuda Sistema GPM</span></a></span>
					</div>
				</div>
			</div>
		</header>
	</div>
	<div class="hcfe-content">
		<section class="primary-container">
			<div class="page-width-container">
				<article class="page no-article-survey">
					<nav class="accordion-homepage" st-ve="1">
						<h1>Bem-vindo à Central de Ajuda do do Sistema GPM</h1>
						<section class="parent" data-id="3227046" st-idx="1,2">
							<h2 tabindex="0">Primeiros Passos no Sistema GPM</h2>
							<div class="overflow">
								<div class="children">
									<div class="child"><a href="cadastroUsuario.php">Passo 1 - Cadastro de Usuários</a></div>
									<div class="child"><a href="liberaAcesso.php">Passo 2 - Permissão de Acesso</a></div>
									<div class="child"><a href="cadastroFunc.php">Passo 3 - Cadastro de Funcionarios</a></div>
									<div class="child"><a href="cadastroVeiculo.php">Passo 4 - Cadastro de Veiculo</a></div>
									<div class="child"><a href="cadastroEquipe.php">Passo 5 - Cadastro de Equipes</a></div>
									<div class="child"><a href="cadastroEstoque.php">Passo 6 - Cadastro de Estoques</a></div>
									<div class="child"><a href="CadastroPDA.php">Passo 7 - Como configurar um aparelho e usuário Mobile</a></div>
								</div>
							</div>
						</section>
						<section class="parent" data-id="3421641" st-idx="2,2">
							<h2 tabindex="0">Perguntas mais frequentes</h2>
							<div class="overflow">
								<div class="children">
									<div class="child"><a href="permissoesEstoque.php">Associar permissões de Estoques a um usuário?</a></div>
									<div class="child"><a href="permissoesContrato.php">Como Associar permissões de Contrato a um usuário?</a></div>
									<div class="child"><a href="baixaServico.php">Como baixo um serviço?</a></div>
									<div class="child"><a href="servicosSemMateriais.php">Estou tentando baixar um serviço e os materiais mesmo cadastrados nao aparecem, qual o motivo?</a></div>
									<div class="child"><a href="cadastrandoMetas.php">Como cadastro uma meta?</a></div>
									<div class="child"><a href="cadastrandoAtividadeBaremos.php">Como cadastro uma atividade "baremos"?</a></div>
									<div class="child"><a href="configurarTipoServico.php">Como configuro um Tipo de Serviço?</a></div>
									<div class="child"><a href="cadastroBaixaAvulsaEntrada.php">Como cadastrar uma Baixa Avulsa de Entrada?</a></div>
									<div class="child"><a href="cadastroBaixaAvulsaSaida.php">Como cadastrar uma Baixa Avulsa de Saída?</a></div>
									<div class="child"><a href="cadastroRequisicaoDeMateriais.php">Como cadastrar uma Requisição de Materiais?</a></div>
									<div class="child"><a href="transferenciasDeMateriais.php">Como Cadastrar Transferências de Materiais?</a></div>
									<div class="child"><a href="cadastroChecklist.php">Como Cadastrar um novo Checklist?</a></div>
									<div class="child"><a href="transfSesmt.php">Como realizo uma transferência SESMT?</a></div>
								</div>
							</div>
						</section>
						<section class="parent" data-id="3421641" st-idx="2,2">
							<h2 tabindex="0">Manuais</h2>
							<div class="overflow">
								<div class="children">
									<div class="child"><a href="solucoes_duvidas.php">Perguntas mais frequentes</a></div>
									<?php
									$Sql = "SELECT s.des_manual_msu, s.vlr_manual_msu FROM cad_manual_suporte s WHERE s.id_ativo_msu = 1 ORDER BY des_manual_msu;";
									$Res = $mysqli->query($Sql);
									while ($row = $Res->fetch_array())
										print '<div class="child"><a href="'.$row['vlr_manual_msu'].'">'.$row['des_manual_msu'].'</a></div>';
									?>
								</div>
							</div>
						</section>
					</nav>
				</article>
				<article class="page no-article-survey">
					<nav class="accordion-homepage" st-ve="1">
						<h1>Treinamento Sistema GPM</h1>
						<section class="parent" st-idx="1,4">
							<h2 tabindex="0">Módulo Despacho e Programação</h2>
							<div class="overflow">
								<div class="children">
									<div class="child"><a href="cadastroCliente.php">Como cadastrar clientes?</a></div>
									<div class="child"><a href="consultarServico.php">Como consultar serviços?</a></div>
									<div class="child"><a href="consultaTurno.php">Como consultar turnos?</a></div>
									<div class="child"><a href="resumoOnline.php">Como consultar um resumo online?</a></div>
									<div class="child"><a href="Importando_Servicos_SAP_2.php">Como realizar a importação dos dados de serviço SAP 2?</a></div>
									<div class="child"><a href="despacharServico.php">Como despachar ou programar um serviço?</a></div>
									<div class="child"><a href="relatorioServicoProgramado.php">Como consultar relatórios de serviços Programados, Despachados ou Cancelados?</a></div>
									<div class="child"><a href="controle_baixaOS.php">Como utilizar controle de baixa de ordem de serviço(OS)?</a></div>
									<div class="child"><a href="monitoramentoChamados.php">Como realizar monitoramento dos chamados?</a></div>
									<div class="child"><a href="novoPreDespacho.php">Como utilizar a tela: Novo Pré-Despacho?</a></div>
								</div>
							</div>
						</section>
						<section class="parent" st-idx="2,4">
							<h2 tabindex="0">Módulo Almoxarifado</h2>
							<div class="overflow">
								<div class="children">
									<div class="child"><a href="manual_em_construcao.php">Como cadastrar um material?</a></div>
									<div class="child"><a href="cadastroEstoque.php">Como cadastrar um estoque?</a></div>
									<div class="child"><a href="permissoesEstoque.php">Como permitir que determinado estoque seja visível à um usuário?</a></div>
									<div class="child"><a href="cadastroBaixaAvulsaEntrada.php">Como cadastrar uma baixa entrada avulsa?</a></div>
									<div class="child"><a href="cadastroBaixaAvulsaSaida.php">Como cadastrar uma baixa de saída avulsa?</a></div>
									<div class="child"><a href="cadastroRequisicaoDeMateriais.php">Como cadastrar requisição de materiais?</a></div>
									<div class="child"><a href="transferenciasDeMateriais.php">Como cadastrar transferências de materiais?</a></div>
									<div class="child"><a href="baixaTransferenciaDeMateriais.php">Como realizar baixa de transferência de materiais?</a></div>
									<div class="child"><a href="rastroEstoque.php">Como consultar o rastro de um estoque?</a></div>
									<div class="child"><a href="saldoEstoque.php">Como consultar o saldo de um estoque?</a></div>
									<div class="child"><a href="rastroMateriais.php">Como consultar o rastro de um material?</a></div>
									<div class="child"><a href="consultaBaixas.php">Como consultar o relatório de baixas?</a></div>
									<div class="child"><a href="relatorioTransferencias.php">Como consultar o relatório de transferências?</a></div>
									<div class="child"><a href="graficoBaixaMateriais.php">Como consultar o gráfico de baixa de materiais?</a></div>
									<div class="child"><a href="graficoMovEstoque.php">Como consultar o gráfico de movimentos de estoque?</a></div>
									<div class="child"><a href="graficoMovimentoMateriais.php">Como consultar o gráfico de movimentos de materiais?</a></div>
									<div class="child"><a href="gestaoEPIEPC.php">Como utilizar a tela de Gestão EPI/EPC?</a></div>
									<div class="child"><a href="materiaisVencidos.php">Como realizar o controle de materiais vencidos?</a></div>
								</div>
							</div>
						</section>
						<section class="parent" st-idx="3,4">
							<h2 tabindex="0">Módulo Relatórios Gerenciais</h2>
							<div class="overflow">
								<div class="children">
									<div class="child"><a href="painelCumprimentoEscala.php">Como consultar o painel cumprimento de Escala?</a></div>
									<div class="child"><a href="painelTempoAtividade.php">Como consultar o painel de atividades?</a></div>
									<div class="child"><a href="painelProdutividade.php">Como consultar o painel de produtividade horária?</a></div>
									<div class="child"><a href="gestaoFaturamento.php">Como consultar o relatório de acompanhamento gerencial de faturamento?</a></div>
									<div class="child"><a href="painelFaturamento.php">Como consultar o painel faturamento?</a></div>
									<div class="child"><a href="gestaoEquipe.php">Como consultar o relatório gerencial das equipes?</a></div>
									<div class="child"><a href="relatorioIndicadorProdutividade.php">Como consultar o relatório indicadores?</a></div>
									<div class="child"><a href="faturamentoServicos.php">Como acompanhar faturamento dos serviços?</a></div>
									<div class="child"><a href="consultarServico.php">Como realizar uma consulta de serviço?</a></div>
									<!--<div class="child"><a href="consultaMaterialAplicado.php">Como realizar uma consulta de materais aplicados?</a></div>-->
									<div class="child"><a href="consultaTurno.php">Como realizar uma consulta de turno?</a></div>
									<!--<div class="child"><a href="manual_em_construcao.php">Como realizar uma consulta de despacho realizado?</a></div>-->
									<div class="child"><a href="rastroMateriais.php">Como consultar o rastro de um material?</a></div>
									<div class="child"><a href="saldoEstoque.php">Como consultar o saldo de um estoque no sistema?</a></div>
									<div class="child"><a href="graficoMovEstoque.php">Como consultar o gráfico de movimentos de estoque?</a></div>
									<!--<div class="child"><a href="manual_em_construcao.php">Como fechar turnos Sync?</a></div>-->
									<div class="child"><a href="filaSincronismo.php">Como verificar erros na fila de sincronismo?</a></div>
									<div class="child"><a href="logSincronismoPda.php">Como verificar o tratamento de logs sincronismo PDA?</a></div>
								</div>
							</div>
						</section>
						<section class="parent" st-idx="4,4">
							<h2 tabindex="0">Módulo Cerca eletrônica</h2>
							<div class="overflow">
								<div class="children">
									<div class="child"><a href="cadastroCerca.php">Cadastrando uma cerca</a></div>
									<div class="child"><a href="consultaCerca.php">Consultando uma cerca</a></div>
									<div class="child"><a href="consultaInfracaoAparelho.php">Consulta à infração em cercas de aparelho</a></div>
									<div class="child"><a href="consultaInfracaoTurno.php">Consulta à infração em cercas de turno</a></div>
								</div>
							</div>
						</section>
					</nav>
				</article>
				<article class="page no-article-survey">
					<nav class="accordion-homepage" st-ve="1">
						<h1>Documentação</h1>
						<section class="parent" st-idx="1,9">
							<h2 tabindex="0">Manual de Serviço</h2>
							<div class="overflow">
								<div class="children">
									<div class="child"><a href="manual_em_construcao.php">Novo Pré-Servico</a></div>
									<div class="child"><a href="baixaServico.php">Baixar Servicos</a></div>
									<div class="child"><a href="Importando_Servicos_SAP_2.php">Importando Serviços SAP 2</a></div>
									<div class="child"><a href="despacharServico.php">Despachar Serviço</a></div>
									<div class="child"><a href="relatorioServicoProgramado.php">Relatório de Serviços Programados</a></div>
									<div class="child"><a href="monitoramentoChamados.php">Monitoramento de Chamados</a></div>
									<div class="child"><a href="controleBaixaOS.php">Painel Controle de Baixa OS</a></div>
									<div class="child"><a href="novoPreDespacho.php">Incluir Pré-Despacho</a></div>
									<div class="child"><a href="CadastroMultas.php">Módulo de Gestão de Multas</a></div>
								</div>
							</div>
						</section>
						<section class="parent" st-idx="2,24">
							<h2 tabindex="0">Manual de Obras</h2>
							<div class="overflow">
								<div class="children">
								<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/OBRAS - ACOMPANHAMENTO FATURAMENTO OBRA.pdf">Acompanhamento Faturamento Obra</a></div>
								<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/OBRAS - APONTAMENTO DE OBRAS.pdf">Apontamento de Obras</a></div>
								<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/OBRAS - APONTAMENTO OBRAS SERVICOS.pdf">Apontamento Obras Servicos</a></div>
								<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/OBRAS - CADASTRO DE OBRAS.pdf">Cadastro de Obras</a></div>
								<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/OBRAS - CONSULTA DE OBRAS.pdf">Consulta de Obras</a></div>
								<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/OBRAS - CONSULTA OBRAS MATERIAL.pdf">Consulta Obras Material</a></div>
								<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/OBRAS - CONSULTA VISTORIA.pdf">Consulta Vistoria</a></div>
								<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/OBRAS - CONTROLE STATUS OBRAS.pdf">Controle Status Obras</a></div>
								<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/OBRAS - DESPACHAR OBRAS EQUIPES.pdf">Despachar Obras Equipes</a></div>
								<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/OBRAS - DESPACHO DE VISTORIA OBRAS.pdf">Despacho de Vistoria Obras</a></div>
								<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/OBRAS - EDICAO DE OBRAS.pdf">Edicao de Obras</a></div>
								<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/OBRAS - FATURAMENTO DE OBRAS PARCIAL.pdf">Faturamento de Obras Parcial</a></div>
								<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/OBRAS - FATURAMENTO DE OBRAS.pdf">Faturamento de Obras</a></div>
								<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/OBRAS - FECHAMENTO DE OBRAS.pdf">Fechamento de Obras</a></div>
								<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/OBRAS - GESTÃO DE EQUIPES OBRAS.pdf">Gestão de Equipes Obras</a></div>
								<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/OBRAS - GESTÃO DO FATURAMENTO OBRAS.pdf">Gestão do Faturamento Obras</a></div>
								<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/OBRAS - PAINEL DE OBRAS.pdf">Painel de Obras</a></div>
								<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/OBRAS - PAINEL PROGRAMAÇÃO OBRAS.pdf">Painel Programação Obras</a></div>
								<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/OBRAS - PAINEL VISTORIA OBRAS.pdf">Painel Vistoria Obras</a></div>
								<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/OBRAS - PRE-INVENTÁRIO.pdf">Pre-Inventário</a></div>
								<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/OBRAS - RELATORIO PROGRAMAÇÃO OBRAS.pdf">Relatorio Programação Obras</a></div>
								<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/OBRAS - RELATÓRIO STATUS OBRAS.pdf">Relatório Status Obras</a></div>
								<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/OBRAS - REPROGRAMAÇÃO DE OBRAS.pdf">Reprogramação de Obras</a></div>
								<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/OBRAS - VALIDAR VISTORIA.pdf">Validar Vistoria</a></div>
								</div>
							</div>
						</section>
						<section class="parent" st-idx="3,3">
							<h2 tabindex="0">Manual de Almoxarifado</h2>
							<div class="overflow">
								<div class="children">
									<div class="child"><a href="transferenciasDeMateriais.php">Transferência de materiais</a></div>
									<div class="child"><a href="cadastroBaixaAvulsaEntrada.php">Baixa Avulsa de Entrada</a></div>
									<div class="child"><a href="cadastroBaixaAvulsaSaida.php">Baixa Avulsa de saída</a></div>
								</div>
							</div>
						</section>
						<section class="parent" st-idx="4,2">
							<h2 tabindex="0">Manual de Cadastro</h2>
							<div class="overflow">
								<div class="children">
									<div class="child"><a href="cadastroEstoque.php">Cadastro de Estoques</a></div>
									<div class="child"><a href="importacao_cadastro_veiculo.php">Importação de Veículos</a></div>
								</div>
							</div>
						</section>
						<section class="parent" st-idx="5,1">
							<h2 tabindex="0">Manual de Admin</h2>
							<div class="overflow">
								<div class="children">
									<div class="child"><a href="permissoesEstoque.php">Associar Permissões de Estoque</a></div>
								</div>
							</div>
						</section>
						<!-- <section class="parent" st-idx="5,6">
							<h2 tabindex="0">Manual de Frota</h2>
								<div class="overflow">
								<div class="children">
									<div class="child"><a href="manual_em_construcao.php">Entrada e Saída de Veículos</a></div>
									<div class="child"><a href="manual_em_construcao.php">Controle de Manutenções</a></div>
									<div class="child"><a href="manual_em_construcao.php">Controle de Locação</a></div>
									<div class="child"><a href="manual_em_construcao.php">Gestao de Multa</a></div>
									<div class="child"><a href="manual_em_construcao.php">Serviço de Manutenção</a></div>
									<div class="child"><a href="manual_em_construcao.php">Frota Equipe</a></div>
									<div class="child"><a href="manual_em_construcao.php">Solicitação de Abastecimento</a></div>
								</div>
								</div>
						</section> -->
						<section class="parent" st-idx="6,2">
							<h2 tabindex="0">Manual de Segurança</h2>
							<div class="overflow">
								<div class="children">
									<div class="child"><a href="cadastroCerca.php">Cadastrando uma cerca</a></div>
									<div class="child"><a href="consultaCerca.php">Consultando uma cerca</a></div>
								</div>
							</div>
						</section>
					</nav>
				</article>
				<article class="page no-article-survey">
					<nav class="accordion-homepage" st-ve="1">
						<h1>Sincronismo</h1>
						<section class="parent" st-idx="1,1">
							<h2 tabindex="0">Sincronismo</h2>
							<div class="overflow">
								<div class="children">
									<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/SINCRONISMO+-+CR%C3%8DTICA+EQUIPE+COM+TURNO+ABERTO.pdf">Crítica equipe com turno aberto</a></div>
									<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/SINCRONISMO+-+CR%C3%8DTICA+VE%C3%8DCULO+COM+TURNO+ABERTO.pdf">Crítica veículo com turno aberto</a></div>
									<div class="child"><a target="_blank" href="https://s3-gpm.s3.amazonaws.com/manuais/SINCRONISMO+-+CR%C3%8DTICA+RASTRO.pdf">Crítica rastro</a></div>
								</div>
							</div>
						</section>
					</nav>
				</article>
			</div>
		</section>
	</div>
	
</div>
<script src="suporte.js"</script>
<script>(function(){
	var rid='default';
	if (rid && typeof window[rid]=== 'function'){window[rid]({'getChild':function(){}});
}
})();
</script>
</body>
</html>