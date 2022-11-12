<?php  
class Administrador {

	private $pdo;
	private $cod;
	private $nome;
	private $email;
	private $senha;


	public function conecta($pdo) 
	{
		$this->pdo = $pdo;
	}

	
	public function setNome($nome) {
		$this->nome = $nome;
	}
	public function getNome() {
		return $this->nome;
	}
	public function setEmail($email) {
		$this->email = $email;
	}
	public function getEmail() {
		return $this->email;
	}
	public function setSenha($senha) {
		$this->senha = $senha;
	}
	public function getSenha() {
		return $this->senha;
	}
	
	
	public function cadastrar() 
	{
		$stmt = $this->pdo->prepare("
			INSERT INTO 
				administrador 
					(nome, email, senha) 
			VALUES 
				(:nome, :email, :senha)
		");
		
		$stmt->bindValue(':nome', $this->getNome());
		$stmt->bindValue(':email', $this->getEmail());
		$stmt->bindValue(':senha', $this->getSenha());
		
		$stmt->execute();
		
		if ($stmt->rowCount() > 0) 
		{
			return true;
		}
		
		return false;
	}

	public function esseAdmExiste($senha) 
	{
		$stmt = $this->pdo->prepare("
			SELECT
			 * 
			FROM 
				administrador 
			WHERE senha = :senha
		");
		
		$stmt->bindValue(':senha', $senha);
		$stmt->execute();
		
		if ($stmt->rowCount() > 0) 
		{
			return true;
		}
		
		return false;
	}

	public function setCod($senha) {

		$stmt = $this->pdo->prepare("
			SELECT
			 cod_adm
			FROM 
				administrador 
			WHERE senha = :senha
		");

		$stmt->bindValue(':senha', $senha);
		$stmt->execute();

		if ($stmt->rowCount() > 0) 
		 {
			$stmt = $stmt->fetch(PDO::FETCH_ASSOC);
			$this->cod = $stmt['cod_adm'];
		}
	}
	public function getCod($senha) 
	 {

		$this->setCod($senha);
		return $this->cod;
	}

}
?>