<?php

	require_once 'conexao_bd.class.php';

	$conexao = Conexao_bd::conn();

	try {

		$sql = "INSERT INTO titulos (nome_titulo, categoria, empresa) VALUES 
				(:nome_titulo, :categoria, :empresa)";

		$stmt = $conexao->prepare($sql);

		$stmt->bindParam(':nome_titulo', $nome_titulo, PDO::PARAM_STR);
		$stmt->bindParam(':categoria', $categoria, PDO::PARAM_STR);
		$stmt->bindParam(':empresa', $empresa, PDO::PARAM_STR);

		$nome_titulo = $_POST['nome_titulo1'];
		$categoria = $_POST['categoria1'];
		$empresa = $_POST['empresa1'];

		$stmt->execute();

		echo "<script type='text/javascript'>";
		echo "alert('Dados Gravados com Sucesso!!');";
		echo "location.href='list_title.php';";
		echo "</script>";
		
	} catch (Exception $e) {

		echo "Erro ao inserir os dados! " . $e->getMessage();
		echo "<script type='text/javascript'>";
		echo "alert('Erro ao inserir os dados! Titulo já existente!! " . $e->getMessage() . "');";
		echo "location.href='cad_title.html';";
		echo "</script>";
				
	}

	$conexao = null;

?>