<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maiz Blanco</title>

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
                <li class="nav-item active">
                    <a class="nav-link" href="Semillas.php">Regresar</a>
                </li>
                <li class="nav-item active">
					<a class="nav-link" href="LoginSemillas.php">Editar</a>
				</li>

            </ul>
        </div>
    </nav>

    <div class="container">
        <br><br><br>
        <div class="row">

            <?php include("../Modelo/conexion.php");

            $sentenciaSQL = $conexion->prepare("SELECT *FROM semilla WHERE id='ICTA MAYA';");
            $sentenciaSQL->execute();
            $listarSemillas = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

            $sentenciaSQL = $conexion->prepare("SELECT descripcion FROM semilla WHERE id='ICTA MAYA';");
            $sentenciaSQL->execute();
            $listarDescripcion = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

            ?>

            <!DOCTYPE html>
            <html lang="en">

            <div class="col-md-3">

                <div class="card">
                    <?php foreach ($listarSemillas as $semilla) { ?>
                        <img class="card-img-top" src="../img/maizBlanco.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Maiz Blanco</h4>
                            <p class="card-text">
                                <?php echo $semilla['descripcion']; ?>
                            </p>

                        </div>
                    <?php }
                    ?>
                </div>
            </div>

            <div class="col-md-9 ">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre de Variante</th>
                            <th>Altura de la Planta (en metros)</th>
                            <th>Altura de la Mazorca (en metros)</th>
                            <th>Cantidad de Semilla a usar (Libra/Manzana)</th>
                            <th>Rendimiento de la Semilla (Quintales/manzana)</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listarSemillas as $semilla) { ?>

                            <tr>

                                <td>
                                    <?php echo $semilla['id']; ?>
                                </td>
                                <td>
                                    <?php echo $semilla['variante']; ?>
                                </td>

                                <td>
                                    <?php echo $semilla['altura_Planta']; ?>
                                </td>
                                <td>
                                    <?php echo $semilla['altura_Mazorca']; ?>
                                </td>
                                <td>
                                    <?php echo $semilla['cant_por_Manzana']; ?>
                                </td>
                                <td>
                                    <?php echo $semilla['rendimiento']; ?>
                                </td>

                            </tr>

                        <?php }
                        ?>
                    </tbody>
                </table>


                <div class="container">

                    <div class="row">

                        <div class="col-md-5">

                            <div class="card">
                                <?php foreach ($listarSemillas as $semilla) { ?>

                                    <div class="card-body">
                                        <h4 class="card-title">Recomendaciones de Siembra</h4>
                                        <img class="card-img-bottom" src="../img/1.png" alt="">
                                        <p class="card-text">
                                            <?php echo $semilla['recomendaciones']; ?>
                                        </p>
                                    </div>


                                <?php }
                                ?>
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="card">
                                <?php foreach ($listarSemillas as $semilla) { ?>

                                    <div class="card-body">
                                        <h4 class="card-title">Caracteristicas de la siembra</h4>
                                        <img class="card-img-bottom" src="../img/3.png" alt="">

                                    </div>


                                <?php }
                                ?>
                            </div>
                        </div>






                    </div>