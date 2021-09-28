<?php

include 'connection.php';

$nomePesq = $_POST['nome_pesquisador'];
$formacao = $_POST['formacao_pesquisador'];
$nome_orien = $_POST['nome_orientador'];
$titulo = $_POST['titulo_pesquisa'];
$cpf_orien = $_POST['cpf_orientador'];

$conn = getConnection();

$sql = "UPDATE pesquisadores SET nome_pesquisador = ?, formacao_pesquisador= ?, nome_orientador = ?,titulo_pesquisa = ?, cpf_orientador = ? WHERE nome_pesquisador = ?";

$stmt = $conn->prepare($sql);

$stmt->bindParam(1,$nomePesq);
$stmt->bindParam(2,$formacao);
$stmt->bindParam(3,$nome_orien);
$stmt->bindParam(4,$titulo);
$stmt->bindParam(5,$cpf_orien);
$stmt->bindParam(6,$nomePesq);

if ($stmt->execute()) {
    header("location:sucesso.php");
} else {
    header("location:falha.php");
}
?>
