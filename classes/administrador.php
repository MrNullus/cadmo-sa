<?php  
class Administrador {

	private $pdo;
	private $email;
	private $senha;


  public function conecta($pdo) 
  {
    $this->pdo = $pdo;
  }


	public function cadastrar($dados_adm) 
	{

  }

  public function esseAdmExiste($senha) 
  {

  }

}
?>