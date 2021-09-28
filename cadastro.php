<?php
session_start();
if ($_SESSION['usuario'] == NULL && $_SESSION['senha'] == NULL) {
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
            <h1 class="text-light">Cadastro de Pesquisador</h1>
        </div>

        <div class="container menu">
            <ul class="p-2">
                <li><a href="home.php">Home</a></li>
                <li><a href="#">Adicionar Pesquisador</a></li>
                <li><a href="consultar.php">Consultar Pesquisador</a></li>
                <li><a href="#">Editar Pesquisador</a></li>
                <li><a href="deletar.php">Deletar Pesquisador</a></li>
                <li><a href="finaliza.php">Sair</a></li>
            </ul>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="" class="p-2 bg-white border border-dark" method="post">
                        <div class="container p-2">
                            <label>Nome do Pequisador</label>
                            <input type="text" name="nome_pesquisador">
                        </div>

                        <div class="container p-2">
                            <label>Formação</label>
                            <input type="text" name="formacao_pesquisador">
                        </div>

                        <div class="container p-2">
                            <label>Nome do Orientador</label>
                            <input type="text" name="nome_orientador">
                        </div>


                        <div class="container p-2">
                            <label>Título da Pesquisa</label>
                            <input type="text" name="titulo_pesquisa">
                        </div>

                        <div class="container p-2">
                            <label>Cpf Orientador</label>
                            <input type="text" name="cpf_orientador">
                        </div>

                        <div class="container p-2">
                            <label>Email Pesquisador</label>
                            <input type="email" name="email_pesquisador" required>
                        </div>

                        <div class="container p-2">
                            <label>Nick</label>
                            <input type="text" name="nick" required>
                        </div>

                        <div class="container p-2">
                            <label>Senha (Minimo 8 caracteres)</label>
                            <input type="password" id="senha" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="senha" required>
                        </div>

                        <div class="container p-2">
                            <label>Nivel de Acesso</label>
                            <input type="text" name="nivel_acesso">
                        </div>

                        <div class="container p-3">
                            <input type="submit" class="btn btn-primary" value="Cadastrar">
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="container">
            <div class="row">
                <div class="col text-center text-light footer">
                    <p>&copy;2021 Desenvolvido por Luca Sacramento de Oliveira</p>
                </div>
            </div>
        </div>

        <script>
            const senha = document.querySelector("#senha");
            //const regex = /^(?=(?:.?[A-Z]){1})(?=(?:.?[0-9]){1})(?=(?:.?[!@#$%()+^&}{:;?.]){1})(?!.\s)[0-9a-zA-Z!@#$%;(){}+^&]*$/;
            const regex = new RegExp("^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8}$");

            function verificaSenha(){
                if (!regex.test(senha)) {
                    senha.focus();
                    console.log("Erro");
                    alert("A senha deve conter no mínimo 3 caracteres em maiúsculo, 2 números e 1 caractere especial!");
                    return false;
                }
                else{
                    console.log("OK");
                    return true;
                }
                return true;
            }

        </script>
    </div>
</body>

</html>