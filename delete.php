<?php

include "./connection.php";

$idPesq = $_POST['id_pesquisador'];

$conn = getConnection();

$sql = "DELETE FROM pesquisadores WHERE id_pesquisador = ?";
$sql2 = "DELETE FROM usuarios WHERE id_user = ?";

$stmt = $conn->prepare($sql);
$stmt2 = $conn->prepare($sql2);

$stmt->bindParam(1,$idPesq);
$stmt2->bindParam(1,$idPesq);

if($stmt->execute() && $stmt2->execute()){
    header("location:sucesso.php" );
}
else{
    header("location:falha.php");
}
?>