<?php
require '../config.php';

$aviso = "";

$consulta = new Consulta();
$consulta->conecta($pdo);


$consultas = $consulta->get_consultas();
print_r($consultas);

?>