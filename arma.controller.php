<?php
include ("conexao.php");
include ("arma.model.php");
include ("arma.service.php");

$arma = new arma();
$conexao = new Conexao();

$acao = isset($_GET['acao']) ? $_GET['acao'] : "";
	if ($acao == 'recuperar') {

		$armaService = new armaService($conexao, $arma);
		$armas = $armaService->recuperarTodosarmas();
	} 
		elseif ($acao == 'inserir') {
			$arma->__set('nome',		$_POST['nome']);
			$arma->__set('weapon',		$_POST['weapon']);
			$arma->__set('categoria',	$_POST['categoria']);
			$arma->__set('calibre',		$_POST['calibre']);
			$arma->__set('pais',		$_POST['pais']);

			$armaService = new armaService($conexao, $arma);
			$armaService->inserir();
			header('Location: inserir_arma.php?inclusao=1');
	}
 		elseif ($acao == 'editar') {
			$arma->__set('nome',		$_POST['nome']);
			$arma->__set('weapon',		$_POST['weapon']);
			$arma->__set('categoria',	$_POST['categoria']);
			$arma->__set('calibre',		$_POST['calibre']);
			$arma->__set('pais',		$_POST['pais']);
			$arma->__set('id',			$_POST['id']);

			$armaService = new armaService($conexao, $arma);
			$armaService->atualizar();
			header('Location: index.php');	
	} 
		elseif ($acao == 'excluir') {
			$id = isset($_GET['id']) ? $_GET['id'] : '';
			$armaService = new armaService($conexao, $arma);
			$armaService->excluir($id);
			header('Location: index.php');
	} 