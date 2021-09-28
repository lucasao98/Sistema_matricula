<?php
include './connection.php';

$nick = $_POST['nick'];
$senha = $_POST['password'];

$conn = getConnection();

$sql = "SELECT * FROM funcionarios WHERE nick = :nick AND senha = :senha";    

$stmt = $conn->prepare($sql);
$stmt->bindValue('nick',$nick);
$stmt->bindValue('senha',$senha);
$stmt->execute();

echo $nick;

/*
if($stmt->rowCount() > 0){
    $info = $stmt->fetch();

    $_SESSION['login'] = $info['nick'];

    if(isset($_SESSION['login'])){
        header('location: home.php');
    }
    else{
        header('location: index.php');    
    }
}else{
    header('location: index.php');
}
*/

?>