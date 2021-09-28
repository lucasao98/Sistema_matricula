<?php
    session_start();
    if($_SESSION['usuario'] == NULL && $_SESSION['senha'] == NULL){
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso</title>
</head>
<body>
    <h2>Sucesso na operação</h2>
    <a href="home.php">Voltar para a página principal</a>
</body>
</html>