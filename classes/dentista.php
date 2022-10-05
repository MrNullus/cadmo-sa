<?php
class Dentista {

  private $pdo;


  public function conecta($pdo) {
    $this->pdo = $pdo;
  }

  public function getCrm($nome) {
    $crm = 0;

    $stmt = $this->pdo->prepare("SELECT crm FROM dentista WHERE nome = :nome");
    $stmt->bindValue(":nome", $nome);
    $stmt->execute();

    $crm = $stmt;

    return $crm;
  }

}

?>