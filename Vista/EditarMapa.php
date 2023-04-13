<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css" />

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
                    <a class="nav-link" href="Editar.php">Regresar</a>
                </li>
             
                <li class="nav-item active">
                    <a class="nav-link" href="/Maiz">Cerrar Sesion</a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <br><br>
        <div class="row">
            <?php
            $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
            $txtVar = (isset($_POST['txtVar'])) ? $_POST['txtVar'] : "";
            $Accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";


            ?>

            <?php include("../Modelo/conexion.php");

            switch ($Accion) {
                case 'Seleccionar':
                    $sentenciaSQL = $conexion->prepare("SELECT *FROM lugar WHERE nombre=:nombre");
                    $sentenciaSQL->bindParam(':nombre', $txtNombre);
                    $sentenciaSQL->execute();
                    $semilla = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

                    $txtNombre = $semilla['nombre'];
                    $txtVar = $semilla['variante_Maiz'];
                    break;

                case 'Modificar':
                    $sentenciaSQL = $conexion->prepare("UPDATE lugar SET variante_Maiz=:variante WHERE  nombre=:nombre");
                    $sentenciaSQL->bindParam(':variante', $txtVar);
                    $sentenciaSQL->bindParam(':nombre', $txtNombre);
                    $sentenciaSQL->execute();

                    break;


                default:
                    # code...
                    break;
            }

            $sentenciaSQL = $conexion->prepare("SELECT *FROM lugar;");
            $sentenciaSQL->execute();
            $listarLugares = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
            ?>

            <div class="col-md-4">

                <div class="card">
                    <div class="card-header">
                        Datos
                    </div>
                    <div class="card-body">

                        <form method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type="txt" required readonly class="form-control"
                                    value="<?php echo $txtNombre; ?>" id="txtNombre" name="txtNombre">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Variante de Maiz</label>
                                <input type="txt" class="form-control" value="<?php echo $txtVar; ?>" id="txtVar"
                                    name="txtVar">
                            </div>


                            <div class="btn-group" role="group" aria-label="">

                                <button type="submit" name="accion" <?php echo ($Accion != "Seleccionar") ? "disabled" : "" ?>
                                    value="Modificar" class="btn btn-warning">Modificar</button>

                            </div>

                        </form>

                    </div>

                </div>


            </div>

            <div class="col-md-8">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre Departamento</th>
                            <th>Variante de Maiz</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listarLugares as $lugar) { ?>
                            <tr>
                                <td>
                                    <?php echo $lugar['nombre']; ?>
                                </td>
                                <td>
                                    <?php echo $lugar['variante_Maiz']; ?>
                                </td>


                                <td>

                                    <form method="post">
                                        <input type="hidden" name="txtNombre" id="txtNombre"
                                            value="<?php echo $lugar['nombre']; ?>" />
                                        <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary" />
                                    </form>


                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>