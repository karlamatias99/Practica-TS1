<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maiz Rojo</title>

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
                    <a class="nav-link" href="Login.php">Editar</a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="container">
        <br><br><br>
        <div class="row">

            <?php include("../Modelo/conexion.php");

            $sentenciaSQL = $conexion->prepare("SELECT *FROM semilla WHERE id='Maiz Rojo';");
            $sentenciaSQL->execute();
            $listarSemillas = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

            $sentenciaSQL = $conexion->prepare("SELECT descripcion FROM semilla WHERE id='Maiz Rojo';");
            $sentenciaSQL->execute();
            $listarDescripcion = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

            ?>

            <!DOCTYPE html>
            <html lang="en">

            <div class="col-md-4">

                <div class="card">
                    <?php foreach ($listarSemillas as $semilla) { ?>
                        <img class="card-img-top" src="../img/maizRojo.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Maiz Rojo</h4>
                            <p class="card-text">
                                <?php echo $semilla['descripcion']; ?>
                            </p>

                        </div>
                    <?php }
                    ?>
                </div>
            </div>

            <div class="col-md-8 ">



                <div class="container">

                    <div class="row">

                        <div class="col-md-8">

                            <div class="card">
                                <h4>
                                    <?php echo 'De este tipo de maiz, a diferencia de los demas tipos,
                               no se tiene una ficha tecnica sobre el alcance de su semilla,
                               es un tipo de maiz que es cultivado de manera "cacera", por llamarlo asi.
                               Es un ingrediente utilizado en la gastronomía de Guatemala es considerado una raza de maíz, comúnmente rojo o amarillo distribuido principalmente en tierras entre los 1,829 y  3,048 msnm aunque su producción óptima se considera a los 2,800 msnm en los departamentos de Quiché, Quetzaltenango, Huehuetenango, Totonicapán y San Marcos.'; ?>

                                </h4>
                            </div>
                        </div>


                    </div>