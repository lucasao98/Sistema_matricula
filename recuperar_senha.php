<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">

        <!-- Header -->
        <div class="container">
            <div class="row header p-2">
                <div class="col-12 text-center">
                    <h1 class="text-light">Recuperação de senha</h1>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="container">
            <div class="row align-items-center content p-3">
                <div class="col-sm-4"></div>
                <div class="col-sm-4 content-form">
                    <form action="recuperasenha.php" method="post">
                        <h4 class="text-light m-2">Email</h4>
                        <input type="email" class="m-2" name="email" id="email" required/>
                        <input type="submit" class="m-2 btn btn-warning" value="Recuperar">
                    </form>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-light footer">
                    <p>&copy;2021 Desenvolvido por Luca Sacramento de Oliveira</p>
                </div>
            </div>
        </div>

    </div>
</body>

</html>