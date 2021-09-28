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
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Cadastro</title>
</head>

<body>
    <div class="container-fluid">

        <div class="container header text-center p-3">
            <h1 class="text-light">Deletar Pesquisador</h1>
        </div>

        <div class="container menu">
            <ul class="p-2">
                <li><a href="home.php">Home</a></li>
                <li><a href="cadastro.php">Adicionar Pesquisador</a></li>
                <li><a href="consultar.php">Consultar Pesquisador</a></li>
                <li><a href="editar.php">Editar Pesquisador</a></li>
                <li><a href="#">Deletar Pesquisador</a></li>
                <li><a href="finaliza.php">Sair</a></li>
            </ul>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="delete.php" class="p-2 bg-white border border-dark" method="post">
                        <div class="container p-2">
                            <label>Id do Pequisador</label>
                            <input type="text" name="id_pesquisador">
                        </div>

                        <div class="container p-3">
                            <input type="submit" class="btn btn-danger" value="Deletar">
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
        <br/>
        <br/>
        <br/>
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