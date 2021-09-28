<?php
include './connection.php';

$login = $_POST['nick'];
$password = $_POST['pass'];

$conn = getConnection();

$sql = "SELECT * FROM usuarios WHERE nick = :nick AND senha = :pass";    

$stmt = $conn->prepare($sql);
$stmt->bindValue(':nick',$login);
$stmt->bindValue(':pass',$password);
$stmt->execute();

$dados = $stmt->fetch(PDO::FETCH_ASSOC);

$_SESSION['usuario'] = $dados['nick'];
$_SESSION['senha'] = $dados['senha'];

if($login == $dados['nick'] && $password == $dados['senha']){
    $_SESSION['usuario'] = $dados['nick'];
    $_SESSION['senha'] = $dados['senha'];

    if($dados['nivel_acesso'] == "admin"){
        header("location:home.php");
    }
    else if($dados['nivel_acesso'] == "user"){
        header("location:views_user/home_user.php");
    }
}else{
    header("location:index.php");
}