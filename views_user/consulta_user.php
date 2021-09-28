<?php
include '../connection.php';
    if($_SESSION['usuario'] == NULL && $_SESSION['senha'] == NULL){
        header("location:../index.php");
    }
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Busca</title>
</head>

<body>
    <div class="container-fluid">

        <div class="container header text-center p-3">
            <h1 class="text-light">Busca de Pesquisadores</h1>
        </div>

        <div class="container menu">
            <ul class="p-2">
                <li><a href="home_user.php">Home</a></li>
                <li><a href="#">Consultar Pesquisador</a></li>
                <li><a href="editarusuario.php">Editar Dados</a></li>
                <li><a href="../finaliza.php">Sair</a></li>
            </ul>
        </div>

        <div class="container content">
            <table class="table bg-white">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nome Pesquisador</th>
                        <th scope="col">Formação Pesquisador</th>
                        <th scope="col">Nome Orientador</th>
                        <th scope="col">Titulo Pesquisa</th>
                        <th scope="col">CPF do Orientador</th>
                    </tr>
                </thead>
                <?php

                    $conn = getConnection();

                    $sql = "SELECT * FROM pesquisadores";

                    $stmt = $conn->prepare($sql);

                    $stmt->execute();

                    $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
                ?>
                
                <tbody>
                    <?php 
                    foreach($dados as $info){
                        echo "<tr>";
                            echo "<td>".$info['id_pesquisador']."</td>";
                            $idPesq = $info['id_pesquisador'];
                            echo "<td>".$info['nome_pesquisador']."</td>";
                            echo "<td>".$info['formacao_pesquisador']."</td>";
                            echo "<td>".$info['nome_orientador']."</td>";
                            echo "<td>".$info['titulo_pesquisa']."</td>";
                            echo "<td>".$info['cpf_orientador']."</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="container">
            <div class="row">
                <div class="col text-center text-light footer">
                    <p>&copy;2021 Desenvolvido por Luca Sacramento de Oliveira</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>