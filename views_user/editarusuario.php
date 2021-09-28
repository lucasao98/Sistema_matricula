<?php
    session_start();
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
    <title>Editar</title>
</head>

<body>
    <div class="container-fluid">

        <div class="container header text-center p-3">
            <h1 class="text-light">Editar Pesquisador</h1>
        </div>

        <div class="container menu">
            <ul class="p-2">
            <li><a href="home_user.php">Home</a></li>
                <li><a href="consulta_user">Consultar Pesquisador</a></li>
                <li><a href="editarusuario.php">Editar Dados</a></li>
                <li><a href="../finaliza.php">Sair</a></li>
            </ul>
        </div>

        <div class="container content">
            <div class="container p-2">
                <form action="../trocasenha.php" method="post">
                    
                    <label>Login</label>
                    <input type="text" class="m-2" name="nickuser" value=<? echo $_SESSION['usuario'];?>>
                    <br/>

                    <label>Senha Antiga</label>
                    <input class="m-2" type="password" name="senhaantiga" required />
                    <br/>
                    
                    <label>Nova Senha</label>
                    <input class="m-2" type="password" name="novasenha" required />
                    <br/>

                <input type="submit" class="btn btn-success" value="Salvar">
            </form>

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