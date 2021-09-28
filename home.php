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
    <title>Página Inicial</title>
</head>
<body>
    <div class="container-fluid">

        <div class="container header text-center p-3">
            <h1 class="text-light">Home</h1>
        </div>

        <div class="container menu">
            <ul class="p-2">
                <li><a href="home.php">Home</a></li>
                <li><a href="cadastro.php">Adicionar Pesquisador</a></li>
                <li><a href="consultar.php">Consultar Pesquisador</a></li>
                <li><a href="editar.php">Editar Pesquisador</a></li>
                <li><a href="deletar.php">Deletar Pesquisador</a></li>
                <li><a href="finaliza.php">Sair</a></li>
            </ul>
        </div>

        <div class="container content text-center">
            <h2>Sobre</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur expedita dolorum quaerat placeat rerum earum. Voluptate, dolorum nihil et quidem laboriosam placeat mollitia quas maiores, sapiente sequi magnam, similique est.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum velit odit ipsam necessitatibus est rerum saepe accusantium sequi autem nisi quod cupiditate cum, ea iste voluptatem aspernatur debitis vel consequatur.
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis, rerum. Expedita dicta obcaecati eos quas commodi! Fugiat nisi ad a exercitationem, ab, rem quaerat nobis earum illo esse quidem ex.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus unde hic at! A hic, laborum ipsa dolorum, inventore natus ullam, explicabo neque pariatur nulla fugiat ea ratione cum minima ex?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, molestias! Inventore quis magnam incidunt animi mollitia rem, vel fugit soluta officiis expedita dolore quisquam provident quidem quam repellat, vero commodi.
            </p>
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