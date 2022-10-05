<?php
class Consulta {

  private $pdo;


  public function conecta($pdo) {
    $this->pdo = $pdo;
  }

  public function cadastrar_consulta($dados) {
    $dados_preparados = array();

    $stmt = $this->pdo->prepare("INSERT INTO consulta (crm, cod_paciente, dia, hora, valor) VALUES (:crm, :cod_paciente, :dia, :hora, :valor)");

    $stmt->bindValue(':crm', $dados[0]);
    $stmt->bindValue(':cod_paciente', $dados[1]);
    $stmt->bindValue(':dia', $dados[2]);
    $stmt->bindValue(':hora', $dados[3]);
    $stmt->bindValue(':valor', $dados[4]);


    $stmt->execute();

  }

}

?>