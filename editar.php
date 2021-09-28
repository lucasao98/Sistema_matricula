<?php
    include 'connection.php';
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
    <title>Editar</title>
</head>

<body>
    <div class="container-fluid">

        <div class="container header text-center p-3">
            <h1 class="text-light">Editar Pesquisador</h1>
        </div>

        <div class="container menu">
            <ul class="p-2">
                <li><a href="home.php">Home</a></li>
                <li><a href="cadastro.php">Adicionar Pesquisador</a></li>
                <li><a href="consultar.php">Consultar Pesquisador</a></li>
                <li><a href="#">Editar Pesquisador</a></li>
                <li><a href="deletar.php">Deletar Pesquisador</a></li>
                <li><a href="finaliza.php">Sair</a></li>
            </ul>
        </div>

        <div class="container content">
            <div class="container p-2">

                <form action="" method="post">
                    <label>Id do Pequisador</label>
                    <input type="text" name="id_pesquisador">

                    <input type="submit" class="btn btn-primary" value="Buscar">
                    <?php
                    $conn = getConnection();

                    $sql = "SELECT * FROM pesquisadores WHERE id_pesquisador = ?";

                    $stmt = $conn->prepare($sql);

                    $stmt->bindParam(1, $_POST['id_pesquisador']);

                    $stmt->execute();

                    $dados = $stmt->fetch(PDO::FETCH_ASSOC);
                    ?>
                </form>
            </div>

            <form action="update.php" method="post">
                <div class="container p-2">
                    <label>Nome do Pequisador</label>
                    <input type="text" name="nome_pesquisador" value="<?php print_r($dados['nome_pesquisador']); ?>">
                </div>

                <div class="container p-2">
                    <label>Formação do Pequisador</label>
                    <input type="text" name="formacao_pesquisador" value="<?php print_r($dados['formacao_pesquisador']); ?>">
                </div>

                <div class="container p-2">
                    <label>Nome do Orientador</label>
                    <input type="text" name="nome_orientador" value="<?php print_r($dados['nome_orientador']); ?>">
                </div>

                <div class="container p-2">
                    <label>Titulo da Pesquisa</label>
                    <input type="text" name="titulo_pesquisa" value="<?php print_r($dados['titulo_pesquisa']); ?>">
                </div>

                <div class="container p-2">
                    <label>Cpf do Orientador</label>
                    <input type="text" name="cpf_orientador" value="<?php print_r($dados['cpf_orientador']); ?>">
                </div>
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