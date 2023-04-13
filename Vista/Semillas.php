<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo</title>

    <link rel="stylesheet" href=".././css/bootstrap.min.css" />

</head>

<body>

    <?php $url = "http://" . $_SERVER['HTTP_HOST'] . "/Maiz" ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/Maiz">Inicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Lugares.php">Mapa cultivo de maiz</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="Login.php">Editar</a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="container">
        <br><br><br>
        <div class="row">
            <div class="col-md-3">

                <div class="card">
                    <img class="card-img-top" src="../img/maizAmarillo.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Maiz Amarillo</h4>
                        <a name="" id="" class="btn btn-primary" href="../Vista/MaizAmarillo.php" role="button">Ver
                            mas</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">

                <div class="card">
                    <img class="card-img-top" src="../img/maizBlanco.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Maiz Blanco</h4>
                        <a name="" id="" class="btn btn-primary" href="../Vista/MaizBlanco.php" role="button">Ver
                            mas</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">

                <div class="card">
                    <img class="card-img-top" src="../img/maizNegro.png" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Maiz Negro</h4>
                        <a name="" id="" class="btn btn-primary" href="../Vista/MaizNegro.php" role="button">Ver mas</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">

                <div class="card">
                    <img class="card-img-top" src="../img/maizRojo.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Maiz Rojo</h4>
                        <a name="" id="" class="btn btn-primary" href="../Vista/MaizRojo.php" role="button">Ver mas</a>
                    </div>
                </div>
            </div>