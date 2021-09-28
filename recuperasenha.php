<?php

include './connection.php';

$emailPesquisador = $_POST['email'];

$cripto = "aldfgasdf634sd6f64f6a6A6F6DF64afs698dsaf1246DSçk";
$codigo = sha1($cripto);

$conn = getConnection();

$sql = "UPDATE usuarios SET senha = ? WHERE email_pesquisador = ?";

$stmt = $conn->prepare($sql);

$stmt->bindParam(1,$codigo);
$stmt->bindParam(2,$emailPesquisador);

if($stmt->execute()) {
    setcookie('cod', $codigo);
    header('location:email.php');
} else {
    header('location:index.php');
}