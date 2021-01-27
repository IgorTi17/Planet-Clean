<?php
include('conexao.php');

$endereco = $_POST['endereco'];
$textarea = $_POST['textarea'];

$sql = "INSERT INTO relato (endereco, informacao) VALUES ('$endereco', '$textarea')";

if ($conexao->query($sql) === true) {
   $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: ../../index.php');
exit;
?>