<?php //CRUD

class armaService {
	private $conexao;
	private $arma; 

	public function __construct(Conexao $conexao, Arma $arma)
	{
		$this->conexao = $conexao->conectar();
		$this->arma = $arma;
	}
	// (INSERT)
	public function inserir(){
		
		$query = "INSERT INTO tbarmas (nome, weapon, categoria, calibre, pais) VALUES (:nome, :weapon, :categoria, :calibre, :pais)";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome', 		$this->arma->__get('nome'));
		$stmt->bindValue(':weapon', 	$this->arma->__get('weapon'));
		$stmt->bindValue(':categoria', 	$this->arma->__get('categoria'));
		$stmt->bindValue(':calibre', 	$this->arma->__get('calibre'));
		$stmt->bindValue(':pais', 		$this->arma->__get('pais'));
		$stmt->execute();
	}

	// (SELECT)
	public function recuperarTodosarmas(){

		$query = "SELECT id, nome, weapon, categoria, calibre, pais FROM tbarmas";

		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll();
			
	}

	public function recuperarUmarma($id){

		$query = "SELECT id, nome, weapon, categoria, calibre, pais FROM tbarmas WHERE id = :id";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $id);
		$stmt->execute();
		return $stmt->fetch();
	}
 
	// (UPDATE )
	public function atualizar()
	{
		$query = "UPDATE tbarmas SET nome = :nome, weapon = :weapon, categoria = :categoria, calibre = :calibre, pais = :pais WHERE id = :id";

		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', 		$this->arma->__get('id'));
		$stmt->bindValue(':nome', 		$this->arma->__get('nome'));
		$stmt->bindValue(':weapon', 	$this->arma->__get('weapon'));
		$stmt->bindValue(':categoria', 	$this->arma->__get('categoria'));
		$stmt->bindValue(':calibre',	$this->arma->__get('calibre'));
		$stmt->bindValue(':pais',		$this->arma->__get('pais'));
		$stmt->execute();
	}


	// DELETE
	public function excluir($id)
	{
		$query = "DELETE FROM tbarmas WHERE id = :id";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $id);
		$stmt->execute();

	}
}
?>