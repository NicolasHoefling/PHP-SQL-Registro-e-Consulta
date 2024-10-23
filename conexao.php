<?php
class Conexao {
	private $host = 'localhost';
	private $bancodedados = 'arma';
	private $user = 'root';
	private $password = '';

	public function conectar()
	{
		try {
			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->bancodedados;charset=utf8",
				"$this->user",
				"$this->password"
			);
			return $conexao;
		} 	catch (PDOException $e) {
			echo "<p>. $e->getMessage().</p>";
		}
}}?>