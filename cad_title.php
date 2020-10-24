<?php 

	require_once 'conexao_bd.class.php';

	$conexao = Conexao_bd::conn();

try {

	$nome_titulo = $_POST['nome_titulo'];
	$categoria = $_POST['categoria'];
	$empresa = $_POST['empresa'];

	if (!empty($nome_titulo[0])) {

		$sql = "INSERT INTO titulos (nome_titulo, categoria, empresa) VALUES 
			(:nome_titulo1, :categoria1, :empresa1)";

		$cont = 1;
	}
	if (!empty($nome_titulo[0]) && !empty($nome_titulo[1])) {

		$sql = "INSERT INTO titulos (nome_titulo, categoria, empresa) VALUES 
			(:nome_titulo1, :categoria1, :empresa1), (:nome_titulo2, :categoria2, :empresa2)";

		$cont = 2;
	}
	if (!empty($nome_titulo[0]) && !empty($nome_titulo[1]) && !empty($nome_titulo[2])) {

		$sql = "INSERT INTO titulos (nome_titulo, categoria, empresa) VALUES 
			(:nome_titulo1, :categoria1, :empresa1), (:nome_titulo2, :categoria2, :empresa2),
			(:nome_titulo3, :categoria3, :empresa3) ";

		$cont = 3;
	}

	$stmt = $conexao->prepare($sql);

	if ($cont == 1) {
		$stmt->bindParam(':nome_titulo1', $nome_titulo[0], PDO::PARAM_STR);
		$stmt->bindParam(':categoria1', $categoria[0], PDO::PARAM_STR);
		$stmt->bindParam(':empresa1', $empresa[0], PDO::PARAM_STR);
	}
	if ($cont == 2) {
		$stmt->bindParam(':nome_titulo1', $nome_titulo[0], PDO::PARAM_STR);
		$stmt->bindParam(':nome_titulo2', $nome_titulo[1], PDO::PARAM_STR);
		$stmt->bindParam(':categoria1', $categoria[0], PDO::PARAM_STR);
		$stmt->bindParam(':categoria2', $categoria[1], PDO::PARAM_STR);
		$stmt->bindParam(':empresa1', $empresa[0], PDO::PARAM_STR);
		$stmt->bindParam(':empresa2', $empresa[1], PDO::PARAM_STR);	
	}
	if ($cont == 3) {
		$stmt->bindParam(':nome_titulo1', $nome_titulo[0], PDO::PARAM_STR);
		$stmt->bindParam(':nome_titulo2', $nome_titulo[1], PDO::PARAM_STR);
		$stmt->bindParam(':nome_titulo3', $nome_titulo[2], PDO::PARAM_STR);
		$stmt->bindParam(':categoria1', $categoria[0], PDO::PARAM_STR);
		$stmt->bindParam(':categoria2', $categoria[1], PDO::PARAM_STR);
		$stmt->bindParam(':categoria3', $categoria[2], PDO::PARAM_STR);
		$stmt->bindParam(':empresa1', $empresa[0], PDO::PARAM_STR);
		$stmt->bindParam(':empresa2', $empresa[1], PDO::PARAM_STR);
		$stmt->bindParam(':empresa3', $empresa[2], PDO::PARAM_STR);	
	}

	$stmt->execute();

	echo "Dados Gravados com Sucesso!!";
	echo '<script type="text/javascript">';
	echo 'alert("Seu títulos foram cadastrados com Sucesso!!.");';
	echo 'location.href="list_title.php";';
	echo '</script>';
	
} catch (Exception $e) {

	echo "Error! Falha ao gravar dados! Tente Novamente e verifique se não há dados duplicados. " . $e->getMessage();
	echo '<script type="text/javascript">';
	echo 'alert("Error! Falha ao gravar dados! Tente Novamente e verifique se não há dados duplicados. ' . $e->getMessage() . '");';
	echo 'location.href="cad_title.php";';
	echo '</script>';
	
}

?>