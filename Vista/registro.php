<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css" />

</head>

<body>

    <div class="container">
        <div class="row">

            <?php session_start();

            // Obtengo los datos cargados en el formulario de login.
            $txtcorreo = (isset($_POST['correo'])) ? $_POST['correo'] : "";
            $txtpassword = (isset($_POST['password'])) ? $_POST['password'] : "";
            $Accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";
            ?>

            <?php
            include("../Modelo/conexion.php");

            switch ($Accion) {

                case 'Registrar':
                    $sentenciaSQ = $conexion->prepare("INSERT INTO usuario (correo,password) VALUES (:correo,:password);");
                    $sentenciaSQ->bindParam(':password', $txtpassword);
                    $sentenciaSQ->bindParam(':correo', $txtcorreo);
                    $sentenciaSQ->execute();

                    break;

                default:

                    break;
            }
            ?>

            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <br><br><br><br><br>
                <div class="card">

                    <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="Login.php" role="tab"
                                aria-controls="pills-login" aria-selected="true">Login</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="registro.php" role="tab"
                                aria-controls="pills-register" aria-selected="false">Registro</a>
                        </li>
                    </ul>

                    <div class="tab-content">


                        <div class="card">

                            <form method="POST">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="correo">Correo Electronico</label>
                                    <input type="email" id="correo" name="correo" class="form-control" />

                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="password">Contraseña</label>
                                    <input type="password" id="password" name="password" class="form-control" />

                                </div>

                                <button type="submit" name="accion" value="Registrar"
                                    class="btn btn-primary">Registrar</button>

                            </form>
                        </div>

                    </div>

                </div>


            </div>

        </div>
    </div>


</body>

</html>