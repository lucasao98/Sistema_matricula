<?php

include './connection.php';

$login = $_POST['nickuser'];
$password = $_POST['novasenha'];

$conn = getConnection();

$sql = "UPDATE usuarios SET senha = ? WHERE nick = ?";

$stmt = $conn->prepare($sql);

$stmt->bindParam(1,$password);
$stmt->bindParam(2,$login);

if($stmt->execute()){
    header('location:sucesso.php');
}
else{
    header('location:falha.php');
}