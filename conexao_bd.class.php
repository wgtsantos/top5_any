<?php 

class Conexao_bd {
	// Variável guarda toda informação  de conexão PDO.
	protected static $conexao;

	// Private Contruct - garante que a classe só pode ser instanciada internamente.
	private function __construct(){

		// Informações sobre o banco de dados.
		$db_host = "localhost";
		$db_nome = "top5_any_t";
		$db_usuario = "root";
		$db_senha = "";
		$db_driver = "mysql";

		try {
			// Atribui o objeto PDO à variável $conexão.
			self::$conexao = new PDO("$db_driver:host=$db_host; dbname=$db_nome", $db_usuario, $db_senha);
			// Garante que PDO lance exeções durante erros na conexao.
			self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// Garante que os dados sejam armazenados com codificação UTF-8.
			self::$conexao->exec('SET NAMES utf8');

			// echo "Conectado com Sucesso!!";

		} catch (Exception $e) {

			die("Erro na conexão com Banco de Dados: " . $e->getMessage());
			
			// echo "Erro na Conexão com Banco de Dados " . $e->getMessage();
		}

	}

	public static function conn() {
		// Garante uma unica instancia. Se não exite um conexão, criamos uma nova.
		if (!self::$conexao) {
			new Conexao_bd();
		}
		// Retorna a conexão.
		return self::$conexao;
	
	}

}

?>