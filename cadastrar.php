<?php

	require_once 'conexao_bd.class.php';

	$conexao = Conexao_bd::conn();


	try {

		$sql = "INSERT INTO usuario (nome, sexo, email, data_nasc, telefone, senha) VALUES 
				(:nome, :sexo, :email, :data_nasc, :telefone, :senha)";

		$stmt = $conexao->prepare($sql);

		$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
		$stmt->bindParam(':sexo', $sexo, PDO::PARAM_STR);
		$stmt->bindParam(':email', $email, PDO::PARAM_STR);
		$stmt->bindParam(':data_nasc', $data_nasc, PDO::PARAM_STR);
		$stmt->bindParam(':telefone', $telefone, PDO::PARAM_STR);
		$stmt->bindParam(':senha', $senha, PDO::PARAM_STR);

		$nome = $_POST['nome'];
		$sexo = $_POST['sexo'];
		$email = $_POST['mail'];
		$data_nasc = $_POST['data_nasc'];
		$telefone = $_POST['telefone'];
		$senha = md5($_POST['senha']);

		$stmt->execute();
		$last_id = $conexao->lastInsertId();

		$sql = "INSERT INTO lista_tops (id_usuario, id_titulos, num_top) VALUES 
				(:id_usuario, :top1, '1'), (:id_usuario, :top2, '2'), (:id_usuario, :top3, '3'), 
				(:id_usuario, :top4, '4'), (:id_usuario, :top5, '5')";

		$stmt = $conexao->prepare($sql);

		$stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
		$stmt->bindParam(':top1', $top1, PDO::PARAM_INT);
		$stmt->bindParam(':top2', $top2, PDO::PARAM_INT);
		$stmt->bindParam(':top3', $top3, PDO::PARAM_INT);
		$stmt->bindParam(':top4', $top4, PDO::PARAM_INT);
		$stmt->bindParam(':top5', $top5, PDO::PARAM_INT);

		$id_usuario = $last_id;
		$top1 = $_POST['top1'];
		$top2 = $_POST['top2'];
		$top3 = $_POST['top3'];
		$top4 = $_POST['top4'];
		$top5 = $_POST['top5'];

		$stmt->execute();

		echo "Dados Gravados com Sucesso!!";

		echo '<script type="text/javascript">';
		echo 'alert("Dados Gravados com Sucesso!!");';
		echo 'location.href="top5.php";';
		echo '</script>';
		
	} catch (Exception $e) {
		
		echo "Error! Falha ao gravar dados!" . $e->getMessage();
		
		echo '<script type="text/javascript">';
		echo 'alert("Error! Falha ao gravar dados!' . $e->getMessage() . '");';
		echo 'location.href="cadastro.html";';
		echo '</script>';
	}

	$conexao = null;

?>