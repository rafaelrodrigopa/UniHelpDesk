<?php
	require_once "validador_acesso.php";

	session_start();
	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = $_POST['categoria'];
	$descricao = str_replace('#', '-', $_POST['descricao']);
	$id_usuario = $_SESSION['id'];

	$texto = $id_usuario.'#'.$titulo.'#'.$categoria.'#'.$descricao.PHP_EOL;

	//echo $texto;

	$arquivo = fopen('chamados.uni', 'a'); //O parametro a coloca o cursor no final do arquivo

	fwrite($arquivo, $texto);

	fclose($arquivo);

	header('Location: home.php?abertura=true');
?>