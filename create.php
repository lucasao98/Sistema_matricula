<?php

include './connection.php';

$nomePesquisador = $_POST['nome_pesquisador'];
$formacao = $_POST['formacao_pesquisador'];
$nomeOrientador = $_POST['nome_orientador'];
$tituloPesquisa = $_POST['titulo_pesquisa'];
$cpfOrientador = $_POST['cpf_orientador'];
$nickPesquisador = $_POST['nick'];
$senhaPesquisador = $_POST['senha'];
$nivelAcesso = $_POST['nivel_acesso'];
$emailPesquisador = $_POST['email_pesquisador'];


$conn = getConnection();

$sql = "INSERT INTO pesquisadores (nome_pesquisador,formacao_pesquisador,nome_orientador,titulo_pesquisa,cpf_orientador) VALUES(?,?,?,?,?)";

$sql2 = "INSERT INTO usuarios (nick,senha,email_pesquisador,nivel_acesso) VALUES(?,?,?,?)";

$stmt = $conn->prepare($sql);

$stmt2 = $conn->prepare($sql2);

$stmt->bindParam(1,$nomePesquisador);
$stmt->bindParam(2,$formacao);
$stmt->bindParam(3,$nomeOrientador);
$stmt->bindParam(4,$tituloPesquisa);
$stmt->bindParam(5,$cpfOrientador);

$stmt2->bindParam(1,$nickPesquisador);
$stmt2->bindParam(2,$senhaPesquisador);
$stmt2->bindParam(3,$emailPesquisador);
$stmt2->bindParam(4,$nivelAcesso);


if($stmt->execute() && $stmt2->execute()){
    header('location:sucesso.php');
}else{
    header('location:falha.php');
}